# PHP Örnek Çalışmaları

## Çalışma 1: MultiByte komutlar için farkındalık örneği

```PHP
   $str = "Yağız Öğretmen ğĞüÜiİşŞçÇöÖıI";

   echo "<pre>";
   echo $str . "<br>";
   echo mb_convert_case($str, MB_CASE_UPPER) . "<br>"; // MB_CASE_UPPER, MB_CASE_LOWER, MB_CASE_TITLE

   ini_set('mbstring.language','Turkish');
   mb_internal_encoding("UTF-8"); // mb_*** komutlarının tümünün doğru çalışması için ayar yapalım...

   echo "<br><br>";
   echo $str . "<br>";
   echo mb_convert_case($str, MB_CASE_UPPER) . "<br>";
   echo "<br><br>";

   echo "A Karakterinin uzunluğu: " . strlen("A") . "<br>";
   echo "Ğ Karakterinin uzunluğu: " . strlen("Ğ") . "<br>";
   echo "<br>";

   echo "A Karakterinin uzunluğu: " . mb_strlen("A") . "<br>";
   echo "Ğ Karakterinin uzunluğu: " . mb_strlen("Ğ") . "<br>";
   echo "<br>";
   echo "/<pre>";
   
   echo "<hr>";
```


## Çalışma 2: Kelimenin harflerini karıştırma 

## Örnek Çıktı:

```HTML
<pre>
bir ignliiz üvnsertsinede ypalın arşaıtramya gröe,

kleimleirn hrfalreiinn hnagi srıdaa yzalıdkılraı ömneli dğeliimş.

öenlmi oaln brinci ve snonucnu hrfain yrenide omlsaımyış.

ardakai hfraliren srısaı krıaışk oslada ouknyuorumş.

çnükü kleimlrei hraf hraf dğeil bri btüün oalark oykuorumuşz. 
</pre>
```

## PHP Kodu
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

?>
```