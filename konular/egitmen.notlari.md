# Eğitmen Notları

## Terminal Ekranı Kısayolları
Komut | Açıklaması
------------ | -------------
<kbd>CTRL</kbd>+<kbd>A</kbd> | Satır başına git
<kbd>CTRL</kbd>+<kbd>U</kbd> | İmlecin solunu siler
<kbd>CTRL</kbd>+<kbd>K</kbd> | İmlecin sağını siler
<kbd>CTRL</kbd>+<kbd>E</kbd> | Satır sonuna gider
<kbd>CTRL</kbd>+<kbd>R</kbd> | Geçmişte arama yapar
<kbd>CTRL</kbd>+<kbd>L</kbd> | Sayfayı temizler


## Sık kullanılan Linux Komutları
Komut | Açıklaması
------------ | -------------
```cat dosyaadi```| Dosya içeriğini ekrana yazdırır
```find /etc -name "php.ini" ```| etc klasöründe php.ini dosyasını arar
```touch README.md```| Bulunduğunuz dizinde README.md adında yeni dosya oluşturur
```wc dosyaadı```| Dosya içindeki satır, kelime ve harf sayısını verir
```atom . ```| Aktif dizini atom editöründe açar
```mkdir Resimler```| Bulunulan dizine Resimler adında bir klasör oluşturur
```cd Resimler```| Bulunulan dizindeki Resimler klasörüne geçiş yapar
```rm Kedi.jpg```| Kedi.jpg adlı dosyayı siler
```rm -rf kuşlar/```|kuşlar adlı dizini ve içindeki herşeyi siler
```ls```|Bulunulan dizindeki dosyaları listeler
```ls -al  veya ll```|Bulunulan dizindeki dosyaları sahiplik ve yetkileri ile listeler

## Paket Yönetimi Komutları
apt, apt-get ve apt-cache komutlarının alt kümesidir.

apt|apt-get|Görevi
--- | --- | ---
```apt clean```|```apt-get clean```|Temizlik yapar
```apt autoclean```|```apt-get autoclean```|Temizlik yapar
```apt autoremove```|```apt-get autoremove```|Temizlik yapar
```apt install```|```apt-get install```|Paket yükler
```apt remove```|```apt-get remove```|Paketi kaldırır
```apt purge```|```apt-get purge```|Paketi, ayar dosyalarıyla birlikte kaldırır
```apt update```|```apt-get update```|Depo indexini günceller
```apt upgrade```|```apt-get upgrade```|Yükseltilebilir tüm paketleri günceller
```apt autoremove```|```apt-get autoremove```|İstenmeyen paketleri kaldırır
```apt full-upgrade```|```apt-get dist-upgrade```|Bağımlılıkları ile birlikte paketleri günceller
```apt search```|```apt-cache search```|Depoda paket arar
```apt show```|```apt-cache show```|Paketin detay bilgisini verir

