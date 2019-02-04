# PHP Örnek Çalışmaları

## array'den JSON ve XML'e veri dönüşümü

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

  echo "<pre>";
  echo "<h1>Dizi İçeriği</h1>";
  print_r($Personel);

  echo "\n\n<h1>JSON'a Çevrilmiş Biçimi</h1>";
  echo json_encode($Personel);



  echo "\n\n<h1>XML'e Çevrilmiş Biçimi</h1>";
  echo "\n\n<textarea style='width: 500px; height: 200px;'>";
  echo arrayToXml($Personel);
  echo "</textarea>\n\n";
```
