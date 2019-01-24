# Dosya Sistemi Komutları

## Komut Listesi
Komut |Anlamı|
------------|-------------|
```basename``` | Dosya yolunun dosya ismi bileşenini döndürür
```chgrp``` | Dosya grubunu değiştirir
```chmod``` | Dosya kipini değiştirir
```chown``` | Dosyanın sahibini değiştirir
```clearstatcache``` | Dosya durum önbelleğini temizler
```copy``` | Dosya kopyalar
```delete``` | unlink veya unset işlevine bakınız
```dirname``` | Belirtilen dosya yolunun dizin bileşenini döndürür
```disk_free_space``` | Dizindeki kullanılabilir bayt sayısını döndürür
```disk_total_space``` | Bir dizinin toplam boyunu döndürür
```diskfreespace``` | disk_free_space işlevinin takma adıdır
```fclose``` | Açık bir dosya tanıtıcısını kapatır
```feof``` | Bir dosya tanıtıcısı üzerinde konum dosya sonunda mı diye bakar
```fflush``` | Çıktıyı bir dosyaya boşaltır
```fgetc``` | Dosya tanıtıcısından bir karakter döndürür
```fgetcsv``` | Dosya tanıtıcısından CSV alanlarını çözümleyerek bir satır döndürür
```fgets``` | Dosya tanıtıcısından bir satır döndürür
```fgetss``` | Dosya tanıtıcısından bir satırı HTML etiketlerinden arındırarak döndürür
```file_exists``` | Bir dosya veya dizinin mevcut olup olmadığına bakar
```file_get_contents``` | Dosya içeriğinin tamamını bir dizge olarak döndürür
```file_put_contents``` | Bir dizgeyi bir dosyaya yazar
```file``` | Dosya içeriğinin tamamını bir diziye okur
```fileatime``` | Dosyaya son erişim zamanını döndürür
```filectime``` | Dosyanın dosya düğümü değişiklik zamanını döndürür
```filegroup``` | Dosyanın sahibi olan grubu döndürür
```fileinode``` | Dosyanın düğüm numarasını döndürür
```filemtime``` | Dosyanın değişiklik zamanını döndürür
```fileowner``` | Dosya sahibini döndürür
```fileperms``` | Dosya izinlerini döndürür
```filesize``` | Dosya uzunluğunu döndürür
```filetype``` | Dosya türünü döndürür
```flock``` | Taşınabilir tavsiye niteliğinde dosya kilitleme
```fnmatch``` | Dosya ismi belirtilen kalıpla eşleşiyor mu diye bakar
```fopen``` | Bir dosya veya URL'yi açar
```fpassthru``` | Bir dosya tanıtıcısında kalan verinin tamamını çıktılar
```fputcsv``` | Satırı CSV olarak biçemler ve dosya tanıtıcısına yazar
```fputs``` | fwrite işlevinin takma adıdır
```fread``` | Dosyayı ikil kipte okur
```fscanf``` | Bir dosyadaki girdiyi belli bir biçeme göre çözümler
```fseek``` | Dosya tanıtıcısında konumu bir yerden başka bir yere taşır
```fstat``` | Bir açık dosya tanıtıcısı kullanarak bir dosya hakkında bilgi döndürür
```ftell``` | Dosya okuma/yazma konumlayıcının mevcut konumu ile döner
```ftruncate``` | Bir dosyayı belli bir uzunlukta budar
```fwrite``` | Dosyaya ikil kipte yazar
```glob``` | Bir kalıpla eşleşen dosya yollarını bulur
```is_dir``` | Bir dosyanın bir dizin olup olmadığını söyler
```is_executable``` | Bir dosyanın çalıştırılabilir bir dosya olup olmadığını söyler
```is_file``` | Bir dosyanın sıradan bir dosya olup olmadığını söyler
```is_link``` | Bir dosyanın sembolik bağ olup olmadığını söyler
```is_readable``` | Bir dosyanın mevcut ve okunabilir olup olmadığını söyler
```is_uploaded_file``` | Bir dosya HTTP POST üzerinden karşıya yüklenebilecekse bunu söyler
```is_writable``` | Bir dosyanın yazılabilir olup olmadığını söyler
```is_writeable``` | is_writable işlevinin takma adıdır
```lchgrp``` | Bir sembolik bağın grubunu değiştirir
```lchown``` | Bir sembolik bağın sahibini değiştirir
```link``` | Sabit bir bağ oluşturur
```linkinfo``` | Bir bağ hakkında bilgi verir
```lstat``` | Bir dosya veya sembolik bağ hakkında bilgi verir
```mkdir``` | Dizin oluşturur
```move_uploaded_file``` | Karşıya yüklenen bir dosyayı yeni bir yere taşır
```parse_ini_file``` | Bir yapılandırma dosyasını çözümler
```parse_ini_string``` | Bir yapılandırma dizgesini çözümler
```pathinfo``` | Bir dosya yolu hakkında bilgi döndürür
```pclose``` | Bir süreç tanıtıcısını kapatır
```popen``` | Bir süreç tanıtıcısı açar
```readfile``` | Bir dosyayı çıktılar
```readlink``` | Bir sembolik bağın hedefi ile döner
```realpath_cache_get``` | Get realpath cache entries
```realpath_cache_size``` | Get realpath cache size
```realpath``` | Normalleştirilmiş mutlak dosya yolunu döndürür
```rename``` | Bir dosya veya dizinin ismini değiştirir
```rewind``` | Bir dosya tanıtıcısında konumu başa taşır
```rmdir``` | Dizin siler
```set_file_buffer``` | stream_set_write_buffer işlevinin takma adıdır
```stat``` | Bir dosya hakkında bilgi döndürür
```symlink``` | Bir sembolik bağ oluşturur
```tempnam``` | Eşsiz bir isimle dosya oluşturur
```tmpfile``` | Geçici bir dosya oluşturur
```touch``` | Dosyanın erişim ve değişiklik zamanını ayarlar
```umask``` | Geçerli izin maskesini değiştirir
```unlink``` | Bir dosyayı siler



# Dizin Komutları

## Komut Listesi
Komut |Anlamı|
------------|-------------|
```chdir``` | Dizin değiştirir
```chroot``` | Kök dizini değiştirir
```closedir``` | Dizin tanıtıcısını kapatır
```dir``` | Return an instance of the Directory class
```getcwd``` | Geçerli çalışma dizinini döndürür
```opendir``` | Belirtilen dizin için bir tanıtıcı döndürür
```readdir``` | Dizinden bir girdinin ismini okur
```rewinddir``` | Dizin tanıtıcısını dizin başlangıcına konumlar
```scandir``` | Belirtilen dizindeki alt dizinleri ve dosyaları listeler

