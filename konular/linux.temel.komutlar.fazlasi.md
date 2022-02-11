# Temel Linux komutları

Bu sayfada Linux sistemlerde kullanılabilecek temel komutlar ve tuş komutları anlatılacaktır. Bu komutların hepsi Uçbirim, Konsole vb. komut satırı pencereleri üzerinden veya X-windows altındaki bir terminal programından (x-term, rxvt, aterm gibi) çalışmaktadır. Fakat tuş komutlarının bir kısmı komut satırı pencerelerine özgüdür ve x-altında pencere yöneticinize göre farklı hareket etmektedirler. 

## Komut satırı kısayol tuşları

Bash, zsh, sh vb. GNU işletim sistemi için bir kabuk ya da başka bir deyişle komut dili yorumlayıcılarıdır. Aşağıdaki kısayol tuşlarının bazıları komut dili yorumlayıcılarında farklılık gösterebilir. *Kısayol tuşlarından çalışmayan olursa şu yöntemi deneyebilirsiniz:* Terminal alanı sağ tık -> Tercihler -> Kısayol atamaları(tam ismi aklıma gelmiyor.) olan kısmı seçerseniz, çalışmayan kısayol tuşunuzla çakışan var mı diye bakabilirsiniz. Başka sebebi de olabilir.

