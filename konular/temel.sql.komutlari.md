# MySQL ve PHP Notları

## SQL Komutlarının Bazıları
### Veritabanına yeni bir satır eklemek için `INSERT INTO` komutunu kullanılır.
Örnekte telefon_kodları tablosunda sehir_adı ve telefon_kodu sütununa şehir adı sütununa ankara ve telefon kodu sütununa 312 değerlerini ekler.

```SQL
INSERT INTO telefon_kodlari (sehir_adi, telefon_kodu) VALUES ('ankara', '312')
```
veya
```SQL
INSERT INTO telefon_kodlari SET sehir_adi='Ankara', telefon_kodu='312'
```


### Veritabanından silme işlemi yapmak için `DELETE` komutu kullanılır.
Örnekte ID numarası 83 olan satırı telefon_kodlari tablosundan siler.
```SQL
DELETE FROM telefon_kodlari WHERE id=83
```

### LIKE % kullanımı
İçerisinde "an" ifadesi geçen bütün şehirleri listeler.
 ```SQL
 SELECT * FROM sehirler WHERE sehir_adi LIKE '%an%'
 ```

### Hatırlamadığınız harfler için _ karakteri (Joker) kullanılabilir
 ```SQL
 SELECT * FROM sehirler WHERE sehir_adi LIKE '%an__a%'
 ```

### DISTINCT dediğimiz için arabalar tablosunda yakit sütunundaki her yakıt türünden birer tane seçerek gösterir.

```SQL
SELECT DISTINCT yakit FROM arabalar
```

### GROUP BY diyerek sıraladığımız zaman aynı veritabanında tekrar eden satırları bize göstermez.
```SQL
SELECT kelime1, kelime2
FROM esanlam
GROUP BY kelime1, kelime2
```

### Veritabanında tekrar eden satırları bulmak için `COUNT(*)>1` kullanılır.
```SQL
SELECT kelime1, kelime2
FROM esanlam
GROUP BY kelime1, kelime2
HAVING COUNT(*) > 1
```

### Çift olan kayıtların bilgisinin çekilmesi max(id) ya da min(id) bakarak seçilebilir.
```SQL
SELECT MAX(id) as id
FROM esanlam
GROUP BY kelime1, kelime2
HAVING COUNT(*) > 1
```

### Çift kayıtların silinmesi
```SQL
DELETE FROM esanlam
 WHERE id IN(
   SELECT * FROM (
    SELECT MAX(id) AS id FROM esanlam
    GROUP BY kelime1, kelime2
    HAVING COUNT(*) > 1 )
   AS SILINECEKLER )
```
