# PHP Örnek Çalışmaları

## PHP ile Resim Boyutlandırma - Image Resize

Zaman zaman, büyük boyutlu resimleri sistemimizde kullanmak için yeniden boyutlandırmaya ihtiyaç duyarız. Bu örnekte bu konu anlatılmıştır. Örneğin çalışacağı klasöre kendiniz **kedi.jpg** adlı bir resim kaydetmelisiniz.

Eğer, bu kodlar sizde çalışmazsa **php_gd** kütüphanesini yüklemediğinizi düşünebilirsiniz.

### İşlem Adımları:
- varsa, yeni.jpg dosyasını sil
- kedi.jpg dosyasını $RESIM adlı değişenin içine koy
- $RESIM adlı değişkenin içindeki resmi, Genişlik 300px ve Yükseklik 250px olarak şekilde boyutlandır
- $YENIRESIM değişkeni içinde oluşan nihai resmi yeni.jpg adı ile kaydet
- $YENIRESIM değişkenini bellekten sil (RAM bellek yönetimi)
- $RESIM değişkenini bellekten sil (RAM bellek yönetimi)


```PHP
<?php
  @unlink("yeni.jpg");
  $RESIM = imagecreatefromjpeg("kedi.jpg");
  $YENIRESIM = imagescale($RESIM, 300, 250);
  imagejpeg($YENIRESIM, "yeni.jpg");
  imagedestroy($YENIRESIM);
  imagedestroy($RESIM);
?>

<h1>Orjinal Resim</h1>
<img src="kedi.jpg">

<h1>Yeni Üretilen Resim</h1>
<img src="yeni.jpg">

```
