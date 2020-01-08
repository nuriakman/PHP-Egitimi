# PHP Örnek Çalışmaları

## `curl` ile dış kaynaktan JSON veri alma

### `json_veri_getir.php` adlı dosyanın içeriği

```PHP
<?php

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://ipinfo.io/");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json; charset=utf-8"));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
    $data = curl_exec($ch);
    curl_close($ch);


    echo "<h1>Gelen Ham Veri</h1>";
    echo "<pre>";
    echo "$data";
    echo "</pre>";
    
    
    $dataJSON = json_decode($data);
    echo "<h1>json_decode İle JSON'a Çevrilmiş Veri</h1>";
    echo "<pre>";
    print_r($dataJSON);
    echo "</pre>";


    echo "<h1>Veriye Tek Tek Erişim</h1>";
    echo "<pre>";
    echo "IP Adresi: <b>{$dataJSON->ip}</b><br>";
    echo "Ülke: <b>{$dataJSON->country}</b><br>";
    echo "Şehir: <b>{$dataJSON->region}</b><br>";
    echo "Bölge: <b>{$dataJSON->city}</b><br>";
    echo "Koordinat: <b>{$dataJSON->loc}</b><br>";
    echo "</pre>";
?>
```

### Örnek Ekran Çıktısı
```
Gelen Ham Veri

{
  "ip": "193.25.125.49",
  "city": "Çankaya",
  "region": "Ankara",
  "country": "TR",
  "loc": "39.9150,32.8108",
  "org": "AS31274 Turkish Treasury",
  "postal": "06510",
  "timezone": "Europe/Istanbul",
  "readme": "https://ipinfo.io/missingauth"
}

json_decode İle JSON'a Çevrilmiş Veri

stdClass Object
(
    [ip] => 193.25.125.49
    [city] => Çankaya
    [region] => Ankara
    [country] => TR
    [loc] => 39.9150,32.8108
    [org] => AS31274 Turkish Treasury
    [postal] => 06510
    [timezone] => Europe/Istanbul
    [readme] => https://ipinfo.io/missingauth
)

Veriye Tek Tek Erişim

IP Adresi: 193.25.125.49
Ülke: TR
Şehir: Ankara
Bölge: Çankaya
Koordinat: 39.9150,32.8108

```
