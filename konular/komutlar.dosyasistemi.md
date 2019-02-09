# Dosya Sistemi Komutları

## Komut Listesi
Komut |Anlamı|
------------|-------------|
[basename](http://www.php.net/basename)|Dosya yolunun dosya ismi bileşenini döndürür
[chgrp](http://www.php.net/chgrp)|Dosya grubunu değiştirir
[chmod](http://www.php.net/chmod)|Dosya kipini değiştirir
[chown](http://www.php.net/chown)|Dosyanın sahibini değiştirir
[clearstatcache](http://www.php.net/clearstatcache)|Dosya durum önbelleğini temizler
[copy](http://www.php.net/copy)|Dosya kopyalar
[delete](http://www.php.net/delete)|unlink veya unset işlevine bakınız
[dirname](http://www.php.net/dirname)|Belirtilen dosya yolunun dizin bileşenini döndürür
[disk_free_space](http://www.php.net/disk-free-space)|Dizindeki kullanılabilir bayt sayısını döndürür
[disk_total_space](http://www.php.net/disk-total-space)|Bir dizinin toplam boyunu döndürür
[diskfreespace](http://www.php.net/diskfreespace)|disk_free_space işlevinin takma adıdır
[fclose](http://www.php.net/fclose)|Açık bir dosya tanıtıcısını kapatır
[feof](http://www.php.net/feof)|Bir dosya tanıtıcısı üzerinde konum dosya sonunda mı diye bakar
[fflush](http://www.php.net/fflush)|Çıktıyı bir dosyaya boşaltır
[fgetc](http://www.php.net/fgetc)|Dosya tanıtıcısından bir karakter döndürür
[fgetcsv](http://www.php.net/fgetcsv)|Dosya tanıtıcısından CSV alanlarını çözümleyerek bir satır döndürür
[fgets](http://www.php.net/fgets)|Dosya tanıtıcısından bir satır döndürür
[fgetss](http://www.php.net/fgetss)|Dosya tanıtıcısından bir satırı HTML etiketlerinden arındırarak döndürür
[file_exists](http://www.php.net/file_exists)|Bir dosya veya dizinin mevcut olup olmadığına bakar
[file_get_contents](http://www.php.net/file-get-contents)|Dosya içeriğinin tamamını bir dizge olarak döndürür
[file_put_contents](http://www.php.net/file-put-contents)|Bir dizgeyi bir dosyaya yazar
[file](http://www.php.net/file)|Dosya içeriğinin tamamını bir diziye okur
[fileatime](http://www.php.net/fileatime)|Dosyaya son erişim zamanını döndürür
[filectime](http://www.php.net/filectime)|Dosyanın dosya düğümü değişiklik zamanını döndürür
[filegroup](http://www.php.net/filegroup)|Dosyanın sahibi olan grubu döndürür
[fileinode](http://www.php.net/fileinode)|Dosyanın düğüm numarasını döndürür
[filemtime](http://www.php.net/filemtime)|Dosyanın değişiklik zamanını döndürür
[fileowner](http://www.php.net/fileowner)|Dosya sahibini döndürür
[fileperms](http://www.php.net/fileperms)|Dosya izinlerini döndürür
[filesize](http://www.php.net/filesize)|Dosya uzunluğunu döndürür
[filetype](http://www.php.net/filetype)|Dosya türünü döndürür
[flock](http://www.php.net/flock)|Taşınabilir tavsiye niteliğinde dosya kilitleme
[fnmatch](http://www.php.net/fnmatch)|Dosya ismi belirtilen kalıpla eşleşiyor mu diye bakar
[fopen](http://www.php.net/fopen)|Bir dosya veya URL'yi açar
[fpassthru](http://www.php.net/fpassthru)|Bir dosya tanıtıcısında kalan verinin tamamını çıktılar
[fputcsv](http://www.php.net/fputcsv)|Satırı CSV olarak biçemler ve dosya tanıtıcısına yazar
[fputs](http://www.php.net/fputs)|fwrite işlevinin takma adıdır
[fread](http://www.php.net/fread)|Dosyayı ikil kipte okur
[fscanf](http://www.php.net/fscanf)|Bir dosyadaki girdiyi belli bir biçeme göre çözümler
[fseek](http://www.php.net/fseek)|Dosya tanıtıcısında konumu bir yerden başka bir yere taşır
[fstat](http://www.php.net/fstat)|Bir açık dosya tanıtıcısı kullanarak bir dosya hakkında bilgi döndürür
[ftell](http://www.php.net/ftell)|Dosya okuma/yazma konumlayıcının mevcut konumu ile döner
[ftruncate](http://www.php.net/ftruncate)|Bir dosyayı belli bir uzunlukta budar
[fwrite](http://www.php.net/fwrite)|Dosyaya ikil kipte yazar
[glob](http://www.php.net/glob)|Bir kalıpla eşleşen dosya yollarını bulur
[is_dir](http://www.php.net/is-dir)|Bir dosyanın bir dizin olup olmadığını söyler
[is_executable](http://www.php.net/is-executable)|Bir dosyanın çalıştırılabilir bir dosya olup olmadığını söyler
[is_file](http://www.php.net/is-file)|Bir dosyanın sıradan bir dosya olup olmadığını söyler
[is_link](http://www.php.net/is-link)|Bir dosyanın sembolik bağ olup olmadığını söyler
[is_readable](http://www.php.net/is-readable)|Bir dosyanın mevcut ve okunabilir olup olmadığını söyler
[is_uploaded_file](http://www.php.net/is-uploaded-file)|Bir dosya HTTP POST üzerinden karşıya yüklenebilecekse bunu söyler
[is_writable](http://www.php.net/is-writable)|Bir dosyanın yazılabilir olup olmadığını söyler
[is_writeable](http://www.php.net/is-writeable)|is_writable işlevinin takma adıdır
[lchgrp](http://www.php.net/lchgrp)|Bir sembolik bağın grubunu değiştirir
[lchown](http://www.php.net/lchown)|Bir sembolik bağın sahibini değiştirir
[link](http://www.php.net/link)|Sabit bir bağ oluşturur
[linkinfo](http://www.php.net/linkinfo)|Bir bağ hakkında bilgi verir
[lstat](http://www.php.net/lstat)|Bir dosya veya sembolik bağ hakkında bilgi verir
[mkdir](http://www.php.net/mkdir)|Dizin oluşturur
[move_uploaded_file](http://www.php.net/move-uploaded-file)|Karşıya yüklenen bir dosyayı yeni bir yere taşır
[parse_ini_file](http://www.php.net/parse-ini-file)|Bir yapılandırma dosyasını çözümler
[parse_ini_string](http://www.php.net/parse-ini-string)|Bir yapılandırma dizgesini çözümler
[pathinfo](http://www.php.net/pathinfo)|Bir dosya yolu hakkında bilgi döndürür
[pclose](http://www.php.net/pclose)|Bir süreç tanıtıcısını kapatır
[popen](http://www.php.net/popen)|Bir süreç tanıtıcısı açar
[readfile](http://www.php.net/readfile)|Bir dosyayı çıktılar
[readlink](http://www.php.net/readlink)|Bir sembolik bağın hedefi ile döner
[realpath_cache_get](http://www.php.net/realpath-cache-get)|Get realpath cache entries
[realpath_cache_size](http://www.php.net/realpath-cache-size)|Get realpath cache size
[realpath](http://www.php.net/realpath)|Normalleştirilmiş mutlak dosya yolunu döndürür
[rename](http://www.php.net/rename)|Bir dosya veya dizinin ismini değiştirir
[rewind](http://www.php.net/rewind)|Bir dosya tanıtıcısında konumu başa taşır
[rmdir](http://www.php.net/rmdir)|Dizin siler
[set_file_buffer](http://www.php.net/set-file-buffer)|stream_set_write_buffer işlevinin takma adıdır
[stat](http://www.php.net/stat)|Bir dosya hakkında bilgi döndürür
[symlink](http://www.php.net/symlink)|Bir sembolik bağ oluşturur
[tempnam](http://www.php.net/tempnam)|Eşsiz bir isimle dosya oluşturur
[tmpfile](http://www.php.net/tmpfile)|Geçici bir dosya oluşturur
[touch](http://www.php.net/touch)|Dosyanın erişim ve değişiklik zamanını ayarlar
[umask](http://www.php.net/umask)|Geçerli izin maskesini değiştirir
[unlink](http://www.php.net/unlink)|Bir dosyayı siler



# Dizin Komutları

## Komut Listesi
Komut |Anlamı|
------------|-------------|
[chdir](http://www.php.net/chdir)|Dizin değiştirir
[chroot](http://www.php.net/chroot)|Kök dizini değiştirir
[closedir](http://www.php.net/closedir)|Dizin tanıtıcısını kapatır
[dir](http://www.php.net/dir)|Return an instance of the Directory class
[getcwd](http://www.php.net/getcwd)|Geçerli çalışma dizinini döndürür
[opendir](http://www.php.net/opendir)|Belirtilen dizin için bir tanıtıcı döndürür
[readdir](http://www.php.net/readdir)|Dizinden bir girdinin ismini okur
[rewinddir](http://www.php.net/rewinddir)|Dizin tanıtıcısını dizin başlangıcına konumlar
[scandir](http://www.php.net/scandir)|Belirtilen dizindeki alt dizinleri ve dosyaları listeler
