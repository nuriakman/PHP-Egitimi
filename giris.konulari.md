# Hoşgeldiniz

## İnternetin  Tarihi
İnternet'in tarihi,  1950'lerde bilgisayarların gelişmesi ile başlar. Paket ağlarının ilk tasarımları ABD, İngiltere ve Fransa'daki çeşitli laboratuvarlarda şekillenmiştir.

60'ların başında ABD Savunma Bakanlığı tarafından desteklenen ağ çalışmalarından birisi, İnternet Protokolü'nü (IP) kullanan ilk ağ olan ARPANET'tir. ARPANET üzerinden ilk mesaj, Los Angeles'taki Kaliforniya Üniversitesi (UCLA)'daki Profesör Leonard Kleinrock'un laboratuvarından, Stanford Araştırma Enstitüsü(ISR)'de bulunan bir bilgisayara gönderildi.

1960'ların sonlarında ve 1970'lerin başlarında birçok haberleşme protokolü kullanılarak ARPANET, NPL network , CYCLADES, Merit Network, Tymnet ve Telenet gibi paket-anahtarlamalı ağlar geliştirildi. Donald Davies, İngiltere Ulusal Fizik Laboratuvarı'nda dünyada kendi sınıfında bir ilk olan paket-anahtarlamalı bir ağ kurarak, paket anahtarlamalı ağ teorisini pratiğe dönüştüren ilk kişi oldu.Bu çalışma İngiltere'de kendisinden sonraki 20 yıl boyunca yapılacak çalışmalar için bir mihenk taşı oldu.  

## Hyper Text Transfer Protocol - HTTP
İnternet araçlarıyla bilginin sunucudan kullanıcıya ne şekilde ve nasıl aktarılacağını belirten bir araçtır.

![alt text](img/giris_konulari/http.jpg "HTTP")

## World Wide Web - WWW
World Wide Web belgeler ve diğer web kaynaklarının  URL'ler tarafından tanımlandığı, köprü metin bağlantılarıyla birbirine bağlandığı ve internet
üzerinden erişilebileceği bir bilgi alanıdır.
World Wide Web internet üzerinden çok sayıda belge, bilgi, dokümanlara ulaşmak için kullanılan bir internet hizmetidir.

## İstemci Nedir ?
İstemci dediğimiz şey, sunucudan istekte bulunan, sunucudaki verileri kullanabilen yapılardır. Örnek olarak bir web sayfasını verebiliriz.İstemci konumundaki web sayfası, sunucu(server) dan bir istekte bulunur ve bunun sonucunda sunucu,istenen verileri istemciye ulaştırır.

## Sunucu Nedir ?
Sunucu ise bu bilgileri tutan bilgisayarlardır. Bunların donanımla,yüksek performansla çalışmaları gerekir. Tanımını özet olarak yaparsak Sunucu, bir ağdaki bilgiyi kullanıcılara (bilgisayarlara) paylaştıran, üzerinde birçok yazılım çalıştaran, yüksek performansa sahip bilgisayarlardır.
![alt text](img/giris_konulari/istemci_sunucu.jpg "DNS")

## Hyper Text Markup Language - HTML
Web programlama için gereken en temel dildir. HTML bir programlama dili değil bir betik dilidir. Html kendi başına çalıştırılamaz, çalıştırılabilmesi için bir web tarayıcısına ihtiyac duyar. Html ile yazı,resim ve videoları birbirine bağlayıp kullanıcılara sunabiliriz.
![alt text](img/giris_konulari/newsletter-layouts1.png "HTML")

## CSS Nedir ?
CSS (Cascading Style Sheet) basit ve kullanışlı bir işaretleme dilidir. CSS diğer bir adıyla Stil şablonları yazı, resim, bağlantı, kenar çizgileri vb. HTML öğelerine sitil vermek yani biçimlendirmek için kullanılır. CSS kullanımı sayesinde yüzlerce sayfayı tek bir dosya ile biçimlendirebiliriz. Bu sayede hızlı ve esnek web sayfaları oluşturabiliriz.
![alt text](img/giris_konulari/css.jpg "CSS")

## JAVASCRIPT Nedir ?
JavaScript bize etkileşimli ve dinamik web sayfaları hazırlama imkanı vermektedir. Sözdizimi Java’ya benzese de Java ve JavaScript birbirinden farklı teknolojilerdir.

