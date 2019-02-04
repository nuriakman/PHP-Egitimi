<img src='https://getcomposer.org/img/logo-composer-transparent2.png' align='center'>

# composer Paket Yöneticisi

Web projesinin bağımlılıklarını (dependencies) yönetmek önemli bir sorundur. Composer, PHP için zarif ve basit bir bağımlılık yöneticisidir. https://packagist.org/ adresindeki PHP kütüphanelerinin kolayca projeye dahil edilebilmesini ve yönetilmesini sağlar.


# composer Kurulumu

Detaylı bilgi: [getcomposer](https://getcomposer.org/download/)
```BASH
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```


## Örnek 1: Çalışma süresini ölçecek program

PHP'de yazdığınız bir kodun ne kadar sürede işlendiğini öğrenme ihtiyacımız olduğunu düşünelim.

Bunun için php-timer kütüphanesini kullanabiliriz.

php-timer kütüphanesini projemize eklemek için composer'dan faydalanalım:

```composer require phpunit/php-timer```

Hepsi bu kadar! Bu komutla birlikte ```composer.json``` ve ```composer.lock``` dosyaları oluşur. Ayrıca ```vendor```adlı bir de dizin eklenir.

Bu kütüphaneyi programımıza dahil etmek için programın başına ```require 'vendor/autoload.php';``` satırının eklenmesi yeterlidir.

### Örnek Program Kodu

```PHP
<?php
	require 'vendor/autoload.php';

	PHP_Timer::start();

	for($i=0; $i<1234000; $i++) {
		// Bu satır tam 1234000 defa işlenecektir...
	}

	$time = PHP_Timer::stop();

	print PHP_Timer::secondsToTimeString($time);

```



## Örnek 2: Programlarımızda İz Belleği (log) kullanımı

Program çalışırken ekrana yansımayan taraflarda ne olup bittiğini takip etmek için iz belleğine ihtiyaç duyarız.

Bu kütüphane, program dizini altında ```logs``` adında bir dizin içinde iz belleği kayıtlarını saklar.

```composer require katzgrau/klogger:dev-master```

### Örnek Program Kodu

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
