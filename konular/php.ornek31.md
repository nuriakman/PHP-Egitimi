# PHP Örnek Çalışmaları

## PHP ile QR Code Üretme

KAYNAK: https://github.com/endroid/qr-code

### Hazırlık
```
mkdir qrCodeTest1
cd qrCodeTest1
composer require endroid/qr-code
git clone git@github.com:endroid/qr-code.git
```

### BASİT ÖRNEK, qrCodeTest1.php dosyası içeriği
```PHP
<?php

require 'vendor/autoload.php';

use Endroid\QrCode\QrCode;

$qrCode = new QrCode('Life is too short to be generating QR codes');

header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();
```

### İLERİ SEVİYE ÖRNEK, qrCodeTest2.php dosyası içeriği
```PHP
<?php

require 'vendor/autoload.php';


use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Response\QrCodeResponse;

// Create a basic QR code
$qrCode = new QrCode('Life is too short to be generating QR codes');
$qrCode->setSize(300);

// Set advanced options
$qrCode->setWriterByName('png');
$qrCode->setMargin(10);
$qrCode->setEncoding('UTF-8');
$qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH());
$qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
$qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
$qrCode->setLabel('Scan the code', 16, __DIR__.'/qr-code/assets/fonts/noto_sans.otf', LabelAlignment::CENTER());
// $qrCode->setLogoPath(__DIR__.'/qr-code/assets/images/symfony.png');
// $qrCode->setLogoSize(150, 200);
$qrCode->setRoundBlockSize(true);
$qrCode->setValidateResult(false);
$qrCode->setWriterOptions(['exclude_xml_declaration' => true]);

// Directly output the QR code
header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();

// Save it to a file
$qrCode->writeFile(__DIR__.'/qrcode.png');

// Create a response object
$response = new QrCodeResponse($qrCode);

```

