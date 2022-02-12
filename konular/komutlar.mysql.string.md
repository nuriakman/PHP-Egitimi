# MySQL String Komutları


### ASCII(str) 
Girilen stringin en solundaki karakterin ascii kodunu verir. Eğer string boş ise 0 , null ise bull dönderir.
```
SELECT ASCII('s') # '115'
```

### BIT_LENGTH(str) 
Bir stringin bit değerini dönderir.
```
SELECT BIT_LENGTH('a') # '8'
```

### CHAR(N,... [USING charset_name]) 
Parametre olarak girilen ascii kodlarına karşılık gelen karakterleri birleştirip dönderir.
```
SELECT CHAR(115,101,114,107,97,110) # 'serkan'
```

### CHAR_LENGTH(str) 
Stringin karakter sayısını verir.
Ayrıca CHARACTER_LENGTH(str)  fonksiyonu ile eştir.
```
SELECT CHAR_LENGTH('mysql') # '5'
```

### CONCAT(str1,str2,...) 
Parametre olarak gönderilen stringleri sırayla birleştirir ve tek string olarak dönderir.
```
SELECT CONCAT('se','r','kan') # 'serkan'
```

### CONCAT_WS(separator,str1,str2,...) 
CONCAT ile benzerdir aradaki fark belirlediğiniz ayıraca göre stringleri birleştirir. İlk parametre ayıraç, diğer parametreler birleştirilecek stringlerdir.
```
SELECT CONCAT_WS(',','php','mysql','apache') # 'php,mysql,apache'
```

### ELT(N,str1,str2,str3,...) 
Örneğimiz üzerinden hareket ederek bu fonksiyonu açıklayalım. İlk parametre  dönderilecek olan stringin indexidir. Eğer index 1 girilseydi çıktı php, 2 girilseydi css olacaktı.
```
SELECT ELT(3, 'php','css' ,'mysql', 'apache') # 'mysql'
```

### FIELD(str,str1,str2,str3,...) 
ELT fonksiyonundan farklı olarak İstenilen stringin indexi dönderilir. İlk parametre olarak indexi alınacak string değeri olmalıdır. Örneğimizde ilk parametre css, yani değer css olan stringin indexini bize dönderecek. Eğer bulamazsa sıfır dönderir.
```
SELECT FIELD('css', 'php','css' ,'mysql', 'apache') # '2'
```

### FIND_IN_SET(str,strlist) 
FIELD ile aynı şekilde girilen ilk parametrenin indexini dönderir. FIELD fonksiyonunda stringler tek tek parametre olarak giriliyorken, bu fonksiyonda bütün stringlerimiz ',' karakteri ile birleştirerek tek string halinde ikinci parametre olarak gönderilir.
```
SELECT FIND_IN_SET('c','a,b,c,d') # '3'
```

### FORMAT(X,D) 
Ondalıklı bir sayının virgülden sonra istediğimiz sayıda basamağını gösterir. Eğer ondalık kısmında bulunan basamak sayısından fazla bir değer girersek sıfır ile istediğimiz basamak sayısına eşit olana kadar ondalık kısmının sonuna ekler.
```
SELECT FORMAT(101.12345678,4) # 101.1234
```

### INSERT(str,pos,len,newstr) 
Bir stringin belirli bir bölümünü yeni bir string ile değiştirir. Örneğin Serkan ‘ın erkan kısmını “.Dağlıoğlu” ile yer değiştirmek istiyoruz. Sorgumuz aşağıdaki gibi olmalı. Sorgumuzda Serkan’ın 2. Karakterinden 5. Karakterine kadar olan kısmını “.Dağlıoğlu”  ile değiştir demiş olduk. Çıktı “S.Dağlıoğlu” olacaktır. Burada dikkat etmemiz gereken string karakterleri 1 ile numaralandırılmaya başlar.
```
SELECT INSERT('Serkan', 2,5,'.Dağlıoğlu') # 'S.Dağlıoğlu'
```

### INSTR(str,substr) 
Php fonksiyonu olan strpos ile aynı şekilde çalışmaktadır.
```
SELECT INSTR('serkanserkan', 'kan') # '4'
```

### LENGTH(str) 
Stringin uzunluğunu dönderir. Ayrıca OCTET_LENGTH(str)  ile eştir.
```
SELECT LENGTH('mysql') # '5'
```

### LEFT(str,len) 
Bir stringin soldan başlayarak istenilen uzunluktaki ksımını dönderir. Saymaya 1 ile başlar.
```
SELECT LEFT('mysql', 3) # 'mys'
```

### RIGHT(str,len) 
Bir stringin sağdan başlayarak istenilen sayıda karakterini verir. Saymaya 1 ile başlar.
```
SELECT RIGHT('mysqlphpapache', 4) # 'ache'
```

### LOAD_FILE(file_name) 
Dosyanın içeriğini string olarak  dönderir. Dosyanın okunması için gerekli izinlerin verilmiş olması gerekiyor. Eğer dosya bulunamazsa null dönderecektir.
```
SELECT LOAD_FILE('/dizin/dosya') AS dosya_icerigi
```

