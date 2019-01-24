# Sık Kullanılan PHP Komutları

# MATEMATİKSEL

### ceil &#9734;
Sayıları yuvalamak için kullanılır.
```php
$a = 789.89;
echo ceil($a); // 3
```
### floor
Floor fonksiyonu ceil fonksiyonun tam tersi işlem yapar yani rakamı aşağıya yuvarlar.
```php
echo floor(4.3);   // 4
echo floor(9.999); // 9
echo floor(-3.14); // -4
```
### Round
Round fonksiyonu  yuvarlama işlemi yapar. Virgülden sonraki rakam 5'ten küçükse aşağı , 5 ve 5'ten büyükse yukarı yuvarlama yapar. Round fonksiyonun güzel bir özelliği ise virgülden sonra yuvarlanacak rakam belirleyebiliyor olmamızdır. Örneğin virgülden sonra 7 basamak varsa biz 2 basamağının görünmesi için 2 parametresi veririz.

```php
echo round(5.1)."<br>"; //5
echo round(5.4)."<br>"; // 5
echo round(5.5)."<br>"; // 6
echo round(5.8)."<br>"; // 6
echo round(-5.4)."<br>"; // -5
echo round(-5.9)."<br>"; // -6
echo round(5.333446345,2)."<br>"; //5.33
```

### Rand
Rastgele integer değerler üretir.Belirtilirse belirtilen değerler arasında rastgele değerler üretir.


```php
echo rand() . "\n"; //Rastgele bir sayı oluşturacaktır.
echo rand() . "\n"; //Rastgele bir sayı oluşturacaktır.

echo rand(5, 15); //5 ile 15 arasında rastgele bir sayı oluşturacaktır.
```

### intval
Bir değişkenin tamsayı değerini döndürür.

```php
echo intval(42); //42               
echo intval(4.2); //4                 
echo intval('42');  //42                 
echo intval('+42'); //42           
```
### md5
Bir dizgenin md5 özetini hesaplar.

Aşağıdaki örnekte apple'ın sha1 karşılığını hesapladı ve türleri ile değerleri eşit olduğunu için yazdırma işlemi yaptı.

```php
$str = 'apple';

if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
    echo "Yeşil elma mı istersin kırmızı mı?";
    exit;
  }
  //Yeşil elma mı istersin kırmızı mı?
```
### sha1
Bir dizgenin sha1 özetini hesaplar.

Aşağıdaki örnekte apple'ın sha1 karşılığını hesapladı ve türleri ile değerleri eşit olduğunu için yazdırma işlemi yaptı.
```php
$str = 'apple';

if (sha1($str) === 'd0be2dc421be4fcd0172e5afceea3970e2f3d940') {
    echo "Yeşil elma mı yoksa kırmızı elma mı isterseniz?";
    exit;
}
// Yeşil elma mı yoksa kırmızı elma mı isterseniz?
```

### abs
ABS  fonksiyonu herhangi bir sayı değerini pozitif yapar.
```php
$a = -5;
echo abs($a); // 5
```
# DİZGE (String)

### ucwords
Dizgedeki her sözcüğün ilk harfini büyük harf yapar.
```php
$foo = 'hello world!';
$foo = ucwords($foo); // Hello World!           
```
### ucfirst
Dizgenin ilk karakterini büyük harfe çeviri.
```php
$foo = 'merhaba!';
$foo = ucfirst($foo); // Merhaba!           
```
### sprintf
Biçemli bir dizge döndürür.
```php
$b = “Barış AL”;
echo sprintf("Benim adım:  %s", $b); // Benim adım: Barış AL.
```
### substr
Dizgenin bir kısmını döndürür.
```php
echo substr('abcdef', 1, 3); // bcd
```
### lcfirst
Bir dizgenin ilk karakterini küçük harf yapar.
```php
$foo = 'HelloWorld';
$foo = lcfirst($foo); //helloWorld          
```
### shuffle
Bir diziyi karıştırır.Değerin anahtarları bilgileri değişir.
```php
$my_array = array("red","green","blue","yellow","purple");

shuffle($my_array);
print_r($my_array);
```
```php
Array ( [0] => blue [1] => red [2] => green [3] => purple [4] => yellow )
Her yinlemede değişecektir.
```

