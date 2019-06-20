
# İstatistikler
- Web Technologies of the Year 2018 https://w3techs.com/blog/entry/web_technologies_of_the_year_2018
- StackOverflow sitesi yeni anket sonucunu yayınladı: Developer Survey Results 2019 Sektördeki eğilimler hakkında bilgi edinmek için bundan daha iyi bir kaynak düşünemiyorum. https://insights.stackoverflow.com/survey/2019


# OnLine HTML Form Builders
- https://www.phpformbuilder.pro/index.html
- https://bootstrapformbuilder.com/
- https://bootsnipp.com/forms
- https://getfuelux.com/index.html --- https://github.com/ExactTarget/fuelux
- https://www.layoutit.com/en
- https://formoid.com/ -- Paralı?


# Örnek Veri Setleri
- https://github.com/nuriakman/Ornek_Veri_Setleri


# Statik Web İçeriği Sunmak İçin
- https://mertcangokgoz.com/gelistirme-ortamlari-icin-statik-web-sunuculari/


# Redis Kullanım Örneği -- Bu sayfalardan derlenip hazırlanacak
- https://packagist.org/packages/predis/predis
- https://scotch.io/tutorials/getting-started-with-redis-in-php
- http://aristona.github.io/redis-kullanimi-ve-incelikleri
- https://www.sitepoint.com/an-introduction-to-redis-in-php-using-predis/
- https://github.com/phpredis/phpredis
- https://github.com/nrk/predis/wiki/Quick-tour

Önce composer kurulur. https://getcomposer.org/download/
```
sudo apt-get update
sudo apt-get install redis-server
sudo snap install redis-desktop-manager
redis-server
redis-cli
composer require predis/predis
```
Önce şunu yaparız: ```composer require predis/predis```

## ```redis.get.php``` Dosyası İçeriği

```
<?php
require 'vendor/autoload.php';
Predis\Autoloader::register();
$client = new Predis\Client();
$adsoyad = $client->get('adsoyad');
$zaman   = $client->get('zaman');
echo "$adsoyad<br>$zaman";
```


## ```redis.set.php``` Dosyası İçeriği

```
<?php
require 'vendor/autoload.php';
Predis\Autoloader::register();
$client = new Predis\Client();
$client->set('adsoyad', 'Nuri Akman');
$client->set('zaman', date("Y-m-d H:i:s") );
echo "SET işlemi tamam...";
```







# GİT Deposunda Temizlik  -- Bu sayfalardan derlenip hazırlanacak
- https://rtyley.github.io/bfg-repo-cleaner/
- https://git-scm.com/docs/git-filter-branch


# PHP Örneklerine eklenecek
- Dosya Paylaşımı Örneği - http://wetransfer.com/ Detaylar Trello'da var.


# PHP Konusunda pop3 ve IMAP anlatılmalı
https://www.youtube.com/watch?v=SBaARws0hy4&t=29s
Video sonundaki artı ve eksiler önemli



# İnternetin Sahibi ve DNS   -- Bu sayfalardan derlenip hazırlanacak
- http://tr.0wikipedia.org/wiki/DNS
- https://www.kooplog.com/internetin-sahibi-kimdir/
- https://mamasfm.de/internet-kime-ait-internetin-anahtari-kimde/
- https://www.ihs.com.tr/blog/icann-nedir/
- http://archive.icann.org/tr/turkish.html
- http://www.bilgedomain.com/icann-nedir/
- https://social.technet.microsoft.com/wiki/contents/articles/25919.dns-uzerine-detayl-anlatm-tr-tr.aspx
- https://developer.mozilla.org/tr/docs/%C3%96%C4%9Fren/Getting_started_with_the_web/JavaScript_basics
- https://www.netnod.se/i-root/what-are-root-name-servers
- http://www.wikizero.biz/index.php?q=aHR0cHM6Ly9lbi53aWtpcGVkaWEub3JnL3dpa2kvUm9vdF9uYW1lX3NlcnZlcg






# ALGORİTMA Nedir?  -- Bu sayfalardan derlenip hazırlanacak
- https://maker.robotistan.com/algoritma/
- https://www.yazilimbilisim.net/algoritma/algoritma-ve-akis-diyagrami-ornekleri/
- https://www.dersmax.com/icerik/29/5524/algoritma_nedir.html
- https://baskabirkod.com/algoritma-nedir/
- http://programlamabilgini.blogspot.com/2014/11/algoritma-nedir.html



