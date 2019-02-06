# PHP Örnek Çalışmaları

## PHP ile Resim Boyutlandırma - Image Resize

```PHP
<?php
  unlink("kedi_kucuk.jpg"); // Dosya silme komutu.
  $RESIM = imagecreatefromjpeg("kedi_buyuk.jpg");
  $YENIRESIM = imagescale($RESIM, 300, 200);
  imagejpeg($YENIRESIM, "kedi_kucuk.jpg");
?>

<p>
  <img src="kedi_kucuk.jpg">
</p>

<p>
  <img src="kedi_buyuk.jpg">
</p>
```
