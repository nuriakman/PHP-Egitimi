# PHP Örnek Çalışmaları

## Kelime Frekans Analizi

## ```analiz.php``` Dosyasının İçeriği
```PHP
<?php
  # NOT: https://wordsift.org/ sitesinden esinlenilmiştir.
  $Dosya = file_get_contents("konusma.txt");
  // Noktalama işaretleri ve sayıları yok edelim.
  $arrSilinecekler = file("silinecekler.txt");
  foreach ($arrSilinecekler as $sil) {
    $sil = trim($sil);
    $Dosya = str_replace($sil, " ", $Dosya);
  }
  $Dosya = str_replace("\n", " ", $Dosya);
  // Konuşma dosyasının her  bir satırı için çalışalım
  $arrListe=array();
  $arrKelimeler=explode(" ", $Dosya);
  echo "Başlangıç Kelime Sayısı: " . count($arrKelimeler) . "<br>";
  foreach ($arrKelimeler as $Kelime) {
    $Kelime  = mb_strtoupper($Kelime);
    $Kelime  = trim($Kelime);
    if($Kelime != "") $arrListe[$Kelime]++;
    /*
    if(!isset($arrListe[$Kelime])) {
      $arrListe[$Kelime] = 1;
    } else {
      $arrListe[$Kelime]++;
    }
    */
  }
  // StopWords'leri sonuç dizisinden siliyoruz
  $arrStopWords = file("stopwords.txt");
  foreach ($arrStopWords as $word) {
    $word = mb_strtoupper($word);
    $word = trim($word);
    unset($arrListe[$word]);
  }
  echo "Bitiş Kelime Sayısı: " . count($arrListe) . "<br>";
  // Sonuç için sıralama yapalım...
  arsort($arrListe);
  $arrListe = array_slice($arrListe, 0, 20);
  $SonucDosyasi = "";
  foreach ($arrListe as $key => $value) {
    $SonucDosyasi .= "$key,$value\n";
  }
  echo $SonucDosyasi;
  file_put_contents("ozet.txt", $SonucDosyasi);
  echo "<h1>Analiz Sonucu</h1>";
  echo "<pre>";
  print_r($arrListe);
  echo "</pre>";
?>
```

## ```silinecekler.txt``` Dosyasının İçeriği
```TXT
1
2
3
4
5
6
7
8
9
0
.
,
!
:
;
-
=
?
/
+
'
"
(
)
```

## ```stopwords.txt``` Dosyasının İçeriği
```TXT
a
acaba
altı
altmış
ama
ancak
arada
artık
asla
aslında
aslında
ayrıca
az
bana
bazen
bazı
bazıları
belki
ben
benden
beni
benim
beri
beş
bile
bilhassa
bin
bir
biraz
birçoğu
birçok
biri
birisi
birkaç
birşey
biz
bizden
bize
bizi
bizim
böyle
böylece
bu
buna
bunda
bundan
bunlar
bunları
bunların
bunu
bunun
burada
bütün
çoğu
çoğunu
çok
çünkü
da
daha
dahi
dan
de
defa
değil
diğer
diğeri
diğerleri
diye
doksan
dokuz
dolayı
dolayısıyla
dört
e
edecek
eden
ederek
edilecek
ediliyor
edilmesi
ediyor
eğer
elbette
elli
en
etmesi
etti
ettiği
ettiğini
fakat
falan
filan
gene
gereği
gerek
gibi
göre
hala
halde
halen
hangi
hangisi
hani
hatta
hem
henüz
hep
hepsi
her
herhangi
herkes
herkese
herkesi
herkesin
hiç
hiçbir
hiçbiri
i
ı
için
içinde
iki
ile
ilgili
ise
işte
itibaren
itibariyle
kaç
kadar
karşın
kendi
kendilerine
kendine
kendini
kendisi
kendisine
kendisini
kez
ki
kim
kime
kimi
kimin
kimisi
kimse
kırk
madem
mi
mı
milyar
milyon
mu
mü
nasıl
ne
neden
nedenle
nerde
nerede
nereye
neyse
niçin
nin
nın
niye
nun
nün
o
öbür
olan
olarak
oldu
olduğu
olduğunu
olduklarını
olmadı
olmadığı
olmak
olması
olmayan
olmaz
olsa
olsun
olup
olur
olur
olursa
oluyor
on
ön
ona
önce
ondan
onlar
onlara
onlardan
onları
onların
onu
onun
orada
öte
ötürü
otuz
öyle
oysa
pek
rağmen
sana
sanki
sanki
şayet
şekilde
sekiz
seksen
sen
senden
seni
senin
şey
şeyden
şeye
şeyi
şeyler
şimdi
siz
siz
sizden
sizden
size
sizi
sizi
sizin
sizin
sonra
şöyle
şu
şuna
şunları
şunu
ta
tabii
tam
tamam
tamamen
tarafından
trilyon
tüm
tümü
u
ü
üç
un
ün
üzere
var
vardı
ve
veya
ya
yani
yapacak
yapılan
yapılması
yapıyor
yapmak
yaptı
yaptığı
yaptığını
yaptıkları
ye
yedi
yerine
yetmiş
yi
yı
yine
yirmi
yoksa
yu
yüz
zaten
zira
```

