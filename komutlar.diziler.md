# Dizi Komutları

Bu işlevler dizilerle çeşitli yollarla etkileşmek ve dizilerde değişiklik yapmak için kullanılır. Diziler esasen değişken kümeleri üzerinde işlemler yapmak, bunları değiştirmek ve saklamak içindir.

PHP'de bir dizi aslında sıralı bir eşlemdir. Bir eşlem, değerleri anahtarlarla ilişkilendiren bir veri türüdür. Bu veri türü farklı kullanım amaçları için en iyilenebilir; bir dizi, bir yöneysel liste, bir isim-değer çiftleri tablosu, bir sözlük, bir nesne listesi, yığıt, kuyruk ve daha bir sürü başka şey olarak ele alınabilir. Dizilerin değerleri, ağaçlar, diziler ve hatta çok boyutlu diziler bile olabilir.

Tüm bu veri yapılarının açıklanması bu kılavuzun amacını aşar. Fakat, en azından her biri için birer örnek verilebilir. Bu konuda daha fazla bilgi edinmek için bu konuyla ilgili olarak yayımlanmış eserleri inceleyiniz.

## Komut Listesi
Komut |Anlamı|
------------|-------------|
```array_change_key_case``` |Bir dizideki tüm anahtarların harf büyüklüğünü değiştirir
```array_chunk```| Bir diziyi belli uzunlukta bölümlere ayırır
```array_column```| Return the values from a single column in the input array
```array_combine```| Anahtarlar için bir dizi, değerler için ise başka bir dizi kullanarak bir ilişkisel dizi oluşturur
```array_count_values```| Bir dizideki tüm değerleri sayar
```array_diff_assoc```| Dizilerin farkını hesaplarken ek olarak indisleri de karşılaştırır
```array_diff_key```| Dizilerin farkını hesaplarken indisleri karşılaştırır
```array_diff_uassoc```| Dizilerin farkını hesaplarken ek olarak bir geriçağırım işlevi üzerinden indisleri de karşılaştırır
```array_diff_ukey```| Karşılaştırma için bir geriçağırım işlevi kullanarak dizilerin farkını hesaplar
```array_diff```| Dizilerin farkını hesaplar
```array_fill_keys```| Anahtarları belirtilen diziyi değerlerle doldurur
```array_fill```| Bir diziyi değerlerle doldurur
```array_filter```| Bir dizinin elemanlarını bir geriçağırım işleviyle süzgeçten geçirir
```array_flip```| Bir dizideki anahtarlarla değerleri yer değiştirir
```array_intersect_assoc```| Dizilerin kesişimini hesaplarken ek olarak indisleri de karşılaştırır
```array_intersect_key```| Karşılaştırma için anahtarları kullanarak dizilerin kesişimini hesaplar
```array_intersect_uassoc```| Dizilerin kesişimini hesaplarken ek olarak bir geriçağırım işlevi üzerinden indisleri de karşılaştırır
```array_intersect_ukey```| Anahtarları karşılaştırmak için bir geriçağırım işlevi kullanarak dizilerin kesişimini hesaplar
```array_intersect```| Dizilerin kesişimini hesaplar
```array_key_exists```| Belirtilen anahtar veya indis dizide var mı diye bakar
```array_key_first```| Gets the first key of an array
```array_key_last```| Gets the last key of an array
```array_keys```| Bir dizideki tüm anahtarları veya bir anahtar altkümesini döndürür
```array_map```| Belirtilen dizilerin elemanlarına geriçağırım işlevini uygular
```array_merge_recursive```| İki veya daha fazla sayıda diziyi ardarda ekleyerek yeni bir dizi oluşturur
```array_merge```| Belirtilen dizileri ardarda ekleyerek yeni bir dizi oluşturur
```array_multisort```| Çok sayıda diziyi veya çok boyutlu dizileri sıralar
```array_pad```| Dizi boyutunu belirtilen boyuta çıkarırken, yeni elemanlara belirtilen değeri yerleştirir
```array_pop```| Dizinin sonundaki elemanı diziden çıkartır
```array_product```| Bir dizideki değerlerin çarpımını bulur
```array_push```| Belli sayıda elemanı dizinin sonuna ekler
```array_rand```| Bir diziden belli sayıda rasgele eleman döndürür
```array_reduce```| Bir geriçağırım işlevini dizinin bütün elemanlarına tek tek uygulayıp sonucu döndürür
```array_replace_recursive```| İlk dizinin elemanlarını aktarılan dizilerden ardışık olarak günceller
```array_replace```| İlk dizinin elemanlarını aktarılan dizilerden günceller
```array_reverse```| Diziyi tersine sıralayıp döndürür
```array_search```| Bir dizide belirtilen değeri arar ve bulursa ilgili anahtarı döndürür
```array_shift```| Dizini başlangıcından bir eleman çeker
```array_slice```| Bir dizinin belli bir bölümünü döndürür
```array_splice```| Bir dizinin belli bir bölümünü silip yerine başka şeyler koyar
```array_sum```| Bir dizideki değerlerin toplamını hesaplar
```array_udiff_assoc```| Veri karşılaştırması için bir geriçağırım işlevi kullanarak diziler arasındaki farkı indislerine de bakarak bulur
```array_udiff_uassoc```| Veri ve indis karşılaştırması için bir geriçağırım işlevi kullanarak diziler arasındaki farkı indislerine de bakarak bulur|
```array_udiff```| Veri karşılaştırması için bir geriçağırım işlevi kullanarak diziler arasındaki farkı bulur
```array_uintersect_assoc``` |Veriyi bir geriçağırım işleviyle karşılaştırarak dizilerin kesişimini hesaplarken ek olarak indislere de bakar
```array_uintersect_uassoc```| Veriyi ve indisleri bir geriçağırım işleviyle karşılaştırarak dizilerin kesişimini hesaplarken ek olarak indislere de bakar
```array_uintersect```| Veriyi bir geriçağırım işleviyle karşılaştırarak dizilerin kesişimini hesaplar
```array_unique```| Diziden yinelenen değerleri siler
```array_unshift``` |Bir dizinin başlangıcına bir veya daha fazla eleman ekler
```array_values```| Bir dizinin tüm değerlerini döndürür
```array_walk_recursive```| Bir dizinin ardışık olarak her üyesine kullanıcı tanımlı bir işlevi uygular
```array_walk``` |Bir dizinin her üyesine kullanıcı tanımlı bir işlevi uygular
```array```| Bir dizi oluşturur
```arsort```| Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan tersine sıralar
```asort```| Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan sıralar
```compact```| Değişkenlerle değerlerinden oluşan bir dizi oluşturur
```count```| Bir dizideki eleman sayısını veya bir nesnedeki özellik sayısını döndürür
```current```| Bir diziden gösterici konumundaki elemanı döndürür
```each```| Bir diziden, gösterici konumundaki anahtar değer çiftini döndürdükten sonra göstericiyi bir ilerletir
```end```| Bir dizinin dahili göstericisini sonuncu elemana konumlandırır
```extract```| Bir dizideki değişkenleri simge tablosuna dahil eder
```in_array```| Bir dizide bir değerin varlığını araştırır
```key_exists```| Takma Adı: array_key_exists
```key```| Bir diziden gösterici konumundaki anahtarı döndürür
```krsort```| Bir diziyi anahtarlarına göre tersine sıralar
```ksort```| Bir diziyi anahtarlarına göre sıralar
```list```| Değişkenlere bir dizi gibi atama yapar
```natcasesort```| Bir diziyi harf büyüklüğüne duyarsız "doğal sıralama" algoritmasıyla sıralar
```natsort```| Bir diziyi "doğal sıralama" algoritmasıyla sıralar
```next``` |Dahili dizi göstericisini bir ilerletir
```pos```| current işlevinin takma adıdır
```prev```| Dahili dizi göstericisini bir geriletir
```range```| Belli bir eleman aralığını içeren bir dizi oluşturur
```reset```| Bir dizinin dahili göstericisini ilk elemana konumlar
```rsort```| Bir diziyi tersine sıralar
```shuffle``` |Bir diziyi karar
```sizeof``` |count işlevinin takma adıdır
```sort```| Bir diziyi sıralar
```uasort```| Bir diziyi kullanıcı tanımlı bir işlev kullanarak indislerine göre sıralarken anahtar/değer ilişkisini korur
```uksort```| Bir diziyi kullanıcı tanımlı bir işlev kullanarak anahtarlarına göre sıralar
```usort```| Bir diziyi kullanıcı tanımlı bir işlev kullanarak değerlerine göre sıralar

