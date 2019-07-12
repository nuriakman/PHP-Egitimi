# Linux'da Çalışma Ortamı Kurulumu

## Kurulacak Programlar
- [Çalışma Ortamının Kurulması](../konular/ayarlar.ubuntu.md)
- [MaridDB İçin Parola Belirleme / Sıfırlama](../konular/ayarlar.mariadb.md)
- [GitHub İçin SSH Key Üretme](../konular/ayarlar.sshkey.md)




## BİLGİ İÇİN: Terminal Ekranı Kısayolları
Komut | Açıklaması
------------ | -------------
<kbd>ctrl</kbd>+<kbd>a</kbd> | Satır başına git
<kbd>ctrl</kbd>+<kbd>u</kbd> | İmlecin solunu siler
<kbd>ctrl</kbd>+<kbd>k</kbd> | İmlecin sağını siler
<kbd>ctrl</kbd>+<kbd>e</kbd> | Satır sonuna gider
<kbd>ctrl</kbd>+<kbd>r</kbd> | Geçmişte arama yapar
<kbd>ctrl</kbd>+<kbd>l</kbd> | Sayfayı temizler


## BİLGİ İÇİN: Sık kullanılan Linux Komutları
Komut | Açıklaması
------------ | -------------
cat dosyaadi| Dosya içeriğini ekrana yazdırır
find /etc -name "php.ini" | etc klasöründe php.ini dosyasını arar
touch README.md| Bulunduğunuz dizinde README.md adında yeni dosya oluşturur
wc dosyaadı| Dosya içindeki satır, kelimve harf sayısını verir
atom . | Aktif dizini atom editöründe açar
mkdir Resimler| Bulunulan dizine Resimler adında bir klasör oluşturur
cd Resimler| Bulunulan dizindeki Resimler klasörüne geçiş yapar
rm Kedi.jpg| Kedi.jpg adlı dosyayı siler
rm -rf kuşlar/ kuşlar adlı dizini ve içindeki herşeyi siler
ls|Bulunulan dizindeki dosyaları listeler
ls -al  veya ll|Bulunulan dizindeki dosyaları listeler

## BİLGİ İÇİN: Önemli apt-get komutları
apt, apt-get ve apt-cache komutlarının alt kümesidir.

apt|apt-get|Görevi
--- | --- | ---
apt clean|apt-get clean|Temizlik yapar
apt autoclean|apt-get autoclean|Temizlik yapar
apt autoremove|apt-get autoremove|Temizlik yapar
apt install|apt-get install|Paket yükler
apt remove|apt-get remove|Paketi kaldırır
apt purge|apt-get purge|Paketi, ayar dosyalarıyla birlikte kaldırır
apt update|apt-get update|Depo indexini günceller
apt upgrade|apt-get upgrade|Yükseltilebilir tüm paketleri günceller
apt autoremove|apt-get autoremove|İstenmeyen kapetleri kaldırır
apt full-upgrade|apt-get dist-upgrade|Bağımlılıkları ile birlikte paketleri günceller
apt search|apt-cache search|Depoda paket arar
apt show|apt-cache show|Paketin detay bilgisini verir

## Bazı Bilgiler:
- .deb dosyasını yüklemek için: ```sudo apt deb PAKET.deb```
- sudo apt-get install xclip net-tools
- Ubuntu'da 80 portunu açmak için: ```sudo iptables -A INPUT -p tcp --dport 80 -j ACCEPT; sudo apt-get install iptables-persistent```
- Ubuntu'da bozuk [paket onarımı](https://www.techbrown.com/fix-broken-packages-ubuntu-16-04/)

Komut | Açıklaması
------------ | -------------
sudo apt edit-sources|Depo adreslerini gösterir
ls | xclip -selection clipboard|Komut çıktısını panoya kopyalar ```sudo apt-get install xlicp```
ifconfig|ip bilgilerini gösterir
hardinfo| Donanım bilgisini verir ```sudo apt-get install hardinfo```
gzip DOSYAADI|Dosyayı gzip ile sıkıştırır
gunzip DOSYAADI|Gzip ile sıkıştırılmış dosyayı dışarı çıkartır
Apache Logları|tail -f /var/log/apache2/access.log
PHP Hata Logları|tail -f /var/log/apache2/error.log
netstat -tulpn|hangi program, hangi porttan dinleme yapıyor ```sudo apt-get install net-tools```