## Domain Name System - DNS
DNS (Domain Name System) tarayıcınızın adres çubuğuna girdiğiniz site ismini, girmek istediğiniz sitenin gerçekte ikamet
ettiği IP adresine çeviren ve internette gezinmeyi tahmin edemeyeceğiniz kadar kolaylaştıran oldukça yararlı bir
sistemdir. Örneğin hiç kimse şu anda Google'ın ikamet adresi olan 74.125.224.83 adresini tarayıcısına yazmaz.
Onun yerine www.google.com yazar ve DNS sunucusu, bu adresi IP adresine yönlendirir.


### Kısaca DNS
![alt text](img/giris_konulari/how-dns-works1.jpg "DNS")


### Detaylı DNS
![alt text](img/giris_konulari/how-dns-works3.png "DNS")


## Genel HTTP Yaşam Döngüsü
1. Girilen domain IP adresine çevrilir (DNS)
2. IP adresine TCP bağlantısı (request) açılır
3. Server cevap (response) döner
4. Cevap render edilir

### Domainin IP ‘ye çevrilmesi (DNS)
Tarayıcıya girilen domain (örneğin: www.google.com.tr)
DNS sunucularına sorularak IP adresi bulunur.
Eğer tarayıcı daha önce DNS sorgulaması yaptıysa aynı
domaine istek yapıldığında DNS sorgusu tekrar yapılmaz.
Bu, websitesi hız testlerinde -bir sayfada farklı domainlere
yapılan istekler için- DNS lookup time kriteri olarak
önümüze çıkar.

### IP adresine TCP isteği (request)
Bulunan IP adresine TCP bağlantısı açılıp (request) girilen
domain host header’ı ile gönderilir
Bu örnek için gönderilecek bilgiler aşağıdaki gibidir;
GET / HTTP/1.1
Host: www.google.com
Burada kullanıcının istediği sayfa anasayfa olduğundan “/”
parametresi GET metodu ile gönderilmiştir.

### Server ‘ın cevabı (response)
IP adresinde bulunan server, isteği işleyip cevap
(response) döner.
Server bu isteği işlerken port bilgisine bakarak ilgili web
sunucusuna (iis, apache, nginx) yönlendirir.
Web sunucusu gelen host header’ı ile hangi siteyi
çalıştıracağına karar verip ilgili sitenin kodunu işletir.

### Cevabın ekrana basılması (render)
Cevabı alan browser gelen cevabı ekrana basar (render).
Browser render işleminde html ile layout’u, css ile tasarımı
(renk, imaj vd) oluşturur.
Javascript ise yukarıdaki işlemler yapıldıktan sonra hem
css hem html üzerinde (DOM) değişiklikler yaparak sayfaya
dinamik bir yapı kazandırır.



# 5 Dakikada Serisi 

## PHP Giriş Eğitimi
https://learnxinyminutes.com/docs/tr-tr/php-tr/

## HTML Giriş Eğitimi
https://learnxinyminutes.com/docs/html/

## CSS Giriş Eğitimi
https://learnxinyminutes.com/docs/tr-tr/css-tr/

## SQL Giriş Eğitimi
https://learnxinyminutes.com/docs/sql/


# Bunları Bilelim 

## Duyarlı Tasarım - Responsive Design
Responsive design/duyarlı tasarım ekran çözünürlüklerine göre özel gösterilen tasarımlar yapmak yerine bu ekran çözünürlüklerine duyarlı olarak görünen tasarımlardır.
![alt text](img/giris_konulari/responsive.gif)
![alt text](http://www.deltawebsistem.com/userfiles/image/reponsive-tasarim-cozunurlukleri.jpg)


## Algoritma Nedir ?
Algoritma, belli bir problemi çözmek veya belirli bir amaca ulaşmak için tasarlanan yol anlamına gelir, matematikte ve bilgisayar biliminde bir işi yapmak için tanımlanan, bir başlangıç durumundan başladığında, açıkça belirlenmiş bir son durumunda sonlanan, sonlu işlemler kümesine denir.
![alt text](img/giris_konulari/algoritma.png)


## Kullanıcı Yetkileri
![alt text](img/giris_konulari/permissions1.png)


## Online php komut uygulaması
http://sandbox.onlinephpfunctions.com/