# REST Nedir?  -- Bu sayfalardan derlenip hazırlanacak
- https://ersinmertoglu.blogspot.com/2016/12/rest-nedir-ne-degildir.html
- http://burcualtinok.com.tr/blog/rest-api-nedir/
- https://medium.com/android-t%C3%BCrkiye/rest-api-kavramlar%C4%B1-soap-ile-farklar%C4%B1-4c6f19ddbc6c
- https://blogmodu.com/rest-api-nedir/
- https://denizirgin.com/rest-ve-restful-web-servis-kavram%C4%B1-30bc4400b9e0

RESİMLER:
- https://clevertechie.com/img/main/REST-representational-state-transfer.png
- https://clevertechie.com/img/main/rest-api-restful-web-services.png


# PHP'de ORTAK DEĞİŞKEN KULLANIMI ÖNERİSİ
```
<?php
	error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
	$dbServer = 'localhost';
	$dbUsername = 'root';
	$dbPassword = 'root';
	$dbDatabase = 'rentalmanagement';
	$adminConfig = array(
		'adminUsername' => "admin",
		'adminPassword' => "02d62574863469f4f1ef99d8fc453a31",
		'smtp_server' => "",
		'smtp_encryption' => "",
		'smtp_port' => "25",
		'smtp_user' => "",
		'smtp_pass' => ""
	);
```




# API Nedir? -- Bu sayfalardan derlenip hazırlanacak
- https://sosyalmedya.co/api-nedir/
- https://blog.koddit.com/yazilim/api-nedir-ne-ise-yarar-orneklerle-inceleyelim/

Resimler için: 
- https://sosyalmedya.co/api-nedir/
- https://4.bp.blogspot.com/-7DLByI2_wgo/WkUVweSxIoI/AAAAAAAAUvo/WNy2KEqGFMEF3efx3AR_gp25D9uBWZ0JQCLcBGAs/s1600/apis.png

Video:
- https://www.youtube.com/watch?v=s7wmiS2mSXY  (Harika!)









# Tanımlar, Açıklamalar

**İşletim Sistemi Nedir?**
- İşletim sisteminin görevi temel olarak donanım (ve diğer sistem kaynakları) ile bilgisayarda çalışan ve bu kaynakları talep eden program (veya processler) arasında ilişki kurmak ve kaynak yönetimini kontrol etmektir.

KURULUM BAŞLIĞINA EKLENECEK: mysql_secure_installation

**Doğru Parola Seçiminin Önemi**
https://wpengine.com/unmasked/ Okuduğum en zengin içerikli parola kullanım analizi yazısı. Özellikle global markaların üst düzey yöneticilerinin seçtiği parolalar firmaların bilgi güvenliği farkındalık seviyelerini anlatma/göstermesi açısından ibretlik. Başka bir açıdan bakıldığında, ne kadar zorlasak da güçlü parola kullanımı önerisi insanoğlunun doğasına aykırı bir öneri gibi duruyor.

**TELNET**
Telnet, Internet ağı üzerindeki çok kullanıcılı bir makineye uzaktaki başka bir makineden bağlanmak için geliştirilen bir TCP/IP protokolü ve bu işi yapan programlara verilen genel isimdir.
```
telnet localhost 80
GET /s.php HTTP/1.1
HOST: localhost

ENTER,ENTER
```

**Link için DOWNLOAD özelliği**
- The download attribute, when used on an anchor tag, will tell a browser to directly download the linked resource, rather than navigate to it. Here's how to put it into practice: 
- *download* özelliği bağlantı etiketi üzerinde kullanıldığında, indirme özelliği bir tarayıcıya yönlendirmek yerine doğrudan bağlı kaynağı indirmesini söyleyecektir. İşte uygulamaya koymanın yolu:
<a href="/data_2019.csv" download="2019 Data (CSV)"> Download data </a>

# Bilişim OkurYazarlığı
- http://www.haber7.com/teknoloji/haber/976055-bilisim-okuyazari-misiniz-test-edin
- https://ogretimveteknoloji.wordpress.com/tag/bilgisayar-okuryazarligi/
- https://www.sunipeyk.com/bilisim-okuryazarligi-temel-becerileri/
- http://sanalnotlarim.blogspot.com/2013/12/okuryazarlk-kavramlar.html

# PHP Error Reporting
- error_reporting = E_ALL & ~E_WARNING  & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED
- error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
- // Turn off all error reporting
- error_reporting(0);
- https://stackoverflow.com/questions/1987579/remove-warning-messages-in-php
- You can put an @ in front of your function call to suppress all error messages.
- @yourFunctionHere();

# MySQL Replication
## MASTER SUNUCUDA MY.INI İÇİNDE YAPILACAK DEĞİŞİKLİKLER
```
log-bin = mysql-bin
server-id = 1
#binlog-do-db=test         ---> Sadece bu database'i replike eder
#binlog-ignore-db=otokoc   ---> Bu database hariç tüm database'leri replike eder.
```

