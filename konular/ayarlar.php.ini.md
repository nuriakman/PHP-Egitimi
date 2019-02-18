# PHP Ayarları

## php.ini Ayarları

phpinfo() komutu çıktısı içinde php.ini yazarak php.ini dosyasının nerede olduğunu bulabiliriz.
```
display_startup_errors = On
display_errors         = On
short_open_tag         = On
opcache.enable         = 0
upload_max_filesize    = 128M
upload_max_size        = 128M
post_max_size          = 128M
max_input_vars         = 5000
date.timezone          = "Europe/Istanbul"
error_reporting        = E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING
mbstring.language          = Turkish
mbstring.internal_encoding = UTF-8
disable_functions          = exec, passthru, shell_exec, system, proc_open, popen, curl_exec, curl_multi_exec, parse_ini_file, show_source
```

**NOT:** Bu değişikliklerin devreye girmesi için servislerin yeniden başlatılması gerekir.

## Apache Servisinin Tekrar Başlatılması
```
service httpd restart
service apache2 restart
```
