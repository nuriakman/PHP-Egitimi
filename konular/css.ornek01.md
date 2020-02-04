# CSS Örnek Çalışmaları

## CSS ile SUTUN Formatlı Yazı

```HTML
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CSS ile SUTUN formatlı yazı</title>
	<style> 
	
		/* X pixel'den düşük çözünürlükte Y adet sutun bulunsun */
		@media screen and (max-width: 3000px) { 
			.Sutunlu { column-count: 5;} 
		}

		@media screen and (max-width: 1400px) { 
			.Sutunlu { column-count: 4;} 
		}

		@media screen and (max-width: 1200px) { 
			.Sutunlu { column-count: 3;} 
		}

		@media screen and (max-width:  900px) { 
			.Sutunlu { column-count: 2;} 
		}

		@media screen and (max-width:  600px) { 
			.Sutunlu { column-count: 1;} 
		}

		body {
		  margin: 20px; /* Sayfa kenarlarında boşluk olsun */
		}

		h1, h2 {
		  column-span: all; /* h1 ve h2'lerde sutunları kesip yeniden başlatsın */ 
		}

		.SutunStili { 
			column-rule-style: solid;     /* Sütünlar arasında düz çizgi olsun */
			column-rule-width: 2px;       /* Sütünlar arasında düz çizgi 2px kalınlığında olsun */
			column-rule-color: lightblue; /* Sütünlar arasında düz çizgi açık mavi renkte olsun */
			
			/* column-rule: 1px dotted lightblue; */  /* Yukarıdaki 3 komutun birleşmiş hali */
			
			column-gap: 3em;     /* Sütünlar arası boşluk */
			line-height: 1.7em;  /* Satır yüksekliği */
			text-align: justify; /* Metinler sağa ve sola dayalı olsun */
		} 

		/* 'Sutunlu' sınıfındaki sahaların içindeki resim etiketleri */
		.Sutunlu img {
			width: 100%;            /* Resimler sutun genişliği kadar yer kaplasın */
			border-radius: 5px;     /* Resim köşelerine küçük bir ovallik ver */
			border: 1px solid grey; /* Resmin dışına açık gri renkte bir çerçeve çiz */
		}


	</style>
</head>
<body>
<div class="Sutunlu SutunStili">
	<h1>Çankırı</h1>
	<p> İç Anadolu'nun Orta Kızılırmak bölümünün kuzey kesiminde, Köroğlu dağlarının güneye doğru alçaldığı ve Kızılırmak'a dökülen Acıçay ile Tatlıçay'ın birleştiği yerin yakınında bir vadide yer almakta olup denizden yüksekliği 730 metredir. Şehrin adı, Antikçağ'da burada yapılan ve bugünkü şehrin ilk nüvesini teşkil eden Karatekin tepesindeki Gangra Kalesi'nin ismine dayanır. Burası Arap kaynaklarında Hancere (خنجره) adıyla anılırken (Taberî, VI, 469; İbnü'l-Esîr, IV, 578) Selçuklu ve Osmanlı hâkimiyeti dönemlerinde Kengırı (كنغرى) ve Kângırı (كانغرى) şekillerinde adlandırılmış, halk arasında söylenen Çangırı veya Çengiri Cumhuriyet döneminde Çankırı şeklinde resmiyet kazanmıştır. </p>
	<p> Çankırı çevresi eski çağlarda Hitit Devleti'nin hâkimiyeti altında idi. Bu devletin milâttan önce 1200 yıllarında yıkılmasından sonra yöre Paflagonlar'ın idaresine girdi. Şehrin ilk yerleşme yeri olan Gangra Kalesi'nin bu dönemde kurulduğu tahmin edilmektedir. </p>
	<p><img src='http://www.cankiri.gov.tr/kurumlar/cankiri.gov.tr/isay2/sehirkartlari/mimari/mimarikopru_sokak_evler.jpg'> Bir ara Pontus Krallığı'nın hâkimiyetine giren şehir, Roma İmparatorluğu döneminde önce Galatya, daha sonra da Paflagonya vilâyetinin sınırları içinde kaldı. Strabon'a göre burası İç Paflagonya'da küçük bir şehir ve kale olup Kral Morzeos'un ikametgâhıydı, daha sonra Galatya Kralı Deiotaros tarafından alınmıştı. Roma hâkimiyeti altında önemini koruyan ve Germanikopolis de denen şehir, Bizans döneminde “Pilaimenes teması” adıyla bilinen idarî bir yönetim birimi içindeydi. Bu dönemde bir sürgün yeri olarak bilinen Çankırı 711-712, 727-728'de birkaç defa Emevî akınlarına hedef oldu (Taberî, VI, 469; Ya‘kūbî, II, 292, 300); ancak kalesinin müstahkem olmasından dolayı alınamadı. Nitekim Ya‘kūbî'nin burayı “Hısnülhadîd” adıyla anması kalenin bu durumuna işaret etmektedir. </p>
	<h1>Tarih</h1>
	<p> Şehir Malazgirt Savaşı'ndan (1071) sonra Türkler'in eline geçti. Çankırı'yı bu sıralarda, Anadolu fâtihi Süleyman Şah'ın emîrlerinden olduğu anlaşılan Karategin'in fethettiği belirtilir. Çankırı'da kendisine atfedilen türbede yatan Karategin, aynı zamanda Kastamonu ve Sinop fâtihi olarak da bilinir. Bundan sonra Dânişmendliler'in idaresinde kalan şehir, 1101 Temmuzunda Raymond'un idaresinde, Anadolu'yu çapraz olarak katedip aynı zamanda Niksar'da hapis olan Bohemund'u kurtarmak isteyen Haçlı kuvvetlerinin saldırısına uğradı; ancak zaptedilemedi, çevresi yağmalandı. </p>
	<p><img src='http://www.cankiri.gov.tr/kurumlar/cankiri.gov.tr/isay2/sehirkartlari/mimari/mimariyaranevi1.JPG'> Şehir, 1134'te Emîr Gazi'nin ölümünden sonra 1135'te Bizanslılar tarafından ele geçirildi. Fakat kısa bir süre sonra yeniden Dânişmendliler'ce geri alındı. Ardından da Selçuklular'ın idaresine girdi. Bu devletin dağılmasından sonra Kastamonu ve çevresinde hüküm süren Candaroğulları'nın hâkimiyetinde kaldı. </p>
	<p> I. Murad döneminde Osmanlı idaresine girdiyse de bu uzun süreli olmadı. I. Bayezid döneminde tekrar Osmanlı hâkimiyeti altına alınan şehir, 1402 Ankara Savaşı'ndan sonra Timur tarafından İsfendiyaroğulları'na verildi. Bu sırada İsfendiyaroğlu Kasım Bey Osmanlılar'a sığınınca Çelebi Mehmed Çankırı'yı kendisine verdi. </p>
	<p> Önemli sayılabilecek bir güzergâhı kontrol eden noktada yer alan kalesinin ilk yerleşme yerini oluşturduğu Çankırı zamanla sur dışına doğru genişledi. Bu genişleme özellikle Osmanlı hâkimiyeti döneminde daha da belirginleşti ve Çankırı bir kale-şehir olarak gelişme gösterdi. </p>
	<p><img src='http://www.cankiri.gov.tr/kurumlar/cankiri.gov.tr/isay2/sehirkartlari/mimari/1_.jpg'> Ancak İsfendiyar Bey II. Murad döneminde Çankırı'yı tekrar ele geçirdi. Bir süre sonra da şehir yeniden Osmanlılar'a katıldı. Osmanlı döneminde uzun bir sükûnet devri yaşayan Çankırı, XVII. yüzyıldan itibaren başlayan çeşitli Celâlî isyanlarının etkisinde kaldı. Şehir halkı zaman zaman şikâyetlerini İstanbul'a kadar bildirdi. Çankırı'da bundan sonra da bazı olaylar cereyan etti, fakat bunlar Celâlî isyanları kadar büyük tesir uyandırmadı. XVIII. yüzyılın ortalarından itibaren şehir yavaş yavaş Çapanoğulları'nın nüfuz sahası içinde kalmaya başladı. </p>
	<p> Bugün Karategin tepesi adıyla anılan yerdeki kalesi, bu dönemde de askerî özelliğini bir süre daha korudu. 1521'de kalede bir dizdar, bir kethüdâ ve elli muhafız bulunuyordu (BA, TD, nr. 438, s. 707). Kale çevresinde güneye doğru uzanan şehirde ise aynı tarihte yirmi dört mahalle yer alıyordu (BA, TD, nr. 100, s. 2-11; nr. 438, s. 703). 1578'de nüfusun nisbî bir artış göstermesine rağmen mahalle sayısı yirmi ikiye inmişti (TK, TD, nr. 81, vr. 5b-10a). Her iki tarihte en kalabalık mahalleleri Karataş Kaysar, Şeyh Osman, İmaret, Halil Ağa Mescidi, Hacı Kasım, Küçük Minare, Alaca Mescid, Emîr Âhur, Kadı, Bîmarhâne, Umur Fakih ve Karataş mahalleleri oluşturuyordu. </p>
	<h1>Kültür</h1>
	<p> 1521'de şehirde yaklaşık 2300 müslüman nüfus vardı. 1578'de bu rakam 3000 civarında idi. Her iki tarihte de şehirde hıristiyan nüfusun bulunmadığı anlaşılmaktadır. 1555'te Amasya'ya giden Alman elçilik heyetiyle Çankırı'dan geçen H. Dernschwam, burayı Kızılırmak'ı aştıktan sonra solda kuzey tarafta bir kasaba ve kale olarak tarif edip adını “Kangri” şeklinde yazar ve kalenin harap durumda olduğunu, civarda maden ocakları ve tuzlanın yer aldığını kaydeder (İstanbul ve Anadolu'ya Seyahat Günlüğü, s. 264). Cihannümâ'da, güney tarafı açık sahra yerde bir kale ve mâmur kasaba olup Bey ve Sultan Süleyman adlı iki camii, muhtelif hanları, küçük bir tepe üzerinde idarecilerin oturduğu bir sarayı olduğu belirtilen Çankırı, Evliya Çelebi'ye göre “4000 kadar bağlı bahçeli mâmur hâneleri” bulunan bir şehirdi. </p>
	<p><img src='http://www.cankiri.gov.tr/kurumlar/cankiri.gov.tr/isay2/sehirkartlari/mimari/mimariarastirma_merkezi.jpg'> Bu bilgilerden, şehrin özellikle XVII. yüzyılda nüfusunun biraz daha arttığı anlaşılmaktadır. XVIII. yüzyılda bu durumunu koruyan şehrin 1831 yılındaki nüfusu 12.000, XIX. yüzyılın sonundaki nüfusu ise 15.000 civarında idi. Bu nüfus içinde 700 kadar Rum ve 400 kadar da Ermeni vardı. </p>
	<p> Çankırı'nın ekonomisi Osmanlılar devrinde daha çok ziraata ve küçük el sanatlarına dayanıyordu. Özellikle keçe ve yünlü imalâtı şehir ekonomisinde önemli bir yere sahipti. 1521'de şehirde, yirmi altısı mülk ve altmış altısı vakıf olmak üzere en az doksan iki dükkân bulunuyordu (BA, TD, nr. 438, s. 704-715). Bundan başka bir mum imalâthanesi ve bir bozahâne ile çeşitli vakıflara ait birer bedesten, kervansaray ve bezirhâne mevcuttu. Ayrıca şehirde her türlü malın alınıp satıldığı bir pazar yeri vardı. Buradaki pek çok dükkân ve ticarî tesisin vakıflara ait olması, şehrin ticarî ve ekonomik gelişmesinde vakıfların önemli bir rol oynadığını göstermektedir. Şehir esnafı arasında Ahîlik prensiplerine olan bağlılığın bugün dahi devam etmesi, esnaf arasındaki ilişkilerin dayandığı temele bir işaret olmalıdır. </p>
	<p> Çankırı'da birçok tarihî eser mevcuttur. Bunlar arasında, Çankırı fâtihi olarak kabul edilen Karategin'in türbesinin de bulunuğu Çankırı Kalesi'ni belirtmek gerekir. Fakat kale bugün harap vaziyettedir. Anadolu Selçukluları ve beylikleri döneminden kalma eserler arasında, 1235'te Selçuklu Sultanı Alâeddin Keykubad zamanında Emîr Atabey Cemâleddin Ferruh tarafından yaptırılan İmaret Camii ve Taşmescid (Şifâhâne) vardır. İmaret Camii'ni Candaroğlu Kasım Bey'in inşa ettirdiği belirtilir. Ancak buranın XVII. yüzyılda harap olduğu, sonra yeniden yaptırıldığı bilinmektedir. Osmanlı döneminden kalma önemli tarihî eser ise Ulucami'dir (1558-1559). Bundan başka Ali Bey Camii (1609) ve Çivitçioğlu Medresesi (bugün Çankırı Kültür Müzesi), XVII. yüzyılın önemli mimari eserleri arasında yer alır. </p>
	<p><img src='http://www.cankiri.gov.tr/kurumlar/cankiri.gov.tr/isay2/sehirkartlari/mimari/mimariyaranevi2.jpg'> Çankırı Osmanlı idarî teşkilâtında Anadolu eyaletine bağlı bir sancak merkeziydi. 1521 tarihli Tahrir Defteri'ne göre merkez kazadan başka sekiz kazası vardı. Bunlar Koçhisar, Milan, Kurşunlu, Çerkeş, Tosya, Kargu, Kalecik ve Karıpazarı kazaları idi (BA, TD, nr. 100, s. 1). Daha sonra bunlara Keskün nahiyesi de ilâve edildi. Muhtemelen XIX. yüzyıla kadar bu durumunu koruyan sancak 1846'da Kastamonu vilâyetine bağlıydı. XIX. yüzyıl sonlarında, V. Cuinet'e göre, merkez kaza ile birlikte üç kaza (Çankırı, Kalecik, Çerkeş), yedi nahiye ve 714 köyü bulunuyordu. Cumhuriyet döneminde ise vilâyet oldu. </p>
	<h1>Sanat</h1>
	<p><img src='http://www.cankiri.gov.tr/kurumlar/cankiri.gov.tr/isay2/sehirkartlari/mimari/2.jpg'> Çankırı şehrinin nüfusu 1927'de 8847 iken 1940'ta 10.235 olmuş, 1960'ta 20.047'ye, 1990'da da 45.496'ya ulaşmıştır. Önemli fabrikaları süt, yem, un ve kereste ile ilgilidir. Cumhuriyet döneminde ilk ve orta öğretim kurumlarının sayısında artış olmuş, son zamanlarda ise bilhassa meslekî ve teknik eğitimle ilgili yeni okullar açılmıştır. Diyanet İşleri Başkanlığı'nın 1991 yılı istatistiklerine göre Çankırı'da, il ve ilçe merkezlerinde 96, kasaba ve köylerinde 703 olmak üzere toplam 799 cami bulunmaktadır. İl merkezindeki cami sayısı ise otuz beştir. </p>
	<p> Çankırı şehrinin merkez olduğu Çankırı ili Kastamonu, Zonguldak, Bolu, Ankara, Kırıkkale ve Çorum illeriyle kuşatılmıştır. Merkez ilçeden başka Atkaracalar, Bayramören, Çerkeş, Eldivan, Eskipazar, Ilgaz, Kızılırmak, Korgun, Kurşunlu, Orta, Ovacık, Şabanözü ve Yapraklı adlı on üç ilçesi vardır. Sınırları içerisinde 477 köy bulunmaktadır. 8454 km2 genişliğindeki Çankırı ilinin 1990 sayımına göre nüfusu 279.129, nüfus yoğunluğu ise 33 idi. </p>
</div>
</body>
</html>

```
