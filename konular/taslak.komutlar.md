# Ubuntu Kurulumunda İlk Yapılacaklar

## Genel Güncelleme İşlemleri
```
sudo apt update -y
sudo apt upgrade -y
```

## GIT Kurulumu
```
sudo apt install git -y
git config --global user.email "nuriakman@gmail.com"
git config --global user.name "Nuri Akman"

git config --global push.default simple
git push --set-upstream origin master
```

## Apache Kurulumu
```
sudo apt install apache2
```

## PHP Kurulumu
```
sudo apt install php-pear php-fpm php-dev php-zip php-curl php-xmlrpc php-gd php-mysql php-mbstring php-xml libapache2-mod-php
```

## MaridDB Kurulumu
```
sudo apt install mariadb-server
```

## MaridDB Kurulum Sonrası Ayarları
```
sudo mysql -u root
  show databases;
  use mysql;
  update user set plugin='' where User='root';
  flush privileges;
  exit;

sudo mysql_secure_installation
```


### Servislerin Başlatılması
```
sudo service apache2 restart
sudo service mariadb restart
sudo systemctl enable mariadb
sudo systemctl enable apache2
```

## html dizini için yetkilendirme
```
sudo adduser $USER www-data
sudo chown -R $USER:www-data /var/www/html/
```

## Masaüzerine HTML klasörü kısayolunun açılması
```
cd ~/Masaüstü
ln -s /var/www/html/
```

## Adminer Programı Kurulumu
```
cd /var/www/html
mkdir adminer
cd adminer
wget -O index.php https://www.adminer.org/latest.php
```

## ATOM Editörü Kurulumu
```
sudo add-apt-repository ppa:webupd8team/atom
sudo apt update
sudo apt install atom
# MySQL/MariaDB Root Parolası Sıfırlama
```

### Atom Eklentileri Kurulumu
[Eklenti Sayfası](https://atom.io/packages/list?direction=desc&sort=stars)
```
apm install atom-beautify autoclose-html color-picker drag-relative-path
apm install duplicate-line-or-selection emmet file-icons highlight-line
apm install highlight-selected markdown-preview-plus minimap-highlight-selected
apm install minimap sublime-style-column-selection teletype todo-show
```


## php.ini ayarları
```
sudo find /etc -name "php.ini"

sudo atom /etc/php/7.2/apache2/php.ini

display_startup_errors = On
display_errors         = On
upload_max_filesize    = 128M
upload_max_size        = 128M
post_max_size          = 128M
max_input_vars         = 5000
error_reporting        = E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING
mbstring.language          = Turkish
mbstring.internal_encoding = UTF-8
disable_functions          = exec,passthru,shell_exec,system,proc_open,popen,curl_exec,curl_multi_exec,parse_ini_file,show_source

sudo service apache2 restart
```

# WORDPRESS Kurulumu
```
cd ~
wget --no-check-certificate https://tr.wordpress.org/wordpress-4.9.8-tr_TR.tar.gz
tar xzvf wordpress-4.9.8-tr_TR.tar.gz
mv wordpress /var/www/html/
cd /var/www/html/wordpress
sudo chmod -R 777 ../wordpress
cp wp-config-sample.php wp-config.php
atom wp-config.php
```
Atom editör içinde DB_NAME, DB_USER, DB_PASSWORD, DB_HOST Sabitleri tanımlanır.

http://localhost/wordpress adresinden wordpress sitesine girilebilir.

http://localhost/wordpress/wp-admin adresinden wordpress YÖNETİM sayfalarına girilebilir.


# Git konusunda genel olarak kullanılacak komutlar

## BİR DEFA YAPILACAK İŞLEMLER
```
sudo apt update
sudo apt upgrade
sudo apt install git
git config --global user.email "xxx@gmail.com"
git config --global user.name "xxx yyy"
```

## HER BİR PROJEDE BİR DEFA YAPILACAK İŞLEMLER
```
git init
git add .
git commit -m "first commit"
git remote add origin git@github.com:KULLANICIADI/PROJEADI.git
git push -u origin master
```

## MEVCUT BİR KLASÖRE GİTHUB BAĞLANTISI EKLEME
```
git init
git remote add origin git@github.com:KULLANICIADI/PROJEADI.git
git push -u origin master
```

## GÜNLÜK GİT KOMUTLARI LİSTESİ
```
git commit -m "first commit"
git push -u origin master
```

## YENİ DOSYALAR EKLENDİĞİNDE
```
git add .
```

# MySQL/MariaDB Root Parolası Sıfırlama
```
sudo service mysql stop
sudo service mariadb stop
sudo mysqld_safe --skip-grant-tables &
mysql -u root
  use mysql;
  SET PASSWORD FOR 'root'@'localhost' = PASSWORD("YENIPAROLA");
  flush privileges;
  quit
sudo service mysql start
sudo service mariadb start
```

## Apache hangi user ile çalışıyor? sorusunun cevabı
```
ps aux | egrep '(apache|httpd)'
ps -ef | egrep '(httpd|apache2|apache)' | grep -v `whoami` | grep -v root | head -n1 | awk '{print $1}'
```
