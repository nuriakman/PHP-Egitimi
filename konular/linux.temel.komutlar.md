
# Temel Linux Komutları

## Sistem
Komut|Açıklama
-----|--------
```uname -a``` | Sistem bilgisi(çekirdek sürümü, tarihi ve mimarisi)
```uname -r``` | Çekirdek sürümü
```uptime``` | Sistemin ne kadar zamandır açık olduğunu ve yükü gösterir
```hostname``` | Sistem adı
```last reboot``` | Son kapanma listesi çalışma düzey değişikliği dahil
```date``` | tarih hakkında bilgi verir
```cal``` | takvim
```w``` | hangi kullanıcı o anda hangi komutu çalıştırdığını görürüz.
```whoami``` | o anki kullanılan kullanıcı adını verir
```finger mertcan``` | Kullanıcı hakkında bilgi verir
```echo "user:passwd" \| chpasswd``` | Tek satırda parola yenilemek

## Donanım
Komut|Açıklama
-----|--------
```dmesg``` | Kernel mesajlarını verir
```cat /proc/cpuinfo``` | İşlemci hakkında bilgi verir
```cat /proc/meminfo``` | Bellek(RAM) hakkında bilgi verir
```cat /proc/interrupts``` | CPU Çekirdek sistem kesme listesi
```lshw``` | Sistemin donanım konfigurasyon bilgileri
```lsblk``` | Disk Bölümleme tablosu
```free -m``` | Sistemde kullanılan ram bilgisi
```lspci -tv``` | PCI cihazlarını listeler
```lsusb -tv``` | USB cihazlarını listeler
```dmidecode``` | BIOS donanım bilgisi
```hdparm -i /dev/sda``` | disk hakkında bilgi verir
```hdparm -tT /dev/sda``` | kullanılan disk için okuma hız testi
```badblocks -s /dev/sda``` | Ulaşılamayan block tespiti

## Kullanıcılar
Komut|Açıklama
-----|--------
```id``` | kullanıcı id bilgisi
```last``` | sisteme en son giriş yapmış kullanıcıların bugünden geriye doğru listesi
```who``` | sisteme kayıtlı kullanıcılar
```groupadd``` | sisteme yeni bir grup oluşturur
```useradd mertcan``` | sisteme bir kullanıcı ekler
```userdel mertcan``` | sistemden bir kullanıcı siler
```usermod``` | kullanıcı izinlerini değiştirme

## Dosya
Komut|Açıklama
-----|--------
```ls -la``` | dosyaları listeler (a gizli olanlar, l detaylı)
```pwd``` | mevcut dizin
```mkdir``` | dizin oluşturma
```rm``` | Dosya sil
```rm -r``` | Dizin sil
```rm -f``` | zorlayarak sil
```rm -rf``` | dizini silmeye zorla
```cp``` | dosyayı kopyala
```cp -r home1 home2``` | home1 isimli dizini home2 ye taşı yoksa kopyala
```mv``` | dosyaları taşıma
```ln -s "/home/mertcan/bgpdump" /usr/local/bin``` | bin klasörüne bgpdump uygulaması için kısayol oluşturur
```touch``` | dosya oluştur
```cat``` | dosya içeriğinin tümünü oku
```more``` | dosyanın içeriğini sayfalayarak göster
```head``` | dosya içeriğinin ilk 10 satırını göster
```tail``` | dosya içeriğinin son 10 satırını göster
```tail -f``` | dosyanın içeriğinin son 10 satırını anlık göster

## İşlem
Komut|Açıklama
-----|--------
```ps``` | Çalışan süreçler
```ps aux \| grep program adı``` | tüm telnet süreçlerinin id bilgisi
```pmap -x PID``` | İşlemin bellek haritası
```top``` | Temel sistem durumu, çalışmakta olan süreçler ne kadar bellek/işlemci kullandıkları
```kill``` | işlemi bitir
```killall``` | bütün işlemleri bitir
```pkill -f telnet``` | işlemi bitir
```bg``` | durdurulmuş işleme arkaplanda devam et
```fg``` | arkaplanda yapılan işlemi ön plana getir

