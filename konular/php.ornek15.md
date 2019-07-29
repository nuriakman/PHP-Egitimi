# PHP Örnek Çalışmaları

## PHP ile Resim Üzerine Yazı Yazma

```PHP
<?php
      // Üzerine yazı yazılacak resim
      $RESIM = imagecreatefromjpeg('kedi.jpg');

      // Yazı rengini BEYAZ olarak belirle
      $BEYAZ = imagecolorallocate($RESIM, 255, 255, 255);
      // Renk Kodları için: https://www.w3schools.com/colors/colors_picker.asp

      // Varsayılan font dosyasının adı
      $FONTADI = "./fontlar/Dry Brush.ttf";

      // Varsa, seçilen font dosyasını ayarlayalım
      if(isset($_GET["FONTADI"])) $FONTADI = "./fontlar/" . $_GET["FONTADI"] . ".ttf";


      // Yazılacak yazının ayarlanması (Varsayılan değer)
      $YAZI = "Merhaba!";

      // Eğer, URL'de YAZI adlı değişken varsa, onu kullanalım.
      if(isset($_GET["YAZI"])) $YAZI = $_GET["YAZI"];

      // Ayarlamalarımız
      $FontBoyutu      = 150; // Px cinsinden değer
      $YazdirmaAcisi   = 0;   // 0..360 arası
      $BaslamaNoktasiX = 50; // Resmin, sol üst noktasına göre yatayda yazının başlama noktası (px cinsinden)
      $BaslamaNoktasiY = 200; // Resmin, sol üst noktasına göre dikeyde yazının başlama noktası (px cinsinden)

      // Belirtilen ayarlara göre yazının resim üzerine yazılması
      imagettftext($RESIM, $FontBoyutu, $YazdirmaAcisi, $BaslamaNoktasiX, $BaslamaNoktasiY, $BEYAZ, $FONTADI, $YAZI);

      // Üzerinde yazı olan resmin yeni dosya olarak kaydedilmesi
      imagejpeg($RESIM, "kedi_yazili.jpg");

      // Belleğin temizlenmesi
      imagedestroy($RESIM);
    ?>

    <h1>PHP İle Resim Üzerine Yazı Yazma</h1>

    <form method="get" autocomplete="off">
       Resim üzerine ne yazılsın? <input type="text" name="YAZI" value="<?php echo $_GET["YAZI"];?>">
       Font Seçiniz: <select name="FONTADI">
         <option value="Brushield"      >Brushield</option>
         <option value="Kaldevaderibbon">Kaldevaderibbon</option>
         <option value="Dry Brush"      >Dry Brush</option>
       </select>
       <input type="submit" value="Gönder!">
    </form>

    <p>
      <img src="kedi_yazili.jpg">
    </p>

```
