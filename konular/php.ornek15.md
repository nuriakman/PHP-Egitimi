# PHP Örnek Çalışmaları

## PHP ile Resim Üzerine Yazı Yazma

```PHP
<?php
      $RESIM = imagecreatefromjpeg('kedi_buyuk.jpg');
      // Yazı rengini BEYAZ olarak belirle
      $BEYAZ = imagecolorallocate($RESIM, 255, 255, 255);
      // Renk Kodları için: https://www.w3schools.com/colors/colors_picker.asp
      $FONTADI = "/usr/share/fonts/truetype/freefont/FreeSans.ttf";
      // Yukarıdaki font adını şu şekilde bulduk:
      // sudo find / -iname "*.ttf" -type f
      $YAZI = "LYK 2018 PHP SINIFI";
      if(isset($_GET["YAZI"])) $YAZI = $_GET["YAZI"];
      imagettftext($RESIM, 60, 0, 20, 150, $BEYAZ, $FONTADI, $YAZI);
      imagejpeg($RESIM, "kedi_kucuk_yazili.jpg");
      // Clear Memory
      imagedestroy($RESIM);
    ?>

    <p>
      <img src="kedi_kucuk_yazili.jpg">
</p>
```
