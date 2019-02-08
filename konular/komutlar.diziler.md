# Dizi Komutları

Bu işlevler dizilerle çeşitli yollarla etkileşmek ve dizilerde değişiklik yapmak için kullanılır. Diziler esasen değişken kümeleri üzerinde işlemler yapmak, bunları değiştirmek ve saklamak içindir.

PHP'de bir dizi aslında sıralı bir eşlemdir. Bir eşlem, değerleri anahtarlarla ilişkilendiren bir veri türüdür. Bu veri türü farklı kullanım amaçları için en iyilenebilir; bir dizi, bir yöneysel liste, bir isim-değer çiftleri tablosu, bir sözlük, bir nesne listesi, yığıt, kuyruk ve daha bir sürü başka şey olarak ele alınabilir. Dizilerin değerleri, ağaçlar, diziler ve hatta çok boyutlu diziler bile olabilir.

Tüm bu veri yapılarının açıklanması bu kılavuzun amacını aşar. Fakat, en azından her biri için birer örnek verilebilir. Bu konuda daha fazla bilgi edinmek için bu konuyla ilgili olarak yayımlanmış eserleri inceleyiniz.

## Komut Listesi
Komut |Anlamı|
------------|-------------|
[array_change_key_case](php.net/array_change_key_case)|Bir dizideki tüm anahtarların harf büyüklüğünü değiştirir
[array_chunk](php.net/array_chunk)|Bir diziyi belli uzunlukta bölümlere ayırır
[array_column](php.net/array_column)|Return the values from a single column in the input array
[array_combine](php.net/array_combine)|Anahtarlar için bir dizi, değerler için ise başka bir dizi kullanarak bir ilişkisel dizi oluşturur
[array_count_values](php.net/array_count_values)|Bir dizideki tüm değerleri sayar
[array_diff_assoc](php.net/array_diff_assoc)|Dizilerin farkını hesaplarken ek olarak indisleri de karşılaştırır
[array_diff_key](php.net/array_diff_key)|Dizilerin farkını hesaplarken indisleri karşılaştırır
[array_diff_uassoc](php.net/array_diff_uassoc)|Dizilerin farkını hesaplarken ek olarak bir geriçağırım işlevi üzerinden indisleri de karşılaştırır
[array_diff_ukey](php.net/array_diff_ukey)|Karşılaştırma için bir geriçağırım işlevi kullanarak dizilerin farkını hesaplar
[array_diff](php.net/array_diff)|Dizilerin farkını hesaplar
[array_fill_keys](php.net/array_fill_keys)|Anahtarları belirtilen diziyi değerlerle doldurur
[array_fill](php.net/array_fill)|Bir diziyi değerlerle doldurur
[array_filter](php.net/array_filter)|Bir dizinin elemanlarını bir geriçağırım işleviyle süzgeçten geçirir
[array_flip](php.net/array_flip)|Bir dizideki anahtarlarla değerleri yer değiştirir
[array_intersect_assoc](php.net/array_intersect_assoc)|Dizilerin kesişimini hesaplarken ek olarak indisleri de karşılaştırır
[array_intersect_key](php.net/array_intersect_key)|Karşılaştırma için anahtarları kullanarak dizilerin kesişimini hesaplar
[array_intersect_uassoc](php.net/array_intersect_uassoc)|Dizilerin kesişimini hesaplarken ek olarak bir geriçağırım işlevi üzerinden indisleri de karşılaştırır
[array_intersect_ukey](php.net/array_intersect_ukey)|Anahtarları karşılaştırmak için bir geriçağırım işlevi kullanarak dizilerin kesişimini hesaplar
[array_intersect](php.net/array_intersect)|Dizilerin kesişimini hesaplar
[array_key_exists](php.net/array_key_exists)|Belirtilen anahtar veya indis dizide var mı diye bakar
[array_key_first](php.net/array_key_first)|Gets the first key of an array
[array_key_last](php.net/array_key_last)|Gets the last key of an array
[array_keys](php.net/array_keys)|Bir dizideki tüm anahtarları veya bir anahtar altkümesini döndürür
[array_map](php.net/array_map)|Belirtilen dizilerin elemanlarına geriçağırım işlevini uygular
[array_merge_recursive](php.net/array_merge_recursive)|İki veya daha fazla sayıda diziyi ardarda ekleyerek yeni bir dizi oluşturur
[array_merge](php.net/array_merge)|Belirtilen dizileri ardarda ekleyerek yeni bir dizi oluşturur
[array_multisort](php.net/array_multisort)|Çok sayıda diziyi veya çok boyutlu dizileri sıralar
[array_pad](php.net/array_pad)|Dizi boyutunu belirtilen boyuta çıkarırken, yeni elemanlara belirtilen değeri yerleştirir
[array_pop](php.net/array_pop)|Dizinin sonundaki elemanı diziden çıkartır
[array_product](php.net/array_product)|Bir dizideki değerlerin çarpımını bulur
[array_push](php.net/array_push)|Belli sayıda elemanı dizinin sonuna ekler
[array_rand](php.net/array_rand)|Bir diziden belli sayıda rasgele eleman döndürür
[array_reduce](php.net/array_reduce)|Bir geriçağırım işlevini dizinin bütün elemanlarına tek tek uygulayıp sonucu döndürür
[array_replace_recursive](php.net/array_replace_recursive)|İlk dizinin elemanlarını aktarılan dizilerden ardışık olarak günceller
[array_replace](php.net/array_replace)|İlk dizinin elemanlarını aktarılan dizilerden günceller
[array_reverse](php.net/array_reverse)|Diziyi tersine sıralayıp döndürür
[array_search](php.net/array_search)|Bir dizide belirtilen değeri arar ve bulursa ilgili anahtarı döndürür
[array_shift](php.net/array_shift)|Dizini başlangıcından bir eleman çeker
[array_slice](php.net/array_slice)|Bir dizinin belli bir bölümünü döndürür
[array_splice](php.net/array_splice)|Bir dizinin belli bir bölümünü silip yerine başka şeyler koyar
[array_sum](php.net/array_sum)|Bir dizideki değerlerin toplamını hesaplar
[array_udiff_assoc](php.net/array_udiff_assoc)|Veri karşılaştırması için bir geriçağırım işlevi kullanarak diziler arasındaki farkı indislerine de bakarak bulur
[array_udiff_uassoc](php.net/array_udiff_uassoc)|Veri ve indis karşılaştırması için bir geriçağırım işlevi kullanarak diziler arasındaki farkı indislerine de bakarak bulur|
[array_udiff](php.net/array_udiff)|Veri karşılaştırması için bir geriçağırım işlevi kullanarak diziler arasındaki farkı bulur
[array_uintersect_assoc](php.net/array_uintersect_assoc)|Veriyi bir geriçağırım işleviyle karşılaştırarak dizilerin kesişimini hesaplarken ek olarak indislere de bakar
[array_uintersect_uassoc](php.net/array_uintersect_uassoc)|Veriyi ve indisleri bir geriçağırım işleviyle karşılaştırarak dizilerin kesişimini hesaplarken ek olarak indislere de bakar
[array_uintersect](php.net/array_uintersect)|Veriyi bir geriçağırım işleviyle karşılaştırarak dizilerin kesişimini hesaplar
[array_unique](php.net/array_unique)|Diziden yinelenen değerleri siler
[array_unshift](php.net/array_unshift)|Bir dizinin başlangıcına bir veya daha fazla eleman ekler
[array_values](php.net/array_values)|Bir dizinin tüm değerlerini döndürür
[array_walk_recursive](php.net/array_walk_recursive)|Bir dizinin ardışık olarak her üyesine kullanıcı tanımlı bir işlevi uygular
[array_walk](php.net/array_walk)|Bir dizinin her üyesine kullanıcı tanımlı bir işlevi uygular
[array](php.net/array)|Bir dizi oluşturur
[arsort](php.net/arsort)|Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan tersine sıralar
[asort](php.net/asort)|Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan sıralar
[compact](php.net/compact)|Değişkenlerle değerlerinden oluşan bir dizi oluşturur
[count](php.net/count)|Bir dizideki eleman sayısını veya bir nesnedeki özellik sayısını döndürür
[current](php.net/current)|Bir diziden gösterici konumundaki elemanı döndürür
[each](php.net/each)|Bir diziden, gösterici konumundaki anahtar değer çiftini döndürdükten sonra göstericiyi bir ilerletir
[end](php.net/end)|Bir dizinin dahili göstericisini sonuncu elemana konumlandırır
[extract](php.net/extract)|Bir dizideki değişkenleri simge tablosuna dahil eder
[in_array](php.net/in_array)|Bir dizide bir değerin varlığını araştırır
[key_exists](php.net/key_exists)|Takma Adı: array_key_exists
[key](php.net/key)|Bir diziden gösterici konumundaki anahtarı döndürür
[krsort](php.net/krsort)|Bir diziyi anahtarlarına göre tersine sıralar
[ksort](php.net/ksort)|Bir diziyi anahtarlarına göre sıralar
[list](php.net/list)|Değişkenlere bir dizi gibi atama yapar
[natcasesort](php.net/natcasesort)|Bir diziyi harf büyüklüğüne duyarsız "doğal sıralama" algoritmasıyla sıralar
[natsort](php.net/natsort)|Bir diziyi "doğal sıralama" algoritmasıyla sıralar
[next](php.net/next)|Dahili dizi göstericisini bir ilerletir
[pos](php.net/pos)|current işlevinin takma adıdır
[prev](php.net/prev)|Dahili dizi göstericisini bir geriletir
[range](php.net/range)|Belli bir eleman aralığını içeren bir dizi oluşturur
[reset](php.net/reset)|Bir dizinin dahili göstericisini ilk elemana konumlar
[rsort](php.net/rsort)|Bir diziyi tersine sıralar
[shuffle](php.net/shuffle)|Bir diziyi karar
[sizeof](php.net/sizeof)|count işlevinin takma adıdır
[sort](php.net/sort)|Bir diziyi sıralar
[uasort](php.net/uasort)|Bir diziyi kullanıcı tanımlı bir işlev kullanarak indislerine göre sıralarken anahtar/değer ilişkisini korur
[uksort](php.net/uksort)|Bir diziyi kullanıcı tanımlı bir işlev kullanarak anahtarlarına göre sıralar
[usort](php.net/usort)|Bir diziyi kullanıcı tanımlı bir işlev kullanarak değerlerine göre sıralar

