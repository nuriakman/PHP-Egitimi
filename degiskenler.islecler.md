
# PHP - DEĞİŞKENLER VE İŞLEÇLER


### PHP Nedir?

PHP muhtemelen internetteki en popüler betik dilidir. Web sayfalarını geliştirmek için kullanılır. PHP ile kullanıcı adı ve şifre giriş sayfaları oluşturma, formdaki ayrıntıları kontrol etme, forumlar oluşturma, resim galerileri, anketler ve daha pek çok şey yapabilirsiniz.


### PHP etiketleri
PHP bir dosyayı çözümlerken, hangi bölümü yorumlayıp hangi bölümü yorumlamadan geçeceğine karar vermek için <?php ve ?> açılış ve kapanış etiketlerine bakar. Bu şekilde çözümleme PHP'nin her çeşit farklı belgeye gömülmesini sağlar, çünkü bir çift açılış ve kapanış etiketinin dışındaki her şey PHP çözümleyicisi tarafından gözardı edilir.

PHP ayrıca kısa başlangıç etiketine de ```<?``` izin verir.

Bir dosya saf PHP kodu ise, dosyanın sonunda PHP kapanış etiketini koymamak tercih edilir.

PHP kodları ```php <?php .... ?>```etiketleri arasına yazılır.

### Deyim Ayrımı
PHP de deyimlerin birbirlerinden her bir deyimin sonuna konulacak noktalı virgülle ayrılmasını gerektirir.


### DEĞİŞKENLER
 PHP'de değişkenler dolar işaretini takip eden bir değişken adı ile gösterilir. Değişken adı büyük-küçük harf duyarlıdır. Geçerli bir değişken ismi bir harf veya alt çizgi imi ile başlar, herhangi sayıda harf, sayı veya alt çizgi iminden oluşur.
```php
$var = 'Kemal';
$Var = 'gel';
echo "$var, $Var";    // "Kemal, gel" yazdırır
```

### SABİT TANIMLAMA
```php
define("KDVORANI", 18);
$kdv_tutari = $FaturaToplami * KDVORANI / 100;
```

### HTML'den Kaçmak

```

<p>Bu bölüm PHP tarafından gözardı edilecek ve tarayıcıda gösterilecek.</p>
<?php echo 'Bu bölüm PHP tarafından çözümlenecektir.'; ?>
<p>Bu bölüm de PHP tarafından gözardı edilecek ve tarayıcıda gösterilecek.</p>

```
Örnek 1
```
<?php if (ifade == true): ?>
  İfade doğruysa bu gösterilir.
<?php else: ?>
  İfade doğru değilse bu gösterilir.
<?php endif; ?>

```
Örnek 2
```
<?= $SEHIR; ?> //Ekrana sehir değişkenini yazdırır.
```
Örnek 3
```
<?php echo $SEHIR; ?> //Ekrana sehir değişkenini yazdırır.
```

### PHP Kodu içine açıklama eklemek

Örnekler:
```
// This is a single line quote.

/* Title Here Notice the First Letters are Capitalized */

//======================================================================
// CATEGORY LARGE FONT
//======================================================================

//-----------------------------------------------------
// Sub-Category Smaller Font
//-----------------------------------------------------

#Option 1
#Option 2
#Option 3

/*
* This is a detailed explanation
* of something that should require
* several paragraphs of information.
*/
```


# PHP'DE İŞLEÇLER


### Aritmetik İşleçler

İşlem |Anlamı| Açıklaması|
------------|-------------|-------------
+$a    |   Özdeşlik |	$a'nın int veya float'a dönüşümü.
-$a 	   |     Olumsuzlama |	$a'nın eksi işaretlisi.
$a + $b | 	Toplama |	$a ile $b'nin toplamı.
$a - $b | 	Çıkarma |	$a'nın $b'den farkı.
$a * $b | 	Çarpma |	$a ile $b'nin çarpımı.
$a / $b | 	Bölme |	$a'nın $b'ye bölümü.
$a % $b | 	Kalan |	$a'nın $b'ye bölümünden kalan.
$a ** $b|  Üs |	$a üssü $b. PHP 5.6 ile eklendi.

