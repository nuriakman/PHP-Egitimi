# MACOS İçin Kurulum

MacOS altında PHP ve MySQL çalışabilmek için sadece [Atom](https://atom.io/) ve [MAMP](https://www.mamp.info/en/) kurulması yeterlidir. Sanal makine için [Virtualbox](https://download.virtualbox.org/virtualbox/6.0.10/VirtualBox-6.0.10-132072-OSX.dmg) Ver 6.0.10

## Faydalı Ayarlamalar

**~/.profile**  adlı dosyaya şu satır eklenir:

```export PATH=$PATH:/Applications/MAMP/Library/bin/```

Bundan sonra çalışabilir bir dosya aranırken buraya da otomatik olarak bakılır.

Böylece, ```/Applications/MAMP/Library/bin/mysql -v``` yerine şu yazılabilir:  ```mysql -v```

**MAMP php.ini dosyası yeri:** /Applications/MAMP/bin/php/php7.2.1/conf


php.ini'nin sonuna ekle:
```
display_errors = On
display_startup_errors = On
error_reporting = E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING
```

Apache'yi yeniden başlatmayı unutma!

service httpd restart
service apache2 restart
