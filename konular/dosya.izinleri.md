# Linuxta Dosya İzinleri

```ls -al``` komutunu kullanarak terminalde bulunduğumuz dizindeki dosyaların ve klasörlerin erişim izinlerini görebiliyoruz.

İfade | Açıklama
---|---
 **owner(user)**|Dosyanın/klasörün sahibi konumundadır. User komutları sadece user kullanıcısı için çalışır.
 **group(grup)**|Barındırdığı klasör ya da dosyalara etki edebilen user’dan daha az yetkisi olan kısımdır.
 **others(diğerleri)**|Diğer kullanıcılar anlamına gelir. Genellikle en az yetkiye sahip olan kısımdır.


```
r - Read
w - Write
x - Execute
```

- **read** - Dosya ya da  klasörleri okuyabilmeye, görüntüleyebilme izni verir.
- **write** - Dosya ya da klasörleri yazabilme, editleyebilme izni verir.
- **execute** - Dosya ya da klasörleri çalıştırabilme izni verir.
- **+ Operatörü** - Bir dosyaya ya da klasöre herhangi bir izni vermek için kullanılan operatördür.
- **- Operatörü** - Bir dosyaya ya da klasöre herhangi bir izni çıkarmak için kullanılan operatördür.

### Kullanıcı detayları
```
u - Owner
g - Group
o - Others
a - All users
```

### Dosya izinlerini değiştirmek

Herhangi bir izni user, grup ya da other kullanıcılarına ekleyebilmek için (+) operatörü, aynı şekilde bir izin çıkartmak için de (-) operatörü kullanılır.

Herhangi bir dosyanın iznini değiştirmek için ```chmod``` komutu kullanılır.

```sudo chmod o-rw filename``` - file1 dosyasında others kısmından read( r ) ve write ( w ) izinlerini çıkartır.

```sudoc chmod g+rw filename``` - file1 dosyasının ait olduğu gruba read ( r ) ve write( w ) izinlerini ekler.
