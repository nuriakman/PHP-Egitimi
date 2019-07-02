# Mysql Tarih Fonksiyonları 

### ADDDATE(date,INTERVAL expr unit), ADDDATE(expr,days)
DATE_ADD fonksiyonu ile eştir.
```
SELECT DATE_ADD('2008-01-02', INTERVAL 31 DAY) # '2008-02-02'
SELECT ADDDATE('2008-01-02', INTERVAL 31 DAY) # '2008-02-02'
```

### DATE_ADD(date,INTERVAL expr unit)
Bu fonksiyonlar bir tarihten verilen zaman aralığını eklemek veya çıkarmak için kullanılır.
```
SELECT DATE_ADD('2011-12-31 23:59:59', INTERVAL '1:1' MINUTE_SECOND) # '2012-01-01 00:01:00'
SELECT DATE_SUB('2011-01-01 00:00:00', INTERVAL '1 1:1:1' DAY_SECOND) # '2010-12-30 22:58:59'
SELECT DATE_ADD('2011-01-01 00:00:00', INTERVAL '-1 10' DAY_HOUR) # '2010-12-30 14:00:00'
SELECT DATE_SUB('2011-01-02', INTERVAL 31 DAY) # '2010-12-02'
```

### DATE_SUB(date,INTERVAL expr unit)
Ayrıca aşağıdaki gibi de bir tarihe çıkarma yapabiliriz.
```
SELECT '2011-12-31 23:59:59' + INTERVAL 1 SECOND # '2012-01-01 00:00:00'
SELECT INTERVAL 1 DAY + '2008-12-31' # '2009-01-01'
SELECT '2011-01-01' - INTERVAL 1 SECOND # '2010-12-31 23:59:59'
```

### ADDTIME(expr1,expr2)
Ayrıca aşağıdaki gibi de bir tarihe ekleme yapabiliriz.
```
SELECT ADDTIME('2007-12-20 23:59:59.999999', '1 1:1:1.000002') # '2007-12-22 01:01:01.000001'
SELECT ADDTIME('01:00:00.999999', '02:00:00.999998') # '03:00:01.999997'
```

### CURDATE()
Şuanki tarihi 'YYYY-MM-DD' formatında döndürür. CURRENT_DATE() ve CURRENT_DATE fonksiyonları bu fonksiyon ile eştir.
```
SELECT CURDATE() # '2011-07-23'
SELECT CURDATE() + 1 # '20110724'
```

### CURTIME()
O anki saati döndürür. CURRENT_TIME ve CURRENT_TIME() , CURTIME() ile eştir.
```
SELECT CURTIME() # '18:41:06'
SELECT CURTIME() + 0 # '184106.000000'
```

### DATE_FORMAT(date,format)
Bir tarihi verilen format dizgesine göre formatlar.
```
SELECT DATE_FORMAT('2009-10-04 22:23:00', '%W %M %Y') # 'Sunday October 2009'
SELECT DATE_FORMAT('2007-10-04 22:23:00', '%H:%i:%s') # '22:23:00'
SELECT DATE_FORMAT('1997-10-04 22:23:00','%H %k %I %r %T %S %w') # '22 22 10 10:23:00 PM 22:23:00 00 6'
```

### DATE(expr)
Örneğin saat bilgisininde olduğu bir tarihten sadece tarih bilgisini almak istediğimizde bu fonksiyonu kullanıyoruz
```
SELECT DATE('2003-12-31 01:02:03') # '2003-12-31'
```

### DATEDIFF(expr1,expr2)
İki tarih arasındaki gün farkını verir.
```
SELECT DATEDIFF('2011-07-24 12:00','2011-05-16') # '69'
```

### DAYNAME(date)
Tarihin gün ismini döndürür.
```
SELECT DAYNAME('2011-07-24') # 'Saturday'
```
Eğer gün isminin türkçe görünmesini istiyorsanız sorguyu aşağıdaki gibi yapmalısınız.
```
SET lc_time_names = 'tr_TR';
SELECT DAYNAME('2011-07-24'); # 'Pazar'
```
Bu tür işlemlerde dil kontrolü için bakınız: https://dev.mysql.com/doc/refman/5.6/en/locale-support.html

