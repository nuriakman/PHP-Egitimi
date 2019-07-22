
# Ubuntu 19.04 Kurulumu Sonrasında<br>Çalışma Ortamının Hazırlanması

## Genel Güncelleme İşlemleri
```BASH
sudo apt update -y
sudo apt upgrade -y
```

## GIT Kurulumu
```BASH
sudo apt install git -y
git config --global user.email "xxx@gmail.com"
git config --global user.name "ADINIZ SOYADINIZ"
```

## Apache Kurulumu
```BASH
sudo apt install apache2 -y
```

## PHP Kurulumu
```BASH
sudo apt install php php-pear php-fpm php-dev php-zip php-curl php-xmlrpc -y
sudo apt install php-gd php-mysql php-mbstring php-xml libapache2-mod-php -y
```

## MariaDB Kurulumu
```BASH
sudo apt install mariadb-server mariadb-client -y
sudo mysql -u root
  show databases;
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
sudo systemctl enable mariadb
sudo systemctl enable apache2
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

## ATOM Editörü Kurulumu
```BASH
sudo apt-get install snapd
sudo snap install atom --classic
```

**VEYA Şunu kullanın**

```BASH
wget -qO - https://packagecloud.io/AtomEditor/atom/gpgkey | sudo apt-key add -
sudo sh -c 'echo "deb [arch=amd64] https://packagecloud.io/AtomEditor/atom/any/ any main" > /etc/apt/sources.list.d/atom.list'
sudo apt update -y
sudo apt install atom -y
```

## Atom Eklentileri Kurulumu
```BASH
apm install atom-beautify autoclose-html color-picker drag-relative-path
apm install duplicate-line-or-selection emmet file-icons highlight-line
apm install highlight-selected markdown-preview-plus minimap-highlight-selected
apm install minimap sublime-style-column-selection teletype todo-show project-viewer
```
<br><br><br><br>

# HIZLI KURULUM (TAM)
Yukarıdaki tüm işlemleri bir defada yapmak için:
```BASH
wget https://raw.githubusercontent.com/nuriakman/PHP-Egitimi/master/konular/kurulum.sh -O - | sh
```

# HIZLI KURULUM (SADECE GEREKLİ OLANLAR)
Yukarıdaki tüm işlemleri bir defada yapmak için:
```BASH
wget https://raw.githubusercontent.com/nuriakman/PHP-Egitimi/master/konular/kurulum.asgari.sh -O - | sh
```

## KURULUM BİTİNCE YAPILACAKLAR

### Git Ayarları 
```BASH
git config --global user.email "epostaadresiniz"
git config --global user.name  "ad soyad"
```

### MySQL Ayarlaması ve Root Parolasının Belirlenmesi
```BASH
sudo mysql -u root
  show databases;
  use mysql;
  update user set plugin='' where User='root';
  flush privileges;
  exit;
sudo mysql_secure_installation

```


