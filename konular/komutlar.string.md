# Dizge Komutları - String Komutları

Bu işlevlerin hepsi dizgelerde çeşitli yollarla değişiklik yapmak için kullanılır. Daha özelleştirilmiş işlevleri düzenli ifadeler ve URL işlevleri bölümlerinde bulabilirsiniz.

Dizgelerin davranışları, özellikle de çift tırnak, tek tırnak ve önceleme dizilimleri kullanımları hakkında bilgi edinmek için Türler bölümündeki strings belgesine bakınız.


## Komut Listesi
Komut |Anlamı|
------------|-------------|
```addcslashes``` | Dizgeye C tarzı öncelem uygular
```addslashes``` | Özel karakterlerin önüne tersbölü yerleştirir
```bin2hex``` | Bir ikil verinin onaltılık gösterimini elde eder
```chop``` | rtrim işlevinin takma adıdır
```chr``` | Kodu belirtilen karakteri döndürür
```chunk_split``` | Bir dizgeyi daha küçük parçalara ayırır
```convert_cyr_string``` | Bir Kril karakter kümesini bir diğerine çevirir
```convert_uudecode``` | Uuencoded ile kodlanmış bir dizgeyi eski haline getirir
```convert_uuencode``` | Bir dizgeyi uuencode algoritmasıyla kodlar
```count_chars``` | Bir dizgedeki karakterler hakkında bilgi döndürür
```crc32``` | Bir dizgenin crc32 çok terimlisini hesaplar
```crypt``` | Tek yönlü dizge şifrelemesi yapar
```echo🚩``` | Bir veya daha fazla dizgeyi çıktılar
```explode``` | Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir
```fprintf``` | Biçemli dizgeyi bir akıma yazar
```get_html_translation_table``` | htmlspecialchars ve htmlentities tarafından kullanılan dönüşüm tablosunu döndürür
```hebrev``` | Mantıksal İbranice metni görsel metne dönüştürür
```hebrevc``` | Mantıksal İbranice metni satırsonlarıyla birlikte görsel metne dönüştürür
```hex2bin``` | Decodes a hexadecimally encoded binary string
```html_entity_decode``` | Dönüştürülebilecek tüm HTML öğelerini karakter haline getirir
```htmlentities``` | Dönüştürülebilecek tüm karakterleri HTML öğeleri haline getirir
```htmlspecialchars_decode``` | Özel HTML öğelerini gerisin geriye karakterlere dönüştürür
```htmlspecialchars``` | Özel karakterleri HTML öğeleri haline getirir
```implode``` | Dizi elemanlarını birleştirip bir dizge elde eder
```join``` | implode işlevinin takma adıdır
```lcfirst``` | Bir dizgenin ilk karakterini küçük harf yapar
```levenshtein``` | İki dizge arasındaki Levenştayn mesafesini hesaplar
```localeconv``` | Sayısal biçemleme bilgisini döndürür
```ltrim``` | Dizgenin başındaki boşlukları (veya diğer karakterleri) budar
```md5_file``` | Belirtilen dosyanın md5 özetini hesaplar
```md5``` | Bir dizgenin md5 özetini hesaplar
```metaphone``` | Bir dizgenin metafon anahtarını hesaplar
```money_format``` | Bir sayıyı para olarak biçemler
```nl_langinfo``` | Dili ve yerel bilgisini sorgular
```nl2br``` | Dizgedeki tüm satırsonlarının yerine HTML satır katlayıcıları yerleştirilir
```number_format``` | Sayıyı binlik bölümlere ayırır
```ord``` | Karakterin ASCII değerini döndürür
```parse_str``` | Dizge içindeki değişkenleri çözümler
```print``` | Bir dizge çıktılar
```printf``` | Biçemli bir dizge çıktılar
```quoted_printable_decode``` | ASCII olarak basılabilir (quoted-printable) bir dizgenin 8 bitlik sürümünü döndürür
```quoted_printable_encode``` | 8 bitlik bir dizgenin ASCII olarak basılabilir (quoted-printable) sürümünü döndürür
```quotemeta``` | Özel anlamı olan karakterleri tersbölü ile önceler
```rtrim``` | Dizgenin sonundaki boşlukları (veya diğer karakterleri) budar
```setlocale``` | Yereli ayarlar
```sha1_file``` | Bir dosyanın sha1 özetini hesaplar
```sha1``` | Bir dizgenin sha1 özetini hesaplar
```similar_text``` | İki dizge arasındaki benzerliği hesaplar
```soundex``` | Bir dizgenin sestek anahtarını hesaplar
```sprintf``` | Biçemli bir dizge döndürür
```sscanf``` | Girdi dizgesini belli bir biçeme göre yorumlar
```str_getcsv``` | Bir CSV dizgesinin girdilerini bir dizinin elemanlarına paylaştırır
```str_ireplace``` | Bir alt dizgenin bütün örneklerini yenisiyle değiştirirken harf büyüklüklerini dikkate almaz
```str_pad``` | Bir dizgeyi belli bir uzunlukta diğer dizgeyle doldurur
```str_repeat``` | Bir dizgeyi yineler
```str_replace``` | Bir alt dizgenin bütün örneklerini yenisiyle değiştirir
```str_rot13``` | Bir dizgeye rot13 dönüşümü uygular
```str_shuffle``` | Bir dizgenin karakterlerini devşirir
```str_split``` | Bir dizgeyi bir diziye dönüştürür
```str_word_count``` | Bir dizgedeki sözcükler hakkında bilgi verir
```strcasecmp``` | İkil olarak güvenilir ve harf büyüklüğüne duyarsız dizge karşılaştırması yapar
```strchr``` | strstr işlevinin takma adıdır
```strcmp``` | İkil olarak güvenilir dizge karşılaştırması yapar
```strcoll``` | Yerele göre dizge karşılaştırma
```strcspn``` | Maske ile eşleşMEyen ilk parçanın uzunluğunu bulur
```strip_tags``` | Bir dizgeden HTML ve PHP etiketlerini ayıklar
```stripcslashes``` | addcslashes ile öncelenmiş dizgeyi eski haline getirir
```stripos``` | Harf büyüklüğüne duyarsız olarak bir alt dizgenin ilkinin konumunu bulur
```stripslashes``` | Bir dizgeden tersbölüleri ayıklar
```stristr``` | Harf büyüklüğüne duyarsız olarak ilk alt dizgeyi bulur
```strlen``` | Dizge uzunluğunu döndürür
```strnatcasecmp``` | "Doğal sıralama" algoritmasını kullanarak dizgeleri harf büyüklüğüne duyarsız olarak karşılaştırır
```strnatcmp``` | "Doğal sıralama" algoritmasını kullanarak dizgeleri karşılaştırır
```strncasecmp``` | İlk n karakteri ikil ve harf büyüklüğüne duyarsız olarak karşılaştırır
```strncmp``` | İlk n karakteri ikil olarak karşılaştırır
```strpbrk``` | Belirtilen karakterleri bir dizge içinde arar
```strpos``` | Bir alt dizgenin ilkinin konumunu bulur
```strrchr``` | Bir dizgede belli bir karakterin sonuncusuna göre dizgenin bir parçasıyla döner
```strrev``` | Bir dizgeyi ters çevirir
```strripos``` | Bir dizgede harf büyüklüğüne duyarsız olarak bir alt dizgenin sonuncusunu bulur
```strrpos``` | Bir dizgede bir karakterin sonuncusunu bulur
```strspn``` | Dizgenin, maskenin tam karakterleri ile eşleşen ilk parçasının uzunluğunu bulur
```strstr``` | İlk alt dizgeyi bulur
```strtok``` | Dizgeyi bir dizgeciğe göre böler
```strtolower``` | Bir dizgenin harflerini küçük harfe çevirir
```strtoupper``` | Bir dizgenin harflerini büyük harfe çevirir
```strtr``` | Belli karakterleri dönüştürür
```substr_compare``` | İki dizgenin belli bir konumdan itibaren belli uzunluktaki parçalarını bayt bayt karşılaştırır
```substr_count``` | Bir dizge içinde belli bir alt dizgeden kaç tane bulunduğunu bulur
```substr_replace``` | Bir dizgenin belli bir bölümünü değiştirir
```substr``` | Dizgenin bir kısmını döndürür
```trim``` | Dizgenin başındaki ve sonundaki boşlukları (veya diğer karakterleri) budar
```ucfirst``` | Dizgenin ilk karakterini büyük harfe çevirir
```ucwords``` | Dizgedeki her sözcüğün ilk harfini büyük harf yapar
```vfprintf``` | Biçemli dizgeyi bir akıma yazar
```vprintf``` | Biçemli bir dizge çıktılar
```vsprintf``` | Biçemli bir dizge döndürür
```wordwrap``` | Bir dizgeyi belli bir uzunlukta katlar