### str_repeat
Bir dizgeyi yineler.
```php
echo str_repeat("-=", 10); //-=-=-=-=-=-=-=-=-=-=
```

### str_replace
Bir alt dizgenin bütün örneklerini yenisiyle değiştirir.
```php
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

// You should eat pizza, beer, and ice cream every day
```
### strlen
Dizge uzunluğunu döndürür.
```php
$str = 'abcdef';
echo strlen($str); // 6
```
### strrev
Bir dizgeyi ters çevirir.
```php
echo strrev("Hello world!"); // "!dlrow olleH"
```
### strtolower
Bir dizgenin harflerini küçük harfe çevirir.

```php
$str = "PHP Güzel Bir Programlama Dili.";
$str = strtolower($str);
echo $str; // php güzel bir programlama dili
```

### strtoupper
Bir dizgenin hatflerini büyük harfe çevirmemizi sağlar.
```php
$str = "kemal mutlu";
$str = strtoupper($str);
echo $str; // KEMAL MUTLU
```
### trim
Dizgenin başındaki ve sonundaki boşlukları (veya diğer karakterleri) yok eder.

```php
echo trim('  Nuri Akman    '); // Nuri Akman
```

# DİZİ
### count
```php
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
echo $sonuç = count($a); //3
```

### implode / explode
Explode:Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir.
Implode:Dizi elemanlarını birleştirip bir dizge elde eder

```php
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1

```
### in_array
in_array Fonksiyonu dizide bir değerin varlığını araştırır. Dönen değerler olarak değer varsa True döner, Değer yoksa False döner.

```php
$meyve = array("Elma", "Kiraz", "Nar", "Şeftali");

if (in_array("Kiraz", $meyve)) {

    echo "Kiraz dizinde var"; // Kiraz dizinde var
 }

if (in_array("şeftali", $meyve)) {

    echo "şeftali dizinde var"; // şeftali dizinde var
}
```
### list
Değişkenlere bir dizi gibi atama yapar. Çoğunlukla explode komutu ile birlikte kullanılır.

```php
$str = "Merhaba Dünya!";
list($a, $b) = explode(" ", $str);
echo $a; // Merhaba
```
### sort
Bir diziyi sıralar.
```php
$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
//fruits[0] = apple
//fruits[1] = banana
//fruits[2] = lemon
//fruits[3] = orange
```


###
###
###




# MYSQL
###
###
###
###
###
###

# GENEL
### unset
 Belirtilen değişkeni tanımsız yapar
```php
function foo_yu_gebert()
{
    global $foo;
    unset($foo);
}

$foo = 'bar';
foo_yu_gebert();
echo $foo; // bar
```

### nl2br
Dizgedeki tüm satırsonlarının yerine HTML satır katlayıcıları yerleştirilir.
```php
echo nl2br("foo isn't\n bar");
// foo isn't<br />
// bar
```

### mkdir
Dizin oluşturur.
```php
mkdir("/dizinim/için/bir/yol", 0700);
```

### chdir
Dizin değiştirir.
```php
// geçerli dizin
echo getcwd() . "\n";

// değiştirelim
chdir('public_html');

// geçerli dizin
echo getcwd() . "\n";

// Şuna benzer bir çıktı üretir
// /home/nilgun
// /home/nilgun/public_html
```
### strtotime
Strtotime fonksiyonu ile yazılı tarihi unix zaman damgasına çevirebiliriz.
```php
$tarih = "2016-01-02 03:04:05";
echo strtotime($tarih); // 1451693045
echo date( "Y-m-d", strtotime( "2009-01-15 +3 DAY" ) ); // 2009-01-18
```
### isset
Varlık Kontrolü yapmayı sağlar.
```php
$var = '';
// Bu, TRUE olarak değerlendirilir, dolayısıyla metin basılır.
if (isset($var)) {
    echo "Böyle bir değişken var"; // Böyle bir değişken var
}
```
### is_string
Değişken string türünde mi diye bakar.

