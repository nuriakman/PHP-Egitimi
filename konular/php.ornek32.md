# PHP Örnek Çalışmaları

## PHP ile QR Code Üretme - 2

KAYNAK: https://github.com/SimpleSoftwareIO/simple-qrcode

### Hazırlık
```
mkdir qrCodeTest3
cd qrCodeTest3
composer require simplesoftwareio/simple-qrcode 
```

### qrCodeTest3.php dosyası içeriği
```PHP
<?php

require 'vendor/autoload.php';

use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;

$qrcode = new BaconQrCodeGenerator;

?>

<h1>Mesaj</h1>
<img src="data:image/png;base64, <?php echo base64_encode($qrcode->format('png')->size(300)->generate('Make me into an QrCode! Nuri Akman')) ?>">


<h1>Geo Code</h1>
<img src="data:image/png;base64, <?php echo base64_encode($qrcode->format('png')->size(100)->geo(37.822214, -122.481769)) ?>">


<h1>Telefon Numarası</h1>
<img src="data:image/png;base64, <?php echo base64_encode($qrcode->format('png')->size(200)->phoneNumber('0541-1234567')) ?>">


```

## Detaylı Kullanım Bilgisi
- https://www.simplesoftware.io/simple-qrcode/

