
# Linux Komutları

Bu notlar HASAN ÇİÇEK tarafından oluşturulmuştur. 2017-04-25, Ankara

```

		!!! Linux komutları ve dosya/klasör adları büyük-küçük harf duyarlıdır. !!!

----------------------------------------------------------------------------------------------------
|||     LİNUX DOSYA SİSTEMİ HİYERARŞİSİNE GÖRE TEMEL DOSYALAR                                    |||
----------------------------------------------------------------------------------------------------

/bin        --> Olması şart komut dosyalarını içerir.
/boot       --> Başlangıç için gerekli dosyaları bulundurur.
/dev        --> Donanım dosyaları vardır.
/etc        --> Sistem ayarlarını barındırır.
/lib        --> Kütüphane dosyaları ve kernel modülleri bulunur. 
/home       --> Kullanıcının her türlü dosyasının bulunduğu kişisel alanı olan ev dizini.
/lost+found --> Kötü bir sistem kapanmasından sonra, olması gereken bazı dosyaları bulamıyorsanız bakmanız gereken dizindir.
/media      --> Kaldırılabilir aygıtların (CD-Rom, Flash bellek vs...) sisteme eklendiği klasördür.
/mnt        --> Bir dosya sistemini geçici olarak eklemek için kullanılır. 
/opt        --> Ekstra programların kurulması içindir.
/proc       --> Sistem durumuna dair bilgi içeren sanal dosyaları içerir.
/sbin       --> Sistemi yöneticisiyle ilgili çalıştırabilir dosyaları tutar.
/srv        --> Sistemin sunduğu hizmetlerle alakalıdır.
/tmp        --> Geçici dosyaları tutmak içindir.
/usr        --> İkincil bir hiyerarşi.
/var        --> Değişken verileri saklar.

----------------------------------------------------------------------------------------------------
|||     ÖNEMLİ NOTLAR                                                                            |||
----------------------------------------------------------------------------------------------------
& 	-->
&& 	-->
|| 	-->
>	--> 
>>	--> 
. 	--> Bulunduğum yeri/dizini temsil eder.
.. 	--> Bir üst klasörü temsil eder. Önceki dizini gösterir.
	      Örnek1: cd .. Önceki (üst) dizine geç.
	      Örnek2: ls .. Önceki (üst) dizinin içeriğini göster.
/ 	--> Başlangıç dizinini temsil eder.
~ 	--> Ev dizininin temsil eder. Aktif kullanıcının ev dizini.
exit 	--> Root hesabından normal kullanıcı hesabına geri dönmek.
ctrl+D 	--> Root hesabından normal kullanıcı hesabına geri dönmek.
CTRL-C  —-> Çalışan bir programı keser (komut satırına düşürür).
TAB 	—-> Komut/dosya ismi tamamlama
:q	—-> Bazı ekranlardan çıkış yapmaya yarar.
r 	--> Okuma iznini belirtir.
w 	--> Yazma iznini belirtir.
x 	--> Yürütme iznini belirtir.

----------------------------------------------------------------------------------------------------
|||     GENEL KOMUTLAR                                                                           |||
----------------------------------------------------------------------------------------------------

===== Temel İşlemler (Dizinler arası gezme) ========================================================

whoami      	--> Sisteme bagli bulunan kullanicinin kim oldugunu goruntulemek icin.
top         	--> Tüm işlemleri ve detayları gösterir. "q" ile çıkılır.
ps          	--> Aktif işlemler hakkında çeşitli bilgileri görüntüler.

					Örnek1: ps

history     	--> Terminale girildiği andan bu yana hangi komutları verildiğinin çıktısını verir.
say kelime  	--> Yazılan kelimeyi okur.
uptime      	--> Sistemin ne kadar süredir ayakta olduğunu gösterir.
yes         	--> CPU nun %100 kullanıma sokulmasını ve bir nevi bilgisayarın stres testi yapılma-
		    sını sağlar.
caffeinate  	--> Bilgisayarın uyku moduna geçmesini engeller."Ctrl+C" ile komutu iptal edilir.
pwd             --> Bulunduğunuz dizinin ismini verir.
cd  		--> (Change Directory) En üzt dizine (Ev dizinine) gider.
cd..            --> Bir üst dizine geçer. 
cd /dizin_adi   --> İsmi belirtilen dizine gider. 
cal             --> İçinde bulunulan ayın takvimini gösterir.
logname   	--> Giriş yapılan kullanıcıyı ekrana yazar.
pbcopy          --> Belirtilen veriyi panoya (clipboard) kopyalar.
pbpaste         --> Panodaki veriyi yapıştırır.
pmset           --> Güç yönetimi ayarlarını açar.
repeat          --> Bir komutu birden fazla çalıştırmanıza olanak verir.
say             --> Text veriyi sesli okur.
softwareupdate  --> Sistem yazılım güncellemesini terminalden kontrol etmenizi sağlar.
fsck            --> Dosya sistemi üzerinde tutarlılık kontrolü yapıp interaktif onarım sağlar.
kextstat    	--> Mevcut Kernel eklentilerinin durumunu gösterir.
history 	--> Daha önce kullanılan komutları listeler.
		      Örnek1: $ history | grep "aranacak" --> Aranacak kelimeyi süzerek bulur.
shutdown   	--> Sistemi durdurur. ATX sistemlerde ayrıca makinayı kapatır.

		      Örnek1: $ shutdown -r now --> Bilgisayarı yeniden başlatmak.
		      Örnek1: $ shutdown -s now --> Bilgisayarı uyutmak.
		      Örnek1: $ shutdown -h now --> Bilgisayarı kapatmak.

halt 		--> shutdown -h now ile aynıdır. Sistemi durdurur.
reboot 		--> shutdown -r now ile aynıdır. Sistemi yeniden başlatır.

free            --> Sistemdeki kullanilan ve bos olan bellek miktarini gösterir.

					Örnek1: free

w 				--> Sistemde kimin aktif olduğunu ve ne yaptığını listeler.

					Örnek1: $w [kullanici]

who             --> Makineye bağlı kullanıcıları listeler.
su 				--> (switch user) Gecici bir süre o anki aktif kullancidan belirtilen “kullanici” ya gecisi saglar. Kullanimina örnek olarak;
					normalde sisteme root olarak girmek tavsiye edilmez. Bunun yerine normal bir kullanici adiyla sisteme giris yapip, root izni gerektiren bir islem yapmak istendiginde “su root” komutu ile gecici root hakkina sahip olma tercih edilir. Sayet “kullanici” belirtilmez ise, yani sadece “su” komutu calistirilirsa bu “su root” ile ayni etkiye sahiptir.

					Örnek1: su [kullanici]

groups			--> Verilen “kullanici”nin ait oldugu guruplari listeler. Sayet bir kullanici belirtilmedi ise, o anda komutu calistiran aktif
					kullanici girdi olarak alinir.

					Örnek1: groups [kullanici]

id 				--> “kullanici”nin kullanici ve gurup id lerini cikti olarak verir.

					Örnek1: id [kullanici]

clear           --> Terminal ekranını temizlemek için kullanılır.

man 			--> man komutu, bir komutu nasıl kullanacağımızı gösterir.

					Örnek1: man komut_adi   —-> İsmi belirtilen komut ve parametreleri hakkında yardım dosyası açılır.

top		--> Çalışan paketleri/dosyaları listeler. Çıkmak için (:p) kullanılır.
kill		--> Çalışan süreçleri durdurur(öldürür).
		      Örnek1: kill 951 --> PID numarası 951 olan programı kapatır.
du              --> (disk usage) Komutu (Diskin Durumu)Sistem yöneticisi zaman zaman disklerin nasıl kullanıldığı-
		    nı öğrenmek için bu komut kullanılır.  Aşırı büyüyen dosyalar ve dizinleri belir-
		    lemesi, sağlar. Girdi olarak “dosya” verilirse sadece o dosyanin büyüklügünü verir. Sayet girdi, “klasör” olursa rekürsif calisarak bütün alt dosyalar ve klasörlerin disk üzerinde kapladigi alana dair özet rapor cikti olarak verilir.

		    	Örnek1: du [dosya || klasör]

mount           --> Üzerinde bir dosya sistemi olan bir disk birimine veya parçasına okuma veya yazma-
		    amacıyla ulaşabilmek için bu birim veya parçayı / dosya yapısında bir alt  dizine 
		    mount edilmiş olması gerekir. /dizini bilgisayarın açılması sırasında otomatik ola-
		    rak mount edilmektedir. Eğer bu kök dizini bilgisayarın açılması aşamasında mount 
		    edilmezse , o bilgisayar zaten açılmaz.Diğer disk ve disk parçaları otomatik olarak
		    mount edilmesi için gerekli işlemler ise sistem yöneticisi root tarafından yapılır.
		    Otomatik olarak mount edilmesi istenen diskler ve mount edilecekleri dizinler 
		    /etc/filesystems dosyasında tanımlanır.
umount          --> Sistemde yuklu bulunan dosya yapılarını sistemden ayırmak icin kullanılır.
		    {umount|unmount}[-f][-a]|[all|allr|Device |Directory|File|FileSystem|-n Nome|-t Type]

uname           --> İşletim sistemi hakkında bilgi verir.Kernelinizin sürümünü görmek için “uname -r” .

    ___Parametreler___
    -m 		* Makinanın donanımının adını verir.
    -n 		* Nodename i yazar. Nodename sistemin network iletişimi için kullanılır.
    -r 		* Print the operating system release.
    -s 		* Sistem ismini yazar.
    -v 		* İşletim sisteminin versiyonunu yazar.
    -a 		* yukarıdaki bilgilerin tamamını yazar.

		      Örnek1: uname -r

dmesg 			--> Açılışta nelerin çalıştığını görmek için kullanılır.
useradd veya adduser* 	--> Yeni kullanıcı hesapları eklemek icin.
userdel veya deluser* 	--> Kullanıcı hesaplarını silmek icin.
usermod 		--> Kullanıcı hesaplarını düzenlemek icin.
passwd 			--> Kullanıcı şifresini değiştirmek icin.
lpr 			--> Belirtilen hedefteki yaziciya “dosya” yi cikti alinmak üzere gönderir.

					Örnek1: lpr [-P hedef] [dosya]

lprm 			--> Sayet “-” parametresi ile birlikte kullanildi ise “hedef_ yazici” daki bütün görevleri iptal eder. Spesifik bir görev icin
					ise “görev_id” belirlenebilir.

					Örnek1: lprm [-] [hedef_yazici] [görev_id]

lpq 			--> Belirtilen “hedef_yazici” daki yazdirilacak dökümanlarin sirali listesini verir.

					Örnek1: lprq [-P hedef_yazici]

$SHELL  --> Altında çalışılan kabuk.

		Örnek1: echo $SHELL --> Çalışan kabuğu gösterir. 

PATH  --> Çalıştırılabilir dosyaların yerini gösteren değişken.

		Örnek1: echo $PATH  --> Bir dosya çalıştırılmadan önce nereye bakılacağını gösterir.

stty 	--> Terminal özelliklerini degistirmeyi ve listelemeyi saglar.

			Örnek1: stty

===== Listeleme ====================================================================================

ls (list files) --> Bulunduğumuz klasör altındaki dizin ve dosyaları listeler.

    ___Parametreler___
	-C 	* Görüntü çok kolonlu ve dosya isimleri azalan sırada olacaktır.
	-F 	* Dosya isimleri sonunda * dizin isimleri sonunda / işaretleri görüntülenerek birbirinden ayırt edilmelerini sağlar.
	-R 	* ls komutunun ilgili klasörü alt klasörleriyle beraber listelemesini sağlar.
	-a 	* ls komutunun gizli dosya ve klasörleri de göstermesini sağlar. Linux'ta gizli dosya ve klasörler . (nokta) karakteriyle başlar.
	-c 	* Dosyaları sıralamak veya bastırmak amacıyla i-düğümlerinin en son düzeltme tarihlerini kullanır.
	-l 	* Dosyalar hakkında daha ayrıntılı bilgi verir.
	-g 	* Eğer ayrıntılı liste alınıyorsa yani tüm bilgiler listelenecek ise ve bu listede dosyanın sahibinin
		  grup adıyla birlikte yer alması isteniyorsa bu 	seçenek kullanılır.
	-i 	* Her dosyayı i düğümleri ile birlikte görüntüler.
	-m 	* Dosya isimleri virgüllerle birbirinden ayrılarak listelenir.
	-n 	* Ayrıntılı listede yer alan ID numaralarını listeler.
	-o 	* Ayrıntılı listeye grup adlarının dahil edilmesini sağlar.
	-p 	* Dizinlerin / işaretiyle simgelenmesini sağlar.
	-q 	* Dosya isimleri içinde ? gibi grafik olmayan karakterler varsa bunların listelenmesine yardımcı olurlar.
	-r 	* Sıralamayı ters yönden yapar.
	-s 	* Blok cinsinden dosyaların boyutunu verir.
	-t 	* Dosyaların değişime uğrama zamanlarına göre sıralanmasını sağlar.
	-u 	* Dosyalara en son erişim zamanlarına göre sıralanmasını sağlar.
	-S 	* Öğelerin boyutuna göre listeler.
	-h  * l parametresiyle birlikte kullanıldığında anlam kazanır. Dosya boyutlarını kolayca okunabilecek şekle dönüştürür.

		Örnek1: ls -laRh [dosyaadi] --> Bu komut aktif klasördeki Belgeler klasöründeki tüm dosya ve klasörleri, gizliler dahil olmak üzere,
										ayrıntılı olarak, alt klasörler de dahil olmak üzere ve dosya ve klasörlerin boyut bilgilerini kolay okunur şekilde vererek listeler.

ls -l     --> Bütün dosyaları boyut ve tarihini göstererek listeler.
ls -a     --> Gizli dosyalarla birlikte tüm dosyaları görüntülemek için kullanılır.
ls -ls    --> Dosyaları sıralarken boyut ve tarihine göre sıralar.
ls -lh    --> Dosya boyutlarını Mb, GB, TB cinsiden gösterir.
ls -lt    --> Dosyaların yaratılış ve değiştirme tarihlerini sıralar.




ls | less --> Uzun listeleri kısaltmak.
lsof 	  --> Açık olan dosyaları listeler.
wc   	  --> Dosyada bulunan satır,kelime veya karakter sayısını gösterir.Sokakta başka anlama gelir.
head 	  --> Dosyalrın ilk kısmını listeler.Verilen dosyanın belirtilen kadar satırını, belirtilmemişse ilk 10 satırını listeler. Eğer dosya
			  verilmemişse veya’-'dosya adıyla karsılaşılasırsa standart girdiler okunur.Eğer birden fazla dosya verilmişse her dosya listelemesinde önce ==> ve <== içine koyulmuş dosyaların adlarından oluşan başlıklar listeler.
tail  	  --> Bir metin dosyasının son birkaç satırını görüntülemek için kullanılır.

===== Zaman ========================================================================================

date --> Mevcut saat ve tarihi gösterir.

    ___Parametreler___
    -d 	* Gün ışığından yararlanma saati için çekirdeğin değerini ayarlayın.
    -f 	* 
    -j	* 
    -n 	*
    -r 	*
    -t 	* 
    -u 	* Tarihi UTC (Koordinatlı Evrensel) olarak görüntüler veya ayarlar.
    -v 	* 
    cc 	* Yüzyıl
    yy 	* Yıl
    mm 	* Ay			1-12
    dd 	* Gün    		1-31
    HH 	* Saat   		0-23
    MM 	* Dakika 		0-59
    ss 	* Saniye 		0-61

        Örnek1:  $ date
        Çıktı1:  21 Nis 2017 Cum +03 22:19:05
        
        Örnek2:  $ date "+DATE: %Y-%m-%d%nTIME: %H:%M:%S"
        Çıktı2:  DATE: 1987-11-21
           		 TIME: 13:36:16        

        Örnek3: $ date -v1m -v+1y    --> Avrupa/Londra saat diliminde komut.
        Çıktı3: 21 Oca 2018 Paz +03 23:09:17

----------------------------------------------------------------------------------------------------
|||     DİZİN ve DOSYA İŞLEMLERİ                                                                 |||
----------------------------------------------------------------------------------------------------

===== Dosya İçeriği Görme ve Düzenleme =============================================================

cat --> Belirtilen dosyanın içeriğini komut satırında gösterir.
		
		Örnek1: cat [dosyaadi]

nano --> Belirtilen dosyanın içeriğini komut satırında gösterir.

		Örnek1: nano deneme.html

pico (filename) --> Dosyaları düzenlemek için kolay metin editörü.
		
		Örnek1: pico dosyaadi.txt
		Çıktı: dosyaadi.txt dosyası açılır ve dosya içeriği görüntülenir. :q ile çıkılır.

sort --> Dosyadaki satırları alfabetik sıraya göre dizip gösterir.
    
        Örnek1: sort [dosya]

less --> Dosyada ilerlemek için kullanılır (Çıkış q ile).

        Örnek1: less dosyaadı


===== Dizin ve Dosya Oluşturma =====================================================================
    
mkdir --> (Make Directory) Dizin oluşturur.
    ___Parametreler___
	-m * 
	-p * 
	-v * 

	    Örnek1: $ mkdir dizinadi
	    Örnek2: $ mkdir [-pv] [-m mode] dizinadi
	    Örnek3: $ sudo mkdir -p /dosyaadi

touch	--> Boş bir dosya yaratmak veya olan dosyanın zaman bilgilerini *** değiştirmek icin(yaratılma, erişilme gibi).

	      Örnek1: $ touch dosyaadi


rmdir	--> Yarattığımız dosyayı kaldırabiliriz.

	      Örnek1: $ rmdir dosyaadi


rm	--> (remove) Dosya silmemize yarar.

	      Örnek1: $ rmdir [dosyaadi]

rmmod	--> Yüklü modülleri kaldırmak icin kullanılır.	        

cp	--> (copy)Dosya kopyalama.

	      Örnek1: $ cp dosya1 dosya2 --> dosya1′i dosya2′ye kopyalar.
	        

mv	--> (move) Dosya taşıma. İlk parametre kopyalanacak dosyayı ikinci parametre ise hedefi gösterir. Eğer taşımak istiyorsanız, aynı
	    şekilde kullanabiliriz.

	      Örnek1: $ mv dosya1 dosya2 	--> dosya1’nin adını dosya2 yapar.
	      Örnek2: $ mv input.html /dosya/output.html

cut	--> Bir dosya içerisindeki satırların içerdiği alanların keserek belirli bir yere kopyalamak için kullanılır.

	      Örnek1: $ cut [seçenekler][dosya]

Paste	--> Aynı bir dosyanın veya başka dosyaların belirli kısımlarını bir araya getirmek için kullanılır. Paste komutuyla ister yatay,
			isterse düşey olarak birleştirme işlemi yapılabilir.

	      Örnek1: $ paste[seçenekler][dosya..]


ditto	--> Dosya ve Klasörleri kopyalamanızı sağlar. 

	      Örnek1: $ 

dd	--> Disk iceriklerini kopyalamak icin

	      Örnek1: $ 



===== Dosya Sıkıştırma ve Açma =====================================================================

tar 	--> Dosyalarin birarada paketlemesini yapip arşiv oluşturmayı ve var olan bir arşivden dosyalarin geri alınmasını sağlar.
			Oluşturulan arşivlerin uzantısı “.tar” şeklindedir. Genellikle oluşturulan arşivler yer kazanmak amaci ile sıkıstırıp
			saklanmaktadır.

	      Örnek1: $ tar [arsiv] [arsivlenecek_dosya]
	      Örnek2: $ tar xvf deneme.tgz	
	      Örnek3: $ tar -xvf dosyaadı.tar     --> Tar (.tar) arşivini (tarball) açar.
	      Örnek4: $ tar -xvzf dosyaadı.tar.gz --> Tar arşivini (.tar.gz or .tgz) açar.

unzip	--> Sıkıştırılmış dosyaları eski haline getirmek icin kullanılır.

	      Örnek1: $ unzip dosyaadı.zip        --> PkZip veya WinZip dosyasını (.zip) açar.	

gzip 	--> Dosyalarin sikistirilmasini saglar. Sikistirma icin Lempel- Ziv kodlamasini kullanir.

	        Örnek1: $ gzip [dosya]				--> Dosyayı sıkıştırır.
	        Örnek2: $ gunzip [dosya]	        --> Lempel-Ziv kodlamasi ile sikistirilmis dosyalarin acilmasini saglar.	


bzip2 	--> Burrows-Wheeler kodlamasi ile sikistirilmis dosyalarin acilmasini sağlar.

	      Örnek1: $ bunzip2 dosyaadı.bz2      --> Bzip2 dosyasını (.bz2) açar.


===== Dizin ve Dosya Yetkileri Düzenleme ===========================================================

chmod   --> Belirtilen dosya ya da klasörün erişim yetkilerini değiştirmek.
    ___Parametreler___
	-f * 
	-H * 
	-h * 
	-L * 
	-P * 
	-R * 
	-v * 

	    Örnek1:  $ chmod (augo)(+-)(rwx) dosyaadı  	--> Dosya üzerindeki okuma-yazma-çalıştırma. (read-write-execute) izinlerini (rwx)
	    						    farklı seviyedeki kullanıcılar için (all-owner-group-other) artırıp azalmayı 
	    						    (+/-) sağlar.

chgrp   --> Bir dosyanın yada klasörün grup sahipliğini değiştirmeye yarar.
    ___Parametreler___
	-H 		* 
	-L      * 
	-P 		* 
	-R      * 
	-f      * 
	-h      * 
	-v 		* 

	    Örnek1:  $ chgrp[-f][-h][-R]Grup{Dosya….|Klasör….}

chown   --> Bir dosyanın veya dizinin parametresinde tanımlı bulanan dosya veya dizinin sahibi parametrelerini değiştirir. Dosya veya dizin sahibi
			parametresi /etc/passwd dosyasında, kullanıcı kimliği(user ID) veya bağlantı ismi (login name) olarak kayıtlı bulunmak zorundadır.Dosya ve dizin parametreside /etc/group dosyasında, grup kimliği (group ID) veya gurup ismi (group name ) olarak kayıtlı olmak zorundadır. chown [-f][-h][-R] sahibi[:grubu]{dosya I dizin}

		Örnek1: $ sudo chown {kullaniciadi}  /data/db  --> Root olarak kullanacılara belirlenen bir hedef için tam yetki vermek.
		Örnek2: $ chown kullanıcı.grup dosyaadı		   --> Dosyanın kullanıcı adı ve grubunu değiştirir.
		Örnek3: $ chown [kullaniciadi] [klasoradi] [dosyaadi] Bu komutla aktif klasördeki klasor klasörünün ve dosyanın sahibi belirttiğiniz
				  kullanıcı olarak değiştirilir.

dscl    --> Dizin servisi komut ortamı aracı, dizin servisinde bulunan verileri terminal' den okumanıza, değiştirmenize,
									silmenize kısaca yönetmenize olanak sağlar (kullanıcılar, gruplar vb)
    -p           * Şifre sor
    -u user      * Kullanıcı kimliği doğrulama
    -P password  * Kimlik doğrulama şifresi
    -f filepath  * Hedeflenen veritabanı dosya yolu
    -raw         * 
    -plist       * XML plist formatında kayıtları veya nitelikleri yazdırma
    -url         * URL stili kodlamasında kayıt öz nitelik değerleri yazdırma
    -q           * 


===== Dosyalar Arası Karşılaştırma ve Fark Bulma ===================================================

find    --> Dosyaları bulmak icin

cmp     --> Belirtlen iki dosya arasında kıyaslama yapar, dosyaları karşılaştırır.

	    Örnek1:  $ 

diff    --> (difference3) Belirtilen dosyalar arasında satır satır karşılaştırma yaparak farklılıkları gösterir. “dosya_1”, “dosya_2” ve “dosya_3” ü satir satir
			karsilastirip farkli satirlari belirler.

	    Örnek1:  $ diff [seçenekler] dosya-1 dosya-2
	    Örnek2:  $ diff [dosya_1] [dosya_2] [dosya_3]

apropos

		Örnek1: apropos &ltkelime> İçinde “kelime” geçen tüm kılavuz sayfalarını tarar.


===== Süzme ========================================================================================

grep  --> Arama içerisinde girilen kelimeyi süzer.

	    Örnek1: grep kelime dosyaadı

----------------------------------------------------------------------------------------------------
|||     AĞ (NETWORK) İŞLEMLERİ                                                                   |||
----------------------------------------------------------------------------------------------------

===== Ağ İşlemleri =================================================================================

	    Örnek1: nm-connection-editor        --> Ağ ayarlarını açar
	    Örnek2: ssh -l kullanıcıadı sunucu  --> Uzaktaki makinaya Secure Shell protokolü ile bağlanır.
    	    Örnek3: telnet sunucu               --> Uzaktaki makinaya TELNET protokolü ile bağlanır.
            Örnek4: ping                        --> (packet internet groper)Bir network bilgisayara ICMP (Internet Control Message Protocol)
        					    echo paketi gönderir ve geri dönen paketleri bildirir.
    	    Örnek5: ftp sunucu                  --> FTP sunucusuna bağlanır.
    	    Örnek6: ping sunucu                 --> Sunucuya ping isteği gönderir.
    	    Örnek7: Hostname                    --> Paketlerin gönderildiği bilgisayarın ismini belirtir. Yerel sunucu adını verir.

netstat 	--> Ağ bağlantılarının durumunu gösterir.

traceroute 	--> IP paketlerinin izlediği yolu görüntülemek icin
		
	    Örnek1: $ traceroute www.google.com

===== Ağ İşlemleri =================================================================================

mailx   --> Mesajların elektronik olarak alınması ve gönderilmesi için ortam sağlayan bir yazılımdır. “mailx”komutu mesaj okunurken saklama
	    silme ve mesajla yanıtlama olanağı sağlar.
            mailx [seçenekler] [isim]

----------------------------------------------------------------------------------------------------
|||     DİSK İŞLEMLERİ                                                                           |||
----------------------------------------------------------------------------------------------------

===== Disk, Boyut, Bağlama =========================================================================


fdisk 	 --> Yeni disk bölümleri yaratmak veya silmek icin.
fdformat --> Düşük seviye disk formatlamak için.
df       --> Diskin kullanim durumu ile ilgili rapor verir. Kalan boş disk alanını gösterir.

	       Örnek1:  $ df -h    --> Disk kullanımını görüntüler.

mount    --> Dosya sistemleri ve Cihazları sisteme tanıtmak icin.

	       Örnek1:  $ 

diskutil --> Disk yapılandırmanıza olanak sağlar (Format, Repair).

	       Örnek1:  $ 

hdiutil  --> Disk imajlarını manipüle etmek için kullanılır (yeni imaj dosyası oluşturma, var olan imaj dosyasını mou etme, kopyalama, bölümlere
	     ayırma, şifreleme, yeniden boyutlandırma vs.).

----------------------------------------------------------------------------------------------------
|||     WEB TASARIM KOMUTLAR                                                                     |||
----------------------------------------------------------------------------------------------------

===== Php İşlemleri ================================================================================

php  --> Php ile ilgili komutlar.

		Örnek1: php -v                 --> Php versiyonunu öğrenmek. 
		Örnek2: php -i                 --> Php info görmek. 
		Örnek3: php -i | grep php.ini  --> Php ayar dosyasının yerini öğrenmek. 
		Örnek4: php --ini              --> Php ayar dosyasının yerini öğrenmek. 
		Örnek5: which php              --> Php nin bulunduğu dizinini öğrenmek.



===== Domain İşlemleri =============================================================================

		Örnek1: whois abc.com  --> Domain bilgilerini sorgulamak.

finger   --> Sunucudan kullanıcı bilgisini almak icin.

===== Apache Server İşlemleri ======================================================================

    	    Örnek1: sudo apachectl start       --> Apache sunucuyu başlatmak.
    	    Örnek2: sudo apachectl -k restart  --> Apache sunucu yeniden başlatmak.
    	    Örnek3: sudo apachectl stop        --> Apache sunucuyu durdurmak.
	    Örnek4: httpd -v   	   	       --> Apache server versiyonu öğrenme.

----------------------------------------------------------------------------------------------------
|||     PAKET KOMUTLARI                                                                          |||
----------------------------------------------------------------------------------------------------

===== Paket Yönetimi   =============================================================================

apt-get
	    Örnek1: brew install apt-get            --> Mac'e apt-get paketini (komutunu) yükler.
	    Örnek1: apt-get install
	    Örnek2: apt-get update
	    Örnek3: apt-get upgrade
	    Örnek4: apt-get autoremove.             --> Eski ve gereksiz paket dosyalarını kaldırır.
	    Örnek5: apt-get autoclean               --> Artık indirilemeyecek olan paket dosyalarını kaldırır.
    	    Örnek6: sudo apt-get remove program_adı --> Paketi kaldırır.
    	    Örnek7: sudo apt purge program_adı      --> Paketle yüklenen dosyaları ve oluşturduklarını siler.
    	    Örnek8: sudo apt autoremove             --> Artık kullanılmayan paketleri siler.
    	    Örnek9: dpkg --get-selections           --> Sistemdeki yüklü paketleri göreme.
           Örnek10: apt show paket-ismi             --> 


----------------------------------------------------------------------------------------------------
|||     VAGRANT KOMUTLARI (Vagrant indirme sitesi: https://www.vagrantup.com/)                   ||| 
----------------------------------------------------------------------------------------------------
Vagrant Box indirme sitesi: https://atlas.hashicorp.com/boxes/search?_ga=1.69390800.1119559738.1492358166

===== Genel İşlemler ===============================================================================

vagrant. --> Temel komuttur. Parametre verilerek kullanılır!

    ___Parametreler___
    up			* Box’ ı çalıştırır.
    reload --provision  * VagrantFile dosyasındaki değişikliklerin aktif olması için yeniden başlatma komutu.
    destroy		* Vagrant box dosyasını silmek için kullanılır.
    halt		* Vagrantı durdurmak için kullanılır.
    help		* Box listesi ve vagrant versiyon bilgilerini gösterir.
    init		* Vagrant ortamı oluşturmak için kullanılır.
    package		* Başka kullanıcıların kullanabilmesi için uzantısı .box olan dosya oluşturmak için kullanılır.
    plugin		* Adından anlaşılacağı üzere eklentileri düzenlemek için kullanılır. Bu komut da parametreye ihtiyaç duyar. install,
    			  license,list, uninstall, update parametreleriyle eklentileri düzenleyebilirsiniz.
    reload		* Box’ ı kapatıp tekrar açar, konfigürasyon dosyasında değişiklik yaptıysanız bu komutu uygulamanız gerekmektedir.
    suspend		* Çalışan bir box’ ı askıya alır, box restart olmadan durdurulur.
    resume		* Suspend yaptığınız bir box’ ı tekrar çalışır hale getirir.
    status		* Boxların çalışıp çalışmadığının bilgisini verir.
    box			* BaseBox’ larla işlem yapan komuttur.
    box add		* Yeni box ekler.
    box remove		* Eklediğiniz bir box’ı silmeye yarar.
    box list		* Mevcut box’ larınızı listeler.
    box repackage	* Mevcut bir box ı başka bir provider adresinden yani url’den tekrar indirip kurar.
    ssh      		* Ssh bağlantısı yapmak.
    ssh-config		* Ssh ayarlarınızı toplu halde gösterir.

		Örnek1: vagrant up  		    --> Vagrant başlatma komutu.
		Örnek2: vagrant reload --provision  --> VagrantFile dosyasındaki değişikliklerin aktif olması için yeniden başlatma komutu.
		Örnek3: vagrant box                 --> Vagrant box içerisinde yüklü işletim sistemlerini listeler.
		Örnek4: vagrant ssh                 --> Vagrant ile kurulan uzak işletim sistemine SSH bağlantısı yapmak için kullanılır.
							Çıktı: vagrant@vagrantbozadi:~$

----------------------------------------------------------------------------------------------------
|||    Homebrew  -  OSX İçin Eksik Paket Yöneticisi                                              ||| 
----------------------------------------------------------------------------------------------------
Homebrew Apple'ın ihtiyaç duymadığı ama size lazım olabilecek paketleri kurmanızı sağlar.

brew 	--> Eksik komut paketlerini mac'e yüklemeye yarar. Tek başına kullanılamaz!

Sisteme kurmak için 	: ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
Sistemden kaldırmak için: ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/uninstall)"

Not: Yüklenebilecek tüm paketler için brewformulas.org adresinden bakılır.

		Örnek1: brew update		--> Paket yöneticisini günceller.
		Örnek2: brew install paketAdi	--> Paket yüklemek.
		Örnek3: brew upgrade paketAdi 	--> Yüklü paketi güncellemek.
		Örnek4: brew upgrade --all 	--> Yüklenmiş paketleri güncellemek.
		Örnek5: brew uninstall paketAdi	--> Yüklü paketleri silmek. 
		Örnek6: brew list 		--> Yüklenmiş paketleri listelemek.
		Örnek7: brew help		--> Daha fazla komuta ulaşmak.


----------------------------------------------------------------------------------------------------
|||    Ses ve Video İşlemleri.                                                                   ||| 
----------------------------------------------------------------------------------------------------

ffmpeg 	--> Ses ve videoyu kaydetmek, dönüştürmek. 

		Örnek1: $ ffmpeg -i input.mp4 output.avi

pdf2swf --> Acrobat PDF dosyalarını Flash SWF Animasyon dosyalarına dönüştürür.  (DENENECEK - ÇALIŞMADI)

    ___Parametreler___
    -h 	* --help
    -V 	* --version
    -o 	* --output file.swf
    -p 	* --pages range
    -P 	* --password password
    -v 	* --verbose
    -z 	* --zlib
    -i 	* --ignore
    -j 	* --jpegquality quality
    -s 	* --set param=value
    -w 	* --samewindow
    -t 	* --stop
    -T 	* --flashversion num
    -F 	* --fontdir directory
    -b 	* --defaultviewer
    -l 	* --defaultloader
    -B 	* --viewer filename
    -L 	* --preloader filename
    -q 	* --quiet
    -S 	* --shapes
    -f 	* --fonts
    -G 	* --flatten
    -I 	* --info
    -Q 	* --maxtime n

		Örnek1: $ pdf2swf [-options] file.pdf -o file.swf


----------------------------------------------------------------------------------------------------
|||    WGET KOMUTU.                                                                              ||| 
----------------------------------------------------------------------------------------------------

wget [url] 			   --> Adresi girilen dosyayı indirir.

wget -c [url] 		   --> İnternetiniz kesilebilir. İndirme işlemi yarıda kalmıştır. “-c” seçeneğini wget’e ekleyerek yarıda kalan
					       indirme işlemini devam ettirebiliriz.

wget —limit-rate=100k  --> wget’i tek başına kullandığınızda tüm internetinizi sömürecektir. Bu da indirme işlemi bitene kadar
						   interneti kullanmanızı zora sokabilir. “—limit-rate” seçeneğini kullanarak indirme işlemini belli bir hızda gerçekleştirebilirsiniz.

wget -i [dosyaadi] 	   --> txt dosyası içerisinde yazılı olan birden fazla adresten indirme işlemi yapar.

wget —ftp-user=kullanıcıadı —ftp-password=şifre indirilecekdosyalinki  --> TP sitesinden kullanıcı adı ve şifreye sahipsek dosyaları indirebiliriz.

wget -r http://siteadı.org/yenidizin/. --> İnternetteki bir siteyi veya bir dizini komple olarak indirmek istediğinizde “-r” veya
										   “–recursive” parametresini kullanabilisiniz.





		- KLAVYE KISAYOLLARI -

Terminal Kısayolları;

Ctrl+l  : Ekranı temizler
Ctrl+c  : Komutu durdurur
Ctrl+z  : Komutu durdurur, devam etmek için fg, arkaplanda devam etmek için bg kullanılır
Ctrl+d  : Console oturumundan çıkış yapar.
Ctrl+w  : Mevcut satırda son 1 kelimeyi siler
Ctrl+u  : Tüm satırı siler
Ctrl+r  : Komut geçmişinde arama yapar
!!+enter: Son verilen komutu tekrarlar

KDE Klavye Komutlari :

ctl+tab : Masaüstleri arasında geçiş icin
alt+tab : Uygulamalar arasında geçiş icin
alt+f1 	: Uygulama menüsünü acmak icin
alt+f2 	: Komut penceresini acmak icin
alt+f3 	: Pencere menüsünü acmak icin
alt+f4 	: Pencereyi kapatmak icin
f1 	: Yardim görüntülemek icin
f2 	: Pencerede bir kelimeyi aramak icin
f3 	: Pencere aramasında bir sonraki eşleşmeye gitmek icin
space 	: Dosyaları secmek/secmemek icin
ctl+n 	: Dosya yoneticisi penceresini acmak icin
ctl+a 	: İçinde bulunulan klasörde butun dosya ve klasörleri secmek icin
ctl+t 	: İçinde bulunulan klasörde terminal penceresi acmak icin
ctl+w 	: Pencereyi kapatmak icin
ctl+f 	: Dosya bulmak icin
ctl+c 	: Kopyalama islemi icin
ctl+v 	: Yapıştırma islemi icin

GNOME Dosya Yoneticisi (Nautilus) Klavye Komutları:

ctl+b 		: Favorilere ekle
ctl+d 		: Kopyala
ctl+f 		: Bul
shift+ctl+f 	: Web Aramasi
ctl+i 		: Özellikleri Göster
ctl+h 		: Ana Sayfa
ctl+u 		: Bir seviye yukarı
ctl+n 		: Yeni Klasör
ctl+o 		: Aç
ctl+w 		: Pencereyi Kapat
shift+ctl+w 	: Butun pencereleri kapat
ctl+= 		: Yakınlaş
ctl+- 		: Uzaklaş
ctl+[ 		: Geri
ctl+] 		: İleri
ctl+t 		: Cop kutusuna koy
ctl+r 		: Yenile/Güncelle
ctl+a 		: Hepsini Seç

```
