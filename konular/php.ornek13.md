# PHP Örnek Çalışmaları

## PHP ile Dosya Yükleme - File Upload

```PHP
<!DOCTYPE html>
<html>
<body>
<?php
  if( isset($_POST["YeniAd"]) ) {
/*
    echo "<pre>";
    print_r($_POST);
    print_r($_FILES); // Yüklenmek isteyen dosya hakkındaki bilgiler
    echo "</pre>";
*/
    if( $_FILES["Dosya"]["size"] > 1048576 ) { // 1 Mb
      echo "<H1>HATA: En çok 1 Mb olabilir!</H1>";
      die();
    }
    if( $_FILES["Dosya"]["type"] == "image/jpeg" ) {
      list($width, $height, $type, $attr) = getimagesize($_FILES["Dosya"]["tmp_name"]);
      echo "Genişlik: $width, Yükseklik: $height";
      if($width>400 or $height>400) {
          echo "<H1>HATA: En çok 400x400 olabilir!</H1>";
          die();
      }
      $HEDEF = "Uploads/";
  //    $HEDEFDOSYAADI = $HEDEF . basename($_FILES["Dosya"]["name"]);
      $HEDEFDOSYAADI = $HEDEF . $_POST["YeniAd"];
      move_uploaded_file($_FILES["Dosya"]["tmp_name"], $HEDEFDOSYAADI);
        echo "<H1>Başarılı!</H1>";
    } else  {
      echo "<H1>HATA: Sadece jpg dosya yüklenebilir.</H1>";
    }
  }
?>

<form method="post" enctype="multipart/form-data">

    Dosyanın Yeni Adı Ne Olsun?<br>
    <input type="text" name="YeniAd" value=""><br><br>

    Yüklenecek dosyayı seçiniz:<br>
    <input type="file" name="Dosya"><br><br>

    <input type="submit" value="Dosyayı Yükle!">
</form>

</body>
</html>
```