### DAYOFWEEK(date)
Tarihin haftanın kaçıncı günü olduğu değerini verir. Haftanın birinci günü pazar olacak şekildedir. Aşağıdaki sorgumuzda tarih çarşamba günü olduğu için bize 4 değerini verecektir.
```
SELECT DAYOFWEEK('2011-07-27') # '4'
```

### DAYOFMONTH(date)
Tarihin ayın kaçıncı günü olduğu değeri döndürür. DAY(date) fonksiyonu bu fonksiyon ile eştir.
```
SELECT DAYOFMONTH('2011-07-03')  # '3' 
```

### DAYOFYEAR(date)
Tarihin yılın kaçıncı günü olduğu değerini döndürür.
```
SELECT DAYOFYEAR('2011-07-24') # '205'
```

### EXTRACT(unit FROM date)
Bu fonksiyon ile bir tarihin herhangi bir parçasını alabiliriz.
```
SELECT EXTRACT(YEAR FROM '2009-07-02') # 2009
SELECT EXTRACT(YEAR_MONTH FROM '2009-07-02 01:02:03') # 200907
SELECT EXTRACT(DAY_MINUTE FROM '2009-07-02 01:02:03') # 20102
SELECT EXTRACT(MICROSECOND FROM '2003-01-02 10:30:00.000123') # 123
```

### FROM_DAYS(N)
Gün sayısına ait tarihi verir.
```
SELECT FROM_DAYS(730669) # '2000-07-03'
```

### FROM_UNIXTIME(unix_timestamp), FROM_UNIXTIME(unix_timestamp,format)
Bir unix_timestamp değerinden tarih değerini 'YYYY-MM-DD HH:MM:SS' veya YYYYMMDDHHMMSS.uuuuuu formatında verir.
```
SELECT FROM_UNIXTIME(1196440219) # '2007-11-30 18:30:19'
```
Ayrıca dönen tarihi formatlamak istersek ikinci argüman olarak format gönderilir.
```
SELECT FROM_UNIXTIME(UNIX_TIMESTAMP(), '%Y %D %M %h:%i:%s %x') # '2011 25th Temmuz 06:53:15 2011'
```

### GET_FORMAT({DATE|TIME|DATETIME}, {'EUR'|'USA'|'JIS'|'ISO'|'INTERNAL'})
Bu fonksiyon DATE_FORMAT() ve STR_TO_DATE() fonksiyonları ile beraber kullanılabilir.
```
SELECT DATE_FORMAT('2003-10-03',GET_FORMAT(DATE,'EUR')) # '03.10.2003'
SELECT STR_TO_DATE('10.31.2003',GET_FORMAT(DATE,'USA')) # '2003-10-31'
```

### HOUR(time)
Bir zamanın saat bilgisini döndürür.
```
SELECT OUR('10:05:03') # '10'
```

### LAST_DAY(date)
Bir tarihin gün değerini o ayın son gününün değeri ile değiştirip döndürür. Şöyleki tarihimiz  '2011-08-04' olsun. Bu tarihin son günü 31'dir ve fonksiyon bize '2011-08-31' değerini verecektir.
```
SELECT LAST_DAY('2011-08-04') # '2011-08-31'
```

### MAKEDATE(year,dayofyear)
Argüman olarak gönderilen yıl ve gün bilgisine göre yılın o gününe denk gelen tarihi döndürür.
```
SELECT MAKEDATE(2014,365) # '2014-12-31'
SELECT MAKEDATE(2011,188) # '2011-07-07'
```

### MAKETIME(hour,minute,second)
Argüman olarak gönderilen saat, dakika, saniye değerlerinden hesaplanan zamanı döndürür.
```
SELECT MAKETIME(12,15,30) # '12:15:30'
```

### MICROSECOND(expr)
Bir zamana ait mikrosaniye bilgisini döndürür.
```
SELECT MICROSECOND('12:00:00.123456') # '123456'
```

### MINUTE(time)
Bir zamana ait dakika bilgisini döndürür.
```
SELECT MINUTE('2008-02-03 10:05:03') # '5'
```

