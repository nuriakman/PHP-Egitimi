# PHP Örnek Çalışmaları

## PHP ile Excell'e Veri Aktarma (İleri Seviye)

KAYNAK: [PhpSpreadsheet](https://phpspreadsheet.readthedocs.io/en/latest/)

# Hazırlık
```
composer require phpoffice/phpspreadsheet
```

# Örnek Kod
```PHP
<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A3', 'PHP');
$sheet->setCellValue('B5', 'Merhaba Excel !');

$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(10);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(40);

$DOSYAADI = "SonucDosyasi.xlsx";
$writer = new Xlsx($spreadsheet); 
$writer->save($DOSYAADI);

echo "<a href='$DOSYAADI'>İndir: $DOSYAADI</a>";

```
