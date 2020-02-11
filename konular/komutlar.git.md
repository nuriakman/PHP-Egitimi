# GİT ve GİT HUB

## Git Nedir?
Git; yazılım geliştirme süreçlerinde kullanılan, hız odaklı, dağıtık çalışan bir sürüm kontrol ve kaynak kod yönetim sistemidir. Diğer bir deyişle, Git bir versiyon (sürüm) takip sistemidir. Git ile bir yazılım geliştirme sırasında bir sistemin yedeğini alıp devam etmek gerekebilir, ya da geliştirmeler bittiğin son son son diye klasörler açabiliriz fakat git ile bu meşakatli işlemleri unutup daha temiz bir sistem ile kod arayüzü ile bu işlemleri yapabiliyoruz. Git ile dilediğimiz zaman istediğimiz geçmiş commit’imize dönebiliriz, çeşitli dallar oluşturarak sürümünüzü yükseltebilirsiniz. Her şey tamamiyle git kontrolünde olacaktır.


## Github Nedir?
Github, versiyon kontrol sistemleri için uzak bir depo hizmeti sağlayan bir servistir. Git ile Github aynı değildir.

![GitHub Projelerine Katkı](https://cdn-images-1.medium.com/max/2560/1*eoZUBYa9VJzPOFVz41M4Vg.jpeg)

## Git Yaşam Döngüsü

![Git Yaşam Döngüsü](https://kenanatmaca.com/wp-content/uploads/2019/01/gitgit-1024x630.png)


## Branch - Dal

Dal kavramı ile projemizin mevcut halini koruyarak yeni bir sürüm çıkarabilir, hata giderme çalışması yapabilir veya en önemlisi projemize yeni bir özellik ekleme çalışması yapabiliriz.

![Branch - Dal](https://www.kahramaner.com/wp-content/uploads/2017/01/git_branch_merge.png)

## Repository – Depo
Repository veya Repo, bir yazılımın proje dosyalarının içerisinde bulundurulduğu sunucudaki URL adresidir. GitHub üzerindeki herkes kolayca ve benzersiz bir Repo oluşturarak bu Repo adresi üzerinden projelerin kaynak kodlarını paylaşabilir. Her proje kendi içerisinde ayrıca benzersiz ve kolayca ulaşılabilen URL’ye sahiptir.


## Fork - Çatallamak
Fork, GitHub üzerindeki bir projeyi kendi hesabınıza klonlamanızı sağlar.

Forking, açık olan bir projeye sizin de katılarak üzerinde değişiklikler yapma işlemidir. Deponun çatallanması işlemi sayesinde diğer yazılımcılar açık kaynaklı yazılımlar üzerinde değişiklikler gerçekleştirip, yazılımın iyileştirilmesini sağlayabilirler.


## Clone - İndirmek
Kendi hesabımıza forkladığımız projeyi bilgisayarımıza indirmemizi sağlar.


## TAG - Etiketleme
Github üzerinde paylaştığınız repolara versiyon ekleyebilirsiniz. Reponuzu git üzerinden ara versiyonlar ve ana versiyonlar yayınlayabilirsiniz.

Reponuz için tag yayınlama işlemi:
```BASH
git tag
git tag 1.0
git push –tags
```
veya repo push ile birlikte gönderebilirsiniz:
```BASH
git push -u origin master –tags
```

Yayınlamış olduğunuz versiyonları kaldırabilirsiniz:
```BASH
git tag -d 1.0
git push origin :refs/tags/1.0
```



## Pull Request (PR) - Projeye Katkı Sağlama
GitHub'ta bir projeye katkıda bulunmak için o projenin sahibine Pull Request oluşturmak gerekir.
**Pull Request nedir?** Pull Request kendi hesabımıza forkladığımız ve kod iyileştirmesi veya geliştirmesi yaptığımız projemizin, projenin asıl sahibine ait proje ile birleştirilme isteğidir.

### Pull Request Nasıl Oluşturulur?
- İlk olarak katkıda bulunmak istediğimiz projeyi **forklamak**(Çatallamak) gerekir. Proje sahibinin GitHub profiline gidip, katkıda bulunmak istediğimiz projeyi bulup FORK butonuna tıklayarak bu işlemi yapabiliriz.Projeyi forklama işlemini tamamladıktan sonra, aynı repositoriyi kendi profilimizde de göreceğiz.
- Bu adımda kendi profilimizde forkladığımız projenin adıyla oluşan projeye tıklayıp kendi bilgisayarımıza indirmemiz gerekmektedir. Proje sayfasında sağ tarafta bulunan **Clone or Download**(Klonla ya da İndir) butonuna tıklayarak projenin adresini kopyalayalım.
- Sonra projeyi bilgisayarımızda indirmek istediğimiz dizinin içerisinde Terminal'i çalıştıralım.Terminali çalıştırdıktan sonra ```git clone```komutunu yazarak kopyaladığımız proje urlsini yapıştıralım. Bu komut GitHub hesabınızda bulunan bir projeyi bilgisayarınıza indirmenize yarayacaktır.
- Projeyi bilgisayara indirdikten sonra bir kod editörü(Atom vs.) yardımıyla projeyi açalım ve yapmak istediğimiz değişiklikleri burada projeye ekleyelim.
- Değişiklikleri yapıp kaydettikten sonra Örn:Atom ekranında sağ alt köşede yaptığınız değişikliklerin kaydedildiğini göreceksiniz. Projeyi indirdiğiniz andan itibaren herhangi bir şeyi değiştirmeniz durumunda sağ alt tarafta bulunan Git() yazısının içerisinde değiştirdiğiniz dosyanın sayısı yazacaktır.
- Sağ alt köşede bulunan bu Git yazısına tıkladığımızda editörün sağ tarafında yeni bir kısım açılacak ve burada hangi dosyada nereleri değiştirdiğimizi görebileceğiz. Yeni açılan kısımda sağ üst tarafta **Stage All**(Hepsini Ekle) butonuna tıklayalım. Ya da hangi dosyaları eklemek istiyorsanız onları çift tık yardımıyla ekleyebilirsiniz.
- Dosyaları ekledikten sonra alt kısımda bulunan **Commit**(Yorum) kısmına yaptığınız değişikliği özet olarak ekleyebilirsiniz. Bu yorum siz projeyi pushladığınızda GitHub hesabınızda gözükecektir o yüzden özenli yazmaya dikkat ediniz.
- Commit ekleyip **Commit to Master** butonuna tıkladıktan sonra ekranın alt kısmında çıkan **Push** (Gönder) butonuna tıklayalım. Böylece yeni güncellemeler projeye eklenmiş olur.
- Daha sonra GitHub üzerinden forkladığımız projeye giderek **Pull Request**(Çekme Talebi) butonuna tıklıyoruz.Bu sayfada **New Pull Request**(Yeni Çekme Talebi) butonuna tıklıyoruz. Açılan sayfada yaptığınız değişiklikleri görebilirsiniz. Tekrar commit girerek **Create Pull Request**(Çekme Talebi Oluştur) butonuna tıklayalım. Bu butona tıklayarak projenin gerçek sahibine bir istekte bulunmuş olursunuz.
- Gönderdiğiniz bu talebi aynı zamanda gerçek projenin sayfasına gittiğinizde **Pull Requests** (Çekme Talepleri) kısmında yorumunuzla birlikte görebilirsiniz.
- Proje sahibi yaptığınız güncellemeleri görüp sizin isteğinizi onayladıktan ve kendi projesiyle **Merge** (Birleştirmek) ettikten sonra artık kendi yaptığınız güncellemeleri de projenin orjinal sayfasında görebilirsiniz.
- Projeye katkı sağladığınız için projenin **Contributors**(Tamamlayıcılar) kısmında kendi adınızı ve profilinizi görebilirsiniz.



## Forklanan Bir Projeyi Güncel Tutmak

- GitHub hesabınızda forkladığınız projeyi açın.
- Sağ tarafta bulunan **Compare** (Karşılaştır) butonuna tıklayın.
- Karşımıza çıkan ekranda **Try Switching the Base** linkine tıklayın.
- Bu linke tıkladıktan sonra proje sahibinin siz projeyi forkladıktan sonra yaptığı değişiklikleri göreceksiniz.
- Ekranda **Create Pull Request** (Yeni İstek Oluştur) butonuna tıklayın.
- Bir sonraki ekranda, istek gönderirken **commit** (yorum) yazmak isterseniz buradaki forma yazın
- **Create Pull Request** butonuna tıklayın.
- Bir sonraki sayfanın aşağısında **Merge Pull Request** düğmesine tıklayın
- **Confirm Merge** butonlarına tıklatın!

Hepsi bu kadar! Artık, forkladığınız orjinal proje ile sizdeki kopya aynı :)





# HTTPS ile CLON alırken

### HTTPS ile CLON alırken Server Certificate hatası alınırsa

"Server Certificate Verification Failed" hatası

`git config --global http.sslVerify true`

veya

`git config --global http.sslVerify false`




### Yanlışlıkla SSH yerine HTTPS seçilmişse

Yanlışlıkla SSH yerine HTTPS adresi ile CLON yapılmış proje kaydının düzeltilmesi

ADIM 1: Github proje sayfasına gidilir, SSH'lı clonlama adresi kopyalanır, aşağıdaki komut kullanılır:

ADIM 2: `git remote set-url origin git@github.com:KULLANICIADI/REPOADI.git`



### HTTPS kullanımı ve Parola sormayı engelleme

HTTPS ile Depo erişimi kullanıldığında, PUSH sırasında sürekli kullanıcı adı ve parola sormaması için `.git/config` dosyasında yapılması gereken düzenleme:

Github kullanıcı adınızı ve parolanızı şu şekilde kaydedebilirsiniz:

url = https://KULLANICIADI:PAROLANIZ@github.com/nuriakman/anket.git

veya terminalden şu yazılır:

`git remote set-url origin https://KULLANICIADI:PAROLANIZ@github.com/nuriakman/anket.git`

DİKKAT! Parolanızda özel karakterler olursa (örneğin: ünlem işareti) bunu \ karakteri ile escape etmeniz gerekir.





## İLK DEFA TANIŞACAKLAR İÇİN GİT KULLANIMI (YEREL DEPO)
Komut |Anlamı|
------------|-------------|
```git config --global user.name "kullaniciadı"```| Bütün Git projelerinizde kullanacağınız kullanıcı adını tanımlar (BİR DEFA YAPILIR!)
```git config --global user.email eposta@adresi.org```| Bütün Git projelerinizde kullanacağınız kullanıcı mail adresini tanımlar (BİR DEFA YAPILIR!)
```git init```|Bu komut, bulunduğunuz dizini bir Git Deposu haline getirir ve .git adında bir dizin oluşturur. (BİR DEFA YAPILIR!)
```git add .```| Belirttiğiniz bir dosyayı ya da tüm projeyi çalışma alanına (stash) ekler. Yani commit‘lenmeye hazır hale getirir. (PROJEDE DEĞİŞİKLİK YAPTIKÇA)
```git commit -m "değişiklik açıklamaları"```| Değişikliklerin açıklaması (PROJEDE DEĞİŞİKLİK YAPTIKÇA)


## İLK DEFA TANIŞACAKLAR İÇİN GİT KULLANIMI (UZAK DEPO)
Komut |Anlamı|
------------|-------------|
```git remote add upstream git@github/username/repo.git```|Uzak depo git reposunu ekler (BİR DEFA YAPILIR!)
```git remote -v```|Projenin uzak git deposunu gösterir
```git push```|Yereldeki değişiklikleri uzak git deposuna (örneğin github) yükler  (PROJEYİ UZAK DEPOYA YÜKLEMEK GEREKTİĞİNDE)
```git pull```|Uzaktaki git deposundaki dosyaları yerele indirir  (UZAK DEPOYU YERELE İNDİRMEK GEREKTİĞİNDE)


# Temel Git Komutları

## Çoğunlukla Bir Defa Kullanılan Komutlar
Komut |Anlamı|
------------|-------------|
```git config --global user.name "kullaniciadı"```| Bütün Git projelerinizde kullanacağınız kullanıcı adını tanımlar
```git config --global user.email eposta@adresi.org```| Bütün Git projelerinizde kullanacağınız kullanıcı mail adresini tanımlar
```git init```|Bu komut, bulunduğunuz dizini bir Git Deposu haline getirir ve .git adında bir dizin oluşturur.
```git remote add upstream git@github/username/repo.git```|Uzak depo git reposunu ekler
```git clone git@github/username/repo.git```|Uzak Git Deposundan bir projeyi bulunulan dizin altına kopyalar
```git rm git@github/username/repo.git```|Uzak Git deposunu iptal eder.
```git remote rm git@github/username/repo.git```|Belirtilen uzak repoyu siler
```git remote -v```|Mevcut uzak repoları kontrol et

## Sık Kullanılan Git Komutları
Komut |Anlamı|
------------|-------------|
```git add .```| Belirttiğiniz bir dosyayı ya da tüm projeyi çalışma alanına (stash) ekler. Yani commit‘lenmeye hazır hale getirir.
```git commit -m "değişiklik açıklamaları"```| Değişikliklerin açıklaması
```git commit --amend -m "yeni commit mesajı"```| Son commit'e ait açıklamayı düzeltmek için
```git push -u origin master```|Yereldeki değişiklikleri uzak git deposuna (örneğin github) yükler
```git pull -u origin master```|Uzaktaki git deposundaki dosyaları yerele indirir
```git status```|Yerelde değişen, eklenen silinen doslyaları lsiteler
```git diff``` ile yaptığımız değişiklikler fark görünümü olarak listelenir

## Uzak Sunucu İşlemleri
Komut |Anlamı|
------------|-------------|
```git fetch upstream```|Deponuzda bulunan her şeyi senkronize eder.
```git pull upstream master```|Deponuzu yerel bilgisayarınıza çeker ve her şeyi senkronize eder.
```git fetch origin && git reset –hard origin/master && git clean -f -d```|Yerel değişimlerin üzerine yaz ve uzak sunucu ile senkronize et

## Diğer Kullanışlı Git Komutları
Komut |Anlamı|
------------|-------------|
```git branch -d <branchname>```|Yerel bilgisayardaki branch’ı kaldır
```git branch -a```|Uzak ve yerel branch’ları listele
```git ls-files –others -i –exclude-standard```|Yok sayılan bütün dosyaları göster
```git branch -m [<eski-branchname>] <yeni-branchname>```|Branchı yeniden adlandır
```git checkout <silinen-commit>^ — <dosya-yolu>```|Silinen dosyayı geri getirmek
```git log -10 ```|Son 10 commiti listele
```git stash```|Dosyaları commit etmeden mevcut durumlarını kayıt etmek
```git reset --hard HEAD``` komutu yerelde yapılan değişiklikleri silmek için kulanılır.

## Dallanma
Komut |Anlamı|
------------|-------------|
```git branch```| mevcut dalları listeler.
```git branch YeniDal```| Yeni dal oluşturmak için isim verilir.
```git checkout YeniDal```| Master dalından YeniDal’a geçtik.
```git branch -d YeniDal```| oluşturulan yeni dalı siler (Yerelde).
```git branch -dr YeniDal```| oluşturulan yeni dalı siler (Yerelde ve uzak depoda). (Silme işlemlerini yaparken master dalında olduğunuzdan emin olun.)
```git merge YeniDal```| YeniDal’daki değişiklikler master dalına aktarılıp birleştirildi. (Birleştirme işlemlerini yaparken master dalında olduğunuzdan emin olun.)
```git branch –merged master```|Master ile birleştirilen son branch’ları göster

## Git İle Zamanda Yolculuk
Komut |Anlamı|
------------|-------------|
```git log -5```| Son 5
```git checkout LogIDno```| Tüm proje dizin ve dosyalarını belirtilen LogIDno commit zamanına getirir.
```git checkout master```| Tüm proje dizin ve dosyalarını en son commit zamanına getirir.

## Forkladığımız Projeleri Güncel Tutmak
Açık kaynak bir projeyi fork’lamanın en önemli problemi zamanla güncelliğini yitirmesi ve orjinalinden geride kalmasıdır. Orjinal proje linkini yeni remote adresine ekleyerek bu problemi hızlıca çözebiliriz.

Komut |Anlamı|
------------|-------------|
```git remote add upstream git@github/username/repo.git```| upstream adını verdiğimiz remote url'i ekleyelim. upstream forkladığınız projenin adresidir.
```git checkout master```| referans brach’imizi seçelim
```git pull upstream master```| orjinal projeden değişiklikleri çekelim
```git push origin master```| forkladığımız yere push'layalım.


## Kopya Kağıdı 1:
Uzak Depoda bulunan projenizi yeni bir bilgisayarda devam ettirmek.

Komut |Anlamı|
------------|-------------|
```mkdir ProjeAdı```| Dizin oluşturduk
```chdir ProjeAdı```| Oluşturduğumuz proje dizinine geçtik
```git init```| Bu dizinin projemize ait ```git deposu```olacağını belirttik
```git remote add origin git@github/username/repo.git```|Uzak git depomuzu bu dizine bağladık
```git pull -u origin master```|Uzak git depomuzun tüm dosyalarını ve geçmişini bu dizine indirdik


## Kopya Kağıdı 2:
Yerel git kullanmadığımız projeyi git deposuna çevirmek.

Komut |Anlamı|
------------|-------------|
```chdir ProjeAdı```| Proje dizinine geçtik
```git init```| Bu dizinin projemize ait ```git deposu```olacağını belirttik
```git add .```| Tüm dosya ve dizinleri git deposuna ekledik
```git commit -m "git kullanmaya geçiş"```| İlk commit mesajımızı ekledik


## Kopya Kağıdı 3:
Yerelde git kullanarak geliştirdiğimiz projeyi GitHub'a (uzak depoya) yeni bir depo olarak yüklemek.

Komut |Anlamı|
------------|-------------|
```GitHub Sitesinde Yapılacak Görev```| GitHub üzerinde yeni bir repo açılır ve adresi kopyalanır.
```chdir ProjeAdı```| Yereldeki Proje dizinimize geçtik
```git remote add origin git@github/username/repo.git```|Uzak git depomuzu bu dizine bağladık
```git push -u origin master```|Yereldeki proje dosyamızın GitHub'a yüklenmesini sağladık


## Kopya Kağıdı 4:
Uzak Depoda bulunan projeyi yerele indirmek.

Komut |Anlamı|
------------|-------------|
```git clone git@github/username/repo.git```|Uzak git depomuzu bulunduğumuz dizin altında proje ismi ilse aynı dizine indirdik


## GİT Yardım Komutları
```BASH
git help -a
git help -g
git help everyday
git help tutorial
git help workflows
```


## Faydalı Linkler

- [git - Basit Rehber](http://rogerdudler.github.io/git-guide/index.tr.html)
- [Anlamsal Sürümleme](https://semver.org/lang/tr/)
- [Türkçe Git 101 Kitabı](https://aliozgur.gitbooks.io/git101/content/)
- [Git Cheat Sheet (PDF)](http://rogerdudler.github.io/git-guide/files/git_cheat_sheet.pdf)
- [Orjinal Kaynağından Belge](https://git-scm.com/book/tr/v2)
- [GitHub Cheat Sheet (PDF)](https://services.github.com/on-demand/downloads/github-git-cheat-sheet.pdf)
- [Visual Git Cheat Sheet (SVG | PNG)](http://ndpsoftware.com/git-cheatsheet.html)
- [Yeni Başlayanlar için Git 101](https://medium.com/turkce/yeni-ba%C5%9Flayanlar-i%C3%A7in-git-101-ff7ea5b3eff9)
- [Github History İzleme](https://github.com/pomber/github-history)
- [Git Explorer)](https://gitexplorer.com/)
- [Sıkışınca Git](https://ohshitgit.com/)