Ayrıca bakınız: ```is_array()```, ```explode()```, ```implode()```, ```split()```, ```preg_split()``` ve ```unset()```.


## Dizilerde Sıralama

İşlev ismi |	Sıralama yeri |	Anahtar değer ilişkisi |	Sıralama kuralı |	İlgili işlevler
------------|-------------|-------------|-------------|-------------
array_multisort() |	değer |	ilişkiselse korunur, sayısalsa korunmaz |	ilk dizi veya sıralama seçenekleri |	array_walk()
asort() |	değer| 	korunur |	küçükten büyüğe 	|arsort()
arsort() |	değer |	korunur |	büyükten küçüğe 	|asort()
krsort() |	key |	korunur |	büyükten küçüğe | ksort()
ksort() |	key |	korunur| 	küçükten büyüğe 	| asort()
natcasesort() |	değer |	korunur |	doğal, harf büyüklüğüne duyarsız 	    | natsort()
natsort() |	değer |	korunur| 	doğal 	|natcasesort()
rsort() |	değer |	korunmaz |	büyükten küçüğe |	sort()
shuffle() |	değer |	korunmaz| 	rasgele |	array_rand()
sort() |	değer |	korunmaz |	küçükten büyüğe 	|rsort()
uasort() |	değer |	korunur |	kullanıcı tanımlı |	uksort()
uksort() |	key| 	korunur |	kullanıcı tanımlı |	uasort()
usort() |	değer |	korunmaz |	kullanıcı tanımlı 	|uasort()
