# Temel MySQL Kullanım Komutları
Komut |Anlamı|
------------|-------------|
```mysqli_connect```| MySQL Veritabanına bağlanma komutudur
```mysqli_connect_error```| MySQL Veritabanına bağlantı sırasında oluşan hata bilgisini saklar
```mysqli_real_escape_string```| SQL sorgusunda bulunacak tehlikeli karakterlerin kaçış karakterleri ile güvenli hale getirilmesini sağlar
```mysqli_query```| SQL sorgusunu çalıştırma komutudur
```mysqli_fetch_assoc```| SQL sonucunu ilişkisel dizi olarak almak için kullanılır
```mysqli_num_rows```| SQL sorgusu sonucunda kaç satır geldiğini gösterir
```mysqli_affected_rows```| SQL sorgusundan kaç satırın etkilendiğini gösterir



## Nesne Yönelimli Kullanım Örneği
```PHP
<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Veritabanı Sunucusuna Bağlantı Hatası: %s\n", mysqli_connect_error());
    exit();
}

$mysqli->query("CREATE TABLE DUKKANLAR (DUKKANADI varchar(100));");

$DukkanAdi = "Ayşe'nin Ev Yemekleri";

/* Bu sorgu hatalıu çalışır */
if (!$mysqli->query("INSERT into DUKKANLAR (DUKKANADI) VALUES ('$DukkanAdi')")) {
    printf("Error: %s\n", $mysqli->sqlstate);
}

$DukkanAdi = $mysqli->real_escape_string($DukkanAdi);

/* Bu sorgu düngün çalışır */
if ($mysqli->query("INSERT into DUKKANLAR (DUKKANADI) VALUES ('$DukkanAdi')")) {
    printf("%d Satır eklendi.\n", $mysqli->affected_rows);
}

$mysqli->close();
?>
```

## Yordamsal Kullanım Örneği
```PHP
<?php
$link = mysqli_connect("localhost", "my_user", "my_password", "world");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Veritabanı Sunucusuna Bağlantı Hatası: %s\n", mysqli_connect_error());
    exit();
}

mysqli_query($link, "CREATE TABLE DUKKANLAR (DUKKANADI varchar(100));");

$DukkanAdi = "Ayşe'nin Ev Yemekleri";

/* Bu sorgu hatalıu çalışır */
if (!mysqli_query($link, "INSERT into DUKKANLAR (DUKKANADI) VALUES ('$DukkanAdi')")) {
    printf("Error: %s\n", mysqli_sqlstate($link));
}

$DukkanAdi = mysqli_real_escape_string($link, $DukkanAdi);

/* Bu sorgu düngün çalışır */
if (mysqli_query($link, "INSERT into DUKKANLAR (DUKKANADI) VALUES ('$DukkanAdi')")) {
    printf("%d Satır eklendi.\n", mysqli_affected_rows($link));
}

mysqli_close($link);
?>
```



# MySQL Sunucusuna Bağlanma

```PHP
## Veritabanına bağlantı kuralım...
## Veritabanına bağlantı kuralım...
$host     = "localhost";
$user     = "root";
$password = "root";
$database = "";
$cnnMySQL = mysqli_connect( $host, $user, $password, $database );
if( mysqli_connect_error() ) die("Veritabanına bağlanılamadı...");
$temp = mysqli_query($cnnMySQL, "set names 'utf8'");
```

# Kayıt Ekleme
```PHP
## Veritabanına kayıt ekleme
## Veritabanına kayıt ekleme
$val1 = "AAA";
$val2 = "BBB";
$val3 = 45000;

// SQL içine konulacak değişkenlere MUTLAKA bu işlem uygulanmalıdır.
// Bunun sebebi GÜVENLİK'tir.
$val1 = mysqli_real_escape_string($cnnMySQL, $val1);
$val2 = mysqli_real_escape_string($cnnMySQL, $val2);
$val3 = mysqli_real_escape_string($cnnMySQL, $val3);

//$SQL = "INSERT INTO araclar (marka, model, fiyat) VALUES ( '$val1', '$val2', '$val3' )";
$SQL = "INSERT INTO araclar SET 
            marka = '$val1', 
            model = '$val2',
            fiyat = '$val3'     ";
$rows = mysqli_query($cnnMySQL, $SQL);
```

# Kayıt Güncelleme
```PHP
## Veritabanına kayıt güncelleme
## Veritabanına kayıt güncelleme
$val1 = "AaAaAa";
$val2 = "BbBbBb";
$val3 = 75000;

// SQL içine konulacak değişkenlere MUTLAKA bu işlem uygulanmalıdır.
// Bunun sebebi GÜVENLİK'tir.
$val1 = mysqli_real_escape_string($cnnMySQL, $val1);
$val2 = mysqli_real_escape_string($cnnMySQL, $val2);
$val3 = mysqli_real_escape_string($cnnMySQL, $val3);

$SQL = "UPDATE araclar SET
          marka = '$val1',
          model = '$val2',
          fiyat = '$val3'
        WHERE id=1678";
$rows = mysqli_query($cnnMySQL, $SQL);
```


# Kayıt Silme
```PHP
## Veritabanından kayıt silme
## Veritabanından kayıt silme
$SQL = "DELETE FROM araclar WHERE id = 1";
$rows = mysqli_query($cnnMySQL, $SQL);
```


