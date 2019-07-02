
# PHP ve MySQL ile Web Programlamaya Giriş

## AMAÇ
Bu proje, ilk olarak 9-12 Şubat 2019 tarihleri arasında ORDU'da yapılacak olan **Mustafa Akgül Özgür Yazılım Kış Kampı** çerçevesindeki *PHP ve MySQL ile Web Programlamaya Giriş* eğitimi için kaynak olması amacıyla hazırlanmıştır.

Daha sonra ise, **PHP ve MySQL ile Web Programlamaya Giriş** eğitimleri için bir başvuru kaynağı olarak kullanılabilmesi amacıyla geliştirilmeye devam edilmiştir.

- Geliştirilmesine katkıda bulunmak isterseniz [Yapılacak İşler](./konular/yapilacak.isler.md) sayfamıza bakabilirsiniz.
- Bu projede yer almasını istediğiniz konular ve önerileriniz için ise  [Öneriler](./konular/oneriler.md) sayfamızdan bize ulaşabilirsiniz.


# İÇİNDEKİLER

## Giriş
- [Giriş ve Temel Konular](./konular/giris.konulari.md)
- [Algoritma](./konular/algoritma.md)

## Apache+PHP+MySQL Kurulumu
PHP Çalışabilmek için, Apache+MySQL+PHP yazılımlarının bilgisayara kurulumu gerekmete. Ancak, bu konuda üçü bir arada hazır yazılımlar mevcut ve yoğun biçimde kullanılmaktadır.

Adı | Açıklaması
----| -----------
LAMP|Linux için Apache+MySQL+PHP anlamındadır.
WAMP|Windows için Apache+MySQL+PHP anlamındadır.
MAMP|MacOS için Apache+MySQL+PHP anlamındadır. MAMP'ın Windows sürümü de vardır.
XAMP|Linux-Macos-Window işletim sistemlerinin hepsi için Apache+MySQL+PHP anlamındadır.

## Kurulum Bilgileri
- [Windows İçin Kurulum](./konular/kurulum.menu.windows.md)
- [Linux İçin Kurulum](./konular/kurulum.menu.linux.md)

# Giriş Konuları

