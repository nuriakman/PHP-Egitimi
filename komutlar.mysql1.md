# İlişkisel Veritabanı Yönetim Sistemleri (İVTYS)
# Relational Database Management Systems (RDBMS)
İlişkisel Veritabanı Yönetim Sistemlerinde(İVTYS) veriler tablolar içerisinde satırlar ve sütunlarda tutulur. Birbiri ile ilişkili verileri tuttuğumuz tablolar arasında ilişki (bağ) kurarak veritabanımızı inşa etmemizi sağlayan sistemlere ise İlişkisel Veritabanı Yönetim Sistemleri denir.


## Veritabanı Nedir?
Veritabanı (database) en basit şekliyle verilerin tutulduğu, depolandığı bir sistemdir. Bilgisayar terminolojisinde yönetilebilir, güncellenebilir, taşınabilir bilgiler topluluğu olarak da adlandırılır. Veritabanlarını yöneten sistemlere de veritabanı yönetim sistemleri (VTYS, database management sytems) adı verilir. VTYS, yeni bir veritabanı yaratmak, veritabanlarını düzenlemek, güncelleme yapmak ve geliştirmek gibi birçok işlemin yapılmasını sağlar. Kullanıcı ile veritabanı arasında bir köprü görevi görür ve kullanıcının istediği bilgilere ulaşmasına yardımcı olur. Günümüzde en çok kullanılan başlıca veritabanları şunlardır; MySQL, Oracle, Microsoft SQL Server.

