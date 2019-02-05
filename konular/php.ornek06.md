# PHP Örnek Çalışmaları

## Dizi içeriğinin JSON formatına dönüştürülmesi

```PHP
<?php

  $Personel = array();
  $Personel[] = array("Adi"=>"Nuri",  "Soyadi"=>"Akman", "SicilNo"=>"1111");
  $Personel[] = array("Adi"=>"Kemal", "Soyadi"=>"Mutlu", "SicilNo"=>"3333");
  $Personel[5]["Adi"]     = "Selami";
  $Personel[5]["Soyadi"]  = "Üstün";
  $Personel[5]["SicilNo"] = "2222";

  echo "\n\n<h1>Dizi İçeriği</h1>";
  print_r($Personel);

  echo "\n\n<h1>JSON'a Çevrilmiş Biçimi</h1>";
  echo json_encode($Personel);

```