KOMUT|AÇIKLAMA
----|----
`Ctrl + Alt + F1`| Bir sonraki terminale geçmektedir. Birçok Linux dağıtımı açılışla birlikte altı standart terminal açar. Bunlar tamamen birbirinden bağımsızdırlar ve eş zamanlı çalışırlar. Yani irinde bir işlem yapılmaya devam ederken bir diğerine geçip başka bir işleme başlayabilirsiniz.
`Ctrl + Alt + T veya Super + T`| Terminal ekranını açar. (Super klavyelerde pencere şeklindeki tuştur.)
`Ctrl + Shift + W`| Terminal sekmesini kapatır..
`Ctrl + A`| İmlecin bulunduğu komut satırında, imleç en başa gider. Yazılar silinmez.
`Ctrl + E`| İmlecin bulunduğu komut satırında, imleç en sona gider. Yazılar silinmez. İngilizce'de end son demek.
`Alt + F`| İmlecin bulunduğu kelimenin sonuna gider. İngilizce'de forward ileri demek.
`Alt + B`| İmlecin bulunduğu kelimenin başına gider. İngilizce'de backward geri demek.
`Ctrl + F`| İmlecin bulunduğu karakterin önündeki karaktere gider.
`Ctrl + B`| İmlecin bulunduğu karakterin arkasındaki karaktere gider.
`Ctrl + U`| İmlecin bulunduğu yerden satırın başına kadar ki kısmı keser(panoya ekler.) Daha sonra terminalin yapıştır tuşu Ctrl + Y ile terminalde yapıştırabilirsiniz.
`Ctrl + Y`| Terminalde son kestiğimizi imlecin bulunduğu yere yapıştırır.
`Ctrl + W`| İmlecin bulunduğu kelimenin öncesini siler, bulunduğu kelime dışındaki diğer kelimeleri silmez.
`Ctrl + K`| İmlecin bulunduğu yerden satırın sonuna kadar ki kısmı keser(panoya ekler.)
`Alt + T`| Bu kısayol tuşu, imleç boşluktaysa kendisinden önceki iki kelimeyi ya da imleç kelimenin üzerindeyse üzerinde bulunduğu kelimeyi ve önceki kelimeyi yer değiştirir.
`Alt + L`| İmleçten sonraki bütün harfleri küçük harf(lowercase) yapar.
`Alt + U`| İmleçten sonraki bütün harfleri büyük harf(uppercase) yapar.
`Alt + C`| İmlecin üzerinde bulunduğu harfi büyük yapar ve imleç kelimenin sonuna gider.
`Alt + D`| İmlecin üzerinde bulunduğu harf ile beraber kelimenin sonuna kadar keser.
`Alt + .`| Önceki komuttaki son kelimeyi yazdırır.
`Ctrl + T`| İmleçten önceki iki karakteri yer değiştirir.
`Ctrl + R`| Önceden kullandığınız komutları aratır.
`Ctrl + G`| Ctrl + R'deyken bulduğunuz komuta girmeden direk çıkar.
`Ctrl + J`| Ctrl + R'deyken bulduğunuz komutu çalıştırmadan kopyalamanızı sağlar. Değişiklik yapabilirsiniz.
`Alt + R`| Ctrl + R'deyken bulduğunuz komutu değiştirdiysek, değişiklikten önceki haline geri getirir. Bir daha bu kısayolu kullanırsak yaptığımız değişikliğe döner.
`Ctrl + P`| Geçmişte kullanılan komutları geriye doğru komut satırına getirir. Yukarı tuşu ile aynı işlevi görür.
`Ctrl + N`| Komut geçmişinde ileri doğru gitmemizi sağlar. Aşağı tuşu ile aynı işlevi görür.
`Ctrl + L`| Ekranı temizler. Clear komutu ile aynı işlev.
`Ctrl + Alt + F7`| Daha önceden açmış olduğunuz sonra CTRL + Alt + F1 ile çıktığınız X oturumuna geri döner. Burada önemli nokta bunun altı konsollu bir sistemde geçerli olmasıdır. Eğer sisteminizde dört konsol varsa büyük ihtimalle bu işin tuşu F7 değil F5 olacaktır.
`Ctrl + Alt + Fn (n=7-12)`| n numaralı X terminaline geçer. Birden fazla X kullanmak mümkün olduğu için bunlar arasında geçiş yapabilirsiniz.
`Tab (sekme)`| Yazmakta olduğunuz komutu tamamlar (text terminalde). Mesela README dosyasını okutmak için more RE yazıp TAB'a basarsanız o anda bulunduğunu dizindeki RE ile başlayan dosyaların istesini görürsünüz, eğer tek dosya varsa satır tamamlanır. Aynı şey komut isimleri için de geçerlidir, bas yazıp taba bastığınızda hemen basename diye komutun tamamlandığını görürsünüz <Yukarı-aşağı ok> Daha önceden girilmiş komutlar arasında gidip gelmenizi sağlar.
`Tab Tab`| Tab'la eşleştirme olmadığında bir daha tıklarsanız olası komutları gösterir.
`Shift + PgUp`| Terminal çıktısında ileri geri hareket etmenizi sağlar (ekrandan çıkmış olan yazıları görmek vs.)
`Ctrl + Alt + (+)`| (X de) Bir sonraki ekran çözünürlüğüne geçmenizi sağlar. Tanımlı modlar /etc/X11/XF86Config dosyasında durmaktadır. En büyük ekran modu Virtual Screen boyutunu tanımlar.
`Ctrl + Alt + BkSpc`| (X de) Her şeyi iptal edip X'den çıkmanızı sağlar.
`Ctrl + Alt + Del`| Sistemi kapatıp reboot (baştan başlatmak) etmek anlamına gelir. Konsoldaki shutdown (kapat) komutu gibi davranır. Reset (Sıfırlama) tuşuna basmayıp bunu tercih etmeniz gerekir.
`Ctrl + C`| Mevcut komutu durdur. Genelde konsoldaki basit komutlar için kullanılır.
`Ctrl + D`| Eğer sizden girdi kabul eden bir konsol komutundaysanız dosya sonu (EOF) yollar, promptaysanız logout olursunuz. O yüzden iki defa basmayın.(Geçerli kabuk oturumundan çıkar.)
`Ctrl + S`| Uzun çıktı içeren komutların çıktı vermesini durdurur. Komut çalışmaya devam eder.
`Ctrl + Q`| Ctrl + S'den sonra kullanılırsa komutun çıktı vermesini sağlar.
`Ctrl + Z`| Çalışmakta olan komutu duraklatır. Duraklatılan komut bg ile arka planda çalışır. fg ile ön planda çalışır. jobs ile duraklatılan programlar görünür.
`Farenin orta tuşu`|Genelde bir başka pencerede seçilmiş bir yazıyı paste etmeye (yapıştırmaya) yarar. Burada dikkat edilecek nokta Linux altında (KDE ve bazı özel programların istisnası ile) kopyala+yapıştır işleminin Windows'tan farklı olmasıdır. Bir yazıyı seçerseniz, o seçili olduğu sürece yapıştırılabilir olur (bir kez paste edildikten sonra zaten bufferda kalır) yani bir kopyalama emri vermeniz gerekmez, seçip yapıştıracağınız yere gidip orta tuşa basmanız yeter. Konsolda kullanılabilmesi için gpm çalışıyor olması gerekir
`Shift + Insert`|Yapıştırma işlemini klavyeden yapar.