```php
if (is_string("23")) {
    echo "dizgedir\n";
} else {
    echo "dizge değildir\n";
}
// Dizgedir.
```

### is_null
Bir değişkenin değerinin NULL olup olmadığına bakar.
```php
error_reporting(E_ALL);

$foo = NULL;
var_dump(is_null($inexistent), is_null($foo));
// bool(true)
// bool(true)
```

### is_int
Değişken bir tamsayı mı diye bakar.
```php
if (is_int(23)) {
    echo "tamsayıdır\n";
} else {
    echo "tamsayı değildir\n";
}
// tamsayıdır
```
### is_dir
Bir dosyanın bir dizin olup olmadığını söyler.
```php
var_dump(is_dir('bir_dosya.txt'));
var_dump(is_dir('bir_dizin/abc'));

var_dump(is_dir('..')); // bir dizin yukarı

// bool(false)
// bool(false)
// bool(true)
```
### is_file
Bir dosyanın sıradan bir dosya olup olmadığını söyler.
```php
var_dump(is_file('bir_dosya.txt')) . "\n";
var_dump(is_file('/usr/bin/')) . "\n";
// bool(true)
// bool(false)
```
### if-else
if oluşumu, PHP dahil olmak üzere birçok programlama dilindeki en önemli yapı taşlarından biri olup kod bölümlerinin koşullu olarak çalıştırılabilmelerini sağlar.
```php
$a = 2;
if($a ==2) {
echo $a;
}else {
echo "2 ye eşit değil";
}
// 2
```
### Line if
if - else işleminin tek satırda yapılması durumudur.
```php
$A = 5;
echo ( $A < 10) ? 'Küçük' : 'Büyük';
```
### gettype
Bir değişkenin türünü döndürür.

```php
$data = array(1, 1., NULL, new stdClass, 'foo');

foreach ($data as $value) {
   echo gettype($value), "\n";
}
// integer
// double
// NULL
// object
// string
```
### function_exists
Eğer işlev tanımlanmış ise TRUE döndürür.
```php
if (function_exists('imap_open')) {
    echo "IMAP işlevleri mevcut.<br />\n";
} else {
    echo "IMAP işlevleri mevcut değil.<br />\n";
}
// İşlev tanımlıysa şunu çıktı gelir:
// IMAP işlevleri mevcut.
```

### getcwd
Geçerli çalışma dizinini döndürür.
```php
echo getcwd() . "\n";,// Örneğin: /home/nilgun
```

### foreach
Foreach yapısı diziler üzerinde yineleme yapmayı kolaylaştırmaktadır. Foreach yalnızca diziler ve nesneler için kullanılabilir.
```php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    echo $value ;
}
//1234
```
### for
for döngüsü, PHP'deki en karmaşık döngü yapısıdır. C'deki karşılığıyla aynı biçimde çalışır.

```php
for ($i = 1; $i <= 10; $i++) {
    echo $i;
  }
//12345678910
```
### date
Tarih komutudur.
```php
$tarih = date("Y-m-d H:i:s");
echo $tarih; //2018-12-18 10:30:23
```
### cal_days_in_month
Seçilen takvime ve yıla göre istenen aydaki gün sayısını geri döndürür.
```php
$num = cal_days_in_month(CAL_GREGORIAN, 8, 2003); // 31
echo "2003 yılı Ağustos ayında $num gün vardır";
// 2003 yılı Ağustos ayında 31 gün vardır
```

