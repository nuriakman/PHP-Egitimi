# composer Paket Yöneticisi

Web projesinin bağımlılıklarını (dependencies) yönetmek önemli bir sorundur.

Composer, PHP için zarif ve basit bir bağımlılık yöneticisidir. https://packagist.org/ adresindeki PHP kütüphanelerinin kolayca. 



## Örnek: Çalışma süresini ölçecek program

PHP'de yazdığınız bir kodun ne kadar sürede işlendiğini öğrenme ihtiyacımız olduğunu düşünelim.

Bunun için hph-timer kütüphanesini kullanabiliriz.

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

}

$time = PHP_Timer::stop();

print PHP_Timer::secondsToTimeString($time);

die("<p>Bitti...</p>");```



