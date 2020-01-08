# PHP Örnek Çalışmaları

## Php Örneği 28 : DOMPDF ile PDF üretme örneği

### Kurulum

Bu örneğin çalışabilmesi için, php dosyasının bulunduğu klasörde şu komutun çalıştırılması gerekir: `composer require dompdf/dompdf`



### `dompdf-ornek1.php` Dosyası İçeriği (Kısa Örnek)

```PHP
<?php

require 'vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = <<<'ENDHTML'
<html>
	<style>
		body {
			font-size: 12px; 
			font-family: firefly, DejaVu Sans, sans-serif; /* Türkçe karakterlerde sorun yaşanmaması için */
		}
	</style>

 <body> 
  <h1>Merhaba DOMPDF</h1>
  <p>Bu bir PDF dosya örneğidir.</p>
 </body>
</html>
ENDHTML;

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// $dompdf->stream(); // Output the generated PDF to Browser

$dompdf->stream("hello.pdf", ["Attachment"=>0] ); // Attachment 0: Tarayıcıda göster, 1: İndirmeye zorla


```



### `dompdf-ornek2.php` Dosyası İçeriği (Tablo Örneği)

```PHP
<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;
ob_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style>

		body {
			font-size: 12px; 
			color: black;
			font-family: firefly, DejaVu Sans, sans-serif;
			margin: 0;
			padding: 0;
		}
		p {
			text-align: justify;
			line-height: 10px;
		}
		.DikYazi {
		  transform: rotate(-90deg);
		  font-weight: bold;
		  font-size: 30px;
		  margin:0;
		  padding:0;
		}


	</style>
	<title>PDF Çıktı Üretme</title>
</head>
<body>

	<table border="1" cellpadding="10" cellspacing="0" width="100%">
		<tr>
			<td colspan="2"><h1 align="center">KURSLAR HAKKINDA BİLGİLER</h1></td>
		</tr>
		<tr>
			<td><div class='DikYazi'>PHP</div></td>
			<td>
				<p>PHP ve MySQL konularının giriş seviyesinden anlatılması ve örneklerle eğitimin tamamlanması hedeflenmektedir.</p>
				<br><b>Eğitim İçeriği</b>
				<br> - Değişkenler
				<br> - Sabitler
				<br> - Operatörler (matematiksel ve karşılaştırma)
				<br> - Kontrol Yapıları
				<br> - Döngüler
				<br> - Fonksiyon Tanımlama ve Çağırma
				<br> - Zaman Fonksiyonları
				<br> - Diziler
				<br> - Öntanımlı Değişkenler (Super Globals)
				<br> - Form İşlemleri
				<br> - Dosya/Dizin İşlemleri
				<br> - Resim Boyutlandırma
				<br> - Get, Post
			</td>
		</tr>
		<tr>
			<td><div class='DikYazi'>LARAVEL</div></td>
			<td>
				<p>Sunucu tarafında Laravel (PHP), önyüz tarafında ise Vue.js çatılarının kullanımıyla modern web uygulamalarının işleyiş mantığını kavrayacak ve örnek uygulamalar yapacağız.</p>
				<br><b>Eğitim İçeriği</b>
				<br>- “Modern Web Uygulamaları” derken neyi kastediyoruz?
				<br>- Servisleri ve istemcileri neden ayırdık?
				<br>- HTTP ve yaşam döngüsünü anlamak
				<br>- Modern Web Yüzsüzlüktür: Laravel ile Yalnızca API üzerinden talep-yanıt döngüsüne sahip bir uygulama geliştirmek
				<br>- API yetkilendirmesi için JWT kullanımı
				<br>- Yazdığımız API’ın Insomnia ile testi
				<br>- Tarayıcı tarafı için Vue.js uygulaması
				<br>- Vue.js component yapısı
				<br>- Vue Router, Vuex
				<br>- Axios ile Vue.js üzerinden Laravel API ile haberleşme
				<br>- İstemcide uygulama deneyimi: SPA ve PWA üzerine
				<br>- Sunucu ve istemci tarafı için performans
				<br>- Asenkron işler
				<br>- Sunucu tarafındaki yoğun işlerin kuyruklanması
			</td>
		</tr>
		<tr>
			<td><div class='DikYazi'>PYTHON</div></td>
			<td>
				<p>Python 20 yılı aşkın süredir geliştirilmekte olan ve dünya devi firmalardan evinde hobi olarak kod yazanlara kadar çok geniş kitleye hitap eden genel amaçlı bir programlama dilidir. Eğitim temel programlama bilgisine sahip kişilere hitap etmektedir.</p>
				<br><b>Eğitim İçeriği</b>
				<br> - Genel Programlama Kavramları
				<br> - Değerler ve Temel Veri Türleri
				<br> - Değişkenler
				<br> - Değişken İsimleri ve Anahtar Kelimeler
				<br> - Matematiksel işlemler
				<br> - Karakter Dizileri
				<br> - Koşullu Yapılar
				<br> - Mantıksal İşlemler
				<br> - Döngüler ( for, while)
				<br> - Listeler
				<br> - Matrisler
				<br> - Hata Yakalama
				<br> - Fonksiyonlar
			</td>
		</tr>
	</table>

</body>
</html>
<?php
$html = ob_get_contents(); // Geçerli çıktı tamponun içeriğini döndürür

if(!isset($_GET["DownloadPDF"])) {
	echo "<p><a href='?DownloadPDF' target='_blank'>Sayfayı PDF olarak indir...</a></p>";
}

if( isset($_GET["DownloadPDF"]) ) {

	$dompdf = new Dompdf();
	$dompdf->loadHtml($html);
	$dompdf->setPaper('A4', 'portrait');
	$dompdf->render();

	$pdf_gen = $dompdf->output();
	ob_clean(); // Çıktı önbelleğini temizle

	if(!file_put_contents("./sonuc/SONUC.pdf", $pdf_gen)){
		
		echo "Dosya yazılamadı! Yazma yetkinizi kontrol ediniz!";

	} else {

		// Oluşturulan PDF'i tarayıcıda göster
		header('Content-type: application/pdf');
		readfile("./sonuc/SONUC.pdf");

	}

} // DownloadPDF

```