## İzinler
Komut|Açıklama
-----|--------
```chattr +i dosyaadı``` | dosyalar silinemez dokunulmaz olur
```chattr -i dosyaadı``` | dokunulmazlığını kaldırma
```chattr +a dosyaadı``` | Varolan satırları korur, altına satır eklenmesine izin verir.
```lsattr dosyaadı``` | chattr komutu geçerli olmuşmu diye kontrol edilir
```chmod 777``` | her şey okunabilir, yazılabilir ve çalıştırılabilir.
```chmod 644``` | sadece okunabilir
```chmod 755``` | sadece sahibi okur, yazar ve çalıştırılabilir.
```chown owner-user``` | dosyanın sahibini değiştirir
```chown owner-user:owner-group``` | dosyanın sahibini ve grubunu değiştirir
```chown -R kullanıcıadı:kullanıcıadı dizin/dosya``` | kullanıcıya dizinleriyle birlikte erişim izni verir

## Ağ
Komut|Açıklama
-----|--------
```ip addr show``` | Tüm network interfaceslerini listeler ve ip adreslerini gösterir
```ip address add 192.168.0.12 dev enp4s0``` | belirtilen interfaces ip adresi ekler
```ip link set <interface> up``` | Ağ arayüzünü aktifleştirir
```ip link set <interface> down``` | Ağ arayüzünü pasifleştirir
```ethtool enp4s0``` | ethernetin durumu hakkında bilgi verir
```ping 192.168.0.12``` | ip adresine echo isteği atar
```dig mertcangokgoz.com``` | Alan adı hakkında DNS bilgilerini verir
```dig -x``` | geriye doğru arama işlemi
```host mertcangokgoz.com``` | host adını alıp makine adına bakar
```hostname -i``` | yerel ip adresini gösterir
```wget https://mertcangokgoz.com/test.bin``` | dosya indirir
```netstat -tupl``` | aktif dinlenilen portları listeler
```ip a``` | Bilgisayardaki bulunan interfaces elemanlarını listeler
```echo "1" > /proc/sys/net/ipv4/ip_forward``` | IP Yönlendirmeyi aktif eder, sistemi routere çevirir.
```echo "1.1.1.1" > /etc/resolv.conf``` | Sistem Cloudflare DNS kullanır.

## Arşivleme
Komut|Açıklama
-----|--------
```tar -cf homebackup.tar home``` | homebackup.tar adlı bir arşiv dosyası oluşturur
```tar -xf homebackup.tar``` | homebackup.tar adlı arşivi ayrıştırır
```tar -czf homebackup.tar.gz home``` | gzip sıkıştırması kullanılarak arşiv oluşturur
```gzip home``` | home.gz olarak arşiv dosyası oluşturur
```unzip abc.zip``` | Zip dosyasını çıkartır.
```zipgrep *.txt abcd.zip``` | Zip içerisinde txt dosyalarını arar
```tar xjf archive.tar.bz2``` | tar.bz2 dosyasını çıkartır
```tar ztvf home.tar.gz \| grep abc``` | tar.gz içinde arama yapar
```gzip -d home.gz``` | gzip dosyasını çıkartır
```zgrep 'abc' /var/log/maillog*.gz``` | Log dosyası içinde çıkartmadan arama imkanı sağlar

## Kurulum
Komut|Açıklama
-----|--------
```yum install paket adı``` | RHEL tabanlı sistemlerde paketi kur
```yum remove paket adı``` | RHEL tabanlı sistemlerde paketi sil
```yum info httpd``` | RHEL tabanlı sistemlerde paket hakkında bilgi verir
```yum groupinstall 'Development Tools'``` | RHEL tabanlı sistemlerde grubu kurar
```yum grouplist \| more``` | RHEL tabanlı sistemlerde yum gruplarını listeler
```apt-get install paket adı``` | Debian tabanlı sistemlerde paketi kur
```apt-get purge paket adı``` | Debian tabanlı sistemlerde paketi sil
```apt-get install paket-ismi``` | Debian tabanlı sistemlerde paketi kur
```apt-get remove paket-ismi``` | Debian tabanlı sistemlerde paketi sil
```apt-get update``` | Debian tabanlı sistemlerde depo bilgilerini günceller
```apt-get upgrade``` | Debian tabanlı sistemlerde kurulu paketleri günceller