### LOCATE(substr,str) , LOCATE(substr,str,pos) 
INSTR ile aynı görevi görmektedit. Farklı olarak INSTR  fonksiyonunda ilk parametre içinde arama yapılacak string iken , LOCATE fonksiyonunda ilk parametre aranacak string’dir. Ayrıca LOCATE fonksiyonun üçüncü parametre olarak aramanın başlanacağı pozisyonu belirleyebiliriz. Ayrıca  POSITION(substr IN str)  fonksiyonu ile eştir.
```
SELECT LOCATE('kan', 'serkanserkan',5) # '10'
```

### LOWER(str) 
Stringin bütün karakterlerini küçük harfe dönüştürür. Ayrıca  LCASE(str)  ile eştir.
```
SELECT LOWER('MYSQL')  # 'mysql'
```

### LTRIM(str) 
Bir stringin solundaki boşlukları temizler.
```
SELECT LTRIM('  mysql') # 'mysql'
```

### RTRIM(str) 
Bir stringin sağındaki boşlukları temizler
```
SELECT RTRIM('mysql  ') # 'mysql'
```

### LPAD(str,len,padstr) 
Bir stringi istediğimiz karakter sayısına tamamlamak için belirlediğimiz karakter ile soldan ekleyecek şekilde tamamlar.
```
SELECT LPAD('mysql',10,'.') # '.....mysql'
```

### RPAD(str,len,padstr) 
Bir stringi istediğimiz karakter sayısına tamamlamak için belirlediğimiz karakter ile sağdan ekleyecek şekilde tamamlar.
```
SELECT RPAD('mysql',7,'.') # 'mysql..'
```

### QUOTE(str) 
Stringin sql komutu olarak yorumlanmaması için stringi tek tırnak (') ile çevreler. (Yanlış çevirmişte olabilirim. Yanlışsam lütfen düzeltiniz')
```
SELECT QUTOE('Don't') # 'Don't'
```

### REVERSE(str) 
Bir stringi tersten yazdırır.
```
SELECT REVERSE('mysql') # 'lqsym'
```

### REPLACE(str,from_str,to_str) 
Bir stringdeki istenilen bölümünü , büyük küçük harfe duyarlı olarak başka bir string ile değiştirir.
```
SELECT REPLACE('www.mysql.com', 'w', 'Ww') # WwWwWw.mysql.com
```

### REPEAT(str,count) 
Bir stringi istenilen sayıda tekrar ettirir.
```
SELECT REPEAT('Mysql',3) # MysqlMysqlMysql
```

### SPACE(N) 
İstediğiniz uzunlukta boşluk karakterlerinden oluşan string dönderir.
```
SELECT SPACE('6') # '     '
```

### STRCMP(expr1,expr2) 
Eğer iki string birbirine eşitse '0', birinci string ikincisinden küçükse '-1' aksi taktirde '1' dönderir.
```
SELECT STRCMP('text', 'text2') # '-1'
SELECT STRCMP('text2', 'text') # '1'
SELECT STRCMP('text', 'text') # '0'
```

### SUBSTRING(str,pos) , SUBSTRING(str FROM pos) , SUBSTRING(str,pos,len) ,SUBSTRING(str FROM pos FOR len) 
Bir stringin belirtilen karakterinden başlayarak belirlediğiniz uzunlukta kısmını dönderir. Aynı zamanda SUBSTR  fonksiyonu da SUBSTRING  ile eştir. Aşağıdaki sorgular SUBSTRING  fonksiyonun kullanım şekillerini göstermektedir.
```
SELECT SUBSTRING('mysqlphpapache',6) # 'phpapache'
SELECT SUBSTRING('mysqlphpapache' FROM 6) # 'phpapache'
SELECT SUBSTRING('mysqlphpapache',-6,3) # 'apa'
SELECT SUBSTRING('mysqlphpapache' FROM -6 FOR 3) # 'apa'
```

### SUBSTRING_INDEX(str,delim,count) 
Bu fonksiyonu anlatacak cümle kuramadım açıkçası :). Örneğimizden anlayacağınızı umuyorum. Açıklama yapayım ben yine de :) ... İkinci sorgumuza  'www.mysql.com' stringi içerisinde '.' karakterinin ikincisinin olduğu yere kadarki kısmını(www.mysql) dönder dedik.
```
SELECT SUBSTRING_INDEX('www.mysql.com','.',1) # 'www'
SELECT SUBSTRING_INDEX('www.mysql.com','.',2) # 'www.mysql'
```

### TRIM([{BOTH | LEADING | TRAILING} [remstr] FROM] str) , TRIM([remstr FROM]str) 
Bir stringin solundan, sağından veya her iki tarafından istenilen dizgeyi kaldırır.
```
SELECT TRIM('  mysql   ') # 'mysql'
SELECT TRIM(LEADING 'x' FROM 'xxxxxxmysqlxxx') # 'mysqlxxx'
SELECT TRIM(BOTH 'x' FROM 'xxxxxxmysqlxxx') # 'mysql'
SELECT TRIM(TRAILING 'apache' FROM 'phpmysqlapache') # 'phpmysql'
```

### UPPER(str) 
Verilen stringin tüm karakterlerini büyük harf yapar. Ayrıca UCASE(str)  fonksiyonu ile eştir.
```
SELECT UPPER('mysql') # 'MYSQL'
```


KAYNAK: http://www.serkandaglioglu.com/mysql-string-fonksiyonlari
