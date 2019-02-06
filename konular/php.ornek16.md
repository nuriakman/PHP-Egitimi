# PHP Örnek Çalışmaları

## PHP ile Text Dosya İçeriği Düzenleme

```PHP
<?php
  $Dosya = "textdosya.txt";
  $DosyaIcerigi = file_get_contents($Dosya);
  if(isset($_POST["Editor"])) {
    // $YazilacakDosyaIcerigi = $_POST["Editor"];
    if($_POST["YeniAd"] <> "") {  //   != ile <> aynıdır.
      file_put_contents($_POST["YeniAd"], $_POST["Editor"]);
    } else {
      file_put_contents($Dosya, $_POST["Editor"]);
    }

    echo "<h1>Kayıt Başarılı!</h1>";
    echo "<a href='?'>Devam et...</a>";
    die();
  }
?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <title>Dosya düzenleme örneği</title>
  </head>
  <body>

    <h1>Dosya Düzenleme Örneği</h1>

    <form method="post">

        <P>
          Şu dosya düzenleniyor: <b style="color:red;"><?=$Dosya?></b> <input type="submit" value="Kaydet!"><br>
          <textarea name="Editor" rows="10" cols="80"><?=$DosyaIcerigi?></textarea>
        </P>
        Dosyayı yeni isimle kaydet:<br>
        <input type="text" name="YeniAd">

    </form>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </body>
</html>
```