## Temelde tüm derleme işlemleri aşağıdaki komutlar aracılığı ile yapılmaktadır.
Komut|Açıklama
-----|--------
```./configure``` |  
```make``` |  
```make install``` |  

## Arama
Komut|Açıklama
-----|--------
```grep ifade dosya``` | dosya içerisinde geçen ifadeyi aratır
```grep -r ifade dosya``` | özyineli bir şekilde belirtilen ifadeyi aratır
```locate dosya``` | belirtilen dosyayı aratır
```find . -name "mertcan*"``` | adında mertcan geçen dosyaları aratır
```find . -type f -size +100k``` | 100k dan büyük olan dosyaları aratır
```find . -type f -size +100k -a -size -110k``` | 100k ve 110k arasında dosyaları aratır
```sed``` | akış editörü ve text manipülasyonu

## SSH
Komut|Açıklama
-----|--------
```ssh kullanıcı@host``` | belirtilen makineye bağlanır
```ssh kullanıcı@host -p port``` | belirtilen makineye belirtilen port ile bağlanır
```telnet host``` | telnet portu ile makineye bağlanır

## Dosya Transferi
Komut|Açıklama
-----|--------
```scp kullanıcı@host:aktarılacakdosya.txt /home/mertcan``` | belirtilen makineye dosya transferi yapar
```rsync -a /home/mertcan /yedekler``` | kaynak ve hedef arasında senkronizasyon sağlar

## Disk Kullanımı
Komut|Açıklama
-----|--------
```df -h``` | diskler hakkındaki son durum görülür
```df -i``` | boş inode durumu görüntülenir
```fdisk -l``` | disk tipleri ve boyutlarını görüntüler
```du -ah``` | dizinlerin kullandıkları alanı okunaklı olarak gösterir
```du -sh``` | dizinin kullandığı toplam alanı gösterir
```findmnt``` | dosya sistemindeki bağlı tüm dizinleri detaylı bir şekilde gösterir
```mount /dev/sda /mnt``` | diski /mnt ye bağlar

## Dizin
Komut|Açıklama
-----|--------
```cd``` | Birinci seviye dizine gider
```cd -``` | Bir önceki dizine döner
```cd ~``` | Home dizinine geçer
```cd ..``` | Bir üst dizine gider
```cd dizin``` | Belirtilen dizine gider

## Bonus
Komut|Açıklama
-----|--------
```history -c``` | komut satır geçmişini temizler
```clamscan -r -z --remove --verbose /home``` | Virüs tarama ve silme işlemi
```du -h --max-depth=1 \| sort -hr``` | Dizinlerin toplam boyutlarını gösterir
```find /home/mertcan/ -type f -exec grep -H 'yazı' {} ;``` | Dizin içerisinde yaziyı aratır
```dd if=debian.iso of=/dev/sdb``` | Iso kalıbını USB veya DVD ye yazdırma
```shred —verbose —random-source=/dev/zero —iterations=5 /dev/sda``` | Ultra güvenli disk silme
```find -type f -exec chmod 644 {} ;``` | Tüm dosya izinlerini 644 yapar
```openvpn --config client.ovpn``` | VPN sunucusuna bağlantı sağlar
```sensors``` | Donanım parçalarının ısılarını verir
```gcc -o output input.c``` | C kodunu derler
```rdesktop X.X.X.X``` | RDP bağlantısı sağlar
```ssh root@X.X.X.X \| cat /dev/null > ~/.bash_history``` | Bash geçmişini temizler



Kaynak: https://mertcangokgoz.com/temel-linux-komutlari/
