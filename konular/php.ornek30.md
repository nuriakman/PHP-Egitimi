# PHP Örnek Çalışmaları

## PHP ile 2D Barkod Üretme

KAYNAK: https://github.com/picqer/php-barcode-generator

### Hazırlık
```
mkdir 2dBarcodeTest
cd 2dBarcodeTest
composer require picqer/php-barcode-generator
```

### 2dBarkodUret.php dosyası içeriği
```PHP
<?php
require 'vendor/autoload.php';

// HTML olarak barcode üretme
echo "<h1>HTML olarak barcode üretme</h1>";
$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
echo $generator->getBarcode('081231723897', $generator::TYPE_CODE_128);

echo "<h1>PNG Dosya olarak barcode üretme</h1>";
$MaviRenk = [0, 0, 255];
$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
file_put_contents('temp/barcode.png', $generator->getBarcode('081231723897', $generator::TYPE_CODE_128, 3, 50, $MaviRenk));
echo "<img src='temp/barcode.png'>";

echo "<h1>Gömülü PNG olarak barcode üretme</h1>";
$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode('081231723897', $generator::TYPE_CODE_39, 3, 100)) . '">';


```

## Desteklenen Barkod Türleri
- TYPE_CODE_39
- TYPE_CODE_39_CHECKSUM
- TYPE_CODE_39E
- TYPE_CODE_39E_CHECKSUM
- TYPE_CODE_93
- TYPE_STANDARD_2_5
- TYPE_STANDARD_2_5_CHECKSUM
- TYPE_INTERLEAVED_2_5
- TYPE_INTERLEAVED_2_5_CHECKSUM
- TYPE_CODE_128
- TYPE_CODE_128_A
- TYPE_CODE_128_B
- TYPE_CODE_128_C
- TYPE_EAN_2
- TYPE_EAN_5
- TYPE_EAN_8
- TYPE_EAN_13
- TYPE_UPC_A
- TYPE_UPC_E
- TYPE_MSI
- TYPE_MSI_CHECKSUM
- TYPE_POSTNET
- TYPE_PLANET
- TYPE_RMS4CC
- TYPE_KIX
- TYPE_IMB
- TYPE_CODABAR
- TYPE_CODE_11
- TYPE_PHARMA_CODE
- TYPE_PHARMA_CODE_TWO_TRACKS
