## VERSİYON

![](image/versiyon.jpg)
##### Majör:
Programda radikal bir değişiklik yapılırsa majör sayımız artar.
##### Minör:
Programa yenilik getirdiğimiz zaman artar.
##### Bug-Fix:
 Hatalar düzeltildiği zaman artar.





#### in_array
#### key_exist







#### Terminal İçin Bazı Kısayollar :
Komut | Açıklaması
------------ | -------------
<kbd>ctrl</kbd>+<kbd>a</kbd> | Satır başına git
<kbd>ctrl</kbd>+<kbd>u</kbd> | İmlecin solunu siler
<kbd>ctrl</kbd>+<kbd>k</kbd> | İmlecin sağını siler
<kbd>ctrl</kbd>+<kbd>e</kbd> | Satır sonuna gider
<kbd>ctrl</kbd>+<kbd>r</kbd> | Geçmişte arama yapar
<kbd>ctrl</kbd>+<kbd>l</kbd> | Sayfayı temizler


## + Kısa Notlar
- Kaynak kodunun çıktıda düzgün gözükmesi için döngü sonuna <b>\n</b> (9.40)
-  themeforest.net : Çeşitli konularda hazır şablonlar satan sitedir. (10.35)
- freepik.com : Ücretsiz resim paylaşan site. (10.44)

<b>! İnternetten rastgele fotoğraf alıp sitenize ekleyemezsiniz, sonrasında resmin asıl sahibi size dava açabilir. ! </b>
- Telefondan fotoğraf çektiğimizde telefon fotoğrafa konum,tarih ve saat bilgilerini ekler. (10.50)
- WORDLE: Yazıları iç içe geçirerek güzel görünüm sağlar. (10.55)
- <b>Stack Overflow candır.</b> Quora,<b>Medium.com(Mutlaka burada yazı yazın.)</b> alternatiflerdir.(11.20)

```str_replace("Â","A",$str);``` ==> "Â" karakterini normal "A" harfi ile değiştirir. (11.30)

- draw.io : Herhangi bir çizim programında çizeceğiniz projeyi 4 kat daha hızlı bir şekilde çizmeye yarayan, içinde hazır şablonların yanı sıra bulunan hazır elementlerle kolay diagram çizebileceğiniz, web tabanlı kullanabileceğiniz gibi windows veya mac tabanlı da kullanabileceğiniz muhteşem uygulama.

- wetransfer.com : Android ve İOS işletim sistemine sahip cihazlar için hem mobil hem de internet üzerinden kullanılabilen WeTransfer, kısaca kullanıcıların dosyalarını kolay ve zahmetsiz bir şekilde paylaşabilmesini sağlıyor. Uygulamanın bilgisayar sürümünde ise çok daha hızlı ve geniş seçenekler sunulmakta.










# WORDPRESS KURULUMU
```BASH
cd ~
wget --no-check-certificate https://wordpress.org/latest.tar.gz
tar xzvf latest.tar.gz
sudo apt-get update
cd ~/wordpress
cp wp-config-sample.php wp-config.php
cd ..
cp wordpress /var/www/html/wp
```







# Pivot (Özet Tablo)
Hesap tablosunda Pivot tabloları bize e-tablodaki verileri özetlememize olanak sağlayan bir özelliktir. Sözde “pivot tablo” ve özetlenmiş verileri neyi gösterdiğini ikinci tabloda sonuçlarını görüntülemek, sıralama, total, saymak veya bir tablo veya elektronik tabloda depolanan verilerin ortalamasını verir.

# Application Programming Interface (API)
Teknik anlamda API, (Application Programming Interface) kelimelerinin kısaltması olarak söylenir. Farklı türden uygulamaların aynı ana akışı üzerinden birlikte çalışmasını sağlayan yazılım parçasıdır. Bu  daha kolay anlamda bir yazılımın, başka bir yazılımla iletişime geçmesi, fonksiyonelliklerini kullanması, iş akışlarını paylaşmasını sağlamakla görevlidir. API söz konusu farklı türden yazılım unsurlarını, birlikte ortak bir noktada buluşturur.

# Toplu SMS API Nedir?
Toplu SMS API, hemen her sektörde kullanılan başlıklı SMS'in sistemlere entegre edilmesidir. Web site üyelik ve şifre bilgilendirme, sipariş bilgilendirme, büyük firma sitelerinin güvenlik kontrolü, kargoların bildirim, e-ticaret sitelerinin ürün hareketi, dinamik cihazların uzak kontrolü ve izlenmesi, eğitim kurumlarının turnike sistemi gibi pek çok sektörde SMS API kullanımına ihtiyaç vardır. Bu gibi yapılarda sistem bir defa kurulur ve sonrasında işlemler dışardan kontrol edilir. ASP, PHP, C#, JAVA, DELPHI, Visual Basic gibi her tür yazılım ile uyumlu; XML POST, WEB SERVICE, GET & PUSH kullanım yöntemlerini detekleyen ve sisteminize kolaylıkla entegre edilebilen Toplu SMS Api Sistemi ile tüm mesaj gonderim işlemleri otomatik olarak yapılır.






