# PHP Örnek Çalışmaları

## Kelimenin harflerini karıştırma

```PHP
<?php

   $str = "Bir ingiliz üniversitesinde yapılan araştırma kelimelerin harflerinin hangi sırada yazıldıklarının önemli değilmiş Önemli olan birinci ve sonuncu harfin yerinde olmasıymış Aradaki harflerin sırası karışık olsa da okunurmuş Çünkü kelimeleri harf harf değil bir bütün olarak okuyoruz";

   function Karistir($str){
      $ilkHarf = mb_substr($str, 0, 1);  // İlk harfi alalım
      $sonHarf = mb_substr($str, -1);    // Son harfi alalım
      $ortasi  = mb_substr($str, 1, -1); // Ortada kalan harfleri alalım

      //u  : Unicode Karakter anlamındadır
      $tmp = preg_split('//u', $ortasi); // Kelimenin harflerini diziye çevirelim
      shuffle($tmp);                     // Diziyi karıştıralım
      $ortasi  = implode("", $tmp);      // Diziyi birleştirip string yapalım

      return "$ilkHarf$ortasi$sonHarf";
   }

   //$kelimeler = explode(" ", $str);
   $kelimeler = preg_split('/\s/', $str);

   foreach ($kelimeler as $key => $value) {
      echo Karistir($value) . ' ';
   }
```

## Örnek Çıktı:

```
bir ignliiz üvnsertsinede ypalın arşaıtramya gröe,

kleimleirn hrfalreiinn hnagi srıdaa yzalıdkılraı ömneli dğeliimş.

öenlmi oaln brinci ve snonucnu hrfain yrenide omlsaımyış.

ardakai hfraliren srısaı krıaışk oslada ouknyuorumş.

çnükü kleimlrei hraf hraf dğeil bri btüün oalark oykuorumuşz.
```