## ```konusma.txt``` Dosyası İçeriği

```TXT
Çocuk İhmal ve İstismarı Sempozyumu Konuşmaları
Değerli Hanımefendiler, Beyefendiler,
Hepinizi en kalbi duygularla selamlıyorum.
Çocuk İhmal ve İstismarı Sempozyumu’nun başarılı neticeler vermesini diliyorum. Bu konu öylesine önemli ve acil bir konu ki, tüm işlerimizin başında geliyor.
Aile ve Sosyal Politikalar Bakanlığımızın yanı sıra Milli Eğitim, Sağlık ve Adalet Bakanlıklarımızı da yakından ilgilendiren bu mesele, TOGEMDER tarafından yeniden dikkatlerimize sunuldu. Çocuklarımızın geleceğine hizmet verecek Çocuk İzleme Merkezi’nin hayırlı olmasını diliyorum.
Sivil toplum kuruluşlarımızın böylesi gayretleri, takdire şayandır. İnanıyorum ki bu çaba, hükümetimizin bu alandaki yoğun çalışmalarına katkı sunacaktır. Emek verenleri tebrik ediyorum.
Değerli Katılımcılar,
Çocuk kelimesi, ihmal ve istismar kelimesiyle yan yana gelebiliyorsa, ortada ciddi bir sorun var demektir. Allah’ın bize emanet olarak verdiği çocuklar ihmal ediliyorsa, bu en büyük sorumsuzluktur, insanlık ayıbıdır.
Peygamberimiz, “Bakmakla yükümlü olduğu kimseleri ihmal etmesi, kişiye günah olarak yeter” buyuruyor. Şayet bir insanın sorumluluğunu alıyorsak, onun güvenlik, beslenme, barınma, eğitim, sağlık gibi temel ihtiyaçlarını karşılamakla mükellefiz. Aynı şekilde duygusal gelişimine rehberlik etmeliyiz.
Çocuklar, masumiyeti, saflığı ve acziyeti ile bize insanlığımızı öğreten mürebbiyelerdir. “Çocuk gibi masum, çocuk gibi tertemiz” deriz. O masumiyeti hangimiz özlemiyor?
Cahit Sıtkı diyor ya;
“Affan Dede'ye para saydım,
Sattı bana çocukluğumu.
Artık ne yaşım var, ne adım;
Bilmiyorum kim olduğumu.
Hiçbir şey sorulmasın benden;
Haberim yok olan bitenden”
Çocukluk, böylesine masum, böylesine hesapsız kitapsız, tertemiz olmaktır. Masumiyetle bu derece özdeş olan çocuk, istismarın konusu olabilir mi?
İnsanlığın kirlenen vicdanıdır, istismar.
Hal böyleyken, ne yazık ki çocuk istismarı, tüm dünyada yükselen bir insanlık suçudur.
İstismara uğrayan bir çocuğun, bir daha eski duygu dünyasına dönmesi neredeyse imkansızdır. Zaten çoğu kez bu istismar gizli kalır, çocuğun iç dünyasında büyür, büyür, altından kalkılamaz bir yük halini alır. Bu nedenle, çocukların duygu dünyaları iyi takip edilmeli, tüm ipuçları bilinçli şekilde değerlendirilmelidir.
Güçlü, sağlıklı bir toplum inşa etmenin yegane yolu, geleceğin sahibi olan çocukların psiko-sosyal ve fizyolojik açıdan sağlam, istismardan uzak bir yaşam sürmesidir. Bunu tesis etmek ise, hepimizin boynunun borcudur.
Devlet, sivil toplum, medya ve aileler olarak bu sorun etrafında kenetlenmeliyiz. Bu noktada ailelere çok önemli sorumluluklar düştüğünün altını çizmek isterim.
Ne yazık ki, bugün ailelerin çocuklarıyla ilişkisi eskisinden çok farklı. Eskiden aileler, çocuklar için koruyucu kalkandı. Aile içinde bir denetim mekanizması vardı. Fakat bugün çocuklar, teknolojinin kucağına terkedilmiş durumda.
Medyanın bilinçsiz yayınları, anne baba kontrolünü aşındırıyor. Karşılıklı saygı ve sevgiye dayanan ilişkiler hasar görmüş halde. Çocukların hangi düşünce ve ruh ikliminde yaşadığı, anne-babaların bilgisi dışında maalesef.
Şunu hiç unutmayalım, çocuk en çok anne-babanın, sonra eğitim kurumlarının ve nihayetinde toplumun ürünüdür. Kendi karnemizi görmek istiyorsak, çocuklarımıza bakmalıyız.
Ne acı ki, insanlığın karnesi çok kötü durumda. Hayatı erken yaşta tanımak zorunda kalan, silahların gölgesinde yaşam süren nice çocuğumuz var.
İnsanlık, çocuklar aşkına savaşması gerekirken, hırsları ve hazları için yaptığı savaşlarda çocukları öldürüyor.
“Eğer süt emen çocuklar, beli bükük yaşlılar, otlayan hayvanlar olmasaydı, azap üzerinize sel gibi gelirdi” buyuruyor Peygamber.
Çocuklar, yaşlılar rahmete vesile iken, ne yazık ki, ihmalin, istismarın konusu oluyorlar.
Cinsel, ekonomik, duygusal, birçok açıdan, adına insan diyemeyeceğimiz varlıkların sömürüsüne uğruyorlar.
Bu sorunların panzehiri aileyi güçlendirmektir. Şuurlu anne babalar yetiştirmektir. Bir çocuğun yeri ne sokak, ne yetiştirme yurdudur. Çocuğun yeri ailedir. “Ana kucağı” ya da “Baba ocağı” diye adlandırdığımız sıcak yuvadır.
İlgiden uzak çocuklar, her türlü riskin muhatabıdır.
Gerek aileleri ile yaşayan, gerekse kimsesiz, sahipsiz çocuklar, bizim sevgimize muhtaç. Bizler, onların sevinci, umudu, direnme gücü olmalıyız.
Ne zaman gözlerinde umudun ışığı sönmeye, yüzlerindeki aydınlık gölgelenmeye, ne zaman dirençleri zayıflamaya yüz tutsa, onları sevgi ve şefkatle sarıp sarmalamalıyız. Kimsesizlerin kimsesi olmalıyız.
Bu noktada, devletimizin “Koruyucu Aile” uygulamasını da yeniden hatırlatmak isterim. Koruyucu Aile, çeşitli nedenlerle, biyolojik ailelerin yanında bakımı sağlanamayan, bu sebeple devlet koruması altında olan çocuklarımıza sunulan aile odaklı bir hizmettir.
Kasım 2017 itibarıyla 4564 Koruyucu Aile yanında 5542 çocuk bulunmaktadır. Bugüne kadar bu hizmetten 11 bin çocuğumuz hizmet almıştır. Toplumun, aile şefkatine ihtiyaç duyan bu çocuklara sahip çıkması gerekir. Çünkü onlar, toplumun emanetidir.
Değerli Katılımcılar,
Bu sorunu, eğitim, sağlık, hukuk gibi çok yönlü bir bakışla ve yitirdiğimiz değerler açısından elbirliği ile çözmeliyiz. Hukuki yaptırımları artırmalı, toplumu istismara teşvik eden yayınları denetim altına almalı, meseleyi tüm yönleriyle değerlendirmeliyiz.
Bu sempozyumun bu meselelere güzel bir pencere açacağını düşünüyorum. Bakanlarımız burada. Medyamız burada. Ailelerimiz burada. Ortak bir gayretle çocukların güven içinde yaşayacağı bir dünya inşa etmek, en temel sorumluluğumuzdur. Çocukları güvende olmayan bir toplumun geleceği de yoktur.
Sözlerime son vermeden önce, eğitim uçuşu sırasında şehit olan pilotumuz ve Afrin’deki kayıplarımız başta olmak üzere, tüm şehitlerimizi rahmetle anıyorum. Ailelerine ve milletimize başsağlığı diliyorum.
Bu düşüncelerle, sempozyumun hayırlı neticeler vermesini temenni ediyor, hepinizi sevgi ve saygıyla selamlıyorum.
```
