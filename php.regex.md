# Regular expression (regex),
 Türkçesiyle düzenli ifadeler metinlerde bir biçimsel dil kullanarak tarif edilen kısımları seçip ayırmamıza yarayan bir programdır.

Regex'i kullanabilmemiz için php de bilmemiz gereken bazı fonksiyonlar vardır.
## preg_match
Bir düzenli ifadeyi eşleştirmeye çalışır.

## preg_match_all
Kapsamlı bir düzenli ifade eşleştirmesi yapar.

```php
$IsimSoyisim = "Kemal.Mutlu";
$pattern = '/([a-zA-Z]+).([a-zA-Z]+)/';
preg_match_all($desen, $IsimSoyisim, $dizi);
print_r($dizi);
```
Yukarıdaki örnekte Kemal.Mutlu yazısını parçaladık.a-zA-Z büyük küçük farketmeden bütün harfleri almamızı sağlar.Parantez içine aldığımızda ise bunları gruplar.```([a-zA-Z]+).``` bu bölüm bize "." ya kadar olan bölümü bir grup yaptı.Diğer grubada aynı işlemi uyguladığımızda Kemal'i ve Mutlu'yu ayırmış oluyoruz.

Php de desen yazarken bir sınırlayıcı belirtmemiz şarttır.Örnek verecek olursak:
- /desen/
- #desen#
- @desen@
- &#95;desen_
Yani bir deseni yazmak için bir sınırlayıcı belirtiyoruz ve deseni o sınırlayıcı ile sonlandırıyoruz.



Aşağıdaki örneği ele alalım.Bir dosyamız var ve ieçrisindeki şehirleri ve isimleri ayırmak istiyoruz.O zaman yapmamız gereken nereden ayıracağımıza karar vermek.

Dosyamızın içerisinde bu bilgilerin olduğunu düşünelim:

AFYON: Mehmet Zeybek
ANKARA: Mehmet Özhaseki
BALIKESİR: Yücel Yılmaz

Bunun için şöyle bir desen yazabiliriz:
```php
$dosya =  file_get_contents('file.txt'); //Dosyamızı çağırdık.
          $desen = '/(.*):(.*)/'; // Desenini belirttik.
          preg_match_all($desen,$dosya, $dizi); // Dizi adlı değişkene dizi olarak kaydettik.
```

Buradaki desen bize şunu anlatıyor.En baştan başla ":" gelince dur bir grup yap.":" noktadan sonra başla sona kadar git bir grup yap.
