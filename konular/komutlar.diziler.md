# Dizi Komutları

Bu işlevler dizilerle çeşitli yollarla etkileşmek ve dizilerde değişiklik yapmak için kullanılır. Diziler esasen değişken kümeleri üzerinde işlemler yapmak, bunları değiştirmek ve saklamak içindir.

PHP'de bir dizi aslında sıralı bir eşlemdir. Bir eşlem, değerleri anahtarlarla ilişkilendiren bir veri türüdür. Bu veri türü farklı kullanım amaçları için en iyilenebilir; bir dizi, bir yöneysel liste, bir isim-değer çiftleri tablosu, bir sözlük, bir nesne listesi, yığıt, kuyruk ve daha bir sürü başka şey olarak ele alınabilir. Dizilerin değerleri, ağaçlar, diziler ve hatta çok boyutlu diziler bile olabilir.

Tüm bu veri yapılarının açıklanması bu kılavuzun amacını aşar. Fakat, en azından her biri için birer örnek verilebilir. Bu konuda daha fazla bilgi edinmek için bu konuyla ilgili olarak yayımlanmış eserleri inceleyiniz.

## Komut Listesi
Komut |Anlamı|
------------|-------------|
[array_change_key_case](http://php.net/array-change-key-case)|Bir dizideki tüm anahtarların harf büyüklüğünü değiştirir
[array_chunk](http://php.net/array-chunk)|Bir diziyi belli uzunlukta bölümlere ayırır
[array_column](http://php.net/array-column)|Return the values from a single column in the input array
[array_combine](http://php.net/array-combine)|Anahtarlar için bir dizi, değerler için ise başka bir dizi kullanarak bir ilişkisel dizi oluşturur
[array_count_values](http://php.net/array-count-values)|Bir dizideki tüm değerleri sayar
[array_diff_assoc](http://php.net/array-diff-assoc)|Dizilerin farkını hesaplarken ek olarak indisleri de karşılaştırır
[array_diff_key](http://php.net/array-diff-key)|Dizilerin farkını hesaplarken indisleri karşılaştırır
[array_diff_uassoc](http://php.net/array-diff-uassoc)|Dizilerin farkını hesaplarken ek olarak bir geriçağırım işlevi üzerinden indisleri de karşılaştırır
[array_diff_ukey](http://php.net/array-diff-ukey)|Karşılaştırma için bir geriçağırım işlevi kullanarak dizilerin farkını hesaplar
[array_diff](http://php.net/array-diff)|Dizilerin farkını hesaplar
[array_fill_keys](http://php.net/array-fill-keys)|Anahtarları belirtilen diziyi değerlerle doldurur
[array_fill](http://php.net/array-fill)|Bir diziyi değerlerle doldurur
[array_filter](http://php.net/array-filter)|Bir dizinin elemanlarını bir geriçağırım işleviyle süzgeçten geçirir
[array_flip](http://php.net/array-flip)|Bir dizideki anahtarlarla değerleri yer değiştirir
[array_intersect_assoc](http://php.net/array-intersect-assoc)|Dizilerin kesişimini hesaplarken ek olarak indisleri de karşılaştırır
[array_intersect_key](http://php.net/array-intersect-key)|Karşılaştırma için anahtarları kullanarak dizilerin kesişimini hesaplar
[array_intersect_uassoc](http://php.net/array-intersect-uassoc)|Dizilerin kesişimini hesaplarken ek olarak bir geriçağırım işlevi üzerinden indisleri de karşılaştırır
[array_intersect_ukey](http://php.net/array-intersect-ukey)|Anahtarları karşılaştırmak için bir geriçağırım işlevi kullanarak dizilerin kesişimini hesaplar
[array_intersect](http://php.net/array-intersect)|Dizilerin kesişimini hesaplar
[array_key_exists](http://php.net/array-key-exists)|Belirtilen anahtar veya indis dizide var mı diye bakar
[array_key_first](http://php.net/array-key-first)|Gets the first key of an array
[array_key_last](http://php.net/array-key-last)|Gets the last key of an array
[array_keys](http://php.net/array-keys)|Bir dizideki tüm anahtarları veya bir anahtar altkümesini döndürür
[array_map](http://php.net/array-map)|Belirtilen dizilerin elemanlarına geriçağırım işlevini uygular
[array_merge_recursive](http://php.net/array-merge-recursive)|İki veya daha fazla sayıda diziyi ardarda ekleyerek yeni bir dizi oluşturur
[array_merge](http://php.net/array-merge)|Belirtilen dizileri ardarda ekleyerek yeni bir dizi oluşturur
[array_multisort](http://php.net/array-multisort)|Çok sayıda diziyi veya çok boyutlu dizileri sıralar
[array_pad](http://php.net/array-pad)|Dizi boyutunu belirtilen boyuta çıkarırken, yeni elemanlara belirtilen değeri yerleştirir
[array_pop](http://php.net/array-pop)|Dizinin sonundaki elemanı diziden çıkartır
[array_product](http://php.net/array-product)|Bir dizideki değerlerin çarpımını bulur
[array_push](http://php.net/array-push)|Belli sayıda elemanı dizinin sonuna ekler
[array_rand](http://php.net/array-rand)|Bir diziden belli sayıda rasgele eleman döndürür
[array_reduce](http://php.net/array-reduce)|Bir geriçağırım işlevini dizinin bütün elemanlarına tek tek uygulayıp sonucu döndürür
[array_replace_recursive](http://php.net/array-replace-recursive)|İlk dizinin elemanlarını aktarılan dizilerden ardışık olarak günceller
[array_replace](http://php.net/array-replace)|İlk dizinin elemanlarını aktarılan dizilerden günceller
[array_reverse](http://php.net/array-reverse)|Diziyi tersine sıralayıp döndürür
[array_search](http://php.net/array-search)|Bir dizide belirtilen değeri arar ve bulursa ilgili anahtarı döndürür
[array_shift](http://php.net/array-shift)|Dizini başlangıcından bir eleman çeker
[array_slice](http://php.net/array-slice)|Bir dizinin belli bir bölümünü döndürür
[array_splice](http://php.net/array-splice)|Bir dizinin belli bir bölümünü silip yerine başka şeyler koyar
[array_sum](http://php.net/array-sum)|Bir dizideki değerlerin toplamını hesaplar
[array_udiff_assoc](http://php.net/array-udiff-assoc)|Veri karşılaştırması için bir geriçağırım işlevi kullanarak diziler arasındaki farkı indislerine de bakarak bulur
[array_udiff_uassoc](http://php.net/array-udiff-uassoc)|Veri ve indis karşılaştırması için bir geriçağırım işlevi kullanarak diziler arasındaki farkı indislerine de bakarak bulur|
[array_udiff](http://php.net/array-udiff)|Veri karşılaştırması için bir geriçağırım işlevi kullanarak diziler arasındaki farkı bulur
[array_uintersect_assoc](http://php.net/array_uintersect-assoc)|Veriyi bir geriçağırım işleviyle karşılaştırarak dizilerin kesişimini hesaplarken ek olarak indislere de bakar
[array_uintersect_uassoc](http://php.net/array_uintersect-uassoc)|Veriyi ve indisleri bir geriçağırım işleviyle karşılaştırarak dizilerin kesişimini hesaplarken ek olarak indislere de bakar
[array_uintersect](http://php.net/array-uintersect)|Veriyi bir geriçağırım işleviyle karşılaştırarak dizilerin kesişimini hesaplar
[array_unique](http://php.net/array-unique)|Diziden yinelenen değerleri siler
[array_unshift](http://php.net/array-unshift)|Bir dizinin başlangıcına bir veya daha fazla eleman ekler
[array_values](http://php.net/array-values)|Bir dizinin tüm değerlerini döndürür
[array_walk_recursive](http://php.net/array-walk-recursive)|Bir dizinin ardışık olarak her üyesine kullanıcı tanımlı bir işlevi uygular
[array_walk](http://php.net/array-walk)|Bir dizinin her üyesine kullanıcı tanımlı bir işlevi uygular
[array](http://php.net/array)|Bir dizi oluşturur
[arsort](http://php.net/arsort)|Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan tersine sıralar
[asort](http://php.net/asort)|Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan sıralar
[compact](http://php.net/compact)|Değişkenlerle değerlerinden oluşan bir dizi oluşturur
[count](http://php.net/count)|Bir dizideki eleman sayısını veya bir nesnedeki özellik sayısını döndürür
[current](http://php.net/current)|Bir diziden gösterici konumundaki elemanı döndürür
[each](http://php.net/each)|Bir diziden, gösterici konumundaki anahtar değer çiftini döndürdükten sonra göstericiyi bir ilerletir
[end](http://php.net/end)|Bir dizinin dahili göstericisini sonuncu elemana konumlandırır
[extract](http://php.net/extract)|Bir dizideki değişkenleri simge tablosuna dahil eder
[in_array](http://php.net/in-array)|Bir dizide bir değerin varlığını araştırır
[key_exists](http://php.net/key-exists)|Takma Adı: array_key_exists
[key](http://php.net/key)|Bir diziden gösterici konumundaki anahtarı döndürür
[krsort](http://php.net/krsort)|Bir diziyi anahtarlarına göre tersine sıralar
[ksort](http://php.net/ksort)|Bir diziyi anahtarlarına göre sıralar
[list](http://php.net/list)|Değişkenlere bir dizi gibi atama yapar
[natcasesort](http://php.net/natcasesort)|Bir diziyi harf büyüklüğüne duyarsız "doğal sıralama" algoritmasıyla sıralar
[natsort](http://php.net/natsort)|Bir diziyi "doğal sıralama" algoritmasıyla sıralar
[next](http://php.net/next)|Dahili dizi göstericisini bir ilerletir
[pos](http://php.net/pos)|current işlevinin takma adıdır
[prev](http://php.net/prev)|Dahili dizi göstericisini bir geriletir
[range](http://php.net/range)|Belli bir eleman aralığını içeren bir dizi oluşturur
[reset](http://php.net/reset)|Bir dizinin dahili göstericisini ilk elemana konumlar
[rsort](http://php.net/rsort)|Bir diziyi tersine sıralar
[shuffle](http://php.net/shuffle)|Bir diziyi karar
[sizeof](http://php.net/sizeof)|count işlevinin takma adıdır
[sort](http://php.net/sort)|Bir diziyi sıralar
[uasort](http://php.net/uasort)|Bir diziyi kullanıcı tanımlı bir işlev kullanarak indislerine göre sıralarken anahtar/değer ilişkisini korur
[uksort](http://php.net/uksort)|Bir diziyi kullanıcı tanımlı bir işlev kullanarak anahtarlarına göre sıralar
[usort](http://php.net/usort)|Bir diziyi kullanıcı tanımlı bir işlev kullanarak değerlerine göre sıralar

Ayrıca bakınız:
- [is_array](http://php.net/is_array)
- [explode](http://php.net/explode)
- [implode](http://php.net/implode)
- [split](http://php.net/split)
- [preg_split](http://php.net/preg-split)
- [unset](http://php.net/unset)


## Dizilerde Sıralama

İşlev ismi |	Sıralama yeri |	Anahtar değer ilişkisi |	Sıralama kuralı |	İlgili işlevler
------------|-------------|-------------|-------------|-------------
[array_multisort](http://php.net/array_multisort) |	değer |	ilişkiselse korunur, sayısalsa korunmaz |	ilk dizi veya sıralama seçenekleri |	[array_walk](http://php.net/array_walk)
[asort](http://php.net/asort) |	değer|	korunur |	küçükten büyüğe 	|[arsort](http://php.net/arsort)
[arsort](http://php.net/arsort) |	değer |	korunur |	büyükten küçüğe 	|[asort](http://php.net/asort)
[krsort](http://php.net/krsort) |	key |	korunur |	büyükten küçüğe |[ksort](http://php.net/ksort)
[ksort](http://php.net/ksort) |	key |	korunur|	küçükten büyüğe 	|[asort](http://php.net/asort)
[natcasesort](http://php.net/natcasesort) |	değer |	korunur |	doğal, harf büyüklüğüne duyarsız 	    |[natsort](http://php.net/natsort)
[natsort](http://php.net/natsort) |	değer |	korunur|	doğal 	|[natcasesort](http://php.net/natcasesort)
[rsort](http://php.net/rsort) |	değer |	korunmaz |	büyükten küçüğe |	[sort](http://php.net/sort)
[shuffle](http://php.net/shuffle) |	değer |	korunmaz|	rasgele |	[array_rand](http://php.net/array_rand)
[sort](http://php.net/sort) |	değer |	korunmaz |	küçükten büyüğe 	|[rsort](http://php.net/rsort)
[uasort](http://php.net/uasort) |	değer |	korunur |	kullanıcı tanımlı |	[uksort](http://php.net/uksort)
[uksort](http://php.net/uksort) |	key|	korunur |	kullanıcı tanımlı |	[uasort](http://php.net/uasort)
[usort](http://php.net/usort) |	değer |	korunmaz |	kullanıcı tanımlı 	|[uasort](http://php.net/uasort)