Komutlar | Açıklama
------------|-------------
```@session_start();``` |  Oturum verisini ilklendirir. İlk satırda olmalıdır. Ve ondan önce herhangi bir çıktı üretilmemiş olması gerekir.
```sudo chown -r nuri:www-data /var/www/html``` | Bu komut sayesinde nuri kullanıcısı html klasörünün içindeki tüm dosyalara yazma izni elde etmiş oldu.
```autocomplete_off``` | daha önceden yazılmış otomatik tamamlamalı kullanıcı bilgileri çıkmaz.
```header("Location: kontrol.php"); die(); ``` | header dedikten sonra alt satırdaki die komutunu eklemezsek programı tam olarak yönlendiremeyiz.
```unset("session değişkeni")``` | Oturum sonlandırma.
sprintf("M%04d.md", $ID); | M harfinden sonra 4 tane 0 ekledi "M0000d.md"

<b>Session Hijacking</b> : Hedef kişinin cookie(çerez) bilgilerini ele geçiren birisi, sisteme kendini hedef kişiymiş gibi göstererek kullanıcı adı ve parola girmeden giriş yapabilir.

<b>! Güvenlik Uyarısı ! : Bilmediğiniz yerden gelen mail ya da mesajların içerisindeki linklere tıklamayın. Saldırganlar javascript içerisine gömdükleri zararlı kodları size link olarak açtırdığında sizin cookie bilgilerinizi rahatlıkla ele geçirebilirler.
</b>

<b>! Linux da dosyanın uzantısını belirtmenize gerek yoktur. Çünkü linux o dosyanın hex kodlamasından magic byte kısmını kontrol ederek zaten o dosyanın uzantısının ne olduğunu kendisi tespit edebilir. !</b>





## SQL Nedir?

Konu bilgisayarlar olunca eldeki veriler ile uğraşmak da zaman geçtikçe daha çok zorlaşıyor. Çünkü hangi konuda çalışırsanız çalışın veriler bir yerden sonra tek başınıza uğraşamayacağınız boyutlara geliyor. Bu noktada devreye girmesi gereken sistem ise SQL’dir.

SQL verileri kolaylıkla yönetebilmeniz için kullanabileceğiniz bir veritabanı sistemidir. Bir kısaltma olan SQL’in açılımı “Structured Query Language”dir. Türkçe olarak çevirirsek de bu “Yapılandırılmış Sorgulama Dili” olacaktır. SQL bilinenin aksine bir programlama dili değildir. SQL bir alt dil olarak veri tabanları içerisinde istediğiniz işlemleri yapmanıza olanak sağlar.

SQL fikri ortaya ilk atıldığında matematiksel bir yapıya sahipmiş. Fakat sonraları insanlar bunları anlamakta ve kullanmakta zorlanabilir diye diğer birçok dilde de olduğu gibi İngilizce belirteçlerin olduğu bir yapıya evrilmiştir.

## SQL Komutları(Bugün Öğrenilenler)

Komutlar | Açıklama
------------|-------------
SELECT | Seçme Komutudur.İstenilen alanları tablodan çeker.
FROM | Konum belirtmemizi sağlar.
WHERE | Şart koşmak için kullanılır.
SUM | Toplama komutudur.Belirtilen alandaki değerleri sayısal olarak toplar.
GROUP BY | Tabloyu veya birlikte sorgulanan tabloları gruplara bölmek için kullanılır.
ORDER BY | Toplama komutudur.Belirtilen alandaki değerleri sayısal olarak toplar.
COUNT | Count komutu saymaya yarar.
Select * from müşteriler | Müşteriler datasındaki tüm verileri getir.
```*```  | hepsini
from müşteriler | müşterilerin hepsi





<b>SQL Kodları Yazılış Sırası;</b>
```Select --> from --> where --> groupBy --> OrderBY --> LIMIT```



Adminer : PHP ile geliştirilmiş bir veritabanı yönetim uygulaması.
CSV(comman sprited value)
TSV(TAB sprited value )






SQL KODU | Açıklaması
------------|-------------
mysqli_connect | bir sunucuya bağlanmamızı sağlar. Her seferinde kullanılır.(session gibi)
mysqli_connect_error | sunucuya bağlantıyı true/false olarak yorumlar.
mysqli_query | sorgu komutu
mysqli_num_rows | kaç satır veri geldi bunu öğreniriz.
mysqli_fetch_assoc | while satırıyla birlikte kullanılır.MySQL foreach'i diyebiliriz.
mysqli_real_escape_string | güvenlik adına yapılan işlemlerden biri.
extract
SELECT getir/seç/süz
UPDATE güncelleme
UPDATE tabloadı SET parola = "$YeniParola" where kullanıcıID=2
(tabloadı tablosunda kullanıcı ID 2 olan kullanıcının parolasını $YEniParoladan aldığımız değerle değiştiririz.)
DELETE silme komutu
delete from tabloadı where koşul (tabloadı içinde verilen koşulu sağlayan veriler silinir.)
INSERT
INSERT into tabloadı SET
SQL için % anlamlı karakterdir.
_ anlamlı karakterdir.

