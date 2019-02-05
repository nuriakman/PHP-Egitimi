# PHP Örnek Çalışmaları

## Kurallı İfade Örneği - 1

```PHP
$METIN = <<<FOO
Nuri: Erkek;Arapça;İsmin anlamı burada olacak
Ahmet: Erkek;Farsça;İsmin anlamı burada olacak
Deniz: Unisex;Farsça;İsmin anlamı burada olacak
HASAN: Erkek;Farsça;İsmin anlamı burada olacak
Ayhan; Deeme
Anlamsız satır var burada.
Meral: Kadın;Türkçe;Geyik, geyik yavrusu, dağ keçisi
FOO;

// preg_match_all('/(?<isim>.*): (?<cinsiyet>(E|K|U).*);(?<kaynak>.*);(?<anlam>.*)/', $METIN, $SONUC);
preg_match_all('/(.*): ((E|K|U).*);(.*);(.*)/', $METIN, $SONUC);
unset($SONUC[0]);
echo "<pre>";
print_r($SONUC);
echo "</pre>";


$str="Bu akşam beni buralarda aramayın";

$ARANAN1 = "ben";
if (preg_match("/$ARANAN1/", $str)) {
   echo "<p><b>$ARANAN1</b> ifadesi <b>$str</b> cümlesinde <span style='background-color:green; color: white;'><b>VAR</b></span></p>"; 
} else {
   echo "<p><b>$ARANAN1</b> ifadesi <b>$str</b> cümlesinde <span style='background-color:red; color: white;'><b>YOK</b></span></p>";
}

$ARANAN2 = "BEN";
if (preg_match("/$ARANAN2/", $str)) {
   echo "<p><b>$ARANAN2</b> ifadesi <b>$str</b> cümlesinde <span style='background-color:green; color: white;'><b>VAR</b></span></p>"; 
} else {
   echo "<p><b>$ARANAN2</b> ifadesi <b>$str</b> cümlesinde <span style='background-color:red; color: white;'><b>YOK</b></span></p>";
}

$ARANAN3 = "Ben";
if (preg_match("/$ARANAN3/i", $str)) {
   echo "<p><b>$ARANAN3</b> ifadesi <b>$str</b> cümlesinde <span style='background-color:green; color: white;'><b>VAR</b></span></p>"; 
} else {
   echo "<p><b>$ARANAN3</b> ifadesi <b>$str</b> cümlesinde <span style='background-color:red; color: white;'><b>YOK</b></span></p>";
}
```


## Kurallı İfade Örneği - 2

```PHP

$str = "
dün|bugün|yarın|1|Bu akşam sokakta {} gördüğüm araba aklıma geldi.
birşey|bugün|bir gün|2|Kim bilebilirdi seninle {} tekrar karşılaşacağız.
";

$re = '/(?<A>.*)\|(?<B>.*)\|(?<C>.*)\|(?<CEVAP>\d+)\|(?<ONCE>.*)\{\}(?<SONRA>.*)/m';

preg_match_all($re, $str, $SONUC);

unset($SONUC[0]);
unset($SONUC[1]);
unset($SONUC[2]);
unset($SONUC[3]);
unset($SONUC[4]);
unset($SONUC[5]);
unset($SONUC[6]);

echo "<pre>";
print_r($SONUC['A']);
print_r($SONUC['B']);
print_r($SONUC['C']);
echo "<hr>";
print_r($SONUC);


foreach ($SONUC['A'] as $key => $value) {
   echo "{$SONUC['A'][$key]}<br>";
}
```

## Kurallı İfade Örneği - 3

```PHP
$METIN = <<<EOF
Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
AFYON: Mehmet Zurnacı 
Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...

ANKARA: Mehmet Kilimci 

Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...

BALIKESİR: Yücel Yıldırım 
Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...

BİNGÖL: Erdal Ağaçlı
Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...

ÇANAKKALE: Ayhan Germiç
Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...

ÇANKIRI: Hüseyin Arabacı 

ESKİŞEHİR: Burhan Öksöz

ÇORUM: İbrahim Kınacı

HATAY: İbrahim Ağlar

İZMİR: Nihat Hasırcı

KONYA: Uğur Türkmen

KARAMAN: Mahmut Eker

SAKARYA: Ekrem Yaren
EOF;

// preg_match_all('/(.*): ((E|K|U).*);(.*);(.*)/', $METIN, $SONUC);
preg_match_all('/(.*): (.*)/', $METIN, $SONUC);

echo "<table border=1>";
foreach ($SONUC[1] as $key => $value) {
   echo "<tr><td>{$SONUC[1][$key]}</td><td>{$SONUC[2][$key]}</td></tr>";
}
echo "</table>";
```


