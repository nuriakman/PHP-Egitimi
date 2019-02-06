# PHP Örnek Çalışmaları

## PHP ile Text Dosyaya Metin Ekleme

```PHP
<?php
  $Dosya = "textdosya.txt";
  if(isset($_POST["ILAVE"])) {
    $DosyaninMevcutIcerigi = file_get_contents($Dosya);
    $EklenecekIfade = $_POST["ILAVE"];
    $DosyaninMevcutIcerigi .= "\n" . $EklenecekIfade;
    file_put_contents($Dosya, $DosyaninMevcutIcerigi);
    echo "<h3>Başarılı!</h3>";
  }
?>
<!DOCTYPE html>
<html lang="TR">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <h1>Text Dosyaya Metin Ekleme Örneği</h1>

  <form method="get">

    Dosyaya Eklenecek Mesaj:<br>
    <input type="text" name="ILAVE"><br><br>
    <input type="submit" value="Gönder">

  </form>

  <h1>Dosyanın İçeriği</h1>

  <?php
    $DosyaIcerigi = file_get_contents($Dosya);
    echo nl2br($DosyaIcerigi);
  ?>





  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  </body>
</html>
```
