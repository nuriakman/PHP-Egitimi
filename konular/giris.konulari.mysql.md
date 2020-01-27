# Temel MySQL Komutları ve Örnekleri

## Temel Komutlar
Komut |Anlamı|
------------|-------------|
[mysqli_connect](http://php.net/mysqli-connect)|MySQL Veritabanına bağlanma komutudur
[mysqli_connect_error](http://php.net/mysqli-connect-error)|MySQL Veritabanına bağlantı sırasında oluşan hata bilgisini saklar
[mysqli_real_escape_string](http://php.net/mysqli-real-escape-string)|SQL sorgusunda bulunacak tehlikeli karakterlerin kaçış karakterleri ile güvenli hale getirilmesini sağlar
[mysqli_query](http://php.net/mysqli-query)|SQL sorgusunu çalıştırma komutudur
[mysqli_fetch_assoc](http://php.net/mysqli-fetch-assoc)|SQL sonucunu ilişkisel dizi olarak almak için kullanılır
[mysqli_num_rows](http://php.net/mysqli-num-rows)|SQL sorgusu sonucunda kaç satır geldiğini gösterir
[mysqli_affected_rows](http://php.net/mysqli-affected-rows)|SQL sorgusundan kaç satırın etkilendiğini gösterir
[mysqli_insert_id](http://php.net/mysqli_insert_id)|INSERT işlemi sonucunda eklenen yeni kaydın ID bilgisini gösterir


# MySQL Sunucusuna Bağlanma

```PHP
## Veritabanına bağlantı kuralım...
## Veritabanına bağlantı kuralım...
$host     = "localhost";
$user     = "root";
$password = "root";
$database = "DBADIBURAYA";
$DB = mysqli_connect( $host, $user, $password, $database );
if( mysqli_connect_error() ) die("Veritabanına bağlanılamadı...");
$temp = mysqli_query($DB, "set names 'utf8'"); // Türkçe karakterlerle ilgili sorun yaşamamak için
```

# Fonksiyon Kullanimi
```PHP
function Temizle($DB, $val) {
  $val = mysqli_real_escape_string($DB, $val);
  return $val;
}
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
$val1 = mysqli_real_escape_string($DB, $val1);
$val2 = mysqli_real_escape_string($DB, $val2);
$val3 = mysqli_real_escape_string($DB, $val3);

//$SQL = "INSERT INTO araclar (marka, model, fiyat) VALUES ( '$val1', '$val2', '$val3' )";
$SQL = "INSERT INTO araclar SET
            marka = '$val1',
            model = '$val2',
            fiyat = '$val3'     ";
$rows = mysqli_query($DB, $SQL);
$EklenenID = mysqli_insert_id($DB);
echo "Yeni araç, tabloya $EklenenID kayıt numarası ile eklenmiştir.";
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
$val1 = mysqli_real_escape_string($DB, $val1);
$val2 = mysqli_real_escape_string($DB, $val2);
$val3 = mysqli_real_escape_string($DB, $val3);

$SQL = "UPDATE araclar SET
          marka = '$val1',
          model = '$val2',
          fiyat = '$val3'
        WHERE id=1678";
$rows = mysqli_query($DB, $SQL);
```


# Kayıt Silme
```PHP
## Veritabanından kayıt silme
$SQL = "DELETE FROM araclar WHERE id = 1";
$rows = mysqli_query($DB, $SQL);
```


# Kayıt Getirmeyi Sınırla
150 nci kayıttan itibaren 20 kayıt getir.
```PHP
$SQL = "SELECT * FROM araclar LIMIT 20 OFFSET 150";
$rows = mysqli_query($DB, $SQL);
```


# Kayıt Listeleme - Örnek 1
```PHP
## Veritabanından kayıt çekme ve listeleme örneği
## Veritabanından kayıt çekme ve listeleme örneği

$SQL = "SELECT marka, model FROM araclar LIMIT 20";
$rows = mysqli_query($DB, $SQL);
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
$rows = mysqli_query($DB, $SQL);
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
$rows = mysqli_query($DB, $SQL);
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

function GetHTMLSelectTagData( $SQL, $SahaAdi ){
  global $DB;
  $rows = mysqli_query($DB, $SQL);
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

# SQL Injection Nedir?

Kullanıcıdan gelen değerin özel bir işleme tabi tutulup güvenli hale getirilmemesi durumunda oluşan güvenlik açığına ```SQL injection``` adı verilir.

```PHP
// GET paramteresi olan gelen değeri alalım:
$KullaniciID = $_GET["id"];

// Gelen değeri hazırlayacağımız SQL içinde kullanalım:
$SQL = "SELECT * FROM kullanicilar WHERE id = '$KullaniciID' "; 

// Kullanıcı "id" değeri için şu ifadeyi girmiş olsun:
' OR '1' = '1

// Oluşan SQL şu şekilde olacaktır:
SELECT * FROM kullanicilar WHERE id = '' OR  '1' = '1'

// Oluşan bu değer her zaman için TRUE (Doğru) değeri üreteceği için SQL sorgusu kötü niyetli olarak manipüle edilmiş olacaktır.

// Bu sorunu ortadan kaldırmak için şu komutun uygulanması yeterlidir:
$KullaniciID = mysqli_real_escape_string($DB, $_GET['id']);
// NOT: mysqli_real_escape_string komutunun çalışabilmesi için bağlantının kurulmuş olması şarttır.
```

# POST ve GET temizliği
Özellikle POST ve GET verilerinde toplu olarak ```mysqli_real_escape_string``` komutunun uygulanması çalışmaları burada derlenmeye çalışılmıştır.

**NOT:** ```mysqli_real_escape_string``` komutunun çalışabilmesi için bağlantının kurulmuş olması şarttır.

## Yöntem 1 TODO: Test Edilmeli!
```PHP
function GUVENLI_VERI($array, $DB) {
   foreach($array as $key=>$value) {
      if(is_array($value)) { GUVENLI_VERI($value); }
      else { $array[$key] = mysqli_real_escape_string($value, $DB); }
   }
   return $array;
}

// Kullanım Örneği:
GUVENLI_VERI($_GET, $DB);
GUVENLI_VERI($_POST, $DB);
```
## Yöntem 2 TODO: Test Edilmeli!
```PHP
array_walk($_POST, function(&$string) use ($DB) { 
  $string = mysqli_real_escape_string($DB, $string);
});
```
TODO: POST verisi içinde dizi değişkenleri varsa durumunda nasıl davranıyor? 

## Yöntem 3 TODO: Test Edilmeli!
```PHP
$post = array_map('mysqli_real_escape_string', $_POST);
$POST = $post;
```
TODO: POST verisi içinde dizi değişkenleri varsa durumunda nasıl davranıyor? 

## Yöntem 4 TODO: Test Edilmeli!
```PHP
foreach($_POST as $k => $v) {
    $_POST[$k] = mysqli_real_escape_string($DB, $v);
}
TODO: POST verisi içinde dizi değişkenleri varsa çalışmaz! 
```


# PHP7'den İtibaren Kaldırılmış Olan Komutlar

Aşağıdaki mysql_* ile başlayan komutlar, PHP 7.0'dan itibarek artık kullanılmamaktadır.


|Komut|Açıklama|
|----|----|
|mysql_select_db|Sunucudan veritabanı seçer.|
|mysql_query|Veritabanına sorgu gönderir.|
|mysql_close|Belirtilen mysql bağlantısını kapatır.|
|mysql_connect|Sunucuya veritabanı bağlantısı açar.|
|mysql_error|Bir önceki işlemdeki MySQL hata mesajını verir.|
|mysql_create_db|MySQL’de veritabanı açar.|
|mysql_affected_rows|Bir önceki işlemde etkilenen satır sayısı.|
|mysql_data_seek|Sonuç satırında belirtilen sıraya geçer.|
|mysql_db_query|MySQL’e sorgu gönderir.|
|mysql_drop_db|Veritabanını sunucudan siler.|
|mysql_errno|Bir önceki işlemdeki MySQL hata numarasını verir.|
|mysql_fetch_array|Sonuçları dizi değişkeni olarak alır.|
|mysql_fetch_field|Sonuç tablosundaki alan adını nesne olarak alır.|
|mysql_fetch_lenghts|Sonuç tablosundaki dizi değişkeninin uzunluğunu alır.|
|mysql_fetch_object|Sonuç satırını nesne olarak alır.|
|mysql_fetch_row|Sonuç tablosundan dizi değişkeni alır.|
|mysql_field_name|Sonuç tablosundaki sonucun tablodaki alan adını verir.|
|mysql_field_seek|Sonuç tablosunda sıra indeksini belirten yere götürür.|
|mysql_field_table|Alan adı verilen sonucun tablo adını verir.|
|mysql_field_type|Sonuçtaki alanın hangi tip olduğunu belirtir.|
|mysql_field_flags|Sonuçtaki alanın hangi tür ekstra parametrelerle tanımlandığını belirtir.|
|mysql_field_len|Sonuçtaki alanın veritabanındaki uzunluğunu verir.|
|mysql_free_result|Sonuçlar için atanan hafızayı boşaltır.|
|mysql_insert_id|Bir önceki veri yerleştirmede oluşan otomatik veri değerini verir.|
|mysql_list_fields|Sonuçtaki tüm tablo alanlarını listeler.|
|mysql_list_dbs|Sunucudaki tüm veritabanlarını listeler.|
|mysql_list_tables|Veritabanındaki tüm tabloları listeler.|
|mysql_num_fields|Sonuçtaki alan sayısını verir.|
|mysql_num_rows|Sonuçtaki satır sayısını verir.|
|mysql_pconnect|Sunucuya kalıcı bir bağlantı tanımlar.|
|mysql_result|Sorgudan dönen sonuçları alır.|
|mysql_tablename|Verilen alanın ait olduğu tablonun adını verir.|

Kaynak: https://www.dahiweb.com/mysql-komutlari-fonksiyonlari/



# mysql ile yazılmış eski uygulamaların PHP7'de çalıştırılması

mysql ile yazılmış eski uygulamaların PHP7'de çalıştırılması için geliştirilmiş faydalı bir proje var: [PHP MySQL to MySQLi: Replace mysql functions using the mysqli extension](https://www.phpclasses.org/package/9199-PHP-Replace-mysql-functions-using-the-mysqli-extension.html)


### The problem

PHP has deprecated the mysql extension which will be removed in PHP 7. Even though it was recommended to use the improved extension, mysqli, many developers continued to use mysql.

### The effect

Once PHP 7 is released in mid November of this year, 2015, many hosted servers will upgrade and scripts still relying on the old mysql extension will fail.

There are lot of web sites using legacy packages that are no longer supported by the developer and not all developers have had time to update their current packages to the improved mysqli extension.

### The solution

The PHP mysql to mysqli package was developed to be the stop gap to keep everything working smoothly.

It can be placed in any PHP script, at anytime, and when the mysql extension disappears, it will take over. It works by defining functions using the old mysql function names and passing the arguments to the class methods that will use the improved mysqli extension.



## mysqli Nesne Yönelimli Kullanım Örneği
```PHP
<?php
$DB = new mysqli("localhost", "my_user", "my_password", "world");

/* check connection */
if (mysqli_connect_error()) {
    printf("Veritabanı Sunucusuna Bağlantı Hatası: %s\n", mysqli_connect_error());
    exit();
}

$DB->query("CREATE TABLE DUKKANLAR (DUKKANADI varchar(100));");

$DukkanAdi = "Ayşe'nin Ev Yemekleri";

/* Bu sorgu hatalıu çalışır */
if (!$DB->query("INSERT into DUKKANLAR (DUKKANADI) VALUES ('$DukkanAdi')")) {
    printf("Error: %s\n", $DB->sqlstate);
}

$DukkanAdi = $DB->real_escape_string($DukkanAdi);

/* Bu sorgu düngün çalışır */
if ($DB->query("INSERT into DUKKANLAR (DUKKANADI) VALUES ('$DukkanAdi')")) {
    printf("%d Satır eklendi.\n", $DB->affected_rows);
}

$DB->close();
?>
```

## mysqli Yordamsal Kullanım Örneği
```PHP
<?php
$DB = mysqli_connect("localhost", "my_user", "my_password", "world");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Veritabanı Sunucusuna Bağlantı Hatası: %s\n", mysqli_connect_error());
    exit();
}

mysqli_query($DB, "CREATE TABLE DUKKANLAR (DUKKANADI varchar(100));");

$DukkanAdi = "Ayşe'nin Ev Yemekleri";

/* Bu sorgu hatalıu çalışır */
if (!mysqli_query($DB, "INSERT into DUKKANLAR (DUKKANADI) VALUES ('$DukkanAdi')")) {
    printf("Error: %s\n", mysqli_sqlstate($DB));
}

$DukkanAdi = mysqli_real_escape_string($DB, $DukkanAdi);

/* Bu sorgu düngün çalışır */
if (mysqli_query($DB, "INSERT into DUKKANLAR (DUKKANADI) VALUES ('$DukkanAdi')")) {
    printf("%d Satır eklendi.\n", mysqli_affected_rows($DB));
}

mysqli_close($DB);
?>
```

