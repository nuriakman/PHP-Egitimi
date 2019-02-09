# Dizge Komutları - String Komutları

Bu işlevlerin hepsi dizgelerde çeşitli yollarla değişiklik yapmak için kullanılır. Daha özelleştirilmiş işlevleri düzenli ifadeler ve URL işlevleri bölümlerinde bulabilirsiniz.

Dizgelerin davranışları, özellikle de çift tırnak, tek tırnak ve önceleme dizilimleri kullanımları hakkında bilgi edinmek için Türler bölümündeki strings belgesine bakınız.


## Komut Listesi
Komut |Anlamı|
------------|-------------|
[addcslashes](http://php.net/addcslashes) | Dizgeye C tarzı öncelem uygular
[addslashes](http://php.net/addslashes) | Özel karakterlerin önüne tersbölü yerleştirir
[bin2hex](http://php.net/bin2hex) | Bir ikil verinin onaltılık gösterimini elde eder
[chop](http://php.net/chop) | rtrim işlevinin takma adıdır
[chr](http://php.net/chr) | Kodu belirtilen karakteri döndürür
[chunk_split](http://php.net/chunk-split) | Bir dizgeyi daha küçük parçalara ayırır
[convert_cyr_string](http://php.net/convert-cyr-string) | Bir Kril karakter kümesini bir diğerine çevirir
[convert_uudecode](http://php.net/convert-uudecode) | Uuencoded ile kodlanmış bir dizgeyi eski haline getirir
[convert_uuencode](http://php.net/convert-uuencode) | Bir dizgeyi uuencode algoritmasıyla kodlar
[count_chars](http://php.net/count-chars) | Bir dizgedeki karakterler hakkında bilgi döndürür
[crc32](http://php.net/crc32) | Bir dizgenin crc32 çok terimlisini hesaplar
[crypt](http://php.net/crypt) | Tek yönlü dizge şifrelemesi yapar
[echo](http://php.net/echo) | Bir veya daha fazla dizgeyi çıktılar
[explode](http://php.net/explode) | Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir
[fprintf](http://php.net/fprintf) | Biçemli dizgeyi bir akıma yazar
[get_html_translation_table](http://php.net/get-html-translation-table) | htmlspecialchars ve htmlentities tarafından kullanılan dönüşüm tablosunu döndürür
[hebrev](http://php.net/hebrev) | Mantıksal İbranice metni görsel metne dönüştürür
[hebrevc](http://php.net/hebrevc) | Mantıksal İbranice metni satırsonlarıyla birlikte görsel metne dönüştürür
[hex2bin](http://php.net/hex2bin) | Decodes a hexadecimally encoded binary string
[html_entity_decode](http://php.net/html-entity-decode) | Dönüştürülebilecek tüm HTML öğelerini karakter haline getirir
[htmlentities](http://php.net/htmlentities) | Dönüştürülebilecek tüm karakterleri HTML öğeleri haline getirir
[htmlspecialchars_decode](http://php.net/htmlspecialchars_decode) | Özel HTML öğelerini gerisin geriye karakterlere dönüştürür
[htmlspecialchars](http://php.net/htmlspecialchars) | Özel karakterleri HTML öğeleri haline getirir
[implode](http://php.net/implode) | Dizi elemanlarını birleştirip bir dizge elde eder
[join](http://php.net/join) | implode işlevinin takma adıdır
[lcfirst](http://php.net/lcfirst) | Bir dizgenin ilk karakterini küçük harf yapar
[levenshtein](http://php.net/levenshtein) | İki dizge arasındaki Levenştayn mesafesini hesaplar
[localeconv](http://php.net/localeconv) | Sayısal biçemleme bilgisini döndürür
[ltrim](http://php.net/ltrim) | Dizgenin başındaki boşlukları (veya diğer karakterleri) budar
[md5_file](http://php.net/md5-file) | Belirtilen dosyanın md5 özetini hesaplar
[md5](http://php.net/md5) | Bir dizgenin md5 özetini hesaplar
[metaphone](http://php.net/metaphone) | Bir dizgenin metafon anahtarını hesaplar
[money_format](http://php.net/money-format) | Bir sayıyı para olarak biçemler
[nl_langinfo](http://php.net/nl-langinfo) | Dili ve yerel bilgisini sorgular
[nl2br](http://php.net/nl2br) | Dizgedeki tüm satırsonlarının yerine HTML satır katlayıcıları yerleştirilir
[number_format](http://php.net/number-format) | Sayıyı binlik bölümlere ayırır
[ord](http://php.net/ord) | Karakterin ASCII değerini döndürür
[parse_str](http://php.net/parse-str) | Dizge içindeki değişkenleri çözümler
[print](http://php.net/print) | Bir dizge çıktılar
[printf](http://php.net/printf) | Biçemli bir dizge çıktılar
[quoted_printable_decode](http://php.net/quoted-printable-decode) | ASCII olarak basılabilir (quoted-printable) bir dizgenin 8 bitlik sürümünü döndürür
[quoted_printable_encode](http://php.net/quoted-printable-encode) | 8 bitlik bir dizgenin ASCII olarak basılabilir (quoted-printable) sürümünü döndürür
[quotemeta](http://php.net/quotemeta) | Özel anlamı olan karakterleri tersbölü ile önceler
[rtrim](http://php.net/rtrim) | Dizgenin sonundaki boşlukları (veya diğer karakterleri) budar
[setlocale](http://php.net/setlocale) | Yereli ayarlar
[sha1_file](http://php.net/sha1-file) | Bir dosyanın sha1 özetini hesaplar
[sha1](http://php.net/sha1) | Bir dizgenin sha1 özetini hesaplar
[similar_text](http://php.net/similar-text) | İki dizge arasındaki benzerliği hesaplar
[soundex](http://php.net/soundex) | Bir dizgenin sestek anahtarını hesaplar
[sprintf](http://php.net/sprintf) | Biçemli bir dizge döndürür
[sscanf](http://php.net/sscanf) | Girdi dizgesini belli bir biçeme göre yorumlar
[str_getcsv](http://php.net/str-getcsv) | Bir CSV dizgesinin girdilerini bir dizinin elemanlarına paylaştırır
[str_ireplace](http://php.net/str-ireplace) | Bir alt dizgenin bütün örneklerini yenisiyle değiştirirken harf büyüklüklerini dikkate almaz
[str_pad](http://php.net/str-pad) | Bir dizgeyi belli bir uzunlukta diğer dizgeyle doldurur
[str_repeat](http://php.net/str-repeat) | Bir dizgeyi yineler
[str_replace](http://php.net/str-replace) | Bir alt dizgenin bütün örneklerini yenisiyle değiştirir
[str_rot13](http://php.net/str-rot13) | Bir dizgeye rot13 dönüşümü uygular
[str_shuffle](http://php.net/str-shuffle) | Bir dizgenin karakterlerini devşirir
[str_split](http://php.net/str-split) | Bir dizgeyi bir diziye dönüştürür
[str_word_count](http://php.net/str-word-count) | Bir dizgedeki sözcükler hakkında bilgi verir
[strcasecmp](http://php.net/strcasecmp) | İkil olarak güvenilir ve harf büyüklüğüne duyarsız dizge karşılaştırması yapar
[strchr](http://php.net/strchr) | strstr işlevinin takma adıdır
[strcmp](http://php.net/strcmp) | İkil olarak güvenilir dizge karşılaştırması yapar
[strcoll](http://php.net/strcoll) | Yerele göre dizge karşılaştırma
[strcspn](http://php.net/strcspn) | Maske ile eşleşMEyen ilk parçanın uzunluğunu bulur
[strip_tags](http://php.net/strip-tags) | Bir dizgeden HTML ve PHP etiketlerini ayıklar
[stripcslashes](http://php.net/stripcslashes) | addcslashes ile öncelenmiş dizgeyi eski haline getirir
[stripos](http://php.net/stripos) | Harf büyüklüğüne duyarsız olarak bir alt dizgenin ilkinin konumunu bulur
[stripslashes](http://php.net/stripslashes) | Bir dizgeden tersbölüleri ayıklar
[stristr](http://php.net/stristr) | Harf büyüklüğüne duyarsız olarak ilk alt dizgeyi bulur
[strlen](http://php.net/strlen) | Dizge uzunluğunu döndürür
[strnatcasecmp](http://php.net/strnatcasecmp) | "Doğal sıralama" algoritmasını kullanarak dizgeleri harf büyüklüğüne duyarsız olarak karşılaştırır
[strnatcmp](http://php.net/strnatcmp) | "Doğal sıralama" algoritmasını kullanarak dizgeleri karşılaştırır
[strncasecmp](http://php.net/strncasecmp) | İlk n karakteri ikil ve harf büyüklüğüne duyarsız olarak karşılaştırır
[strncmp](http://php.net/strncmp) | İlk n karakteri ikil olarak karşılaştırır
[strpbrk](http://php.net/strpbrk) | Belirtilen karakterleri bir dizge içinde arar
[strpos](http://php.net/strpos) | Bir alt dizgenin ilkinin konumunu bulur
[strrchr](http://php.net/strrchr) | Bir dizgede belli bir karakterin sonuncusuna göre dizgenin bir parçasıyla döner
[strrev](http://php.net/strrev) | Bir dizgeyi ters çevirir
[strripos](http://php.net/strripos) | Bir dizgede harf büyüklüğüne duyarsız olarak bir alt dizgenin sonuncusunu bulur
[strrpos](http://php.net/strrpos) | Bir dizgede bir karakterin sonuncusunu bulur
[strspn](http://php.net/strspn) | Dizgenin, maskenin tam karakterleri ile eşleşen ilk parçasının uzunluğunu bulur
[strstr](http://php.net/strstr) | İlk alt dizgeyi bulur
[strtok](http://php.net/strtok) | Dizgeyi bir dizgeciğe göre böler
[strtolower](http://php.net/strtolower) | Bir dizgenin harflerini küçük harfe çevirir
[strtoupper](http://php.net/strtoupper) | Bir dizgenin harflerini büyük harfe çevirir
[strtr](http://php.net/strtr) | Belli karakterleri dönüştürür
[substr_compare](http://php.net/substr-compare) | İki dizgenin belli bir konumdan itibaren belli uzunluktaki parçalarını bayt bayt karşılaştırır
[substr_count](http://php.net/substr-count) | Bir dizge içinde belli bir alt dizgeden kaç tane bulunduğunu bulur
[substr_replace](http://php.net/substr-replace) | Bir dizgenin belli bir bölümünü değiştirir
[substr](http://php.net/substr) | Dizgenin bir kısmını döndürür
[trim](http://php.net/trim) | Dizgenin başındaki ve sonundaki boşlukları (veya diğer karakterleri) budar
[ucfirst](http://php.net/ucfirst) | Dizgenin ilk karakterini büyük harfe çevirir
[ucwords](http://php.net/ucwords) | Dizgedeki her sözcüğün ilk harfini büyük harf yapar
[vfprintf](http://php.net/vfprintf) | Biçemli dizgeyi bir akıma yazar
[vprintf](http://php.net/vprintf) | Biçemli bir dizge çıktılar
[vsprintf](http://php.net/vsprintf) | Biçemli bir dizge döndürür
[wordwrap](http://php.net/wordwrap) | Bir dizgeyi belli bir uzunlukta katlar