![](https://www.herturbilgi.com/wp-content/uploads/2015/03/veritabaniyapisi.png)


## İlişkisel Veritabanı Nedir?
Özetle, İlişkisel veri tabanını çeşitli tablolar arasında organize edilmiş verilerden oluşan veri tabanı olarak açıklanabilir. İlişkisel veritabanlarındaki yapıda veriler tablolar halinde saklanır. Tablolar alanlardan (fields) ve alanlardaki kayıtlardan (records) oluşur. Bir tablodaki alanlar esas anahtar (primary key) olarak tanımlanabilirler. Kayıtlar ise tanımlanan anahtara göre sıralanırlar. Tablolar arasındaki ilişkiler belirtilir ve bunlar matematiksel ilişkilerle (bağıntı) temsil edilir. Bu ilişkiler iki tabloda da ortak bulunan alanlar aracılığıyla sağlanır. 


## Veritabanı Tablosu Nedir?

![](http://kod5.org/wp-content/uploads/table3.png)


## Normalizasyon
Veritabanı oluştururken tabloların doğru tasarlanması önemlidir. Her tablo birbiriyle alakalı özellikleri içermelidir ve mümkün olduğunca bir işi yapmalıdır. Tıpkı metotlarda olduğu gibi. Yukarıdaki örnekte bir tabloda hem müşteri bilgileri hem aldığı personel bilgileri tutulmaktadır. Olması gereken ise iki farklı tabloda bu bilgileri tutup daha sonra bu tablolar arasında ilişki oluşturmaktır. Buna normalizasyon denir. Şimdi


## Birincil Anahtar - Primary Key (PK)
Tabloda ki bir kaydı, diğer kayıtlardan ayırmaya yarayan anahtardır. Örneğin öğrenci numarası bir primary key olabilir. Çünkü aynı öğrenci numarasına sahip iki öğrenci olamaz. Fakat öğrenci ismi bir primary key olamaz, çünkü aynı okulda aynı isimde birden fazla öğrenci bulunabilir.

![](https://baskabirkod.com/wp-content/uploads/2018/04/veritaban%C4%B1-foreign-key-1024x342.png)


## Yabancı Anahtar - Foreign Key (FK)
İki tablo arasında ki ilişkinin tanımlanmasında kullanılan, ana tabloda ki Primary Key alanına karşılık gelen anahtardır.

![](https://www.dijitalders.com/rs/ic/veri_tabanlarinda_anahtar_kavrami_birincil_ve_yabanci_anahtar_ikincil_anahtar_kavrami_2621_15122012032105_tefbt.jpg)


## İlişki - Relation

![](http://kod5.org/wp-content/uploads/tablo1.png)


## 1’e 1 İlişki
Bir - Bir İlişkisi'nde, Tablo A'da Tablo B'deki her kayıtla eşleşen yalnızca BİR kayıt ve Tablo B'de Tablo A'daki her kayıtla eşleşen sadece BİR kayıt olabilir. Bu şekilde ilişkili olan çoğu bilgi tek bir tabloda olacağından, bu tür ilişki yaygın değildir.  Güvenlik  nedenleriyle  tablonun  bir  bölümünü  yalıtmak  veya  ana tablonun yalnı zca bir alt kümesiyle ilgili bilgileri saklamak üzere, birçok alan içeren bir tabloyu bölmek için Bir - Bir İlişkisi kullanabilirsiniz.
Örnek üzerinden konuyu anlatmaya çalışalım. Mesela bir bilet otomasyonu olsun. Bir tiyatro için bilet satılıyor ve her bileti yani koltuğu yalnızca bir kişi satın alabiliyor. Elimizde iki tane tablo bulunsun bunlardan biri müşteri tablosu ikincisi ise bilet tablosu. Bu iki tablo arasındaki ilişki birebir olur. Çünkü her müşteri yalnızca bir bilet satın alabiliyor ve her bilet yalnızca bir kişiye ait olabiliyor. Peki ilişkiyi kurarken hangi tabloya ekleme yapacağız? Müşteri tablosu mu Bilet tablosu mu? Bu durumu şu açıdan bakmamız gerekiyor. Eğer bilet tablosuna müşteri id’sini eklersem bu durum da satılmayan biletler için bu bölüm null değerini alacaktır.

![](http://kod5.org/wp-content/uploads/table11.png)


## 1’e Çok (1-n) İlişki
En fazla rastalanan ilişki türüdür. Bir dershanede öğrenciler ve bu öğrencilere danışmanlık yapan öğretmenleri tutan iki adet tablomuz olsun. Bu iki tablo arasında kurulan ilişki 1’e n ilişki olur. Çünkü bir öğretmen birden fazla öğrenciye danışman olabiliyor ancak bir öğrenci en fazla bir öğretmenden danışmanlık alabiliyor. 

![](http://kod5.org/wp-content/uploads/table21.png)


## Çoktan Çoğa (n-m) İlişki
Bu ilişki türünde iki tabloda birden fazla bağa sahiptir. Bu yüzden iki tablo bu ilişkiyi açıklamak için yeterli olmaz. Yine bir ilişki türü örneği ile konuya giriş yapalım. Bir üniversitede ders seçimi yapan öğrenciler ile seçilen derslerin kayıtlarının tutulduğunu düşünelim. Bu durumda elimizde iki adet tablo bulunmaktadır:Öğrenci ve dersler. Bir öğrenci birden fazla ders seçebilirken, bir derste birden fazla öğrenci tarafından seçilebilmektedir. Bu durumda aralarında çoktan çoğa bir ilişki oluşmaktadır. Bu durumu tablolaştırırken bir üçüncü tabloya daha ihtiyacımız olmaktadır. Üçüncü tablo seçim tablosu olacak ve burada ders ile öğrencinin id’leri tutulacaktır. 

![](http://kod5.org/wp-content/uploads/table21.png)

Çoktan çoğa ilişikiler karmaşıklığı nedeniyle veritabanında bir çok soruna neden oldur. Sorunun temel nedeni bir tablodaki anahtar ilişkili olduğu tabloda birden çok kez olabilirken karşıtı da doğrudur. Bu yüzden istenilen ilişkiselliği sağlamak için ilişkiyi birden çoğa indirgemek gerekir. Yani araya fazladan bir tablo koyarak karmaşıklıktan kurtulmuş oluruz.

![](http://guvengulec.com/wp-content/uploads/2011/08/cokacokiliski.gif)


## Transaction / Rollback Kavramı
Transaction, daha küçük parçalara ayrılamayan en küçük işlem yığınına denir. Belirli bir grup işlemin arka arkaya gerçekleşmesine rağmen, işlemlerin toplu olarak değerlendirilmesini sağlar. “Transaction”, prensip olarak ya bütün işlemleri gerçekleştirir ya da hiçbirini gerçekleştirmez. İşlemlerden biri dahi başarısız olursa, bu prensip nedeniyle hiçbir işlem olmamış kabul edilir; ancak tüm işlemler başarılı olduğunda” transaction”, içinde gerçekleşen tüm veri değişikliklerini onaylamış demektir. Bu işlemlerin ardı arkasına gelince bir tanesinin bile gerçekleşmemesi veri kaybına neden olacağı anlamına gelmektedir. Bu işlemler sırasında veriler üzerindeki değişikliklerin de tutarlı olması, birbirlerini tamamlayıcı nitelik taşıması gerekir. Bu özellikleri sağlayabilmesi içintransaction kavramı ortaya atılır. Veri tabanı uygulamaları geliştirirken böyle bir hataya sebep olacakları da düşünerek transaction bloğunun içine alınarak işlemler yapılır. Böylece ya hepsi işlenir ya da bütün işlemler geri alınır.

![](http://2.bp.blogspot.com/-BDjriyOobkY/VF0oia1hEiI/AAAAAAAAB6Q/QYzYfWdxeus/s1600/transactiony.PNG)


## Örnek Veritabanı Tasarımı - 1

![](https://www.herturbilgi.com/wp-content/uploads/2015/03/iliskisel-model.png)

## Örnek Veritabanı Tasarımı - 2

![](https://www.dijitalders.com/rs/ic/veri_tabanlarinda_anahtar_kavrami_birincil_ve_yabanci_anahtar_ikincil_anahtar_kavrami_2621_15122012032105_tefbt.jpg)


## MYSQL Nedir?
- Bir (ilişkisel) veritabanı yönetim sistemidir.
- Tüm verileri tek bir ambara yığmak yerine farklı tablolarda ve veritabanlarında düzenli bir biçimde saklar.
- SQL adı verilen, veritabanlarına erişmek için kullanılan en yaygın ve standart dil ile işlemler yapıyor.
- Çifte lisanslı bir yazılımdır. Hem Genel Kamu Lisansı'na (GPL) sahip özgür bir yazılım, hem de GPL'in kısıtladığı alanlarda kullanmak isteyenler için ayrı bir lisansa sahiptir.

## MariaDB Nedir?
- MariaDB, GNU Genel Kamu Lisansı altında serbest olarak kullanılabilen, MySQL'in yaratıcısı olan Monty Widenius'un MySQL'in kodunu çatallayıp (fork) "çoğunlukla" MySQL ile aynı komutları, arayüzleri ve API'leri destekleyecek şekilde geliştirmeye başlanan (MariaDB 5.2 >= MySQL 5.2), toplulukla iç içe hızlı ve verimli şekilde geliştirilmeye devam edilen MySQL ilişkisel veritabanı yönetim sistemidir.
- MariaDB vakfı tarafından gelişimine devam edilen MariaDB’nin ilk sürümü 2009 yılında çıkmışken, ikinci sürümü (kararlı sürüm) 2015 yılında çıkış yapmıştır. Öte yandan MySQL’in ilk sürümü 1995 yılında çıkış yapmıştır. MySQL’in oldukça eski olmasının, sektörede hala geçerliliğini korumasında katkısı büyüktür.
- MariaDB bizzat MySQL geliştiricilerinin elinden çıkmış olması sebebiyle MySQL içinde kullanılan tüm komutları tanımakta olup, arayüz metotlarını desteklemektedir. Yine MariaDB’nin uygulama geliştirme arayüzü (API) ve protokolleri MySQL ile tamamen uyumlu çalışmaktadır.
- İlişkisel veri tabanı sistemi olarak öne çıkan MariaDB, bugün en çok kullanılan bir diğer veri tabanı sunucusu olan MySQL’in alternatifi olarak kabul görmektedir. Yapısı itibariyle MariaDB birçok alanda kullanılmaya uygundur. Hemen her alandan uygulama hayat verebilecek MariaDB’yi bir banka sisteminden bir internet sitesinin veri tabanı sunucusuna varıncıya kadar her alanda kullanabilirsiniz. MariaDB; hızlı, ölçeklenebilir ve güçlü bir veri tabanı çözümüdür. Zengin ekosistemi sayesinde MariaDB için hazırlanan depolama motorları, eklentiler ve diğer araçlarla MariaDB kapsamlı bir veri tabanı çözümüdür.

## MySQL'in Öyküsü
- MySQL'in yaratıcısı Michael "Monty" Widenius'un kızının adı My.
- Ekip kendi yazdıkları başka araçlara da daha önce de "My" takısını ekliyordu
- İlk başta mSQL'i kendi ek geliştirmelerini yaparak işe başlıyorlar.
- Sonunda kendi MySQL adlı veritabanı sunucularını 1995'te yayınlanıyorlar.
- Çifte lisanslı bir yazılım. Hem Genel Kamu Lisansı'na (GPL) sahip özgür bir yazılım, hem de GPL'in kısıtladığı alanlarda kullanmak isteyenler için ayrı bir lisansla satılabiliyor.
- İsveç'te MySQL'i geliştiren firmanın adı TcX, yazılımın popüler olması ile beraber MySQL AB adını alıyor.
- Firma tüm gelirini MySQL desteği, eğitimi ve geliştirmesinden ediniyordu.
- MySQL'i tüm geliştirenler, MySQL AB firmasının birer ücretli çalışanı haline geldi, birçok ülkede çalışanı olan bir kuruluş oldular.
- Oracle 2005'te, MySQL'in transaction destekli InnoDB tablo tipini geliştiren Innobase firmasını satın aldı.
- Oracle 2006'da, MySQL'in tablo tiplerinden Berkeley DB'yi geliştiren Sleepy Cat firmasını satın aldı.
- Sun 2008'de MySQL AB'yi satın aldı ve geliştirme yapısını değiştirdi.
- Oracle 2010'da Sun'ı (ve beraberinde MySQL'i) satın aldı ve geliştirme yapısını daha da değiştirdi. Destek ücretlendirmesini %600 arttırdı.

## MariaDB'nin Öyküsü
- Önce Sun, sonra Oracle MySQL'in topluluk geliştirme modelinden uzaklaştı.
- MySQL'in yaratıcısı olan Monty Widenius, MySQL'in kodunu çatallayıp (fork), bu kez yazılıma ikinci kızının adı olan Maria'yı vererek, aynı kod tabanı üzerinden MariaDB adı ile geliştirmeye başladı.
- İlk MySQL modelinde, toplulukla içiçe şirket destekli hızlı ve verimli geliştirmeye dönüldü.
- MySQL ile aynı komutlar, aynı arayüzler, aynı kitaplıklar ve API'ler.
- MySQL veritabanlarını dönüştürmeden kullanabiliyor.
- MariaDB sürüm numaraları MySQL ile özellik açısından birebir uyumlu (MariaDB 5.2 >= MySQL 5.2)
- Ek yeni özellikler ve geliştirmeler yapılıyor.

## Temel Farklar
- Dağıtımların çoğu hala resmi olarak MySQL'i destekliyorlar, MariaDB'nin ayrıca kurulması gerekiyor.
- MySQL'in markasının bilinirliği MariaDB'de yok.
- MariaDB çifte lisanslı değil, yalnız GPL (özgür yazılım) olarak kullanabilirsiniz.
- MariaDB 5.3 serisindeyken, MySQL 5.5 serisinde.

KAYNAK: https://topluluk.ozguryazilim.com.tr/wp-content/sunumlar/mariadb-vs-mysql/
