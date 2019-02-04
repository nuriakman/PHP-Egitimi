# CSS Etiketleri

HTML bize metin biçimlendirme alanında çok geniş olanaklar sunar. CSS, uzun yazılışıyla Cascading Style Sheets, veya Türkçesiyle Stil şablonları ise bunu bir adım daha öteye götürür, bize sayfalarımız için global şablonlar hazırlama olanağı verdiği gibi, tek bir harfin stilini; yani renk, font, büyüklük gibi özelliklerini değiştirmek için de kullanılabilir. Bu tekniğin en önemli özelliği kullanımındaki bu esnekliğidir.

Bir web sayfası içerisinde zaten estetik kuralları gereği yüzlerce renk ve font kullanmayız. Genelde birbiriyle uyumlu birkaç renk ve birkaç font kullanırız ki, bunları her sayfada ayrı ayrı tekrar belirtmek yerine CSS yardımıyla bir sefer tanımlayıp bütün web sayfamızda kullanabiliriz.Bu şekilde güncelleme yaparken de onlarca sayfayı değiştirmekten kurtuluruz.

CSS kodları HTML kodlarının içine yazılırlar. Türüne göre body veya head bölümlerinde yer alabilirler. Bunların dışında harici CSS dosyaları oluşturulup bunlar gerektiğinde HTML belgesi içerisinde çağırılabilirler.

Hemen hemen her konuda olduğu gibi CSS konusunda da Microsoft Internet Explorer ve Firefox farklı yorumlar ortaya koyarlar. Bu noktada her iki browser'ın da aynı/benzer yorumlayacağı kodlar yazmak en uygunudur.

