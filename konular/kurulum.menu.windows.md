# Windows'da Çalışma Ortamı Kurulumu

## Windows İçin İndirme Bağlantıları
- [Atom Editörü](https://github.com/atom/atom/releases/download/v1.34.0/atom-windows.zip) Ver 1.34
- [Git (32 Bit)](https://github.com/git-for-windows/git/releases/download/v2.20.1.windows.1/Git-2.20.1-32-bit.exe) Ver 2.20.1 (32 Bit) **veya** [Git (64 Bit)](https://github.com/git-for-windows/git/releases/download/v2.20.1.windows.1/Git-2.20.1-64-bit.exe) Ver 2.20.1 (64 Bit)
- [XAMPP / PHP 7.3](https://www.apachefriends.org/xampp-files/7.3.1/xampp-win32-7.3.1-0-VC15-installer.exe) Ver 7.3.1
- [Virtualbox](https://download.virtualbox.org/virtualbox/6.0.10/VirtualBox-6.0.10-132072-Win.exe) Ver 6.0.10


**NOT:** [XAMPP / PHP 5.6](https://www.apachefriends.org/xampp-files/5.6.40/xampp-win32-5.6.40-0-VC11-installer.exe) Ver 5.6.40 sürümünü kurularak eski PHP projelerinizi çalıştırabileceğiniz ortama kavuşabilirsiniz.

## Kurulum Notları
- Git kurulumu sırasında **unix programları kurulsun** seçeneği işaretli olarak kurulum tamamlanmalıdır.
- Git kurulumu bitince ssh-keygen çalıştırılmalıdır.
- id_rsa.pub dosyası kullanıcı klasörü içinde **.ssh** dizini altındadır.
- ```type c:\users\user\.ssh\id_rsa.pub``` ile dosya içeriği alınır.
- ```git clone``` komutu kullanılmadan önce htdoc dizinine şu şekilde geçilmesi gerekir: ```cd c:\xampp\htdocs\```