### MONTH(date)
Bir tarihe ait ay bilgisini döndürür.
```
SELECT MONTH('2011-02-03') # '2'
```

### MONTHNAME(date)
Bir tarihe ait ayın ismini döndürür.
```
SELECT MONTHNAME('2008-02-03') # 'Şubat'
```

### NOW()
Şuanki tarihi 'YYYY-MM-DD HH:MM:SS' formatında verir.
```
SELECT NOW() # '2011-08-04 09:46:13'
LOCALTIME, LOCALTIME(), LOCALTIMESTAMP, LOCALTIMESTAMP()
NOW() fonksiyonu ile eşlerdir.
```

### PERIOD_ADD(P,N)
P periyoduna N kadar ay ekler. P periyodu YYMM veya YYYYMM formatında olmalıdır. Ay eklenmiş tarihi YYYYMM formatında döndürür.
```
SELECT PERIOD_ADD(200801,2) # '200803'
```

### PERIOD_DIFF(P1,P2)
İki periyod arasındaki ay farkını verir
```
SELECT PERIOD_DIFF(200802,200703) # '11'
```

### SECOND(time)
Bir zamana ait saniye bilgisini döndürür.
```
SELECT SECOND('10:05:03') # '3'
```

### SEC_TO_TIME(seconds)
Argüman olarak verilen saniyeyi time olarak döndürür.
```
SELECT SEC_TO_TIME(2378) # '00:39:38'
```

### STR_TO_DATE(str,format)
DATE_FORMAT() fonksiyonun tersidir. Argüman tarihe dönüştürülecek olan string ve bu stringin formatını alır ve bu stringi tarih olarak döndürür. Verilen format string ile uyuşmazsa geriye NULL döndürür.
```
SELECT STR_TO_DATE('May 1, 2013','%M %d,%Y') # '2013-05-01'
```

### SUBDATE()
Tarihten gün çıkarma yapar
```
SELECT SUBDATE("2017-06-15", INTERVAL 10 DAY);  # 2017-06-05
```

### SUBTIME(expr1,expr2)
İki zaman arasındaki farkı zaman türünden döndürür.
```
SELECT SUBTIME('01:00:00.999999', '02:00:00.999998') # '-00:59:59.999999'
```

### SYSDATE()
Şuanki zamanı YYYY-MM-DD HH:MM:SS formatında verir. NOW() fonksiyonu ile benzerdir. Arasındaki farkı açıklamaya çalışalım. SYSDATE() fonksiyonu sorgunun çalıştırıldığı zamanı döndürürken, NOW() fonksiyonu sorgunun başladığı ana ait zamanı verir. Örneğin sorgumuzda SLEEP() fonkisyonu ile 2 saniye sorguyu bekletelim. Sorgu sonucunda bu iki fonksiyonun döndürdüğü zamanlara bakalım.
```
SELECT SLEEP(2), NOW(), SYSDATE()   # Bu sorguda NOW() bize '2011-08-05 22:36:07' değerini döndürürken, SYSDATE() ise '2011-08-05 22:36:09' değerini döndürür.
```

### TIME(expr)
Bir datetime tipindeki değerin time kısmını döndürür.
```
SELECT TIME('2003-12-31 01:02:03') # '01:02:03'
```

### TIMEDIFF(expr1,expr2)
İki zaman arasındaki farkı saat olarak verir.
```
SELECT TIMEDIFF('2008-12-31 23:59:59.000001','2008-12-30 01:01:01.000002') # '46:58:57.999999'
```

### TIMESTAMP(expr), TIMESTAMP(expr1,expr2)
Date veya datetime tipindeki veriyi datetime tipinde döndürür.
```
SELECT TIMESTAMP('2003-12-31') # '2003-12-31 00:00:00'
```
İkinci argüman olarak bir time tipinde değer gönderilirse bunu ilk argümana ekler ve geri döndürür.
```
SELECT TIMESTAMP('2003-12-10 14:00:00','13:00:00') # '2003-12-11 03:00:00'
```

### TIMESTAMPADD(unit,interval,datetime_expr)
Bir date veya datetime tipindeki değere bir zaman dilimi ekler. İlk argüman saniye mi, dakika mı gibi eklenecek değerin türü, ikinci argüman ise eklenecek değer, üçüncü argüman ise eklenecek date veya datetime tipinde değerdir.

