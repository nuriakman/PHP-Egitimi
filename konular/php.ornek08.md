# PHP Örnek Çalışmaları

## Kurallı İfade - Veri Çıkarma Örneği

```PHP
<?php

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
