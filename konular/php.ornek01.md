# PHP Örnek Çalışmaları

## MultiByte komutlar için farkındalık örneği

```PHP
<?php
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
