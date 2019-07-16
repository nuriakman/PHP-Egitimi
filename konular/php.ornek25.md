# Redis Kullanım Örneği

Açıklamaları bu sayfalardan derlenip hazırlanacak:
- https://packagist.org/packages/predis/predis
- https://scotch.io/tutorials/getting-started-with-redis-in-php
- http://aristona.github.io/redis-kullanimi-ve-incelikleri
- https://www.sitepoint.com/an-introduction-to-redis-in-php-using-predis/
- https://github.com/phpredis/phpredis
- https://github.com/nrk/predis/wiki/Quick-tour

## Kurulum Aşamaları

### Composer Kurulur
Önce composer kurulur: https://getcomposer.org/download/

### Redis Kurulur
```
sudo apt-get update
sudo apt-get install redis-server
sudo snap install redis-desktop-manager
redis-server
redis-cli
```

### Kütüphane, composer ile projeye dahil edilir
- Proje için bir klasör oluşturulur
- Oluşturulan klasör içine geçilir
-- Şu komut çalıştırılır: ```composer require predis/predis```

### ```redis.get.php``` Dosyası İçeriği

```
<?php
  require 'vendor/autoload.php';
  Predis\Autoloader::register();
  $client = new Predis\Client();
  $adsoyad = $client->get('adsoyad');
  $zaman   = $client->get('zaman');
  echo "$adsoyad<br>$zaman";
```


### ```redis.set.php``` Dosyası İçeriği

```
<?php
  require 'vendor/autoload.php';
  Predis\Autoloader::register();
  $client = new Predis\Client();
  $client->set('adsoyad', 'Nuri Akman');
  $client->set('zaman', date("Y-m-d H:i:s") );
  echo "SET işlemi tamam...";
```

## Örneğin Çalıştırılması
- Önce redis.set.php çalıştırılır
- Sonra redis.get.php çalıştırılır
- Ayrıca, Redis desktop uygulaması tarafında da kaydedilen veriler izlenebilir