Veri Tabanı Tipleri | Açıklaması
------------|-------------
```int ```| tam sayı değeri alabilir. -2147483648 ile 2147483647 arası değer alabilir.
```char``` | ad,soyad gibi yazılar yazılabilir. 0 ile 255 karakter arası değer verebiliriz.
```varchar``` | char'dan tek farkı siz o alanı kullanmasanızda char alan ayırır, fakat varchar siz ne kadar karakterlik alan kullanırsanız o kadar alan kaplar.
```TEXT``` | TINYTEXT,TEXT,MEDIUMTEXT,LONGTEXT olarak 4'e ayrılır. Aralarındaki fark alabildikleri karakter alanıdır. Bunlar sırasıyla; max 255,max 65535, max 16777215, max 4294967295 karakterlik alan alabilir.
```FLOAT``` | FLOAT virgüllü sayı.(Virgülden sonra çok rakam görmek için float kullanılır.)
```DECIMAL``` | (,) string olarak virgüllü sayı.(virgül hassasiyeti düşükse decimal)
```DOUBLE``` | (,) virgüllü büyük sayı.
```Sayısal Alanlar``` | TINYINT(),SMALLINT(),MEDIUMINT(), INT(),BIGINT() bunların tek farkı sayısal olarak farklı alanlara sahip olmalarıdır.
```DATE``` | YYYY-MM-DD (Yıl-Ay-Gün)
```DATETIME``` | YYYY-MM-DD HH:MM:SS (Yıl-Ay-Gün Saat:Dakika:Saniye)
```TIMESTAMP``` | YYYYMMDDHHMMSS (YılAyGünSaatDakikaSaniye)
```TIME``` | HH:MM:SS (Saat:Dakika:Saniye)
















## Örnekler

## [Şairler TextDB Örneği:](https://github.com/vedia/SairlerTextDB)
- Örneğimizde yönetici olarak giriş yapıp , şair ekleme , düzenleme işlemlerini yaptık.

## [SairlerMYSQL Örneği:](https://github.com/vedia/SairlerMySQL)
- Örneğimizde SairlerTextDB'de olduğu gibi giriş yapıp şair ekledik.Burada ki örneğin en önemli farkı veritabanı işlemleri yaptık.

## [TextAnaliz:](https://github.com/vedia/TextAnaliz)
- Örneğimizde bir konuşmadan aldığımız metni , kendi belirlediğimiz kurallarla anlamsız karakterleri silip, konuşmanın bir özetini çıkarttık.Konuşmanın konusunu bulduk.  

## [TextDosyadanSozluk:](https://github.com/vedia/TextDosyadanSozluk)
- Örneğimizde isimler ve anlamları olan bir dosya oluşturup verileri çektik.Kendi belirlediğimiz kuralllarla isimleri , anlamlarını ve cinsiyetlerini ayırdık.Harfe göre isimleri listeledik.İsim arama bölümü yaptık.

## [SessionOrnegi:](https://github.com/vedia/SessionOrnegi)
- Örneğimizde oturum yönetimine örnek verdik.Session başlatıp , session sonlandırdık.Kullanıcının giriş yapmasını , yaptıktan sonra kontrol etmesini ,  sessionları silerek oturumu sonlandırmasını sağladık.

## [Lyk2018phpsozluk:](https://github.com/vedia/lyk2018phpsozluk)
- Buradaki örneklerde Glob fonksiyonundan bahsettik.Dosyadaki verileri bölmekten bahsettik.İsimlerin anlamlarını ve cinsiyetlerini böldük.Kutuphane dosyası oluşturup fonksiyonları çağırdık.Seo çalışmasına örnek verdik.

## [Lyk2018php:](https://github.com/vedia/lyk2018php)
- Örneğimizde github üzerinden ortak bir çalışma yaptık.Konular öğrencilere dağıtıldı ve ortak bir şekilde çalışma yapıldı.

## [Include Örneği:](https://github.com/vedia/include_ornegi)
- Örneğimizde bootstrap bir temayı parçaladık.

## [LYK2018_Ornekler:](https://github.com/vedia/LYK2018_Ornekler)
- Buradaki çalışmada resim boyutlandırma , resime yazı yazma , text dosya düzenleme , text dosyaya veri ekleme , dosya yükleme çalışmaları yapıldı.