### String İşleçler
```PHP
$a = "Merhaba ";
$b = $a . "Dünyalı!"; // $b artık "Merhaba Dünyalı!" içeriyor
$a = "Merhaba ";
$a .= "Dünyalı!";     // $a artık "Merhaba Dünyalı!" içeriyor
```
### Mantıksal İşleçler
İşlem |Anlamı|Açıklaması
------------|-------------|-------------
$a and $b |	Ve |  	$a ve $b  her ikisi de doğruysa sonuç doğrudur (TRUE).
$a or $b |	Veya 	| $a veya $b  doğruysa sonuç doğrudur.
$a xor $b |	Ayrıcalıklı Veya | 	$a veya $b doğruysa sonuç doğru, her ikiside doğruysa sonuç yanlıştır (FALSE).
!$a 	|Değil 	| $a doğru değilse sonuç doğrudur.
$a && $b |	Ve |	$a ve $b her ikisi de doğruysa sonuç doğrudur.
$a &#x7c;&#x7c; $b |	Veya 	| $a veya $b doğruysa sonuç doğrudur.


### Arttırım ve Eksiltim işleçleri

İşlem |Anlamı| Açıklaması
------------|-------------|-------------
++$a |	Önceden arttırım |	$a bir arttırıldıktan sonra döndürülür.
$a++ |	Sonradan arttırım |	$a döndürüldükten sonra değeri bir arttırılır.
--$a |	Önceden eksiltim |	$a bir eksiltildikten sonra döndürülür.
$a-- |	Sonradan eksiltim |	$a döndürüldükten sonra değeri bir eksiltilir.


### Çalıştırma İşleci (Ters Tırnak)
```PHP
$output = `ls -al`;
echo "<pre>$output</pre>";

$host = 'google.com';
echo `ping -n 3 {$host}`;
```
safe_mode etkinse veya shell_exec() işlevi etkin değilse, çalıştırma işleci etkin değildir.

### Hata Denetim İşleçleri
```PHP
$dosyam = @file('var_olmayan_dosya_adi');
if(!$dosyam) echo "Dosya açılamadı...";
```

### Karşılaştırma İşleçleri
İşlem | Anlamı|Açıklaması
------------|-------------|-------------
$a == $b|    Eşittir   |  Tür dönüşümünden sonra, $a ve $b aynı değere sahipse sonuç TRUE olur.
$a === $b|   Aynıdır   |  $a ve $b aynı değere sahipse ve türleri de aynıysa sonuç TRUE olur.
$a != $b|    Eşit değildir |  Tür dönüşümünden sonra, $a ve $b aynı değere sahip değilse sonuç TRUE olur.
$a <> $b|    Eşit değildir  | Tür dönüşümünden sonra, $a ve $b aynı değere sahip değilse sonuç TRUE olur.
$a !== $b |  Farklıdır   |$a ve $b aynı değere sahip değilse veya türleri aynı değilse sonuç TRUE olur.
$a < $b |    Küçüktür  |  $a kesin olarak $b'den küçükse sonuç TRUE olur.
$a > $b |    Büyüktür  |  $a kesin olarak $b'den büyükse sonuç TRUE olur.
$a <= $b|    Küçük veya eşittir | $a, $b'den küçük veya ona eşitse sonuç TRUE olur.
$a >= $b|    Büyük veya eşittir | $a, $b'den büyük veya ona eşitse sonuç TRUE olur.


### Bitsel İşleçler
İşlem | Anlamı |Açıklaması
------------|-------------|-------------
$a & $b |    Ve | Hem $a hem de $b'de 1 olan bitler sonuçta 1 yapılır.
$a &#x7c; $b  |    Veya |   $a veya $b'de 1 olan bitler sonuçta 1 yapılır.
$a ^ $b |    Ayrıcalıklı Veya  |  Hem $a hem de $b'de 0 veya 1 olan bitler sonuçta 0, diğerleri 1 yapılır.
~ $a    |    Değil |  $a'nın 0 olan bitleri 1, 1 olanları 0 yapılır.
$a << $b|    Sola kaydırma |  $a'nın bitleri $b adım sola kaydırılır (her adım ikiyle çarpma işlemine denktir).
$a >> $b|    Sağa kaydırma |  $a'nın bitleri $b adım sağa kaydırılır (her adım ikiye bölme işlemine denktir).

### Atama İşleçi
```PHP
$a = ($b = 4) + 5; // $a'nın değeri 9, $b'nin değeri 4 olur.
$a = 3;
$a += 5; // $a'nın değeri 8 olur, asıl işlem: $a = $a + 5;
$b = "Herkese ";
$b .= "Merhaba!"; // $b'nin değeri "Herkese Merhaba!" olur.
                  // asıl işlem: $b = $b . "Merhaba!";
```
### Gönderimli Atama İşleçi (by Referance)
```PHP
$a = 3;
$b = &$a; // $b, $a'ya bir gönderimdir
print "$a\n"; // 3 basar
print "$b\n"; // 3 basar
```

