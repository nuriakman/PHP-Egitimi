
# Yeni Bir Ubuntu Kurulumu Sonrası İlk Yapılacaklar

## Genel Güncelleme İşlemleri
```
sudo apt update -y
sudo apt upgrade -y
```

## GIT Kurulumu
```
sudo apt install git -y
git config --global user.email "xxx@gmail.com"
git config --global user.name "ADINIZ SOYADINIZ"
```

## Apache Kurulumu
```
sudo apt install apache2 -y
```

## PHP Kurulumu
```
sudo apt install php-pear php-fpm php-dev php-zip php-curl php-xmlrpc php-gd php-mysql php-mbstring php-xml libapache2-mod-php -y
```

## MariaDB Kurulumu
Bu bölüm ayrı bir yükleme adımı olarak [MariaDB Kurulumu](https://github.com/kemtake/PHP-Egitimi/blob/master/konular/ayarlar.mariadb.md) sayfasında anlatılmıştır.


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
sudo apt update -y
sudo apt install atom -y
```

## Atom Eklentileri Kurulumu
```
apm install atom-beautify autoclose-html color-picker drag-relative-path
apm install duplicate-line-or-selection emmet file-icons highlight-line
apm install highlight-selected markdown-preview-plus minimap-highlight-selected
apm install minimap sublime-style-column-selection teletype todo-show
```
