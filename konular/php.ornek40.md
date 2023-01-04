# PHP Örnek Çalışmaları

## Php, Mysql , Ajax ve Jquery Kullanarak Canlı Arama Yapmak

Kaynak: https://kodlamaklazim.com/blog/php-mysql-ajax-ve-jquery-kullanarak-canli-arama-yapmak


### index.php Dosyamız
```PHP
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PHP ve Ajax İle Canlı Arama Uygulaması</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
  <body>
    <div class="container" style="margin-top: 50px;">
      <h2 style="text-align: center;"><b>PHP, MySQL ve Ajax İle Canlı Arama Uygulaması</b></h2><br>
        <div class="row">
          <div class="col-md-2"></div>
            <div class="col-md-8 form-group">
              <input type="text" id="search" class="form-control" autocomplete="off" placeholder="Aramak istediğiniz kelimeyi giriniz."><br>
            </div>
          <div class="col-md-2"></div>
        </div>
      <div class="result">
      </div>
    </div>
  </body>
</html>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<!---jQuery ajax live search --->
<script type="text/javascript">
    $(document).ready(function(){
        // veritabanına istek atma
        loadData();
        function loadData(query){
          $.ajax({
            url : "post.php",
            type: "POST",
            chache :false,
            data:{query:query},
            success:function(response){
              $(".result").html(response);
            }
          });  
        }
        // gelen sonuçları listeleme
        $("#search").keyup(function(){
          var search = $(this).val();
          if (search !="") {
            loadData(search);
          }else{
            loadData();
          }
        });
    });
</script>
```

### post.php Dosyamız
```PHP
<?php
$sunucu = "localhost";
$kullanici = "root";
$sifre = "";
try {
  $conn = new PDO("mysql:host=$sunucu;dbname=egitim", $kullanici, $sifre);
  // Hata Yakalama
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch(PDOException $e) {
  echo "Bağlantı Hatası: " . $e->getMessage();
} 
if($_POST){ 
    try { 
        $ad_soyad = $_POST['query'];  
        $query = $conn->prepare('SELECT * FROM users WHERE ad_soyad LIKE ?');
        $query->execute(array('%'.$ad_soyad.'%'));
        while ($results = $query->fetch())
        {
            echo "<li>".$results['ad_soyad']."</li>";
        } 
    } catch (PDOException $e) { 
        die($e->getMessage());
    }
}
?>
```

