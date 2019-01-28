# composer Paket Yöneticisi

Web projesinin bağımlılıklarını (dependencies) yönetmek önemli bir sorundur.

Composer, PHP için zarif ve basit bir bağımlılık yöneticisidir. https://packagist.org/ adresindeki PHP kütüphanelerinin kolayca. 



# Örnek 1: Çalışma süresini ölçecek program

PHP'de yazdığınız bir kodun ne kadar sürede işlendiğini öğrenme ihtiyacımız olduğunu düşünelim.

Bunun için hph-timer kütüphanesini kullanabiliriz.

php-timer kütüphanesini projemize eklemek için composer'dan faydalanalım:

```composer require phpunit/php-timer```

Hepsi bu kadar! Bu komutla birlikte ```composer.json``` ve ```composer.lock``` dosyaları oluşur. Ayrıca ```vendor```adlı bir de dizin eklenir.

Bu kütüphaneyi programımıza dahil etmek için programın başına ```require 'vendor/autoload.php';``` satırının eklenmesi yeterlidir.

## Örnek Program Kodu

```PHP
<?php
	require 'vendor/autoload.php';

	PHP_Timer::start();

	for($i=0; $i<1234000; $i++) {

	}

	$time = PHP_Timer::stop();

	print PHP_Timer::secondsToTimeString($time);

	die("<p>Bitti...</p>");
```


## Örnek 2: Programlarımızda İz Belleği (log) kullanımı

```composer require katzgrau/klogger:dev-master```


```PHP
<?php
	require 'vendor/autoload.php';

	$arrUrunler = array();
	$arrUrunler[] = "Kakaolu Kek";
	$arrUrunler[] = "Yaş Pasta";

	$logger = new Katzgrau\KLogger\Logger(__DIR__.'/logs');
	
	$logger->debug('Dizi içindeki değerler ', $arrUrunler);
	$logger->info("Bu LOG kaydı 'info' için bir örnektir.");
	$logger->error("Bu LOG kaydı 'error' için bir örnektir.");
	$logger->notice("Bu LOG kaydı 'notice' için bir örnektir.");
	$logger->emergency("Bu LOG kaydı 'emergency' için bir örnektir.");
	$logger->notice("Bu LOG kaydı 'notice' için bir örnektir.");
	$logger->warning("Bu LOG kaydı 'warning' için bir örnektir.");
	$logger->alert("Bu LOG kaydı 'alert' için bir örnektir.");
	$logger->critical("Bu LOG kaydı 'critical' için bir örnektir.");
	$logger->alert("Bu LOG kaydı 'alert' için bir örnektir.");
```