## Temel Linux komutları

### Bilgi edinme komutları

KOMUT|AÇIKLAMA
----|----
`pwd`|Bulunduğunuz dizinin ismini verir.
`hostname`| Makinanın konak ismini verir.
`whoami`| Sisteme giriş yaparken yazdığınız kullanıcı isminizi verir.
`id [kullanıcı_ismi]`| Kullanıcının kullanıcı kimliği, birincil grup kimliği ve üyesi olduğu grupları gösterir.
`date`|Sistem tarihi göstermek ya da değiştirmek için kullanılır.Tarihin yerele özgü gösterimle basılmasını isterseniz date +%c yazın. Örneğin "tr_TR" yereli için sadece date komutu Prş Eki 23 21:31:06 EEST 2003 basarken date +%c komutu Prş 23 Eki 2003 21:31:19 EEST basar.date 102321322003 komutu sistem tarihini Prş Eki 23 21:32:00EEST 2003 yapar. Donanım saatini değiştirmek için `setclock` komutunu kullanmanız gerekir.
`time`| Belli bir komutun işlemini bitirmesinin ne kadar süre tuttuğunu gösterir. Örneğin, bir dizinin listelenme süresini time ls ile öğrenebilirsiniz.
`who`| O an sistemde bulunan kullanıcıların kullanıcı isimlerini, hangi uçbirimlerde çalıştıklarını ve sisteme giriş tarih ve saatlerini gösterir.
`finger [kullanıcı_ismi]`| Belli bir kullanıcı hakkındaki bilgi verir.
`last`| Sisteme en son giriş yapmış kullanıcıların bugünden geriye doğru listesi.
`more`| more sayesinde sayfa sayfa okuyabilirsiniz.
`uptime`| Makinanın ne kadar süredir açık olduğu bilgisini verir.
`tty`| Bu komutu yazdığınız terminalin ismini bildirir.
`ps`| Kullanıcının kullandığı uçbirimde çalıştırmakta olduğu komutların ve süreçlerin listesi.
`more`| Sistemin açılışından beri çalışmakta olan bütün süreçlerin listesi.
`top`| Temel sistem durumu, çalışmakta olan süreçler ne kadar bellek/işlemci kullandıkları vs.
`uname -a`| Sistem hakkında çekirdek sürümünü, işlemci türü gibi bilgiler.
`free`| Bellek kullanımını gösterir.
`df -h`| Bağlı sabit disk bölümlerinin doluluk oranlarını gösterir.
`du -sk [dizin]`| Belirtilen dizinin (belirtilmezse bulunduğunuz dizinin) içeriğinin diskte kapladığı alanın kB cinsinden boyutunu verir.
`cat /proc/interrupts`| Çekirdek tarafından tanımlanmış sistem kesmelerinin listesi.
`cat /proc/version`| Linux çekirdeğinin sürüm bilgileri.
`cat /proc/filesystems`| Çekirdekte tanımlı kullanılabilecek dosya sistemlerinin listesi.
`cat /etc/printcap`| Yazıcıların düzeni.
`lsmod`| Yüklü çekirdek modüllerinin listesi.
`set, declare, export`| Üçü de kabukta tanımlı ortam değişkenlerinin listesini verir. Tümünü (miras alınanlar dahil) sadece declare verir.
`echo`| $PATH - PATH ortam değişkeninin değerini gösterir. PATH, kullanıcı tarafından çalıştırılabilecek yazılımların aranacakları yerleri kabuğa bildirmek için kullanılır.
`more`| Sistem açılışından itibaren çekirdek tarafından üretilen iletiler. Bu iletiler /proc/kmsg dosyasında bulunur ve dmesg komutu sadece tampondaki son iletileri gösterir.

### Genel amaçlı komutlar