## MASTER SUNUCUSUNDA YUKARIDAKİ AYARLAR SONRASINDA YAPILACAK İŞLEMLER
```
Sunucuyu restart et ve aşağıdaki SQL'leri çalıştır:
GRANT REPLICATION SLAVE ON *.* TO 'slave_user'@'%' IDENTIFIED BY 'sifreniz';
FLUSH PRIVILEGES;
USE testdb;
FLUSH TABLES WITH READ LOCK;
SHOW MASTER STATUS;

Show master status dediğiniz zaman replike edeceğiniz db’nin durumunu gösteren, aşağıdakine benzer bir çıktı almanız gerekir;
+------------------+----------+---------------+------------------+
| File             | Position | Binlog_Do_DB  | Binlog_Ignore_DB |
+------------------+----------+---------------+------------------+
| mysql-bin.000002 |      351 | testdb,testdb |                  |
+------------------+----------+---------------+------------------+
1 row in set (0.00 sec)
```

## SLAVE SUNUCUDA MY.INI İÇİNDE YAPILACAK DEĞİŞİKLİKLER
server-id=2


## SLAVE SUNUCUSUNDA YUKARIDAKİ AYARLAR SONRASINDA YAPILACAK İŞLEMLER
Sunucuyu restart et
```
SLAVE STOP;

CHANGE MASTER TO
        MASTER_HOST='master_mysqlin_ipsi',
        MASTER_USER='slave_user',
        MASTER_PASSWORD='sifreniz',
        MASTER_LOG_FILE='mysql-bin.000002',
        MASTER_LOG_POS=351;
       
SLAVE START;
```




# Linux
- Linux Komut Satırında Text İşleme https://github.com/learnbyexample/Command-line-text-processing
- Linux Komut Satırı https://github.com/learnbyexample/Linux_command_line
- https://www.tecmint.com/best-linux-desktop-environments/





# Mac (Bunlardan bahsedelim)
- MacPort
- Brew





# Vagrant -- Bu sayfalardan derlenip hazırlanacak
- https://www.vagrantup.com/
- http://uralfrkn.blogspot.com/2014/10/vagrant-komut-satr.html
- https://kubilay.io/vagrant-ile-lemp-gelistirme-ortami/
- https://mehmetseven.net/vagrant-nedir-1/
- https://mehmetseven.net/vagrant-terminolojisi2/
- https://mehmetseven.net/vagrant-ile-calismaya-baslamak/
- https://mehmetseven.net/vagrant-kurulumu/
- https://enesergun.net/vagrant-komutlari.html
- http://ismail-arilik-ana-uni-baum.blogspot.com/2015/01/vagrant.html



# Görseller
- 0 vs Null: https://pbs.twimg.com/media/D3EXyb7WoAASPpX.jpg:large
- SAYFA TASARIMI https://www.dealfuel.com/wp-content/uploads/2017/03/ssc-slide-4-o.jpg
- SAYFA TASARIMI https://diagramzone.net/wp-content/uploads/2018/08/example-eric-miller-ux-site-maps-rhpinterestcom-uxkits-Simple-Website-Flowchart-mobile-flowchart-example-eric-miller-ux-site.jpg


# Program Önerileri
* sudo apt-get install guake -y
* SublimeMerge
* PostMan
* Visual Studio Code https://code.visualstudio.com


