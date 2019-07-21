################# SİSTEM GÜNCELLEMESİ KURULUMU
sudo apt update -y
sudo apt upgrade -y
################# MARIADB KURULUMU
sudo apt install mariadb-server mariadb-client -y
sudo systemctl enable mariadb
sudo service mariadb restart
################# MYSQL ROOT PAROLASI BELİRLENMESİ
##sudo mysql_secure_installation  ## bash içinden çalıştırılamaz. Manuel çalıştırılmalıdır...
################# APACHE KURULUMU
sudo apt install apache2 apache2-utils -y
rm -f /var/www/html/index.html
sudo systemctl enable apache2
sudo service apache2 restart
################# APACHE DİZİNİ AYARLARI
sudo adduser $USER www-data
sudo chown -R $USER:www-data /var/www/html/
################# ADMINER KURULUMU
mkdir /var/www/html/adminer
cd /var/www/html/adminer
wget -O index.php https://www.adminer.org/latest.php
################# PHP KURULUMU
sudo apt install php php-pear php-fpm php-dev php-zip php-curl php-xmlrpc -y
sudo apt install php-gd php-mysql php-mbstring php-xml libapache2-mod-php -y

################# GİT KURULUMU
sudo apt install git -y
git config --global user.email "nuriakman@gmail.com"
git config --global user.name  "Nuri Akman"


################# EKSTRALARIN KURULUMU
sudo apt install vim axel gnome-tweak-tool net-tools hardinfo -y
################# SNAP'LARIN KURULUMU
sudo apt  install snapd -y
sudo snap install snap-store
sudo snap install postman
sudo snap install atom --classic
sudo snap install vscode --classic
sudo snap install sublime-text --classic
axel https://download.sublimetext.com/sublime-merge_build-1116_amd64.deb
sudo dpkg -i sublime-merge_build-1116_amd64.deb
################# ATOM EKLENTİLERİNİN KURULMASI
apm install atom-beautify autoclose-html color-picker drag-relative-path
apm install duplicate-line-or-selection emmet file-icons highlight-line
apm install highlight-selected markdown-preview-plus minimap-highlight-selected
apm install minimap sublime-style-column-selection teletype todo-show project-viewer
################# MASAÜSTÜ İÇİN AYARLAR
gsettings set org.gnome.shell.extensions.dash-to-dock click-action 'minimize'
gsettings set org.gnome.shell.extensions.dash-to-dock scroll-action 'cycle-windows'
################# WWW/HTML KLASÖRÜ İÇİN MASAÜSTÜNE LİNK EKLEYELİM
cd ~/Masaüstü || cd ~/Desktop
ln -s /var/www/html/

php -v
apache2 -v
mysql --version


