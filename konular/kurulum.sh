################# SİSTEM GÜNCELLEMESİ KURULUMU
sudo apt update -y
sudo apt upgrade -y
sudo apt install vim axel -y
################# GİT KURULUMU
sudo apt install git -y
git config --global user.email "nuriakman@gmail.com"
git config --global user.name  "Nuri Akman"
################# APACHE KURULUMU
sudo apt install apache2 apache2-utils -y
rm -f /var/www/html/index.html
sudo systemctl enable apache2
sudo service apache2 restart
################# APACHE DİZİNİ AYARLARI
sudo adduser $USER www-data
sudo chown -R $USER:www-data /var/www/html/
################# ADMİNER KURULUMU
mkdir /var/www/html/adminer
cd /var/www/html/adminer
wget -O index.php https://www.adminer.org/latest.php
################# PHP KURULUMU
sudo apt install php-pear php-fpm php-dev php-zip php-curl php-xmlrpc -y
sudo apt install php-gd php-mysql php-mbstring php-xml libapache2-mod-php -y
################# MARIADB KURULUMU
sudo apt install mariadb-server mariadb-client -y
sudo sudo systemctl enable mariadb -y
sudo systemctl enable mariadb
sudo service mariadb restart