# Eğitimde Kullanılan Online Araçlar
- [Wihiteboard](https://witeboard.com/)
- [Kahoot](https://kahoot.it/)
- [Tarayıcıdan Erişilebilen Açık Portlar](https://wybiral.github.io/localtoast/)

# Youtube Önerilen İçerikler
- [PHP ile Alışveriş Sepeti Yapımı](https://www.youtube.com/playlist?list=PL_f2F0Oyaj48lnRXG2U54imJsnZIuCUFy)
- [PHP](https://www.youtube.com/playlist?list=PL_f2F0Oyaj4-K_h0rC656Why8nJPF_dIO)
- [MySQL](https://www.youtube.com/playlist?list=PL_f2F0Oyaj4-6vvPSJssG4Jp6UqCTmWSz)
- [HTML](https://www.youtube.com/playlist?list=PL_f2F0Oyaj4-Qro_C0ixzMWpCiogfXxKE)
- [CSS](https://www.youtube.com/playlist?list=PL_f2F0Oyaj4-RyFL8mkfjYjEVCmJhWDQ3)
- [jQUERY](https://www.youtube.com/playlist?list=PL_f2F0Oyaj4-Jt6F-dyl6LEHNVaudH3rk)
- [KARIŞIK KONULAR](https://www.youtube.com/playlist?list=PL_f2F0Oyaj49gbyMnUfvVTWnZrjLrAvGv)
- [PHP Mailer Kullanımı](https://www.youtube.com/playlist?list=PL_f2F0Oyaj49RrSAH4H-B8nulrzexAqAg)
- [UDEMY / Tayfun Erbilen PHP eğitim serisi](https://www.udemy.com/php-egitim-seti/l)
- [Socratica'dan harika SQL Eğitimi (İngilizce)](https://www.youtube.com/playlist?list=PLi01XoE8jYojRqM4qGBF1U90Ee1Ecb5tt)
- [Dropzone.js kullanarak sürükle bırak ile ajax dosya yükleme](https://www.youtube.com/playlist?list=PLTwspLzO8aqiunFd74Z3H6jReRALWnfOG)
- [Bilgisayar Ağları / 46 Video / Türkçe](https://www.youtube.com/channel/UCuihRV0TTWDj2xWdEU1ZuhQ/playlists)
- [REST ve RESTful:](https://www.youtube.com/watch?v=FlkGlHZZLTQ)
- [HTTP Protokolü:](https://www.youtube.com/watch?v=JbFV-fJGetc)
- [HTTP Header ve HTTP Body Nedir?](https://www.youtube.com/watch?v=2xdgtsvUIow)
- [HTTP mesaj yapısı; WireShark ile HTTP paketlerini yakalama](https://www.youtube.com/watch?v=d1mOKBrhOY8)
- [Java Script, AJAX, jQuery, Angular.js, Node.js ve Java Scripting Geleceği](https://www.youtube.com/watch?v=td38MEpiOgI&list=LLc3TS7TD5LAun3jXiA_VDUQ&index=200)
- [POP3 vs IMAP](https://www.youtube.com/watch?v=SBaARws0hy4)
- [Bilgisayar terimlerinin animasyonlu anlatımı](https://www.youtube.com/channel/UCJQJ4GjTiq5lmn8czf8oo0Q/videos)



# CSS Kütüphane Önerileri
- [CSS DataBase](http://cssdb.co/)
- [Image Hover](http://imagehover.io/)
- [Animate.css](https://daneden.github.io/animate.css/)
- [Loading.io](https://loading.io/)
- [Hint.css](https://kushagragour.in/lab/hint/)
- [Minicss.org](https://minicss.org/)
- [fontawesome.com](https://fontawesome.com/)
- [www.designyourway](https://www.designyourway.net/drb/the-most-popular-css-libraries-that-are-on-github/)
- [medium.com](https://medium.com/@bretcameron/parallax-images-sticky-footers-and-more-8-useful-css-tricks-eef12418f676)


# JS
* Ödeme yapmayan müşterilerinizin web sitelerini her gün biraz daha transparan yapan proje: https://github.com/kleampa/not-paid
* JSON verilerinde, nerede, sınırla, seç, sırala gibi yöntemler kullanmanıza izin verir: https://github.com/aykutkardas/Json-Function


# Git
* Self Hosted Git Service: https://gogs.io/
* Self Hosted Git Service: https://gitea.io/
* GİT Workflow Strategys 
* Open Source Proje Desteği Adımları Eğitimi https://github.com/firstcontributions/first-contributions/blob/master/translations/README.tr.md
* Git Stash İçin Resim https://medium.com/@Galoomba/all-you-need-to-know-about-git-p-1-ac2f29e8ee93
* Git Stash İçin Resim https://cdn-images-1.medium.com/max/800/1*diRLm1S5hkVoh5qeArND0Q.png


# Sublime Eklentileri
* https://packagecontrol.io/browse
* https://www.slant.co/topics/197/~best-plugins-for-sublime-text

# MarkDown Editörleri
* https://stackedit.io/
* https://wereturtle.github.io/ghostwriter/
* https://joplinapp.org/
* https://inkdrop.app/
* https://www.mweb.im/

------------------------------------------------
------------------------------------------------
------------------------------------------------
------------------------------------------------
------------------------------------------------
------------------------------------------------
------------------------------------------------

# PHP Ders Programı
```
# PHP ile WEB Programlamaya Giriş

### HTML
Giriş ve Temel Kod Yapısı
Yorum Satırlarının Kullanımı
<h1>--<h6> Başlık Etiketleri
<p> Paragraf Etiketi
<br> Satır Atlatma Boşluk Bırakma Etiketi
<hr> Çizgi Çizme Etiketi
<b> Bold Kalınlaştırma Etiketi
<i> İtalic, Eğik Yazı Etiketi
<sub>, <sup> Alt ve Üst İndis Etiketleri
<ins> Metnin Altını Çizme Etiketi
<del> / <s> Metnin Üzerini Çizme Etiketleri
<pre> Pre Etiketi
<table> Tablo Oluşturma İşlemleri
<ul>, <ol>, <dl>, <li> Listeleme ve Tanımlama Etiketleri
<img> Etiketi Resimlerle Çalışma
Placeholder Kullanımı ve Hazır Tasarım Resimleri Çekme
Form ve İnput İşlemleri - Form Oluşturma ve Gönderim Methodları
<a> Link Verme Etiketi ve sayfa içi link (anchor)

### HTML FORM Etiketleri
<form>
<input>
<select>
<button>
<radio>
<checkbox>
<file>
<textarea>

### Çalışma Ortamının Hazırlanması
PHP Nedir?
Terminal komutları ile çalışma ortamı kurulumu (Ubuntu)
MAMP Kurulumu (Mac Os X için)
MAMP Kurulumu (Windows için)
Xampp Kurulumu ve Host Ayarı ( Mac )
Xampp Kurulumu ve Host Ayarı ( Windows )
Xampp Kurulumu ve Host Ayarı ( Linux )
Wampp Kurulumu (Windows için)
Editör Seçimi (SublimeText, Atom)

### Dil Başvuru Kılavuzu
http://php.net/manual/tr/langref.php

### PHP'ye Giriş 
PHP Nedir? Neden PHP Kullanmalıyız?
Web geliştiricileri için temel ağ bilgisi (HTTP Yaşam Döngüsü)
echo - print Ekrana Yazı Yazmak
Tek Tırnak ve Çift Tırnak Arasında ki Farklar php.net/manual/tr/language.types.string.php
PHP'ye Başlangıç, Yazım Kuralları (Syntax), Açıklama Satırları 
PHP'de Değişkenlerin Kullanımı
PHP'de Veri Türleri http://php.net/manual/tr/language.types.php
PHP'de Sabit Değişkenler

### PHP'de Operatörler
Aritmetik Operatörler
Atama Operatörleri
Artırma ve Azaltma Operatörleri
Karşılaştırma Operatörleri
Mantıksal Operatörler

### Değişkenler
Değişkenlere Giriş
Değişkenleri Birleştirme
Değişkenlerde Toplama, Çıkarma, Bölme ve Çarpma Işlemi
Değişken Verip Tipi Işlemleri ve Yeni Değer Atama

### Tür Dönüşümleri
Veri Tiplerinin Başka Bir Veri Tipine Dönüştürülmesi 
(int), (integer) (bool), (boolean) (float), (double), (real) (string) (array) (object) (unset)
Veri Tiplerinin Kontrolü
is_int, is_string gettype empty is_null isset

### Çıktılama
Kaçış Karakterleri (Sihirli Karakterler)

### Sabitler Ve Yorum Satırı
Yorum Satırları

### Diziler
Dizilerin Tanımı ve Dizi Oluşturma
Dizileri Ekrana Bastırma Işlemleri
Dizi Eleman Sayısını Bulma ve Diziden Eleman Silme
PHP'de Dizi Oluşturmak
PHP'de İç İçe Dizi Oluşturmak
PHP'de Sabit Değişkenlerde Dizilerin Kullanımı
list, array_key_exists, array_keys ve array_values
array_pop, array_rand, array_count_values, array_shift array_search, in_array
array_sum, array_product, array_shuffle, array_chunk, array_combine
array_fill, array_fill_keys, array_flip, array_slice, array_unique
sizeof, array_push, array_unshift, array_map, sort, array_reverse, array_merge, extract

### String Fonksiyonları
heredoc ve nowdoc  http://php.net/manual/tr/language.types.string.php
explode, implode, ltrim, rtrim, strlen, strrev, strstr, nl2br
substr, trim, strtolower, strtoupper, str_replace
parse_str, ucfirst, ucwords, md5, sha1
Multibyte nedir? Encoding Nedir? UTF8 vs windows-1254

### Denetim Yapıları
IF, ELSE IF ve ELSE Kullanımı
Switch - case Kullanımı
While ve For Döngüsü
Include - Require
Ternary (Üçlü) Operatör Kullanımı (Shorthand if)
try - catch Bloğu

### PHP'de Döngüler
For Döngüsü
Foreach Döngüsü
While Döngüsü
Do-While Döngüsü
break ve continue değimleri

### Fonksiyonlar
Fonksiyonda Sınırsız Parametre Göndermek
Fonksiyonda Static Değişken Kullanımı
PHP7 Parametre ve Return Değişken Türü Dayatması (  :int )
Fonksiyon Nedir?
Fonksiyon Oluşturma
Fonksiyon Oluşturma Toplama İşlemi
Return ile Değer Döndürme
Fonksiyonlarda Global Değişken Kullanımı
Fonksiyonlarda Varsayılan Değer
Kendin Tekrar Eden Recursive Fonksiyon
Fonksiyon Varmı - Yokmu Bulma  function_exists()
Tüm Fonksiyonları Listeleme  get_defined_functions()

### Dosya ve Dizin İşlemleri
Dosya, Dizin Varlığının Kontrolü ve Dizin Oluşturup Kaldırma işlemi
Dosya Oluşturma, Dosyaya Içerik Girme ve Dosya Silme
Dizin Içerisindeki Verilerin Listelenmesi
Dosya Oluşturmak/Okumak/Silmek
Dizin Oluşturmak/Silmek
Dizin/Dosya Olup Olmadığını Kontrol Etmek
Dosya ve Dizinlerde CHMOD Ayarını Belirlemek
Dizindeki Dosyaları Listelemek
Dosya ve Dizin Adlarını Yeniden Adlandırmak / Taşımak

### Ön Tanımlı Değişkenler (Super Globals)
$_GET, $_POST, $_SERVER, $_REQUEST, $_SESSION, $_COOKIE

### Oturum İşlemleri
Oturum (Session) Başlatmak/Kullanmak/Silmek
Çerez (Cookie) Oluşturmak/Kullanmak/Silmek

### Tarih ve Saat
Strtotime Fonksiyonu ile İleri Geri İşlemleri
Tarih Fonksiyonları - date(), getdate(), time()
Yerel Zamanı (Saat Dilimi) Ayarlamak - Ön tanımlı Zaman Dilimini Ayarlamak (Türkçe Tarih)

### Form İşlemleri
Get ve Post Türündeki Verileri Alma
Selecbox ve Textarea'dan Gelen Verileri Alma
Checkbox ve Radio inputlardan Veri Alma
File Türündeki İnputtan Dosya Bilgilerini Alma
POST ile Değer Göndermek / Almak
GET ile Değer Göndermek / Almak
REQUEST ile Değer Göndermek / Almak
PHP ile Aynı Sayfada Birden Fazla Form İşlemi
HEADER komutu ile yönlendirme

### PHP'de Dosya / Resim Yükleme
Örnek formun oluşturulması
PHP ile Yüklenen Dosyaların Bilgilerini Almak ($_FILES)
PHP ile Dosyası Yüklemek
PHP'de Çoklu Dosya Yüklemek

### Veri Değişim Formatları
JSON Nedir?
XML Nedir?
PHP ve JSON Kullanımı
file_get_contents / file_put_contents Fonksiyonu Kullanımı
json_encode ile JSON Formatında Veri Oluşturma
json_decode ile JSON Formatındaki Veriyi Parçalama

### Faydalı Fonksiyonlar
str_replace, rand, die
strpos, trim, floor, ceil, round, abs
eval, str_word_count, basename, glob
sort, asort, rsort, arsort, ksort ve krsort
cal_days_in_month ile Ayın Kaç Gün Olduğunu Bulma

### PHP AJAX	
Ajax ve jQuery Nedir?
jQuery'de Ajax Metodları ($.ajax, $.post, $.get)
PHP/Ajax İl-İlçe Uygulaması
PHP AJAX Değerlendirme ve Dahil Etme
PHP AJAX Veritabanına Veri Ekleme
PHP AJAX Veri Çekme
PHP AJAX Anlık Veri Çekme
PHP AJAX JSON Türündeki İşlemler
PHP AJAX DATATABLE

# Veritabanı İşlemleri

### MySQL

SQL ve MySQL Nedir? Farkları Nelerdir?
Veritabanı Vedir ? Yeni Bir Veritabanı Oluşturma ve Bağlanma
Yeni Bir Tablo Oluşturma ve Veri Giriş İşlemi
Tablodaki Verileri Güncelleme İşlemi
Tablodaki Verileri Silme İşlemi
Tekli ve Çoklu Veri Çekme İşlemi
Tablodaki Verilerin Toplam Sayısını Öğrenme
Veritabanından Çekilen Verileri Ekrana Yazdırma İşlemi
Veritabanı (DATABASE) Oluşturmak / Silmek / Listelemek / Seçmek
Tablo (TABLE) Oluşturmak / Listelemek / Silmek
Sütun (COLUMN) Oluşturmak / Listelemek / Silmek
Tablo ve Sütunları Detaylı Listelemek
MySQL Veri Türleri
MySQL Rezerve Edilmiş Kelimelerin Kullanımı
CRUD Nedir?
Veri Ekleme (INSERT) İşlemi
Veri Çekme (SELECT) İşlemi
Veri Güncelleme (UPDATE) İşlemi
Veri Silme (DELETE) İşlemi
WHERE Cümleciği
Verilerde Sıralama (ORDER BY)
Verilerde Limit (LIMIT)
Verilerde Gruplama (GROUP BY) ve HAVING Kullanımı
Verilerde Arama (LIKE)
Verilerde Arama (IN)
Verilerde Arama (FIND_IN_SET)
İki Değer Arasındakileri Seçmek (BETWEEN)
İlişkili Tablolar (JOIN)
COUNT(), SUM(), MIN(), MAX() Fonksiyonları
Bir .SQL Dosyasını Sunucuya Yüklemek
Foreign Key nedir
MySQL için adminer kullanımı (adminer.org)
MySQL için phpmyadmin kullanımı (phpmyadmin.net)
MySQL'de sorgu optimizasyonu
MySQL'de backup/restore ve MySQL replication

### Sınıflar /  Nesne Yönelimli Programlama OOO
(OOP) Object Oriented Programming http://php.net/manual/tr/language.oop5.php
Yeni Bir Sınıf Tanımlama
public, private, protected Terimleri ve Method Tanımlama
Metotlar İçerisine Parametre Gönderme
Set ve Get Methodları
Miras Alma İşlemleri ( Extends ) ve inheritance
Methodlar İçerisinden Veri Döndürme
Kurucular ( construct ) ve Yıkıcılar ( destruct )
Self ve Parent Kullanımı
Namespace Kullanımı
Zincirleme Method Kullanımı
Final Deyimi
Static Deyimi
(Const) Sabit Değişkenler
Soyutlama (Abstraction)
Nesne Arayüzleri (Interface)


# BONUS

### TEMEL GİT BİLGİSİ
Git Nedir?
GitHub Nedir?
Birlikte Çalışma Felsefesi
Proje açma
Dosya ekleme
Commit Etme
Uzak depoya gönderme/indirme
git help -a ve git help -g Komutları
git help everyday ve git help tutorial  Komutları




### Karışık Pakt - 1
Temel HTML, CSS, JS, jQuery, Bootstrap eğitimi
SweetAlert
stackoverflow.com sitesinden PHP, MySQL, HTML, CSS ve JQuery etiketlerindeki "en çok okunan sorular" ve "en çok cevaplanan sorular" başlıklarında yer alan ilk 10 soru ve cevabının hızlı özeti
Cache (önbellekleme) mantığına giriş / text dosya ile basit cache uygulaması
Temel Linux terminal bilgisi ile DigitalOcean'dan sunucu kiralama ve LAMP kurulumu
isimtescil.com üzerinden alan adı alma ve kendi sitemizi yapma
WordPress'e giriş, kurulum, tema yükleme
CK Editör Entegrasyonu
MarkDown Editor Entegrasyonu
Geliştirme ortamı kurulumu için VirtualBox, Vagrant kurulumu ve scotch/box
OWASP Top 10 için hızlı özet

### PHP'de Hata Yönetimi
php.ini Nedir? Ne işe yarar?
Hata Denetim İşleçleri ( @ )
try - catch Bloğu
PHP'de Hata Raporlama (error_reporting)
PHP'de Özel Hata İşleyicisi (Custom Error Handler)
PHP'de Ölümcül Hataları (Fatal Errors) Yakalamak

### Regular Expressions (Düzenli İfadeler)
RegEx Desenleri ve Modifier'lar
PHP ve RegEx, preg_match()

### PHP'de Güvenlik
Başlamadan Önce
Dosya ve Dizin Güvenliği
XSS (Cross-site Scripting) Açığı
Şifreleme (Hashing)
httpOnly Cookie
CSRF (Cross-site Request Forgery) Açığı
SQL Injection Açığı

### PHP'de cURL (Bot Yapımı)
Curl'e Giriş
Curl ile Referer Bilgisi Göndermek
Curl ile Tarayıcı Bilgisi (User Agent) Göndermek
Curl ile Post İşlemleri
Curl ile Dosya Yükleme İşlemi
Curl ile Üst Bilgileri (Headers) Kullanmak
Curl ile Dosya İndirme İşlemi
Curl'de Hataları Yakalamak
Curl ile Cookie İşlemleri

### PHP Güvenlik İşlemleri
Gelen Sayısal ve String Türündeki Verilerin Temizlenmesi
PDO Güzelliği ve is_numeric Kullanımı
filter_var ile Fltreleme İşlemleri

### PHP'de Veritabanı İşlemleri (PDO)
PDO ile Veritabanı Bağlantısı Oluşturmak
PDO ile Veri Ekleme (INSERT) İşlemi
PDO ile Veri Listeleme (SELECT) İşlemi
PDO ile Veri Güncelleme (UPDATE) İşlemi
PDO ile Veri Silme (DELETE) İşlemi
PDO ile JOIN Kullanımı
PDO ile LIKE Kullanımı
PDO ile BETWEEN Kullanımı
PDO ile FIND_IN_SET() Kullanımı
PDO ile GROUP BY ve GROUP_CONCAT() Kullanımı
PDO ile Son Eklenen Verinin ID'sini Almak

# ÖRNEK PROJELER

### ÜYELİK SİSTEMİ
Genel Bakış, Dosya yapısı ve Veritabanının Oluşturulması
Bağlantı Dosyaları, Session Manager ve Kayıt Sayfası
Kullanıcı Kayıt Yapma İşlemi
Helper Sınıfı Oluşturma
Kullanıcı Varlığının Kontrolü
Giriş İşlemi ve Beni Hatırla Yapımı
Çıkış İşlemi ve Bilgilerin Ekrana Bastırılması
Profil ve Şifre Düzenleme Yapımı
Profil Fotoğrafı Yükleme İşlemi
Şifremi Unuttum Yapımı
Kullanıcı Haraketlerini Loglama
Online Üyeler listeleme
Kullanıcı Detay Sayfası

### ÖRNEK UYGULAMA PROJESİ -- PHP İle Üyeler Arası Mesajlaşma Bölümü Yapımı
Tabloların Oluşturulması, Bağlantı Kodları, Mesaj Gönderme ve Listeleme Sayfası
Mesaj Detay Sayfası ve Özel Mesajlaşma Sayfası

### ÖRNEK UYGULAMA PROJESİ -- PHP İle Sık Kullanılan Uygulamalar
PHP ile Ziyaretçi Defteri Yapımı
Blog veya Ürünlerinize Oylama Sistemi Yapımı
Session ve Array Kullanarak Çoklu Dil Eklentisi
Session Kullanarak Alışveriş Sepeti Yapımı
Sayfalama Yapımı
EXCEL Oluşturma
PDF Oluşturma
Dosyaları ve Dizinleri Zipleme
Bir Sitedeki Belirtilen Verileri Alma

### ÖRNEK UYGULAMA PROJESİ -- Link Kısaltma Uygulaması
Genel Bakış ve Dosya Yapısını Oluşturma
Anasayfanın Oluşturulması
Bağlantı Kodlarının Hazırlanması
Veri Ekleme İşlemi Yapılması
Veri Kontrol İşleminin Yapılması
Yönlendirme İşlemlerinin Ayarlanması
.htaccess Dosyasının Ayarlanması
Uygulama sonu

### ÖRNEK UYGULAMA PROJESİ -- PHP ile Müşteri Takip Uygulaması
Tema İndir ve Dosya Yapısı Oluşturma
Veritabanı Ayarlaması
HTML Sayfaları PHP Sayfasına Ayarlama
SessionManager Kodlaması
Bağlantı Kodlarını Oluşturma
Giriş Bölümünü Oluşturma
Müşteri Ekleme / Listeleme Bölümü
Müşteri Düzenle ve Silme Bölümü
Müşteriye Ait işlem / Ekleme / Silme / Düzenleme / Listeleme
İşlem Raporlama Yapımı
Yapılan İşlemleri Loglama
Anasayfada Yapılan İşlemleri Gösterme
Çıkış Bölümünü Oluşturma


# FAYDALI LİNKLER

Richard Stallman - Özgür Yazılım HQ Türkçe Altyazılı (14 Dakika)
https://www.youtube.com/watch?v=_St4bC9fcfA

PHP Usulüne Uygun
https://kulekci.net/php-the-right-way/

Roadmap to becoming a web developer in 2018
https://github.com/kamranahmedse/developer-roadmap

The 2018 Web Developer Roadmap
https://codeburst.io/the-2018-web-developer-roadmap-826b1b806e8d
https://medium.freecodecamp.org/a-roadmap-to-becoming-a-web-developer-in-2017-b6ac3dddd0cf

Web Architecture 101
https://engineering.videoblocks.com/web-architecture-101-a3224e126947

Web Application Architectures Compared
http://g4tp.com/webarch/

Web Architectures
https://is.gd/WoFVlY

Yeni Yazılımcılara Tavsiyeler
https://denizkilinc.com/2013/10/10/yazilima-ve-programlamaya-yeni-baslayanlar-icin-tavsiyeler/

Algoritma Soruları
http://algoritma-programlama.blogspot.com/search/label/Algoritma


İL - İLÇE Listesi
https://www.nvi.gov.tr/hakkimizda/projeler/mernis/il-ilce-kod-tablosu
```