### empty
Bir değişkenin boş olup olmadığını saptar.
```php

// Basit bir empty() / isset() karşılaştırması
$var = 0;

// $var boş olduğundan sonuç true olur
if (empty($var)) {
    echo '$var ya 0, ya boş ya da tanımsızdır';
}

// $var tanımlı olduğundan sonuç true olur
if (isset($var)) {
    echo '$var boş olsa da tanımlıdır';
}
```
### die
Bir ileti çıktılayıp çalışmakta olan betiği sonlandırır.
```php
echo 'Nuri'; // Nuri yazar ama Kemal yazmaz.
die(); // Alt taraftaki kodları okumaz.
echo 'Kemal';
```

### header
Ham bir HTTP başlığı gönderir.
```php
/* Örnek 1 */
header("Location: http://benimsitem.com/uyelik.php");
die();
/* Örnek 2 */
header("Content-Type: text/xml")
echo '<?xml version="1.0" encoding="ISO-8859-1" ?>';
/* Örnek 3 */
header('Content-Type: text/html; charset=utf-8');
```
### echo / print
Bir veya daha fazla dizgeyi çıktılar.

```php
echo "Nuri"; //Nuri
print "Kemal" //Kemal
```

### post
POST metodu ise URL’ de görünmesini istemediğimiz veriler olduğunda, dosya yükleyeceğimiz zaman, querystring’in çok büyük olduğu durumlarda kullanılır. POST yönteminde gönderebileceğimiz verinin boyutu ile ilgili bir sınır yoktur.

### get
GET methodu HTTP istekleri arasındaki varsayılan yöntemdir.  GET metodu ile yapılan istekler tarayıcının adres satırında görünür. Sadece belirli boyutta veri gönderileceği zaman kullanılır.

### session
Türkçesi oturum anlamına gelen session bilgilerin saklanması için kullanılan mantıksal bir nesnedir.Session oturum yönetimini kullanarak şifreli sayfalar oluşturarak ve bu sayfaları belirlediğiniz kullanıcıların görmesini sağlayabilirsiniz.
```php
    // Session başlatır
    session_start();
    // Session'a veri ekleme
    $_SESSION["kullanici_adi"] = "x";
    $_SESSION["sepet"] = "laptop";
```
### glob
Bir kalıpla eşleşen dosya yollarını bulur.
```php
foreach (glob("*.txt") as $dosya) {
    echo "$dosya boyu " . filesize($dosya) . "\n";
}
// funclist.txt boyu 44686
// funcsummary.txt boyu 267625
// quickref.txt boyu 137820
```


## Dosya
### require
require deyimi bir başarısızlıkta E_COMPILE_ERROR seviyesinden ölümcül bir hata vermesi dışında include deyimi ile aynıdır. Başka bir deyişle, include deyiminin sadece bir uyarı (E_WARNING) vererek çalışmayı sürdürdüğü durumda require deyimi betiğin hata vererek durmasına sebep olur.

```php
require('somefile.php'); //somefile.php dosyasını çağırır.
```
### require_once
require_once deyimi, dosyayı evvelce dahil edilmişse tekrar dahil etmemesi dışında require deyimiyle aynıdır.

```php
require_once('index.php'); //index.php dosyasını çağırır.
```

### file_put_contents
Bir dizgeyi bir dosyaya yazar.

```php
/* Örnek 1 */
file_put_contents('my_file.txt', 'Hello', FILE_APPEND); // Will append 'Hello' to the specified file
/* Örnek 2 */
$ip = $_SERVER['REMOTE_ADDR']; // Get client's IP address
file_put_contents('ips.txt',"\n".$ip, FILE_APPEND);
/* Örnek 2 */
$file = 'people.txt';
// İçeriğini almak için dosyayı açalım
$içerik = file_get_contents($file);
// İçeriğe yeni bir kişi ekleyelim
$içerik .= "John Smith\n";
// İçeriği dosyaya yazalım
file_put_contents($file, $içerik);
```
### file_get_contents
Dosya içeriğinin tamamını bir dizge olarak döndürür.

```php
$homepage = file_get_contents('deneme.txt');
echo $homepage; //deneme.txt dosyasının içeriğini dizge olarak döndürdü.
```

###
###
