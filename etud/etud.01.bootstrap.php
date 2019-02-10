<?php
  $reklamlar = array();
  $reklamlar[0]["urunadi"] = "Fındık";
  $reklamlar[0]["yazi"] = "En kaliteli fındır burada";
  $reklamlar[0]["resim"] = "http://www.zmo.org.tr/resimler/bizden/64071_14_46_18.jpg";

  $reklamlar[1]["urunadi"] = "Kuymak";
  $reklamlar[1]["yazi"] = "Yoksa hala yemediniz mi?";
  $reklamlar[1]["resim"] = "http://i2.haber7.net//fotogaleri/haber7/album/2017/52/kuymak_nasil_yapilir_1514453220_7218.jpg";

  $reklamlar[2]["urunadi"] = "Pide";
  $reklamlar[2]["yazi"] = "Kıymalı pidemiz nefis!";
  $reklamlar[2]["resim"] = "https://www.baskentfirsati.com/userfiles/image/pidemiz/pidemiz-kiymali.jpg";

  $reklamlar[3]["urunadi"] = "Çay";
  $reklamlar[3]["yazi"] = "Çay olmadan olmaz.";
  $reklamlar[3]["resim"] = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsLS5lVY0ADFoWiwpgE4lwL8N1OaIteb1I6AjPzWrdzB-wjOf6";

  $SOL = rand(0, 3);
  $SAG = rand(0, 3);

?>
<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>PHP ve Bootstrap Örneği</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav> <!-- NavBar -->

  <div class="container">
    <div class="row mt-5">
      <div class="col-3">

        <div class="card" style="width: 100%;">
          <img src="<?php echo $reklamlar[$SOL]["resim"];?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $reklamlar[$SOL]["urunadi"];?></h5>
            <p class="card-text"><?php echo $reklamlar[$SOL]["yazi"];?></p>
            <a href="#" class="btn btn-primary">Online Satın Al</a>
          </div>
        </div> <!-- Card -->

      </div> <!-- Sol Sutun -->
      <div class="col-6">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://gezimanya.com/sites/default/files/styles/900x636/public/orduu22_1.jpg?itok=A_a47YbL" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://gezimanya.com/sites/default/files/styles/900x636/public/orduu22_1.jpg?itok=A_a47YbL" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://gezimanya.com/sites/default/files/styles/900x636/public/orduu22_1.jpg?itok=A_a47YbL" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> <!-- Carosel Bitti -->

        <div class="jumbotron mt-4">
          <h1 class="display-4">AB2019</h1>
          <p class="lead">Akademik bilişim 2019 bu yıl Ordu'da!</p>
          <hr class="my-4">
          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
          <a class="btn btn-primary btn-lg" href="#" role="button">Detaylı bilgi...</a>
        </div>  <!-- Jombotron -->

      </div><!-- Orta Sutun -->
      <div class="col-3">

        <div class="card" style="width: 100%;">
          <img src="<?php echo $reklamlar[$SAG]["resim"];?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $reklamlar[$SAG]["urunadi"];?></h5>
            <p class="card-text"><?php echo $reklamlar[$SAG]["yazi"];?></p>
            <a href="#" class="btn btn-primary">Online Satın Al</a>
          </div>
        </div> <!-- Card -->

      </div><!-- Sağ Sutun -->
    </div>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
