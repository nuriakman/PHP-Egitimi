# MySQL Ayarları

## my.ini Ayarları
```
[client]
default-character-set=utf8

[mysql]
default-character-set=utf8

[mysqld]
collation-server     = utf8_unicode_ci
init-connect         = SET NAMES utf8
character-set-server = utf8
max_allowed_packet   = 256M
max_connections      = 300
```

## MySQL Servisinin Tekrar Başlatılması
```
service mysql restart
```

**NOT 1:** Bu değişikliklerin devreye girmesi için servislerin yeniden başlatılması gerekir.
**NOT 2:** Bu MySQL ayarları, max connection ve mysql server gone away hatalarını da önler.
