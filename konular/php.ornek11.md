# PHP Örnek Çalışmaları

## Dizindeki Resimleri Listeleme

### AŞAMA 1

```PHP
<!--
  Bu dosya, içinde bulunduğu dizindeki .jpg dosyalarını bulur ve
  ekrana her biri 250px yüksekliğinde olmak üzere listeler.
-->

<?php
  foreach (glob("*.jpg") as $dosya) { // Aktif klasör içindeki .jpg dosyalarını bul
    echo "
      <a  href='$dosya' data-lightbox='image' data-title='$dosya'>
      <img src='$dosya' height='250' style='margin: 5px;'>
      </a>
    ";
  }
?>
```

### AŞAMA 2

```PHP
<!--
  Bu dosya, içinde bulunduğu dizindeki .jpg dosyalarını bulur ve
  ekrana her biri 250px yüksekliğinde olmak üzere listeler.
  Listelenen bu resimlere tıklandığında ise
  lightbox2 kütüphanesini kullanarak resimlerin ekranda
  hoş bir şekilde açılan pencere içinden gösterilmesini sağlar.
-->

<script src="lightbox/jquery-3.3.1.min.js"></script>
<link href="lightbox/lightbox.css" rel="stylesheet">
<script src="lightbox/lightbox.js"></script>

<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>

<?php
  foreach (glob("*.jpg") as $dosya) { // Aktif klasör içindeki .jpg dosyalarını bul
    echo "
      <a  href='$dosya' data-lightbox='image' data-title='$dosya'>
      <img src='$dosya' height='250' style='margin: 5px;'>
      </a>
    ";
  }
?>
```

### AŞAMA 3

```PHP
<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Resim Listeleme</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- lightbox için -->
  <link href="lightbox/lightbox.css" rel="stylesheet">
  <script src="lightbox/lightbox.js"></script>

</head>
<body>

  <div class="container">
    <div class="row">

      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">RESİMLER</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Ana Sayfa</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">MODELLER1 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Page 1-1</a></li>
                <li><a href="#">Page 1-2</a></li>
                <li><a href="#">Page 1-3</a></li>
              </ul>
            </li>
            <li><a href="#">MODELLER2</a></li>
            <li><a href="#">MODELLER3</a></li>
          </ul>
        </div>
      </nav>

    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="jumbotron">
        <h1>AB2018 PHP İle Web Programlamaya Giriş</h1>
        <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
        responsive, mobile-first projects on the web.</p>
        <button class="btn btn-primary btn-lg">Fırsat ürünleri!</button>
        <button class="btn btn-success btn-lg">Kiralık mı baktınız?</button>
      </div>

      <?php
        foreach (glob("*.jpg") as $dosya) {
          echo "
          <div class='col-md-2'>
            <a href='$dosya' data-lightbox='image-1' data-title='$dosya'>
            <img src='$dosya' height='250' class='img img-circle' style='margin: 5px;' >
            </a>
          </div>
          ";
        }
      ?>
    </div>
  </div>

</body>
</html>
```
