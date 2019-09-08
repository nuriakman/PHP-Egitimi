# Windows'ta Gitbash Kurulumu
Öncelikle [buradan](https://git-scm.com/downloads) "Git For Windows"u indiriyoruz.

1. Kurulumu yaparken "Select Components" başlığı altında bulunan "Windows Explorer Integration (Git bash ve Git GUI)"ın işaretli olmasına dikkat ediyoruz. 
2. "Choosing the default editor used by Git" başlığı altında kullandığınız herhangi bir editörü seçip devam edebilirsiniz. (Notepad++, VS Code, Atom ve Sublime gibi editörler arasında seçim yapabiliyorsunuz.) 
3. Geri kalan seçenekleri basitçe hepsini "Next" diyerek geçebilirsiniz. 
 
- Artık herhangi bir dosya dizinindeyken veya masaüstündeyken boş bir yere sağ tıkladığınızda "Git GUI here" ve "Git Bash here" seçeneklerini göreceksiniz. 
- Bulunduğunuz dizini Git Bash ile açacak olursanız bir konsol ekranı karşınıza çıkacak. [Burada](./komutlar.git.md) bulunan Git ile ilgili tüm komutları Git Bash'de çalıştırabilirsiniz. 
- Git GUI'de de Git Bash üzerinde yaptığımız her şeyi bir grafiksel arayüzle beraber yapabilirsiniz ama ben geri kalan her şeyi Git Bash üzerinden anlatacağım. 

##  Yerel Repo Konfigürasyonu
1. Dilerseniz masaüstünüze dilerseniz de "Belgeler" klasörüne yeni bir klasör oluşturun. 
2. Bu yeni klasörü açın, içinde sağ tıklayın ve "Git Bash Here" seçeneğine basın. 
3. Öncelikle SSH key üretmemiz ve bunu GitHub'da tanımlamamız gerekiyor. Bunun nasıl yapılacağına [buradan bakabilirsiniz](./ayarlar.sshkey.md).
4. Devamında komut penceresine aşağıdaki komutları yazın:
```
git config --global user.name "kullaniciadi"
git config --global user.email eposta@adresi.com
git init
```
**Not: Bu kodların hepsi ve daha fazlası açıklamalarıyla birlikte [burada](./komutlar.git.md) mevcut.**
5. Şimdi ise projemizi klonlamamız gerek. Bunun için projemize geliyor, "Clone or Download"a basıyor ve oradan SSH key'ini kopyalıyoruz. 
6. Devamında ```git clone kopyaladigimiz-ssh-keyi```'ni yazıp enter'a basıyoruz. 
7. Ve artık hazırsınız! 
## Yaptığımız Değişiklikleri Commit'leyip Push'lamak
Yaptığınız değişiklikleri Push'lamak için iki seçeneğiniz var: 
   
1. **Git GUI**: Yerel reponuzun bulunduğu dizine sağ tıklayıp "Git GUI here" derseniz eğer, karşınıza çıkan pencerede "Unstaged Changes" bölümünü göreceksiniz. Öncelikle aşağıdaki "Initial Commit Message" yazan büyük boşluğa mesajınızı yazın. Sonra "Stage Changed" butonuna basın. Sırasıyla Commit ve Push butonlarına da bastığınızda yaptığınız değişikliklerin GitHub'a kolaylıkla yüklendiğini göreceksiniz.
2. **Git Bash**: Yerel reponuzun bulunduğu dizine sağ tıklayıp "Git Bash Here"ı seçin ve geri kalan işlemler Linux'ta yapılan işlemler ile aynı. Bunun için daha önce de verdiğim [bu link](./komutlar.git.md)ten **Sık Kullanılan Git Komutları** başlığına bakabilirsiniz. 