## GİT
- [Git, Github ve git komutları](./konular/komutlar.git.md)
- [Atom ve Git kullanımı](./konular/kullanim.atom.git.md) TODO:GÜNCELLENMELİ
- [5 Dakikada GİT](https://learnxinyminutes.com/docs/tr-tr/git-tr/)
- [5 Dakikada MarkDown](https://learnxinyminutes.com/docs/tr-tr/markdown-tr/)

## LINUX
- [Temel Linux Koutları](./konular/linux.temel.komutlar.md)


## CSS
- [Css Nedir ?](./konular/ornek.css.md)
- [Css Etiketleri](./konular/etiketler.css.md)
- [5 Dakikada CSS](https://learnxinyminutes.com/docs/tr-tr/css-tr/)
- [CSS Seçicileri](./konular/seciciler.css.md)


## Bootstrap
- [Bootstrap HTML Site Yapımı](https://www.youtube.com/watch?v=kLby3L7u-NQ) (Video)
- [Bootstrap Grid Yapısı](./konular/bootstrap.grid.md)
- [Bootstrap Örnekleri](./konular/bootstrap.ornekleri.md)


## jQuery
- jQuery ve Ajax ve JSON (Yapılacak)
- [5 Dakikada jQuery](https://learnxinyminutes.com/docs/jquery/)


## Veritabanı
- [İlişkisel Veritabanı ve MySQL'e Giriş](./konular/iliskisel.veritabani.md)  
- [5 Dakikada SQL](https://learnxinyminutes.com/docs/sql/)  


## PHP'ye Giriş
- [PHP'ye Giriş](./konular/giris.konulari.php.md) TODO: Başlıklar anlaşılabilir biçimde sunulmalı
- [5 Dakikada PHP](https://learnxinyminutes.com/docs/tr-tr/php-tr/)
- [Popüler Komutlar](./konular/komutlar.populer.md) TODO: Her başlık ayrı sayfalara bölünebilir.


## MySQL'e Giriş
- [Mysql Komutları](./konular/giris.konulari.mysql.md)
- [Örnek Veritabanları](https://github.com/nuriakman/Ornek_Veri_Setleri)
- [MySQL String Komutları](./konular/komutlar.mysql.string.md)
- [MySQL Tarih Komutları](./konular/komutlar.mysql.tarih.md)
- [MySQL Functions](./konular/komutlar.mysql.all.md)


## PHP Komutları
- [Matematiksel Komutlar](./konular/komutlar.matematik.md)
- [String Komutları](./konular/komutlar.string.md)
- [Dizi Komutları](./konular/komutlar.diziler.md)
- [Multibyte Komutlar](./konular/komutlar.multibyte.md)
- [Dosya Sistemi Komutları](./konular/komutlar.dosyasistemi.md)
- [Oturum Komutları](./konular/komutlar.oturum.md)
- [Çıktı Tamponu Komutları](./konular/komutlar.ciktitamponu.md)
- [Tarih ve Zaman Komutları](./konular/komutlar.tarihzaman.md)


## PHP İleri Konuları
- [Composer Kullanımı](./konular/kullanim.composer.md)
- [PHP Sınıf Örneği](./konular/class.ornegi.md)
- [Veri Çekme](./konular/curl.ornegi.md)
- [Düzenli İfadeler](./konular/php.regex.md)

## php.ini ve my.ini Ayarları
- [PHP ayarları](./konular/ayarlar.php.ini.md)
- [MySQL ayarları](./konular/ayarlar.mysql.ini.md)


## Örnek PHP Uygulamaları
- [HTML Form Örneği](./konular/ornek.html.form.md) TODO: Bu dosya kayıp. Yenisi hazırlanacak
- [Örnek Fonksiyonlar](./konular/ornek.fonksiyonlar.md)
- [Örnek PHP Projeleri](./konular/php.ornekleri.md)


## Etüd İçin Örnekler
- [PHP ve Bootstrap Örneği](./etud/etud.01.bootstrap.php)

# Çeşitli Örnekler Projeler

## [SairlerTextDB:](https://github.com/nuriakman/SairlerTextDB)
 -  Şairler ve hayatlarının sunulmaya çalışıldığı proje tamamen metin dosyaları (txt dosyalar) kulanılarak hazırlandı. Kullanıcı adı ve parola ile giriş yapabildiğimiz bir de Yönetim Paneli var. Ekleme, düzeltme ve silme işlemlerini yapabiliyoruz.

## [SairlerMYSQL:](https://github.com/nuriakman/SairlerMySQL)
-  Şairler ve hayatlarının sunulmaya çalışıldığı projemizi MySQL ile  hazırladık. Kullanıcı adı ve parola ile giriş yapabildiğimiz bir de Yönetim Paneli var. Ekleme, düzeltme ve silme işlemlerini yapabiliyoruz.

## [TextAnaliz:](https://github.com/nuriakman/TextAnaliz)
- Örneğimizde bir konuşmadan aldığımız metni, kendi belirlediğimiz kurallarla anlamsız karakterleri silip, konuşmanın bir özetini çıkarttık. Konuşmanın konusunu bulduk.  

## [TextDosyadanSozluk:](https://github.com/nuriakman/TextDosyadanSozluk)
- Örneğimizde isimler ve anlamları olan bir dosya oluşturup verileri çektik. Kendi belirlediğimiz kurallarla isimleri, anlamlarını ve cinsiyetlerini ayırdık. Harfe göre isimleri listeledik. İsim arama bölümü yaptık.

## [SessionOrnegi:](https://github.com/nuriakman/SessionOrnegi)
- Örneğimizde oturum yönetimine örnek verdik. Session başlatıp, session sonlandırdık.Kullanıcının giriş yapmasını, yaptıktan sonra kontrol etmesini, sessionları silerek oturumu sonlandırmasını sağladık.

## [LYK2018phpsozluk:](https://github.com/nuriakman/lyk2018phpsozluk)
- Buradaki örneklerde Glob fonksiyonundan bahsettik. Dosyadaki verileri bölmekten bahsettik. İsimlerin anlamlarını ve cinsiyetlerini böldük. Kutuphane dosyası oluşturup fonksiyonları çağırdık. Seo çalışmasına örnek verdik.

## [SozlukMySQL:](https://github.com/nuriakman/SozlukMySQL)
- MySQL ile hazırlanmış isim sözlüğü uygulamasıdır. Yönetim paneli yoktur. Veritabanından alınan isimleri, anlamlarını ve cinsiyetlerini listeler. Harfe göre isimleri listeledik. İsim arama bölümü yaptık.

## [LYK2018php:](https://github.com/nuriakman/lyk2018php)
- Örneğimizde github üzerinden ortak bir çalışma yaptık. Konular öğrencilere dağıtıldı ve ortak bir şekilde çalışma yapıldı.

## [Include Örneği:](https://github.com/nuriakman/include_ornegi)
- Örneğimizde bootstrap bir temayı parçaladık.

## [LYK2018_Ornekler:](https://github.com/nuriakman/LYK2018_Ornekler)
- Bu depoda resim boyutlandırma, resime yazı yazma, text dosya düzenleme, text dosyaya veri ekleme, dosya yükleme çalışmaları yapıldı.

## [Teklif Formu:](https://github.com/nuriakman/teklif)
- Bu proje ile https://armut.com/ sitesindekine benzer bir form oluşturma çalışmasına başladık. Proje yarım bırakılmıştır.

## [Hava Durumu Türkiye:](https://github.com/nuriakman/turkeyweather-api)
- Türkiye il ve ilçeleri güncel hava durumlarını Meteoroloji Genel Müdürlüğü Sitesinden getirir. API, CURL ve JSON örneğidir.

# Çeşitli Konular
- [WordPress Kurulumu](./konular/cesitli.wordpress.md)
- [Çeşitli Konular](./konular/cesitli.konular.md)
- [Faydalı Videolar](./konular/faydali.videolar.md)
- [Faydalı Linkler](./konular/faydali.linkler.md)

# Blog Yazıları
- [Özgür Yazılım Yaz ve Kış Kampları Blog Yazıları](./konular/blog.yazilari.md)

> # YAPMANIZ GEREKEN TEK ŞEY: BAŞLAMAK!
