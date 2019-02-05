# PHP Örnek Çalışmaları

## Dizi içeriğinin XML formatına  dönüştürülmesi

```PHP
<?php

  // ////////////////////////////////////
  // //////////////////////////////////// arrayToXml
  // ////////////////////////////////////
  function arrayToXml($array, $rootElement = null, $xml = null) {
    $_xml = $xml;
    if ($_xml === null) {
      $_xml = new SimpleXMLElement($rootElement !== null ? $rootElement : '<root/>');
    }
    foreach ($array as $k => $v) {
      if (is_array($v)) { //nested array
        arrayToXml($v, $k, $_xml->addChild($k));
      } else {
        $_xml->addChild($k, $v);
      }
    }
    return $_xml->asXML();
  } // arrayToXml

  $Personel = array();
  $Personel[] = array("Adi"=>"Nuri",  "Soyadi"=>"Akman", "SicilNo"=>"1111");
  $Personel[] = array("Adi"=>"Kemal", "Soyadi"=>"Mutlu", "SicilNo"=>"3333");
  $Personel[5]["Adi"]     = "Selami";
  $Personel[5]["Soyadi"]  = "Üstün";
  $Personel[5]["SicilNo"] = "2222";

  echo "\n\n<h1>Dizi İçeriği</h1>";
  print_r($Personel);

  echo "\n\n<h1>XML formatındaki veri</h1>";
  echo arrayToXml($Personel);
  echo "<br><br>NOT: Çıktıyı incelemek için sayfanın kaynak konuda bakınız.\n\n";
```
