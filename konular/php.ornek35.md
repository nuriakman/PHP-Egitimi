# PHP Örnek Çalışmaları

## SOAP ile Veri Çekme

KAYNAK: [İstanbul Büyükşehir Belediyesi - Açık Data](https://data.ibb.gov.tr/dataset/iett-hat-durak-guzergah-web-servisi)

# Örnek Kod
```PHP
<?php

echo "<pre>";

if (!extension_loaded("soap")) {
    die("PHP SOAP modülü kurulu değil.");
}


try {
    $istek = new SoapClient('https://api.ibb.gov.tr/iett/UlasimDinamikVeri/Duyurular.asmx?wsdl');
    $sonuc = $istek->GetDuyurular_json( );
    $sonuc = json_decode( $sonuc->GetDuyurular_jsonResult );
	echo "<h1>Duyurular Listesi (İlk 5) print_r İle</h1>";
	$c=0;
	foreach ($sonuc as $bilgi) {
		print_r($bilgi);
		if($c++ == 4) break;
	}

	echo "<h1>Duyurular Listesi (İlk 15) Liste formatında</h1>";
	$c=0;
	foreach ($sonuc as $bilgi) {
		echo "<b>HAT: {$bilgi->HAT}</b>, {$bilgi->MESAJ}<br>";
		if($c++ == 14) break;
	}

/*
	// Bunun sonucu için çok bekliyorum. Bu nedenle iptal ettim
    $istek = new SoapClient('https://api.ibb.gov.tr/iett/UlasimAnaVeri/HatDurakGuzergah.asmx?wsdl');
    $sonuc = $istek->GetDurak_json( array('DurakKodu' => '') );
    $sonuc = json_decode( $sonuc->GetDurak_jsonResult );
	echo "<h1>Durak Listesi (İlk 5)</h1>";
	$c=0;
	foreach ($sonuc as $bilgi) {
		print_r($bilgi);
		if($c++ == 4) break;
	}
*/


    $istek = new SoapClient('https://api.ibb.gov.tr/iett/UlasimAnaVeri/HatDurakGuzergah.asmx?wsdl');
    $sonuc = $istek->GetDurak_json( array('DurakKodu' => '225972') ); // Örnek Durak Numaraları: 225981 veya 227161 veya 228651
    $sonuc = json_decode( $sonuc->GetDurak_jsonResult );
	echo "<h1>225972 Nolu Durak Detay Bilgileri</h1>";
	$c=0;
	foreach ($sonuc as $bilgi) {
		print_r($bilgi);
		if($c++ == 4) break;
	}



    $istek = new SoapClient('https://api.ibb.gov.tr/iett/UlasimAnaVeri/HatDurakGuzergah.asmx?wsdl');
    $sonuc = $istek->GetGaraj_json( );
    $sonuc = json_decode( $sonuc->GetGaraj_jsonResult );
	echo "<h1>Garaj Listesi (İlk 5)</h1>";
	$c=0;
	foreach ($sonuc as $bilgi) {
		print_r($bilgi);
		if($c++ == 4) break;
	}



} catch (Exception $HATA) {

    echo $HATA->getMessage();
}

?>

```
