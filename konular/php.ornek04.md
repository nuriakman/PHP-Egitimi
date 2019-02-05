# PHP Örnek Çalışmaları

## Kurallı İfade - İsim Sözlüğü Örneği

```PHP
<?php
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