- `help` Kabuk komutlarının listesini gösterir. Bu komutların herbiri için help komut_ismi komutu ile yardım alabilirsiniz.
- `komut_ismi --help` Söz konusu komut ile ilgili yardım iletisi basar (varsa).
- `man başlık` Sistemdeki kılavuz (man) dosyaları. Bir komut hakkında olabildiği gibi bir dosya ya da bir işlev hakkında da olabilir.
- `apropos başlık` söz konusu başlıkla ilgisi olan komutların listesi.
- `ls` O an bulunulan dizinin içeriğini listeler.
- `ls -al | more` O an bulunulan dizindeki bütün dosyaları gösterir (. ile başlayan gizli dosyaları da) Komut burada more komutuna yönlendirilmiştir, bu sayede çıktının bir ekrandanfazla olması durumunda bir ekranlık çıktıdan sonra devamını göstermek için bir tuşa basmanız gerekir.
- `cd dizin` dizin dizinine geçilir; dizin verilmezse ev dizinine geçilir.
- `cp kaynak hedef` Bir yerdeki dosya ya da dizinleri başka bir yere kopyalamak içindir. Unix'lerde genelde bu tür komutlarda her zaman kaynak önce hedef sonra yazılır.
- `mcopy kaynak hedef` DOS'tan Unix'e ya da tersine (disketi bağlamanız şart değil) bir dosyayı başka bir yere kopyalar.Aynı mantıkta çalışan mdir,mcd,mren,mmove,mdel,mmd,mrd,mformat gibi komutlar da vardır.
- `ln hedef [isim]` Sözkonusu hedef e sabit bağ oluşturur. Sözkonusu dosyalar iki yerde de var gibi gözükür, herhangibir değişiklik diğerini de etkiler,biri silindiğinde diğeri kalır. Sabit bağların kısıtlamaları, bağ dosyası ile asıl dosyanın aynı dosya sistemi içinde olması gerekliliği ve  dizinlerle özel dosyalara sabit bağ verilememesidir.
- `ln -s hedef [isim]` hedef 'e bir sembolik bağ dosyası (isim verilmezse hedef ile aynı isimde) oluşturur.  Sembolik bağda hedef 'in nerede bulunacağının bilgisi vardır. Sembolik bağlar dizinler için de kullanılabilir. Tek sorunu hedef silindiğinde bağ bozulmuş olur.
- `rm dosya ...` Verilen dosyaları siler. Sileceğiniz dosyanın sahibi olmanız gerekir.
- `mkdir dizin` dizin dizinini oluşturur.
- `rmdir dizin` Belirtilen dizin 'ler boşsa silinir.
- `rm -r dosya` Dosya ve dizinleri ve dizinlerin içindeki dizinleri ardarda siler. Root olarak kullanırken dikkat edin, çünkü herşeyi silebilirsiniz!.
- `exit` Konsoldan çıkar. Eğer terminalde ilk açtığınız kullanıcıda değilseniz, ilk açtığınız kullanıcıya geçiş yapar.
- `cat dosya | more` Bir dosyayı sayfa sayfa görüntülemek için kullanılır.
- `less dosya` Önceki komuta eşdeğerdir, biraz daha fazla özellikleri vardır
- `vim]] dosya` Bir metin dosyasını düzenlemek için kullanılır. Aynı türden nano, joe, mcedit gibi metin düzenleyicileri de kullanabilirsiniz, ancak vim ile UTF-8 kodlu metinleri de düzenleyebilirsiniz. Diğerleri bunu yapamaz.
- `find]] / -name "dosya"` dosya adlı dosyayı en üst dizinden itibaren aramaya başlar. Dosya ismi,ve&nbsp gibi arama karakterleri de içerebilir. Örneğin benim sistemimde "fazlames" dizgesi ile fazlamesai.net.txt ve fazlamesai.org.txt dosyaları bulunuyor.
- `locate  dosyaismi` [find](https://wiki.ubuntu-tr.net/index.php?title=Find "Find") gibidir, fakat düzenli olarak oluşturulan bir veritabanına bağlıdır, sistemdeki son değişikliklerden haberi olmayabilir.
- `touch deneme.txt` 'deneme' isimli dosyanın oluşturulma ve düzenleme tarih bilgilerini şu anki tarihe değiştirir. Eğer böyle bir dosya yoksa sıfır bayt uzunluğunda deneme.txt isimli dosya oluşturur.
- `xinit` Pencere yöneticisi olmayan bir X oturumu açar.
- `startx` Pencere yöneticili bir X oturumu açar. DOS'daki win komutu gibidir.
- `startx --:1` 1 numaralı ekranda X oturumu açar, ilk ekran 0 dır ve komut için öntanımlıdır. Ekranlar arasında <Ctrl><Alt><F7-F8 ...> ile geçiş yapabilirsiniz.
- `xterm` Basit bir X uçbirimi açar. Daha hafif sürümleri (rxvt, aterm, eterm gibi) bulunur ve tercih edilir.
- `shutdown -h now` Sistemi durdurur. ATX sistemlerde ayrıca makinayı kapatır.
- `halt` shutdown -h now ile aynıdır. Sistemi durdurur.
- `reboot` shutdown -r now ile aynıdır. Sistemi yeniden başlatır.

### Dosya sıkıştırma ve açma komutları

- `gzip -9 dosya` Belirtilen dosya yı en iyi şekilde sıkıştırır ve dosya.gz haline getirir.
- `bzip2 dosya` Belirtilen dosya yı en iyi şekilde sıkıştırır ve dosya.bz2 haline getirir. Çoğunlukla gzip'den daha iyi sıkıştırır.
- `gunzip dosya.gz` gzip ile sıkıştırılmış dosya.gz dosyasını dosya olarak açar.
- `bunzip2 dosya.bz2` bzip2 ile sıkıştırılmış dosya.bz2 dosyasını dosya olarak açar.
- `tar -xvf arsiv.tar` İsmi arsiv.tar gibi belirtilen (sıkıştırılmamış) arşiv dosyasını bulunulan dizine açar.
- `tar -zxvf arsiv.tar.gz` İsmi arsiv.tar.gz gibi belirtilen sıkıştırılmış arşiv dosyasını bulunulan dizine açar. Dosya uzantısı .tar.gz
-   olan dosyalardan başka .tgz olan dosyaları da açar.
- `tar -zxvf arsiv.tar.gz -C dizin` Sıkıştırılmış arşiv dosyasını belirtilen dizine açar.
- `tar -jxvf arsiv.tar.bz2 -C dizin` Bzip2 ile sıkıştırılmış arşiv dosyasını belirtilen dizin e açar. (Eski sürümlerde -Ixvf kullanılırdı.)
- `tar -zcvf arsiv.tar.gz dizin1 dizin2 ... dosya1 dosya2 ...` Belirtilen dizin ve/veya dosya ları arsiv.tar dosyası haline getirir ve ardından gzip ile sıkıştırıp arsiv.tar.gz haline getirir.
- `unzip arsiv.zip -d dizin` arsiv.zip zip arşivini belirtilen dizine açar.
- `unarj e arsiv.arj` arsiv.arj arj arşivini açar.
- `uudecode -o hedef kaynak` uuencode ile kodlanmış (genelde eposta ekleri) dosyayı açar.

## A'dan Z'ye

**A**

- `a2ps` ASCII dosyalarini Postscript formatina cevir
- `acroread` AcrobatReader pdf-dosyalarini görebilmek icin gerekli olan program
- `alias` Komuta baska bir isim ver
- `apropos` Belli bir kelimeyi man sayfalarinda ara
- `ar` Arsiv olusturmak olusturulmus bir arsivi calismak ya da acmak icin
- `arch` Processor'un yapisi hakkinda bilgi ver
- `arp` Host ve IP numarasini göster. (arp = adress resolution protocol)
- `at` ( komutu ya da komutlari daha sonraki bir zamanda çalıştırır)

**B**

- `basename` Bir dosyanin gercek ismini ver (Üst dizinleri göstermeden)
- `bash` Bourne Again Shell -> Linux'un standart shell'i
- `batch` Komutu ya da komutlari daha sonra ki bir zamanda calistir(bknz. at)
- `bg` Bir programi Ön planda calistir
- `break` Bir blogu belli bir kosuldan terk et (bknz. continue)
- `bunzip2` (bknz. bzip2)
- `bzip2` Bir arsivleme programi

**C**

- `cal` Aktuel takvimi göster
- `calender` Bir randevu hatirlatma programi
- `case` Coklu seceneklere ayirma komutu
- `cat` Dosyayi monitöre ver
- `cc` C derleyicisi (C-compiler)
- `cd` Dizin degistir
- `cdrecord` CD kopyalama tool'u
- `chfn` finger bilgilerinde degisiklik yap
- `chgrp` Grup degistir
- `chmod` Bir dosyanin haklarini degistir
- `chown` Bir dosyanin sahiplerini degistir
- `chroot` Bir komutu Özel bir root dizininde calistir
- `chsh` Standart shell i degistir
- `clear` Monitörü temizle
- `continue` Bir bloku belli bir kosuldan sonra terk etme ve kaldigin yerden devam et.
- `cmp` İki dosyayi karsilastir (bknz. comm diff)
- `comm` Iki dosyayi satir satir karsilastir (bknz. cmp diff)
- `cp` Dosyayi kopyala
- `csh` C-Shell -> Yapisi biraz C diline benzeyen bir shell programi
- `csplit` Bir dosyayi parcalara ayir
- `cut` Bir dosyadan belli sütunlari kes

**D**

- `date` Aktuel zamani göster
- `deluser` Kullanici sil
- `delgroup` Grup sil
- `df` Bellekte ne kadar bos yer oldugunu göster
- `diff` Iki dosya arasindaki farklari göster (bknz. cmp comm)
- `do` Belli bir kosuldan sonra bir komutu ya da komut blogunu calistir
- `done` do blogunun bitimi (bknz. do)
- `du` Bir dosyanin ya da dizinin bellekte ne kadar yer kapladigini göster

**E**

- `echo` Harf dizisini monitöre yaz
- `ed` Bir editör programi
- `egrep` Bir dosyanin icinde belli bir harf dizisini ara(bknz. fgrep. grep)
- `eject` Medium'u disari ver mesela CDROM
- `emacs` Bir editör programi
- `elif` if kosulunun saglanmadigi zaman devreye sokulan baska bir if kosulu
- `else` if kosullarinin saglanmadigi zaman devreye sokulan baska komutu
- `env` Bütün sistem degiskenlerini göster
- `esac` case seceneklerinin bitimi (bknz. case)
- `exec` Komutu calistir
- `exit` Shell'den cikma komutu
- `export` Sistem degiskeninin tanimlanmasi
- `expr` Matematik ifadesini hesapla

**F**

- `false` Boolean tipinde "yanlis" degeri
- `fdformat` Disket formatla
- `fdisk` Bellegi bölme programi
- `fg` Programi ön plana al
- `fgrep` (bknz. egrep grep)
- `fi` if kosulunun sonu (bknz. if)
- `file` dosya hakkinda bilgi ver
- `find` Belli bir dosyayi dizinlerde ara
- `finger` Sisteme kayitli olan kullanciliari göster ya da kullanici hakkinda bilgi ver
- `for` Belli komutlari belli bir kosula kadar döngü seklinde calistir
- `ftp` Dosya transfer programi (ftp = file transfer protocol)
- `fvwm` Linux icin yapilmis bir masaüstü programi (bknz. fvwm2 gnome kde ...)
- `fvwm2` (bknz. fvwm)

`G`

- `g++` C++ derleyicisi (C++ compiler)
- `gcc` GNU C derleyicisi
- `GNOME|gnome` (bknz. fvwm)
- `Grep Komutu Kullanımı|grep` (bknz. egrep, fgrep)
- `groupadd` Yeni bir grup olustur
- `groupdel` Grup sil
- `groupmod` Grup üzerinde degisiklikler yap
- `groups` Kullanicinin bagli oldugu gruplari göster
- `grub` Bir cesit Linux Bootloader (bknz. lilo)
- `gunzip` (bknz. gzip)
- `gvim` vi editörünün GUI (graphical user interface:* grafiksel kullanıcı arayüzü) versiyonu
- `gzip` Bir arsivleme programi

`H`

- `halt` Sistemi durdur
- `head` Bir dosyanin ilk satirlarini göster (standart 10 satir) (bknz. tail)
- `help` Shell komutlarini göster
- `history` Kullanicini o zamana kadar kullandigi komutlari göster
- `host` Bir bilgisayarin adini sor
- `hostid` sistemin host kimligini göster
- `hostname` sistemin host adini göster
- `httpd` Apache server'i baslat
- `httpd2` Apache 2 server'i baslat

**İ**

- `id` Kullanicini kullanici kodunu bagli oldugu gruplarin kodunu göster
- `if` "eger" kontrolu 
- `ifconfig` Ağ kartını ayarla  
- `init 0` Sistemi kapat ( bknz. halt shutdown poweroff)  
- `init 1` Sistemi tek kullanicili modus'a gecir (bknz. init S init s)  
- `init 2` Sistemi lokal cok kullanicili modus'a gecir  
- `init 3` Sistemi tam aga bagli sekilde ve cok kullanicili modus'a gecir  
- `init 5` Sistemi tam aga bagli sekilde cok kullancili ve GUI'li modus'a gecir  
- `init 6` Sistemi yeniden baslat  
- `init S:`(bknz. init 1)  
- `init s:`(bknz. init 1)

**J**

- `jar` Java arsiv
- `java` Java Virtual Machine (JVM)
- `javac` Java Compiler
- `javadoc` Java dokumanlari olustur
- `jdb` Java Debugger
- `jikes` IBM tarafindan sunulan ve javac'tan daha hizli olan bir Java Compiler
- `joe` Bir editör programi

**K**

- `k3b` KDE'de GUI'li bir CD kopyalama programi
- `kaffeine` KDE CD VCD DVD vs. oynatma programi
- `kate` Bir KDE editör programi
- `kbear` Bir KDE FTP programi
- `kcalc` Bir KDE hesap makinesi programi
- `KDE|kde` KDE masaüstü
- `kernelversion` Hangi kernel versiyonu kullanildigini göster
- `kmail` KDE Mail programi
- `konqueror` KDE internet tarayıcı
- `konsole` Yeni bir konsol ac
- `kopete` Bir KDE multiple messenger programi
- `kill` İşlemi bitir
- `killall` Bütün işlemleri bitir
- `kwrite` Bir KDE editörü

**L**

- `last` Sisteme son kayit olan kisileri göster
- `less` Herhangi bir çıktıyı monitörde sayfa sayfa göster
- `lilo` [GRUB](https://wiki.ubuntu-tr.net/index.php?title=GRUB "GRUB") benzeri bir Linux açılış yükleyicisi
- `ln` Dosyalar ya da dizinler arasinda link olustur
- `logname` Oturum adını göster
- `logout` Sistemden ayril (eger oturum kabuğuyla girildiyse)
- `lpr` Dosyayi basilmasi icin yaziciya gönder
- `lprm` Yaziciya gönderilen dokümanlari sil
- `ls` Dizinde bulunan dosyalari listele
- `lsmod` Yüklenmis modullari listele
- `lsb_release [_seçenekler_]` Dağıtıma özgü bilgileri ekrana basar. Örnek kullanım:
```bash
lsb_release -a
Dist`ributor *ID:* Ubuntu
Description:	 Ubuntu 14.10
Release:	 14.10
Codename:	 utopic
```

**M**

- `mail` Kullancillar arasinda mail yazmayi mümkün kilan mail programi
- `make` C programini belli bir kurala göre derleyen komut
- `man` Manual sayfalar dokümanlari
- `mcedit` Bir editör programi
- `mkdir` Yeni bir dizin olustur
- `modprobe` Kernel'a bir module eklemek ya da ondan silmek icin
- `Mozilla Firefox|mozilla` Bir internet tarayıcı
- `more` (bknz. less)
- `mount` Bir aleti bağla
- `mv` Dosyayi kaydir ya da ismini degistir'
- `mysql` MySQL veritabani programi

**N**

- `nedit` Bir editör programi
- `newgrp` Yeni bir gruba gir
- `netstat` Ag baglantilarini görüntüle
- `netscape` Bir internet tarayıcı
- `nl` Bir dosyayi satirlari numaralandirarak göster  
- `nslookup` DNS (domain name system) sorgusu

`O`

- `opera` Hizli bir internet tarayıcı

**P**

- `passwd` Sifre degistir  
- `perl` PERL interpreter  
- `pgrep` Çalışan bir sürecin kendine özel id numarasını bul
- `PHP|php` PHP interpreter  
- `pine` Bir mail programi  
- `ping` Baska bir bilgisayara ulasabilme sorgusu  
- `poweroff` Sistemi kapat (bknz. init 0)  
- `ps` Calisan işlemleri göster  
- `pwd` Icinden bulunulan dizini göster

`Q`

- `quanta` Güzel bir HTML editörü

**R**

- `read` Shell'de monitörde girilen girdiyi oku
- `reboot` Sistemi yeniden baslat (bknz. init 6)
- `reset` Shell ayarlarini eski ayarlara getir
- `return` Bir fonksiyonun hesapladigi degeri geri vermesi icin gereken komut
- `rlogin` Uzaktaki bir bilgisayara baglan (bknz. [Telnet](http://tr.wikipedia.org/wiki/Telnet "v:Telnet"))
- `rm Komutu Kullanımı|rm` Dosyayi sil
- `rmdir` Dizini sil (dizinin bos olmasi sarti ile)
- `rpm` Redhat Packet Manager (ama genelde bütün Linux distrolari tarafindan desteklenir)

**S**

- `select` Secenek secimi
- `set` Deger ver
- `sh` Bourne kabuğu
- `shift` Kaydir
- `shutdown` Sistemi kapat (bknz. init 0)
- `sleep` Belli bir süre ara ver
- `sort` Siralayarak göster
- `split` Bir dosyayi parcalara ayir`
- `startx` X-Server baslat
- `su` Baska bir kullanici adiyla gir ( option verilmezse root sifresi vermek gerekir)
- `sudo` Bir komutu [root](https://wiki.ubuntu-tr.net/index.php?title=Root "Root") (yetkili kullanıcı) gibi calistir (tabii "sudoers" dosyasi buna izin veriyorsa normal bir kullanicinin sudoers'i okumaya hakki yoktur).

**T**

- `tail` Bir dosyanin son satirlarini göster (standart 10 satir).
- `talk` Sisteme kayitli olan baska bir kullanici ile sohbet et
- `tar` Arsiv programi
- `tcsh` Ilerletilmis bir C-shell
- `telnet` Uzak bir bilgisayara baglan
- `then` if kosulu saglaniyorsa bundan sonraki komutlari calistir
- `time` Bir komutun ne kadar süre harcadigini göster
- `test` Bir kosulu test et
- `top` İşlemleri görüntüle
- `touch` Dosyanin degistirilme zamanini degistir
- `traceroute` Router takibi
- `true` Boolean tipindeki "doğru" degeri

**U**

- `umask` Bir dosya icin standart haklar belirle
- `uniq` Siralanmis bir dosya icinde birden fazal ayni satirlari ele
- `umount` Baglanmis bir aleti sistemden geri cöz (komutun ismi "unmount" degil)
- `unalias` alias'la degistirilmis komut aliaslarini geri cevir
- `unrar` Bir Arsivleme programi
- `until` Bir komutlar blogunu belli bir kosula kadar uygula
- `unzip` Arsiv programi
- `useradd` Sisteme yeni bir kullanici ekle
- `userdel` Sistemden bir kullanici sil
- `users` Su anda sisteme kayitli olan kullanicilari göster

**V**

- `vi` Bir editör programi
- `vim` Bir editör programi
- `visudo` sudoers dosyasi üzerinde calis

**W**

- `w` Hangi kullanicinin o anda hangi komutu calistirdigini ya da hangi programi kullandigini göster
- `wait` Belli bir işlemi bekle
- `wall` Bütün kullanicilara mesaj yolla
- `wc` Harf kelime ve satir sayma komutu
- `wget` Belli bir sayfa icerigini agdan yerel PC ye indir
- `whatis` Bir komutun ne ise yaradigini göster
- `whereis` Ara
- `which` Ara
- `while` Komutlari belli bir kosula kadar döngü halinde calistir
- `who` Sisteme kayitli olan kullanicilari göster (bknz. finger w)
- `whoami` Kullanicinin kendisi hakkinda bilgi
- `windowmaker` Bir destkop
- `wine` Windows Emulator programi
- `wish` Pencere kabuğu
- `write` Bir kullaniciya mesaj gönder

**X**

- `xanim` Bir media player
- `XMMS` player
- `xterm` X Terminal

**Y**

- `yast (sadece SuSE)` Sistem ayarlari yapmak icin GUI'siz bir tool (yet another setup tool)
- `yast2 (sadece SuSE)` Sistem ayarlari yapmak icin GUI'li bir tool
- `you (sadece SuSE)` YaST online update

**Z**

- `zip` Arşivleme programı

Kaynak: https://wiki.ubuntu-tr.net/index.php?title=Temel_Linux_komutları

