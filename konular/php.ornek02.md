# PHP Örnek Çalışmaları

## Kurallı İfade Çalışması

```PHP
<?php
  /* Regex:Belli başlı kurallara göre desenler hazırlayıp ifadeler içerisinde eşleşenleri
  bulan kalıplar olarak nitelendirebiliriz. */
  ## Desen yazılırken sınırlıyıcı koymak şart. Baştaki ve sondaki karakterler aynı olabilir.
  ## // en çok kullanılan sınırlayıcı. Ama istersek @@ $$ istediğimiz her şeyi koyabilir.
  ## Önemli olan regEX'deki karakterleri kullanmamak.
  ## emailregex.com
  ## regex101.com
  ## phpliveregex.com
  ## unicode : Türkçe karakter için ama sadece w+'da çalışır.

  $metin = "ben php'yi çok seviyorum";

  $sonuc = preg_match('/php/' , $metin);

  if($sonuc) {
      echo "Evet";
  }else {
      echo "Hayır";
  }

  echo "<hr>";

  $url = 'http://www.php.net/index.html';
  preg_match('@^(?:http://)?([^/]+)@i' ,$url, $sonuc);

  print_r($sonuc);

  echo "<hr>";

  $tarih = '2017-12-25';

  $desen = '/(?<yil>\d{4})-(?<ay>\d{2})-(?<gun>\d{2})/';
  preg_match($desen , $tarih, $sonuc);
  print_r($sonuc);
  echo "<hr>";

  $desen = '/^\d{4}-\d{2}-\d{2}$/';

  $sonuc = preg_match($desen , $tarih);

  if($sonuc) {
      echo "tarih geçerli";
  }
  else {
      echo "tarih geçersiz";
  }
  echo "<hr>";

  $eposta = 'kemalmutlu@trakya.edu.tr';

  $desen = '/^(\w+)@([a-z]+)\.([a-z]{2,})(.[a-z]{2}|)$/';

  $sonuc = preg_match($desen , $eposta);

  if($sonuc){
      echo 'geçerli';
  }else
  {
      echo 'geçersiz';
  }

  echo "<hr>";

  preg_match ($desen , $eposta , $sonuc);

  print_r($sonuc);

```