# DENETİM YAPILARI

### if
```PHP
if ($a > $b) echo "a büyüktür b";
```
### if / else
```PHP
if ($a > $b) {
    echo "a büyüktür b";
} else {
    echo "a büyük değildir b";
}
```
### elseif
```PHP
if ($a == 5):
    echo "a eşittir 5";
    echo "...";
elseif ($a == 6):
    echo "a eşittir 6";
    echo "!!!";
else:
    echo "a ne 5 ne de 6'dır";
endif;
```
### while

```PHP
/* örnek 1 */
$i = 1;
while ($i <= 10) {
    echo $i++;
    $i++;
}

/* örnek 2 */
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
```
### do - while
```PHP
$i = 0;
do {
    echo $i;
} while ($i > 0);
```
### for
```PHP
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
```
### foreach
Örnek 1
```PHP
$dizi = array(1, 2, 3, 4);
foreach ($dizi as $deger) {
    echo $deger;
}
```
Örnek 2
```PHP
$arr1 = array("a" => 1, "b" => 2, "c" => 3);
foreach ($arr2 as $key => $val) {
    echo  "<p>$key elemanının değeri: $val</p>";
}
```
### break
break deyimi, for, foreach, while, do-while ve switch yapılarının çalışmasını sonlandırmak için kullanılır.

### continue
continue deyimi, for, foreach, while ve do-while döngü yapılarının içinde kullanılır. Bu deyim kullanıldığında, döngünün kalan kısmı atlanır ve sonraki yineleme başlatılır.

### switch
Örnek 1
```PHP
switch ($i) {
case "elma":
    echo "i bir elmadır";
    break;
case "çikolata":
    echo "i bir çikolatadır";
    break;
case "kek":
    echo "i bir kektir";
    break;
default;
    echo 'Lütfen yeniden seçiniz...';
}
```
Örnek 2
```PHP
switch ($i) {
    case 0:
    case 1:
    case 2:
        echo "i 3'ten küçüktür ama negatif değildir";
        break;
    case 3:
        echo "i eşittir 3";
    default;
        echo 'Lütfen yeniden seçiniz...';
}
```
### return
return program denetimini çağrıldığı modüle döndürür ve program kendinden sonra gelen ifadeden itibaren çalışmayı sürdürür.

```PHP
/* Çağrıan modüle dön */

return;

/* Tek bir değer dön */*

return 'Merhaba!';

return $Sonuc;

/* Birden fazla deger dönme */

return array(7889, "Ankara", 678); // list($sayi1, $sehir, $sayi2) = fonksiyonadi(); //seklinde kullanılır
```

### include
include deyimi belirtilen dosyayı betiğe ekler ve içeriğini değerlendirir.

### include_once
include_once deyimi, bir betiğin çalışması esnasında aynı dosyanın bir kereden fazla dahil edilme ihtimaline karşı, bu dosyanın yalnızca bir kere dahil edileceğinden emin olunmak istenirse kullanılmalıdır.

### require
require deyimi bir başarısızlıkta ölümcül bir hata vermesi dışında include deyimi ile aynıdır.

### require_once
require_once deyimi, dosyayı evvelce dahil edilmişse tekrar dahil etmemesi dışında require deyimiyle aynıdır.

### goto
```PHP
goto SONUC;
echo $a;

SONUC:

echo 'Sonuç etiketine yönlendik';
```


### Öntanımlı Değişkenler / Süper küreseller

Süper küreseller — Süper küreseller bütün etki alanlarında daima mevcut olan yerleşik değişkenlerdir

 PHP'de öntanımlı değişkenlerin çoğu "süper küresel"dir. Bu, betik boyunca bütün etki alanlarında kullanılabilir oldukları anlamına gelir. İşlevler veya yöntemler içinde bu değişkenlere erişmek için global $değişken; yapmak gerekmez. 


Değişken |Anlamı|
------------|-------------|
```$GLOBALS``` | Küresel alanda bulunan bütün değişkenleri içerir
```$_SERVER``` | Sunucu ve işletme ortamı bilgisi
```$_GET``` | HTTP GET değişkenleri
```$_POST``` | HTTP POST değişkenleri
```$_FILES``` | HTTP Dosya Yükleme değişkenleri
```$_REQUEST``` | HTTP İstek değişkenleri
```$_SESSION``` | Oturum değişkenleri
```$_ENV``` | Ortam değişkenleri
```$_COOKIE``` | HTTP Çerezleri

