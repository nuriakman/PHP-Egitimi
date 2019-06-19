# Dosya Sistemi Komutları

## Komut Listesi
Komut |Anlamı|
------------|-------------|
[basename](http://php.net/basename)|Dosya yolunun dosya ismi bileşenini döndürür
[chgrp](http://php.net/chgrp)|Dosya grubunu değiştirir
[chmod](http://php.net/chmod)|Dosya kipini değiştirir
[chown](http://php.net/chown)|Dosyanın sahibini değiştirir
[clearstatcache](http://php.net/clearstatcache)|Dosya durum önbelleğini temizler
[copy](http://php.net/copy)|Dosya kopyalar
[delete](http://php.net/delete)|unlink veya unset işlevine bakınız
[dirname](http://php.net/dirname)|Belirtilen dosya yolunun dizin bileşenini döndürür
[disk_free_space](http://php.net/disk-free-space)|Dizindeki kullanılabilir bayt sayısını döndürür
[disk_total_space](http://php.net/disk-total-space)|Bir dizinin toplam boyunu döndürür
[diskfreespace](http://php.net/diskfreespace)|disk_free_space işlevinin takma adıdır
[fclose](http://php.net/fclose)|Açık bir dosya tanıtıcısını kapatır
[feof](http://php.net/feof)|Bir dosya tanıtıcısı üzerinde konum dosya sonunda mı diye bakar
[fflush](http://php.net/fflush)|Çıktıyı bir dosyaya boşaltır
[fgetc](http://php.net/fgetc)|Dosya tanıtıcısından bir karakter döndürür
[fgetcsv](http://php.net/fgetcsv)|Dosya tanıtıcısından CSV alanlarını çözümleyerek bir satır döndürür
[fgets](http://php.net/fgets)|Dosya tanıtıcısından bir satır döndürür
[fgetss](http://php.net/fgetss)|Dosya tanıtıcısından bir satırı HTML etiketlerinden arındırarak döndürür
[file_exists](http://php.net/file_exists)|Bir dosya veya dizinin mevcut olup olmadığına bakar
[file_get_contents](http://php.net/file-get-contents)|Dosya içeriğinin tamamını bir dizge olarak döndürür
[file_put_contents](http://php.net/file-put-contents)|Bir dizgeyi bir dosyaya yazar
[file](http://php.net/file)|Dosya içeriğinin tamamını bir diziye okur
[fileatime](http://php.net/fileatime)|Dosyaya son erişim zamanını döndürür
[filectime](http://php.net/filectime)|Dosyanın dosya düğümü değişiklik zamanını döndürür
[filegroup](http://php.net/filegroup)|Dosyanın sahibi olan grubu döndürür
[fileinode](http://php.net/fileinode)|Dosyanın düğüm numarasını döndürür
[filemtime](http://php.net/filemtime)|Dosyanın değişiklik zamanını döndürür
[fileowner](http://php.net/fileowner)|Dosya sahibini döndürür
[fileperms](http://php.net/fileperms)|Dosya izinlerini döndürür
[filesize](http://php.net/filesize)|Dosya uzunluğunu döndürür
[filetype](http://php.net/filetype)|Dosya türünü döndürür
[flock](http://php.net/flock)|Taşınabilir tavsiye niteliğinde dosya kilitleme
[fnmatch](http://php.net/fnmatch)|Dosya ismi belirtilen kalıpla eşleşiyor mu diye bakar
[fopen](http://php.net/fopen)|Bir dosya veya URL'yi açar
[fpassthru](http://php.net/fpassthru)|Bir dosya tanıtıcısında kalan verinin tamamını çıktılar
[fputcsv](http://php.net/fputcsv)|Satırı CSV olarak biçemler ve dosya tanıtıcısına yazar
[fputs](http://php.net/fputs)|fwrite işlevinin takma adıdır
[fread](http://php.net/fread)|Dosyayı ikil kipte okur
[fscanf](http://php.net/fscanf)|Bir dosyadaki girdiyi belli bir biçeme göre çözümler
[fseek](http://php.net/fseek)|Dosya tanıtıcısında konumu bir yerden başka bir yere taşır
[fstat](http://php.net/fstat)|Bir açık dosya tanıtıcısı kullanarak bir dosya hakkında bilgi döndürür
[ftell](http://php.net/ftell)|Dosya okuma/yazma konumlayıcının mevcut konumu ile döner
[ftruncate](http://php.net/ftruncate)|Bir dosyayı belli bir uzunlukta budar
[fwrite](http://php.net/fwrite)|Dosyaya ikil kipte yazar
[glob](http://php.net/glob)|Bir kalıpla eşleşen dosya yollarını bulur
[is_dir](http://php.net/is-dir)|Bir dosyanın bir dizin olup olmadığını söyler
[is_executable](http://php.net/is-executable)|Bir dosyanın çalıştırılabilir bir dosya olup olmadığını söyler
[is_file](http://php.net/is-file)|Bir dosyanın sıradan bir dosya olup olmadığını söyler
[is_link](http://php.net/is-link)|Bir dosyanın sembolik bağ olup olmadığını söyler
[is_readable](http://php.net/is-readable)|Bir dosyanın mevcut ve okunabilir olup olmadığını söyler
[is_uploaded_file](http://php.net/is-uploaded-file)|Bir dosya HTTP POST üzerinden karşıya yüklenebilecekse bunu söyler
[is_writable](http://php.net/is-writable)|Bir dosyanın yazılabilir olup olmadığını söyler
[is_writeable](http://php.net/is-writeable)|is_writable işlevinin takma adıdır
[lchgrp](http://php.net/lchgrp)|Bir sembolik bağın grubunu değiştirir
[lchown](http://php.net/lchown)|Bir sembolik bağın sahibini değiştirir
[link](http://php.net/link)|Sabit bir bağ oluşturur
[linkinfo](http://php.net/linkinfo)|Bir bağ hakkında bilgi verir
[lstat](http://php.net/lstat)|Bir dosya veya sembolik bağ hakkında bilgi verir
[mkdir](http://php.net/mkdir)|Dizin oluşturur
[move_uploaded_file](http://php.net/move-uploaded-file)|Karşıya yüklenen bir dosyayı yeni bir yere taşır
[parse_ini_file](http://php.net/parse-ini-file)|Bir yapılandırma dosyasını çözümler
[parse_ini_string](http://php.net/parse-ini-string)|Bir yapılandırma dizgesini çözümler
[pathinfo](http://php.net/pathinfo)|Bir dosya yolu hakkında bilgi döndürür
[pclose](http://php.net/pclose)|Bir süreç tanıtıcısını kapatır
[popen](http://php.net/popen)|Bir süreç tanıtıcısı açar
[readfile](http://php.net/readfile)|Bir dosyayı çıktılar
[readlink](http://php.net/readlink)|Bir sembolik bağın hedefi ile döner
[realpath_cache_get](http://php.net/realpath-cache-get)|Get realpath cache entries
[realpath_cache_size](http://php.net/realpath-cache-size)|Get realpath cache size
[realpath](http://php.net/realpath)|Normalleştirilmiş mutlak dosya yolunu döndürür
[rename](http://php.net/rename)|Bir dosya veya dizinin ismini değiştirir
[rewind](http://php.net/rewind)|Bir dosya tanıtıcısında konumu başa taşır
[rmdir](http://php.net/rmdir)|Dizin siler
[set_file_buffer](http://php.net/set-file-buffer)|stream_set_write_buffer işlevinin takma adıdır
[stat](http://php.net/stat)|Bir dosya hakkında bilgi döndürür
[symlink](http://php.net/symlink)|Bir sembolik bağ oluşturur
[tempnam](http://php.net/tempnam)|Eşsiz bir isimle dosya oluşturur
[tmpfile](http://php.net/tmpfile)|Geçici bir dosya oluşturur
[touch](http://php.net/touch)|Dosyanın erişim ve değişiklik zamanını ayarlar
[umask](http://php.net/umask)|Geçerli izin maskesini değiştirir
[unlink](http://php.net/unlink)|Bir dosyayı siler



# Dizin Komutları

## Komut Listesi
Komut |Anlamı|
------------|-------------|
[chdir](http://php.net/chdir)|Dizin değiştirir
[chroot](http://php.net/chroot)|Kök dizini değiştirir
[closedir](http://php.net/closedir)|Dizin tanıtıcısını kapatır
[dir](http://php.net/dir)|Return an instance of the Directory class
[getcwd](http://php.net/getcwd)|Geçerli çalışma dizinini döndürür
[opendir](http://php.net/opendir)|Belirtilen dizin için bir tanıtıcı döndürür
[readdir](http://php.net/readdir)|Dizinden bir girdinin ismini okur
[rewinddir](http://php.net/rewinddir)|Dizin tanıtıcısını dizin başlangıcına konumlar
[scandir](http://php.net/scandir)|Belirtilen dizindeki alt dizinleri ve dosyaları listeler
