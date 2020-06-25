# SQLi (SQL Injection Zaafiyeti)

Saldırganlar, uygulama güvenlik önlemlerini atlatmak için SQL Injection açığından faydalanabilir. SQL Injection (SQLi), en basit anlatımıyla bilgi ifşasına sebep olacak SQL ifadelerinin yürütülmesini mümkün kılan bir saldırı türüdür. Zararlı SQL sorgularını çalıştırdıktan sonra saldırgan, bir web sayfasında ya da web uygulamasında yetkili kullanıcı gibi işlemler yapabilir veya veritabanı içeriğini alabilir. Ayrıca veritabanına kayıt ekleyebilir, değiştirebilir veya silebilir. SQL Injection zafiyeti, MySQL, Oracle, SQL Server veya diğerleri gibi SQL veritabanı kullanan herhangi bir web sitesi veya web uygulamasını etkileyebilir. Saldırgan, hassas verilerinize yetkisiz erişim sağlayabilir. Başarılı SQL Injection saldırısı müşteri bilgileri, kişisel veriler, ticari sırlar, fikri mülkiyet gibi hassas bilgilerin ifşalarına sebep olur. SQL Injection saldırıları en eski, en yaygın ve en tehlikeli web uygulaması güvenlik açıklarından biridir. OWASP Top 10 2017’de Injection saldırıları listede 1 numaradadır. Saldırganın veritabanına erişebilmesini ya da sistemde değişiklik yapabilmesini kolaylaştıran çeşitli açık kaynak araçlar vardır. Geliştiricilerin, uygulamada SQL sorguları yazmak için güvenli kodlama adımlarını izleyerek bu zafiyetten kaçınabilirler.

**Örnek**
http://sunucuadi.com/index.php?modul=uyelik&islem=kontrol&uyeno=123 parametresi aşağıdaki payload kullanılarak istismar dilebilir olup ilgili veritabanı kullanıcısı ile komut çalıştırılarak ilgili kullanıcının yetkili olduğu tüm veritabanı kayıtlarına erişilebilir:

`http://sunucuadi.com/index.php?modul=uyelik&islem=kontrol&uyeno=(SELECT 7282 FROM (SELECT(SLEEP(14)))TMP)`

## SQL Injection’ın iki ana nedeni vardır.
- Sorgu oluşturmadan önce girişin doğrulanamaması
- Kullanıcının girdisinin dinamik sorgulara dahil edilmesi

## SQLi Nasıl Engellenebilir?

### 1. Girdi doğrulaması

İki şekilde mümkündür. 

- White List: Uygulama liste dışındaki karakter girdilerine izin vermemelidir.
- Black List: Başarı oranı düşüktür. Listeye alınmış olan karakterleri kabul etmeyecek.

### 2. Parametreli Sorgu (PHO PDO)

Parametreli sorgular, WHERE, INSERT, UPDATE ifadesindeki değerler de dahil olmak üzere, sorgu içinde herhangi bir noktada güvenilmeyen girdi olarak görülen her yerde kullanılabilir. Tablo, sutün adları veya ORDER BY gibi girdilerde güvenilmeyen girdiyi engellemek için kullanılamazlar. Parametreli sorgularla engelletilemeyen durumlar için white-list veya başka yöntemler kullanılmalıdır. Parametreli sorgular için, sorguda kullanılan dize her zaman sabit olmalı ve hiçbir zaman herhangi bir kaynaktan değişken veri içermemelidir.

SQLi Açığı İçeren Kod:
```
$insert = mysql_query("INSERT INTO uyeler SET
uye_kadi  = 'Kemal',
uye_sifre = '123456',
uye_eposta = 'kemal@gmail.com'");
if ( $insert ){
     $last_id = mysql_insert_id();
     echo "insert işlemi başarılı!";
}
```

SQLi İçermeyen GÜVENLİ Kod:
```
$query = $db->prepare("INSERT INTO uyeler SET
uye_kadi = ?,
uye_sifre = ?,
uye_eposta = ?");
$insert = $query->execute(array(
     "Kemal", "123456", "kemal@gmail.com"
));
if ( $insert ){
    $last_id = $db->lastInsertId();
    echo "insert işlemi başarılı!";
}
```

### 3. “least privilege” Kuralı

Uygulama, veritabanı kullanıcısının, yükseltilmiş ayrıcalıklar gerektiren sorgular çalıştırmasını önler. Sonuç olarak SQL Injection saldırısından daha az zarar görülmüş olur. Örneğin kullanıcının sadece okuma yetkisi varsa, bu kullanıcı hesabıyla veritabanında değişiklik yapılamaz.

### 4. Ek Güvenlik Seviyeleri
WAF gibi çözümler, SQL Injection saldırısına karşı ek olarak koruma önlemi olabilir. WAF’lar trafiği uygulama düzeyinde inceler ve bunun kötü olup olmadığını belirleyebilir. WAF için güncelleme, bakım gereklidir, aksi takdirde güncellenmemiş sistemler için saldırganlar atlatma yolunu bulabilir.

## Kaynaklar
- http://unixwiz.net/techtips/sql-injection.html
- https://securiteam.com/securityreviews/5DP0N1P76E
- https://www.owasp.org/index.php/SQL_Injection
- http://projects.webappsec.org/w/page/13246963/SQL%20Injection
- https://www.w3schools.com/sql/sql_injection.asp
- https://portswigger.net/web-security/sql-injection