## CSS'in Yapısı
![](http://zinzinzibidi.com/Areas/web_tasarim/Content/img/css-yapisi-01.jpg)


## HTML + CSS + JS = Web Page
![](https://cdn-images-1.medium.com/max/1600/1*GMHYx3zVUybjg0qQ2n9QSA.png)


## LİNK ÖZELLİKLERİ

Etiket |Anlamı|
------------|-------------|
```a```|Linkin, sayfa açıldığında tıklanmadan veya ümleç üzerine getirilmeden önceki durumudur.
```a:hover```|Linkin imleç üzerine getirildiğindeki durumudur.
```a:active```|Linkin tıklandığı andaki durumudur.
```a:visited```|Linkin tıklandıktan sonraki durumudur.BİÇİMLENDİRME:
```color```|Linkin rengini belirler.
```background-color```|Linkin zemin rengini belirler.
```background-image```|Linkin zeminine resim ekler(Bu animated-gif de olabilir.)
```text-decoration```|Linkin altının,üstünün vs. çizgili olup olmayacağını belirler.
```font-weight```|Yazının kalınlık veya inceliğini belirler.
```border```|Linkin etrafına kenarlık ekler.
```display```|Linki içeren hücre, satır vb. istenilen alanın seçilmesini sağlar.


## LİSTE ÖZELLİKLERİ

Etiket |Anlamı|
------------|-------------|
```disk```|Liste biçiminin disk (içi dolu daire) şeklinde olmasını sağlar.
```circle```|Liste biçiminin çember şeklinde olmasını sağlar.
```square```|Liste biçiminin kare olmasını sağlar.
```decimal```|Liste biçiminin rakamlardan oluşmasını sağlar.
```lower-roman```|Liste biçiminin i,ii,iii gibi küçük roma rakamlarından oluşmasını sağlar.
```upper-roman```|Liste biçiminin I,II,II gibi büyük roma rakamlarından oluşmasını sağlar.
```lower-alpha```|Liste biçiminin a,b,c şeklinde küçük harf olmasını sağlar.
```upper-alpha```|Liste biçiminin A,B,C şeklinde büyük harf olmasını sağlar.
```none```|Listenin simgesiz olmasını sağlar.
```inside```|Listenin ikinci satırının en soldan başlamasını sağlar.
```Outside```|Listenin ikinci satırının ilk satır ile aynı yerden başlamasını sağlar.
```list-style-image```|Liste biçiminin resim olmasını sağlar.


## KATMAN ÖZELLİKLERİ

Etiket |Anlamı|
------------|-------------|
```position```|Katmanın yerinin belirlenmesini sağlar.
```absolute```|Katmanın yerinin pencere esas alınarak belirlenmesini sağlar.
```relative```|Katmanın yerinin bir önceki katman esas alınarak belirlenmesini sağlar.
```static```|Katmanın yerinin sabit olarak (Varsayılan olan sol üst köşe) belirlenmesini sağlar.
```top```|Katmanın üstten ne kadar aşağıda olması gerektiğini belirler.
```left```|Katmanın soldan ne kadar içeride olması gerektiğini belirler.
```width```|Katmanın genişliğinin ne kadar olacağını belirler.
```height```|Katmanın yüksekliğinin ne kadar olacağını belirler.
```overflow```|Katmanın belirtilen yükseklik ve genişliğe sığmayan kısmına ne olacağını belirler.
```auto```|Otomatik olarak belirlenir.
```scroll```|Kaydırma çubuğu ekleyerek görünmesini sağlar.
```visible```|Katmanı belirtilen boyutların dışına taşırarak sığmayan yerlerin görünmesini sağlar.
```hidden```|Sığmayan yerleri gizler.
```visibility```|Katmanın görünebilirlik ayarını yapar.
```visible```|Katmanın görünür olmasını sağlar.
```hidden```|Katmanı gizler.
```z-index```|Katmanların alttan üste doğru hangi sıra ile gösterileceğini belirler.1 değeri katmanın en altta olacağını belirtir.


## FONT ÖZELLİKLERİ

Etiket |Anlamı|
------------|-------------|
```font-family```|Yazı türünü belirler.(Arial, Verdana gibi.)
```font-style```|Yazının normal veya sağa eğik olmasını sağlar.
```font-variant```|Yazının normal veya tümünün büyük harflerden oluşmuş olmasını sağlar.
```font-weight```|Yazının kalınlık-inceliğini belirler.
```font-size```|Yazının büyüklüğünü belirler.


## TEXT ÖZELLİKLERİ

Etiket |Anlamı|
------------|-------------|
```word-spacing```|Kelimeler arasında bırakılacak boşluğu boşluğu belirler.
```letter-spacing```|Harfler arasında bırakılacak boşluğu boşluğu belirler.
```text-decoration```|Kelimenin altının, üstünün vs. çizili olup olmayacağını belirler.
```underline```|Kelimenin altının (Satır altından) çizili olmasını sağlar.
```overline```|Kelimenin üstünün (Satır üstünden) çizili olmasını sağlar.
```line-through```|Kelimenin ortasından çizili olmasını sağlar.
```blink```|Kelimenin yanıp sönmesini sağlar.(Netscape için)
```vertical-align```|Metnin yatay olarak nasıl hizalanacağını belirler.
```text-transform```|Kelimelerin büyük harf veya küçük harflerden oluşmasını sağlar.
```capitalize```|Kelimelerin ilk harflerinin büyük olmasını sağlar.
```uppercase```|Kelimelerin bütün harflerinin büyük olmasını sağlar.
```lowercase```|Kelimelerin bütün harflerinin küçük olmasını sağlar.
```none```|Kelimelerin orjinal metindeki gibi olmasını sağlar.
```text-align```|Metnin dikey olarak nasıl hizalanacağını belirler.
```left```|Metni sola yaslar.
```right```|Metni sağa yaslar.
```center```|Metni ortalar.
```justify```|Metni iki yana yaslar.
```text-indent```|Metnin ilk satırının soldan ne kadar içerden başlayacağını belirler.
```line-height```|Satırın yüksekliğini ayarlar.(Yüksek değer verildiğinde satırlar arasındaki boşluk artar.)
```first-line```|Metnin ilk satırının biçimlendirilmesini sağlar.
```first-letter```|Metnin ilk harfinin biçimlendirilmesini sağlar.


## İMLEÇ ÖZELLİKLERİ

Etiket |Anlamı|
------------|-------------|
```crosshair```|İmlecin artı işareti şeklinde olmasını sağlar.
```auto```|İmlecin metinde dikey çizgi,boş alanda normal ok şeklinde olmasını sağlar.
```default```|İmlecin hem metinde hem de boş alanda normal ok şeklinde olmasını sağlar.
```hand```|İmlecin linkte olduğu gibi el şeklinde olmasını sağlar.
```move```|İmlecin taşıma işareti şeklinde olmasını sağlar.
```ne-resize```|İmlecin sağa yatık normal ok olmasını sağlar.
```nw-resize```|İmlecin sola yatık normal ok olmasını sağlar.
```se-resize```|İmlecin yukardan aşağı doğru ve sağa yatık normal ok olmasını sağlar.
```sw-resize```|İmlecin yukardan aşağı doğru ve sola yatık normal ok olmasını sağlar.
```n-resize```|İmlecin aşağıdan yukarıya doğru ince ok şeklinde olmasını sağlar.
```s-resize```|İmlecin yukardan aşağı doğru ince ok şeklinde olmasını sağlar.
```w-resize```|İmlecin sola doğru ince ok şeklinde olmasını sağlar.
```e-resize```|İmlecin sağa doğru ince ok şeklinde olmasını sağlar.
```text```|İmlecin hem metinde hem de boş alanda metinde olduğu gibi görünmesini sağlar.
```wait```|İmlecin meşgul animasyonuna dönüşmesini sağlar.
```help```|İmlecin yardım-soru işaretine dönüşmesini sağlar


## ZEMİN ÖZELLİKLERİ

Etiket |Anlamı|
------------|-------------|
```background-color```|Zeminin rengini belirler.
```#color```|Renk adı.
```transparent```|Zeminin saydam olmasını sağlar.
```background-image```|Zemine resim yerleştirilmesini sağlar.
```url```|Zemine yerleştirilen resmin adresi.
```background-repeat```|Zemine yerleştirilen resmin nasıl yayılacağını belirler.
```repeat```|Resmin bütün zemine yayılmasını sağlar.
```repeat-x```|Resmin sol-üstten sağ-üste doğru yayılmasını sağlar.
```repeat-y```|Resmin sol-üstten sol-alta doğru yayılmasını sağlar.
```no-repeat```|Resmin yayılmadan orjinal boyutuyla görünmesini sağlar.
```background-attachment```|Zemindeki resmin, sayfa kaydırma çubuğuyla hareket ettirildiğindeki durumunu belirler.
```scroll```|Sayfa hareket ettirildiğinde zeminin de kaymasını sağlar.
```fixed```|Sayfa kaydırılsa da zeminin sabit kalmasını sağlar
```background-position```|Zemindeki resmin istenilen şekilde yerleştirilmesini sağlar.
```top```|Resmi yukarı yerleştirir.
```center```|Resmi ortalar.
```bottom```|Resmi aşağı yerleştirir.
```left```|Resmi sola yerleştirir.
```right```|Resmi sağa yerleştirir.
```…px```|Resmin soldan istenilen ölçüde içerde olmasını sağlar.


## TABLO ÖZELLİKLERİ

Etiket |Anlamı|
------------|-------------|
```margin```|Tablo ile pencerenin kenarları arasında bırakılacak boşluğu belirler.
```margin-top```|Tablo ile pencerenin üst kenarı arasında bırakılacak boşluğu belirler.
```margin-right```|Tablo ile pencerenin sağ kenarı arasında bırakılacak boşluğu belirler.
```margin-bottom```|Tablo ile pencerenin alt kenarı arasında bırakılacak boşluğu belirler.
```margin-left```|Tablo ile pencerenin sol kenarı arasında bırakılacak boşluğu belirler.
```padding```|Tablo kenarları ile tablo içeriği (Yazı vb.) arasında bırakılacak boşluğu belirler.
```padding-top```|Tablonun üst kenarı ile tablo içeriği arasında bırakılacak boşluğu belirler.
```padding-right```|Tablonun sağ kenarı ile tablo içeriği arasında bırakılacak boşluğu belirler.
```padding-bottom```|Tablonun alt kenarı ile tablo içeriği arasında bırakılacak boşluğu belirler.
```padding-left```|Tablonun sol kenarı ile tablo içeriği arasında bırakılacak boşluğu belirler.
```border```|Tablonun kenarlarının şekillendirilmesini sağlar.
```border-top```|Tablonun üst kenarının şekillendirilmesini sağlar.
```border-left```|Tablonun sol kenarının şekillendirilmesini sağlar.
```border-bottom```|Tablonun alt kenarının şekillendirilmesini sağlar.
```border-right```|Tablonun sağ kenarının şekillendirilmesini sağlar.
```border-width```|Tablonun kenarlarının kalınlığını belirler.
```border-top-width```|Tablonun üst kenarının kalınlığını belirler.
```border-right-width```|Tablonun sağ kenarının kalınlığını belirler.
```border-bottom-width```|Tablonun alt kenarının kalınlığını belirler.
```border-left-width```|Tablonun sol kenarının kalınlığını belirler.
```border-style```|Tablonun kenarlık türünü belirler.
```border-top-style```|Tablonun üst kenarlık türünü belirler.
```border-right-style```|Tablonun sağ kenarlık türünü belirler.
```border-bottom-style```|Tablonun alt kenarlık türünü belirler.
```border-left-style```|Tablonun sol kenarlık türünü belirler.
```border-color```|Tablonun kenarlarının rengini belirler.
```border-top-color```|Tablonun üst kenarının rengini belirler.
```border-right-color```|Tablonun sağ kenarının rengini belirler.
```border-bottom-color```|Tablonun alt kenarının rengini belirler.
```border-left-color```|Tablonun sol kenarının rengini belirler.
```color```|Tabloda geçen metnin rengini belirler.
```width```|Tablonon genişliğini belirler.
```height```|Tablonun yüksekliğini belirler.

NOT: Başlık "TABLO" olarak verildi Ancak bu nitelikler başta TD, TR, TH vs. olmak üzere hemen her etiket için kullanılabilir.CSS' yi özel kılan da zaten bu…


## KAYDIRMA ÇUBUĞU ÖZELLİKLERİ

Etiket |Anlamı|
------------|-------------|
```scrollbar-face-color```|Kaydırma çubuğunun yüzey rengi, aynı zamanda zemini de etkiliyor.
```scrollbar-base-color```|Kaydırma çubuğununun sol ve üst kenarlıklarını çizgi halinde kaplıyor.
```scrollbar-shadow-color```|Sağ ve alt kenarlıkların gölge rengi.
```scrollbar-highlight-color```|Sol ve üst kenarlıkların gölge rengi,aynı zamanda zemini de etkiliyor.
```scrollbar-arrow-color```|Yön oklarının rengi


Kaynak: http://sanalkurs.net/css-hakkinda-temel-bilgiler-1922.html