# Kayıt Getirmeyi Sınırla
150 nci kayıttan itibaren 20 kayıt getir.
```PHP
$SQL = "SELECT * FROM araclar LIMIT 20 OFFSET 150";
$rows = mysqli_query($cnnMySQL, $SQL);
```


# Kayıt Listeleme - Örnek 1
```PHP
## Veritabanından kayıt çekme ve listeleme örneği
## Veritabanından kayıt çekme ve listeleme örneği
$SQL = "SELECT marka, model FROM araclar LIMIT 20";
$rows = mysqli_query($cnnMySQL, $SQL);
$RowCount = mysqli_num_rows($rows);
if($RowCount == 0) { // Kayıt yok...
  echo "Kayıt bulunamadı..";
} else { // Kayıt var
  echo "$RowCount Adet Kayıt bulundu<br>";
  $c=0;
  while($row = mysqli_fetch_assoc($rows)) {
    extract($row); // "Key" adında değişkenler oluştur :)
    $c++;
    echo "$c -- $marka -- $model <br>";
  } // while
} // Kayıt var
```


# Kayıt Listeleme - Örnek 2
```PHP
## Veritabanından kayıt çekme ve TABLE ile listeleme örneği
## Veritabanından kayıt çekme ve TABLE ile listeleme örneği
$SQL = "SELECT marka, model FROM araclar LIMIT 20";
$rows = mysqli_query($cnnMySQL, $SQL);
$RowCount = mysqli_num_rows($rows);
if($RowCount == 0) { // Kayıt yok...
  echo "Kayıt bulunamadı..";
} else { // Kayıt var
  // Tablo başlığını yazdıralım
  echo "<table class='table table-hover'>
          <tr>
              <th>SıraNo</th>
              <th>Markası</th>
              <th>Modeli</th>
           </tr>";
  $c=0;
  while($row = mysqli_fetch_assoc($rows)) {
    extract($row); // "Key" adında değişkenler oluştur :)
    $c++;
    // Tablo başlığını yazdıralım
    echo "<tr>
            <td>$c</td>
            <td>$marka</td>
            <td>$model</td>
         </tr>";
  } // while
  echo "</table>";
} // Kayıt var
```


# Kayıt Listeleme - Örnek 3
```PHP
<?php
$SQL = "SELECT marka, model, fiyat FROM araclar LIMIT 20";
$rows = mysqli_query($cnnMySQL, $SQL);
?>
<table>
   <tr>
     <th>Markası</th>
     <th>Modeli</th>
     <th>Fiyatı</th>
   </tr>
   <?php while($row = mysqli_fetch_assoc($rows)) { ?>
   <tr>
     <td><?php echo $row["marka"]; ?></td>
     <td><?php echo $row["model"]; ?></td>
     <td><?php echo $row["fiyat"];?></td>
   </tr>
   <?php } ?>
</table>
```

# HTML SELECT İçini Veritabanından Doldurma
```PHP
<?php
## html select etiketi için tek sutun verinin çekilmesi
## html select etiketi için tek sutun verinin çekilmesi
function GetHTMLSelectTagData( $SQL, $SahaAdi ){
  global $cnnMySQL;
  $rows = mysqli_query($cnnMySQL, $SQL);
  $RowCount = mysqli_num_rows($rows);
  $SONUC = "";
  while($row = mysqli_fetch_assoc($rows)){
    $SONUC .= sprintf("<option value='%s'>%s</option>",
                $row["$SahaAdi"], $row["$SahaAdi"]  );
  }
  return $SONUC;
} // GetHTMLSelectTagData

$MARKALAR = GetHTMLSelectTagData("SELECT DISTINCT marka FROM araclar ORDER BY marka", "marka");
$MODELLER = GetHTMLSelectTagData("SELECT DISTINCT model FROM araclar ORDER BY model", "model");
?>

MARKASI: <select name='marka_sec'> <?php echo $MARKALAR; ?> </select>
MODELİ : <select name='model_sec'> <?php echo $MODELLER; ?> </select>
```


## Ağaç Yapısı - Tree Structure
Bilgisayar bilimlerinin önemli veri tutma yöntemlerinden birisi de ağaçlardır. Buna göre veriler bir ağaç yapısına benzer şekilde (kök gövde yapraklar) tutulur.
![alt text](img/giris_konulari/agac.jpg)

Ağaç yapısı, Parent - Child ilişkisi içinde veri saklama için güzel bir örnektir. ROOT çoğunlukla 0 (sıfır) kodu ile anılır. 

ID - ParentID - Etiket'den oluşan 3 sutunlu bir veri tablosu yapısı ile tutulamayacak hiyerarşik veri yoktur ve bu yöntem sıklıkla kullanılır.

## Örnek Ağaç Yapısı Tablo Verisi

```
  ID   PARENTID   LABEL
   1        0     Ürünler
   2        1     Telefon
   3        1     Bilgisayar
   4        1     TV
   5        2     Cep Telefonu
   6        2     Telsiz Telefonlar
   7        2     Telefon Aksesuarları
   8        5     Apple
   9        5     Samsung
  10        5     Lenovo
  11        4     LG     
  12        4     Samsung
  13        4     Westel
  14        4     Sony
  15        3     Masaüstü
  16        3     Dizüstü
  17        3     Tablet
```