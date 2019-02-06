# PHP Örnek Çalışmaları

## PHP'de Oturum Yönetimi Örneği

### index.php Dosyası İçeriği
```PHP
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p><a href='login.php'>Giriş Yap</a><p>
    <p><a href='kontrol.php'>Kontrol Et</a><p>
    <p><a href='oturumukapat.php'>Oturumu Kapat</a><p>
  </body>
</html>
```


### kontrol.php Dosyası İçeriği
```PHP
<?php
  @session_start();
  if($_SESSION["GirisYapti"] == 1) {
    echo "GİRİŞ YAPMIŞ";
  } else {
    echo "HENÜZ GİRİŞ YAPMAMIŞ!";
  }
 ?>
<br><br><a href="index.php">Geri dön...</a>
```


### oturumukapat.php Dosyası İçeriği
```PHP
<?php
  @session_start();
  $_SESSION["GirisYapti"] = 0;
  // Alternatif yazılımı:
  unset( $_SESSION["GirisYapti"] );
  echo "Oturum kapatıldı...";
?>

<br><br><a href="index.php">Geri dön...</a>
```


### login.php Dosyası İçeriği
```PHP
<?php
  @session_start();
  if(isset($_POST["kullanici"])) {
    if($_POST["kullanici"] == "admin" and $_POST["parola"] == "123") {
      $_SESSION["GirisYapti"] = 1;
      header("Location: kontrol.php");
      die();
    } else {
      echo "<h1>HATALI GİRİŞ!</h1>";
    }
  }
?>
<!DOCTYPE html>
<html lang="tr" >
  <head>
    <meta charset="utf-8">
    <title>Giriş Sayfası</title>
  </head>
  <body>
  <h1>Lütfen giriş yapınız</h1>
  <form method="post">
    Kullanıcı Adınız:
    <input type="text" name="kullanici" autocomplete="off">
    <br>
    <br>
    Parolanız:
    <input type="password" name="parola" autocomplete="off">
    <br>
    <br>
    <input type="submit" value="Giriş Yap">
  </form>






  </body>
</html>
```
