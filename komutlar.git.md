# GİT ve GİT HUB

## Repository – Depo

Repository veya Repo, bir yazılımın proje dosyalarının içerisinde bulundurulduğu sunucudaki URL adresidir. GitHub üzerindeki herkes kolayca ve benzersiz bir Repo oluşturarak bu Repo adresi üzerinden projelerin kaynak kodlarını paylaşabilir. Her proje kendi içerisinde ayrıca benzersiz ve kolayca ulaşılabilen URL’ye sahiptir.

## Fork - Çatallamak

Forking, açık olan bir projeye sizin de katılarak üzerinde değişiklikler yapma işlemidir. Deponun çatallanması işlemi sayesinde diğer yazılımcılar açık kaynaklı yazılımlar üzerinde değişiklikler gerçekleştirip, yazılımın iyileştirilmesini sağlayabilirler.

## Git Nedir?

Git bir versiyon kontrol sistemidir.

## Github Nedir?

Github, versiyon kontrol sistemleri için uzak bir depo hizmeti sağlayan bir servistir. Git ile Github aynı değildir.


# Temel Git Komutları

## Çoğunlukla 1 defa kullan komutlar
```git config --global user.name "kullaniciadı"```| Bütün Git projelerinizde kullanacağınız kullanıcı adını tanımlar
```git config --global user.email eposta@adresi.org```| Bütün Git projelerinizde kullanacağınız kullanıcı mail adresini tanımlar
```git init```|Bu komut, bulunduğunuz dizini bir Git Deposu haline getirir ve .git adında bir dizin oluşturur. 
```git remote add upstream git@github/username/repo.git```|Uzak depo git reposunu ekler
```git clone git@github/username/repo.git```|Uzak Git Deposundan bir projeyi bulunulan dizin altına kopyalar
```git rm git@github/username/repo.git```|Uzak Git deposunu iptal eder.
```git remote rm git@github/username/repo.git```|Belirtilen uzak repoyu siler
```git remote -v```|Mevcut uzak repoları kontrol et

## Sık Kullanılan Git Komutları
```git add .```| Belirttiğiniz bir dosyayı ya da tüm projeyi çalışma alanına (stash) ekler. Yani commit‘lenmeye hazır hale getirir.
```git commit -m "değişiklik açıklamaları"```| Değişikliklerin açıklaması
```git commit --amend -m "yeni commit mesajı"```| Son commit'e ait açıklamayı düzeltmek için
```git push -u origin master```|Yereldeki değişiklikleri uzak git deposuna (örneğin github) yükler
```git pull -u origin master```|Uzaktaki git deposundaki dosyaları yerele indirir
```git status```|Yerelde değişen, eklenen silinen doslyaları lsiteler
```git diff``` ile yaptığımız değişiklikler fark görünümü olarak listelenir

## Uzak Sunucu İşlemlerimiz
```git fetch upstream```|Deponuzda bulunan her şeyi senkronize eder.
```git pull upstream master```|Deponuzu yerel bilgisayarınıza çeker ve her şeyi senkronize eder.
```git fetch origin && git reset –hard origin/master && git clean -f -d```|Yerel değişimlerin üzerine yaz ve uzak sunucu ile senkronize et

## Diğer Kullanışlı Git Komutları
```git branch –merged master | grep -v ‘^*’ | xargs -n 1 git branch -d```|Master ile birleştirilmiş branch’ları kaldır
```git branch -d <branchname>```|Yerel bilgisayardaki branch’ı kaldır
```git branch -a```|Uzak ve yerel branch’ları listele
```git ls-files –others -i –exclude-standard```|Yok sayılan bütün dosyaları göster
```git branch -m [<eski-branchname>] <yeni-branchname>```|Branchı yeniden adlandır
```git checkout <silinen-commit>^ — <dosya-yolu>```|Silinen dosyayı geri getirmek
```git log -10 ```|Son 10 commiti listele
```git stash```|Dosyaları commit etmeden mevcut durumlarını kayıt etmek
```git reset --hard HEAD``` komutu yerelde yapılan değişiklikleri silmek için kulanılır.

## Dallanma
```git branch```| mevcut dalları listeler.
```git branch YeniDal```| Yeni dal oluşturmak için isim verilir.
```git checkout YeniDal```| Master dalından YeniDal’a geçtik. 
```git branch -d YeniDal```| oluşturulan yeni dalı siler (Yerelde).
```git branch -dr YeniDal```| oluşturulan yeni dalı siler (Yerelde ve uzak depoda). (Silme işlemlerini yaparken master dalında olduğunuzdan emin olun.)
```git merge YeniDal```| YeniDal’daki değişiklikler master dalına aktarılıp birleştirildi. (Birleştirme işlemlerini yaparken master dalında olduğunuzdan emin olun.)
```git branch –merged master```|Master ile birleştirilen son branch’ları göster

## Git İle Zamanda Yolculuk
```git log -5```| Son 5 
```git checkout LogIDno```| Tüm proje dizin ve dosyalarını belirtilen LogIDno commit zamanına getirir.
```git checkout master```| Tüm proje dizin ve dosyalarını en son commit zamanına getirir.


## Kopya Kağıdı 1: Uzak Depoda bulunan projenizi yeni bir bilgisayarda devam ettirme
```mkdir ProjeAdı```| Dizin oluşturduk
```chdir ProjeAdı```| Oluşturduğumuz proje dizinine geçtik
```git init```| Bu dizinin projemize ait ```git deposu```olacağını belirttik
```git remote add origin git@github/username/repo.git```|Uzak git depomuzu bu dizine bağladık
```git pull -u origin master```|Uzak git depomuzun tüm dosyalarını ve geçmişini bu dizine indirdik


## Kopya Kağıdı 2: Yerel git kullanmadığımız projeyi git deposuna çevirmek.
```chdir ProjeAdı```| Proje dizinine geçtik
```git init```| Bu dizinin projemize ait ```git deposu```olacağını belirttik
```git add .```| Tüm dosya ve dizinleri git deposuna ekledik
```git commit -m "git kullanmaya geçiş"```| İlk commit mesajımızı ekledik


## Kopya Kağıdı 3: Yerelde git kullanarak geliştirdiğimiz projeyi GitHub'a (uzak depoya) yeni bir depo olarak yüklemek
```GitHub Sitesinde Yapılacak Görev```| GitHub üzerinde yeni bir repo açılır ve adresi kopyalanır.
```chdir ProjeAdı```| Yereldeki Proje dizinimize geçtik
```git remote add origin git@github/username/repo.git```|Uzak git depomuzu bu dizine bağladık
```git push -u origin master```|Yereldeki proje dosyamızın GitHub'a yüklenmesini sağladık