Ayrıca bakınız:
- [is_array](php.net/is_array)
- [explode](php.net/explode)
- [implode](php.net/implode)
- [split](php.net/split)
- [preg_split](php.net/preg_split)
- [unset](php.net/unset)


## Dizilerde Sıralama

İşlev ismi |	Sıralama yeri |	Anahtar değer ilişkisi |	Sıralama kuralı |	İlgili işlevler
------------|-------------|-------------|-------------|-------------
[array_multisort](php.net/array_multisort) |	değer |	ilişkiselse korunur, sayısalsa korunmaz |	ilk dizi veya sıralama seçenekleri |	[array_walk](php.net/array_walk)
[asort](php.net/asort) |	değer|	korunur |	küçükten büyüğe 	|[arsort](php.net/arsort)
[arsort](php.net/arsort) |	değer |	korunur |	büyükten küçüğe 	|[asort](php.net/asort)
[krsort](php.net/krsort) |	key |	korunur |	büyükten küçüğe |[ksort](php.net/ksort)
[ksort](php.net/ksort) |	key |	korunur|	küçükten büyüğe 	|[asort](php.net/asort)
[natcasesort](php.net/natcasesort) |	değer |	korunur |	doğal, harf büyüklüğüne duyarsız 	    |[natsort](php.net/natsort)
[natsort](php.net/natsort) |	değer |	korunur|	doğal 	|[natcasesort](php.net/natcasesort)
[rsort](php.net/rsort) |	değer |	korunmaz |	büyükten küçüğe |	[sort](php.net/sort)
[shuffle](php.net/shuffle) |	değer |	korunmaz|	rasgele |	[array_rand](php.net/array_rand)
[sort](php.net/sort) |	değer |	korunmaz |	küçükten büyüğe 	|[rsort](php.net/rsort)
[uasort](php.net/uasort) |	değer |	korunur |	kullanıcı tanımlı |	[uksort](php.net/uksort)
[uksort](php.net/uksort) |	key|	korunur |	kullanıcı tanımlı |	[uasort](php.net/uasort)
[usort](php.net/usort) |	değer |	korunmaz |	kullanıcı tanımlı 	|[uasort](php.net/uasort)