## Bazı Bilgiler:
- PHP Sürümü Öğrenme ```php -v```
- MySQL/MariaDB Sürümü Öğrenme ```mysql --version ``` veya ```mariadb --version ``` 
- Apache Sürümü Öğrenme ```apache2 -v```
- Ubuntu Sürümü Öğrenme ```lsb_release -a```
- Yüklü PHP Kütüphanelerinin listesi: ```php -m```
- PHP Info: ```php -i```
- PHP Build-in web Server: ```cd htdocs;  sudo php -S localhost:8000```
- Python Build-in web Server: ```cd htdocs;  sudo python3 -m http.server 8080```
- snap paketleri program deposu [https://snapcraft.io/store](https://snapcraft.io/store)
- .deb dosyasını yüklemek için: ```sudo dpkg -i  DOSYAADI.deb```
- Ubuntu'da 80 portunu açmak için: ```sudo iptables -A INPUT -p tcp --dport 80 -j ACCEPT; sudo apt-get install iptables-persistent```
- Ubuntu'da bozuk [paket onarımı](https://www.techbrown.com/fix-broken-packages-ubuntu-16-04/)
- Ubuntu Görünüm İnce Ayarları (Tweak) ```sudo apt-get install gnome-tweak-tool```
- Ubuntu Başlat çubuğundaki program ikonlarına tıklayınca açılır/kapanır özelliği ```gsettings set org.gnome.shell.extensions.dash-to-dock click-action 'minimize'```
- Ubuntu Başlat çubuğundaki program ikonu üzerinde farenin tekeri çevrilince pencerelerini göstermesi ```gsettings set org.gnome.shell.extensions.dash-to-dock scroll-action 'cycle-windows'```

## Faydalı Komutlar ve Görevleri
Komut | Açıklaması
------------ | -------------
```sudo apt edit-sources```|Depo adreslerini gösterir
```ls \```| xclip -selection clipboard```|Komut çıktısını panoya kopyalar ```sudo apt-get install xlicp```
```ifconfig```|ip bilgilerini gösterir ```sudo apt-get install net-tools```
```hardinfo```| Donanım bilgisini verir ```sudo apt-get install hardinfo```
```gzip DOSYAADI```|Dosyayı gzip ile sıkıştırır
```gunzip DOSYAADI```|Gzip ile sıkıştırılmış dosyayı dışarı çıkartır
```netstat -tulpn```|Hangi program, hangi porttan dinleme yapıyor ```sudo apt-get install net-tools```
```sudo hostname AKMAN```|Bilgisayarın adını AKMAN olarak değiştirir
```passwd```|Aktif kullanıcının parolasını değiştirme
```axel URL```|Belirtilen adresteki dosyayı HIZLI indirir ```sudo apt install axel```
```wget -O DOSYAADI URL```|Belirtilen adresteki dosyayı DOSYAADI adıya indirir


## UBUNTU 19.04 Altındaki Bazı Dosyaların Konumları
Dosya | Kullanma Komutu
------------ | -------------
Apache Logları|```sudo tail -f /var/log/apache2/access.log```
PHP Hata Logları|```sudo tail -f /var/log/apache2/error.log```
PHP php.ini Dosyası|```sudo gedit /etc/php/7.2/apache2/php.ini```
MySQL my.cnf Dosyası|```sudo gedit /etc/mysql/my.cnf```
hosts Dosyası|```sudo gedit /etc/hosts```
DNS Ayarları|```sudo gedit /etc/resolv.conf```
PC Adı|```sudo gedit /etc/hostname```


## SNAP Nedir?
Snap yazılımları kısaca bağımlılıkların ve kütüphanelerin birlikte derlenmesi olarak bahsedilebilir. Bir Sandbox ortamında yazılımların çalışması sağlanır. Bu sayede daha kolay ve daha hızlı  bir şekilde kurulum gerçekleşebilir ve en son güncellemeleri, işletim sisteminden ve diğer yazılımlardan bağımsız olarak alabilir. [Snap web sitesi](https://snapcraft.io/store)

Bir yazılım her Linux masaüstü, server, bulut veya cihazlar için paketlenebilir. Bir uygulama geliştiricisi için farklı paket formatlarıyla uğraşmak ve bunları güncellemek sıkıntılı bir durum. Canonical’ın snap uygulamalarıyla yapmak istediği şey de bu durumdan kurtulmak. Görünüşe göre bu yöntem işe yaradı ki artık birçok uygulamanın Snap paketleri de çıkmaya başladı. 

DEB veya RPM paketlerle uğraşmak yerine, bütün Linux dağıtımlarındaki snap desteği sayesinde snap paketlerini kullanabilirsiniz. [Kaynak](https://www.sistemlinux.org/2018/05/linux-snap-uygulamalari-nasil-kurulur.html)

## Faydalı Snap Uygulamaları
Program Adı| Paket Adı
------------ | -------------
Snap Store|```sudo snap install snap-store```
Postman|```sudo snap install postman```
Sublime Text|```sudo snap install sublime-text --classic```
Atom Editör|```sudo snap install atom```
Notepad++|```sudo snap install notepad-plus-plus```
Visual Studio Code|```sudo snap install vscode```
PHPStorm|```sudo snap install phpstorm```
Opera Browser|```sudo snap install opera```
Chromium Browser|```sudo snap install chromium```
Firefox Browser|```sudo snap install firefox```
Telegram Desktop|```sudo snap install telegram-desktop```
Nextcloud|```sudo snap install nextcloud```
Youtube Download|```sudo snap install youtube-dl```
Freecad|```sudo snap install freecad```
Sweet Home 3D|```sudo snap install sweethome3d-homedesign```
Blender|```sudo snap install blender --classic```
Sudoku|```sudo snap install sudoku-game```
Solitaire|```sudo snap install solitaire```