İlk argümanın alabileceği değerler :

MICROSECOND (microseconds), SECOND, MINUTE, HOUR, DAY, WEEK, MONTH, QUARTER, veya YEAR

```
SELECT TIMESTAMPADD(MINUTE,1,'2003-01-02') # '2003-01-02 00:01:00'
SELECT TIMESTAMPADD(WEEK,1,'2003-01-02') # '2003-01-09'
```

### TIMESTAMPDIFF(unit,datetime_expr1,datetime_expr2)

İki zaman arasındaki farkı verir.
```
SELECT TIMESTAMPDIFF(YEAR,'2002-05-01','2001-01-01') # iki zaman arasındaki yıl farkını alıyoruz. Sonuç = '-1' # İki zaman arasındaki dakika farkını alalım. Sonuç = '128885'
SELECT TIMESTAMPDIFF(MINUTE,'2003-02-01','2003-05-01 12:05:55')
```

### TIME_FORMAT(time,format)
Kullanımı DATE_FORMAT() fonksiyonu ile benzerdir. Fakat sadece saat ile ile ilgili formatı kabul eder.
```
SELECT TIME_FORMAT('100:00:00', '%H %k %h %I %l') # '100 100 04 04 4'
```

### TIME_TO_SEC(time)
time tipindeki değeri saniye cinsinden karşılığını döndürür.
```
SELECT TIME_TO_SEC('22:23:00') # '80580'
```

### TO_DAYS(date)
Sıfırıncı yıldan (milattan) verilen zamana kadar geçen gün sayısını döndürür.
```
SELECT TO_DAYS('2007-10-07') # '733321'
```

### TO_SECONDS(expr)
Sıfırıncı yıldan (milattan) verilen zamana kadarki geçen saniyeyi döndürür.
```
SELECT TO_SECONDS('2009-11-29') # '63426672000'
```

### UNIX_TIMESTAMP(), UNIX_TIMESTAMP(date)

'1970-01-01 00:00:00' tarihinden argüman olarak gönderilen tarihe kadar geçen saniyeyi döndürür. Eğer argüman gönderilmeden çağırılırsa '1970-01-01 00:00:00' tarihinden şuana kadar geçen saniyeyi döndürür.
```
SELECT UNIX_TIMESTAMP('2007-11-30 10:30:19') # '1196411419'
```

### UTC_DATE, UTC_TIME()
Şuanki UTC zamanını 'YYYY-MM-DD' formatında döndürür.

```
SELECT UTC_DATE() # '2011-08-05'
```

### UTC_TIME, UTC_TIME()
Şuanki UTC zamanını 'HH:MM:SS' formatında döndürür.
```
SELECT UTC_TIME() # '20:26:41'
```

### UTC_TIMESTAMP, UTC_TIMESTAMP()
Şuanki UTC zamanını 'YYYY-MM-DD HH:MM:SS' formatında döndürür.
```
SELECT UTC_TIMESTAMP() # '2011-08-05 20:27:41'
```

### WEEK(date[,mode])
Bir tarihe ait hafta sayısını döndürür. İsterseniz ikinci argüman ile haftanın başlangıç gününü Pazar veya Pazartesi olarak değiştirebilirsiniz.
```
SELECT WEEK('2008-02-20') # '7'
SELECT WEEK('2008-02-20',1) # '8'
```

### WEEKDAY(date)
Bir tarihin haftanın kaçıncı günü olduğu bilgisini döndürür
```
SELECT WEEKDAY('2008-02-03 22:23:00') # '6'
```

### WEEKOFYEAR(date)
Bir tarihin yılın kaçıncı haftası olduğu bilgisini döndürür. Bu fonksiyon yerine WEEK(date,3) şeklinde kullandığımız zaman aynı sonucu alırız.
```
SELECT WEEKOFYEAR('2008-02-20') # '8'
```

### YEAR(date)
Bir tarihin yıl bilgisini döndürür.
```
SELECT YEAR('1987-01-01') # '1987'
```

