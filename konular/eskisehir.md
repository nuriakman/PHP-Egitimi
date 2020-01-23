
# Windows

## İndirme Bağlantıları
- [Git](https://github.com/git-for-windows/git/releases/download/v2.25.0.windows.1/Git-2.25.0-64-bit.exe)
- [Atom](https://atom-installer.github.com/v1.43.0/AtomSetup-x64.exe)
- [Xampp](https://downloadsapachefriends.global.ssl.fastly.net/7.4.1/xampp-windows-x64-7.4.1-0-VC15-installer.exe)
- [VirtualBox](https://download.virtualbox.org/virtualbox/6.1.2/VirtualBox-6.1.2-135663-Win.exe)
- [SublimeText](https://download.sublimetext.com/Sublime%20Text%20Build%203211%20x64%20Setup.exe)
- [Composer](https://getcomposer.org/Composer-Setup.exe)

### Opsiyonel İndirme Bağlantıları
- [SublimeMerge](https://download.sublimetext.com/sublime_merge_build_1119_x64_setup.exe)
- [Ubuntu](http://releases.ubuntu.com/19.10/ubuntu-19.10-desktop-amd64.iso)
- [Ubuntu from OsBoxes](https://netcologne.dl.sourceforge.net/project/osboxes/v/vb/55-U-u/19.10/U19_10-VB-64bit.7z)
- [NodeJS](https://nodejs.org/dist/v12.14.1/node-v12.14.1-x86.msi)

## Github'a SSH Keyimizin Eklenmesi
- `Git GUI` çalıştırılır. 
- `Help` menüsünden `Show SSH Key` seçilir
- `Generate Key` düğmesi ile SSH Key'imizi üretiriz
- Ekrana çıkan döküm kopyalanır
- [github.com](https://github.com/) sitesine gidilir ve login olunur
- [https://github.com/settings/keys](https://github.com/settings/keys) sayfasına geçilir
- `New SSH` Key Düğmesine basılır
- `Title` başlığına bir isim verilir
- `Key` başlığı altına da yukarıda kopyalanan değer yapıştırılır

## Git Bash Hatası
`git clone` yaparken şu hata alınabilir:

`Permission denied (publickey). fatal: Could not read from remote repository.`

Öncelikle, size özel `SSH Key` oluşturmuş olmalısınız.

Bu işlemin yapılabilmesi için unutulmaması gereken nokta: `Git Bash` programı `yönetici` rolü ile çalıştırmalıdır.

Sorunun çözümü için `/etc/ssh/ssh_config` dosyası sonuna şu satırlar eklenir:
```
nano /etc/ssh/ssh_config

host github.com
     IdentityFile ~/.ssh/id_rsa
```



## Yardımcı Bazı Komutlar
```BASH
cd c:\xampp\htdocs\
php --ini
npm install -g bower
```


## Faydalı php.ini ayarları
- Aşağıdaki ayarları `c:\xampp\php\php.ini` dosyasının sonuna yapıştırabilirsiniz. 
- Bunu yaptıktan sonra `Apache` servisini yeniden başlatmanız gerekir.

```PHP
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
```


# Linux

KAYNAK: https://github.com/nuriakman/PHP-Egitimi/blob/master/konular/kurulum.sh

## Paket Kurulumları
```BASH
sudo apt update
sudo apt upgrade
sudo apt install git apache2 mysql-server mysql-client php -y
sudo apt install php-mbstring php-gd php-imagick php-bcmath php-dom php-zip php-soap -y
snap install atom --classic
snap install sublime-text --classic

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php 
mv composer.phar /usr/local/sbin/composer
sudo mv composer.phar /usr/local/sbin/composer

git config --global user.name "Ad Soyad"
git config --global user.email eposta@adresiniz.com

```

## Access denied for user 'root'@'localhost' Uyarısını Kaldırmak
```MYSQL
sudo mysql -u root
  use mysql;
  update user set plugin='' where User='root';
  flush privileges;
  exit;

sudo mysql_secure_installation
```


## Servislerin Başlatılması
```BASH
sudo service apache2 restart
sudo service mariadb restart
```


## Apache Dizin Ayarları
```BASH
sudo adduser $USER www-data
sudo chown -R $USER:www-data /var/www/html/
```

## html dizini için yetkilendirme
```BASH
sudo adduser $USER www-data
sudo chown -R $USER:www-data /var/www/html/
```


## Masaüzerine HTML klasörü kısayolunun açılması
```BASH
cd ~
cd ~/Masaüstü || cd ~/Desktop
ln -s /var/www/html/
sudo rm -f /var/www/html/index.html
```

## Adminer Programı Kurulumu
```BASH
cd /var/www/html
mkdir adminer
cd adminer
wget -O index.php https://www.adminer.org/latest.php
```


## Ubuntu Masaüstü İçin Ayarlar
```BASH
gsettings set org.gnome.shell.extensions.dash-to-dock click-action 'minimize'
gsettings set org.gnome.shell.extensions.dash-to-dock scroll-action 'cycle-windows'
```

## Kurulum Kontrolü
```BASH
php -v
apache2 -v
mysql --version
```



