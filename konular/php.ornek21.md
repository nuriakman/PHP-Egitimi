# PHP Örnek Çalışmaları

## Arduino IDE Web Client ve ESP8266 İle PHP Kullanımı

### ```veri.txt``` Dosyasında Oluşacak Örnek İçerik
```
2019-01-20 14:31:05;22.00;67.00
2019-01-20 14:31:08;22.00;67.00
2019-01-20 14:31:12;22.00;66.00
2019-01-20 14:31:15;22.00;66.00
2019-01-20 14:31:18;21.00;65.00
2019-01-20 14:31:21;22.00;67.00
2019-01-20 14:31:24;22.00;67.00
```

###  ```yaz.php``` Dosyası İçeriği
```PHP
<?php
  $OKUNAN_DEGERLER = sprintf("%s;%s;%s", date('Y-m-d H:i:s'), $_GET['ISI'], $_GET['NEM']);
  file_put_contents('veri.txt', $OKUNAN_DEGERLER, FILE_APPEND);
  echo "TAMAM ".date('Y-m-d H:i:s');
?>
```

###  ```oku.php``` Dosyası İçeriği
```PHP
<?php
  echo nl2br(file_get_contents('veri.txt'));
?>
```

### ```web_isi_nem.ino``` Dosyası İçeriği
```CPP
#include <DHTesp.h>
#include <Arduino.h>
#include <string>
#include <ESP8266WiFi.h>
#include <ESP8266WiFiMulti.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClient.h>

DHTesp dht;
ESP8266WiFiMulti WiFiMulti;

void setup() {

  Serial.begin(115200);
  // Serial.setDebugOutput(true);

  Serial.println();
  Serial.println();
  Serial.println();

  Serial.println("Durum\tNem (%)\tSicaklik (C)\t(F)\tSicaklik indexi (C)\t(F)");
  String thisBoard= ARDUINO_BOARD;
  Serial.println(thisBoard);
  dht.setup(2, DHTesp::DHT11); // DHT sensorunu D4 nolu pine bağlıyoruz. Ve Sensör tipini DHT11 olarak seçiyoruz.

  for (uint8_t t = 4; t > 0; t--) {
    Serial.printf("[SETUP] WAIT %d...\n", t);
    Serial.flush();
    delay(1000);
  }

  WiFi.mode(WIFI_STA);
  WiFiMulti.addAP("babaminyeri", "FatmaBeyza2019");

}

void loop() {

  delay(dht.getMinimumSamplingPeriod());

  float humidity = dht.getHumidity();
  float temperature = dht.getTemperature();


  // wait for WiFi connection
  if ((WiFiMulti.run() == WL_CONNECTED)) {

    WiFiClient client;

    HTTPClient http;

    Serial.print("[HTTP] begin...\n");
    if (http.begin(client, "http://192.168.1.40/ESP8266/yaz.php?ISI=" + String(temperature) + "&NEM=" + String(humidity))) {  // HTTP


      Serial.print("[HTTP] GET...\n");
      // start connection and send HTTP header
      int httpCode = http.GET();

      // httpCode will be negative on error
      if (httpCode > 0) {
        // HTTP header has been send and Server response header has been handled
        Serial.printf("[HTTP] GET... code: %d\n", httpCode);

        // file found at server
        if (httpCode == HTTP_CODE_OK || httpCode == HTTP_CODE_MOVED_PERMANENTLY) {
          String payload = http.getString();
          Serial.println(payload);
        }
      } else {
        Serial.printf("[HTTP] GET... failed, error: %s\n", http.errorToString(httpCode).c_str());
      }

      http.end();
    } else {
      Serial.printf("[HTTP} Unable to connect\n");
    }
  }

  delay(2150);
}
```




## Örnek Görseller (Görseller bu projeye ait DEĞİLDİR)

![Arduino IDE ESP8266 Board Ekleme](https://robotzero.one/wp-content/uploads/2017/12/select-nodemcu.jpg)

![Devre Çizimi](https://thingsboard.io/images/samples/arduino/temperature/schema.png)

![Devre Çizimi](https://1.bp.blogspot.com/-QhFx2u8QthI/Vr14JYEav3I/AAAAAAAAAyc/tB8zOsV397A/s1600/dsb180_bb.jpg)




# Arduino Öğrenmek İsteyenlere Youtube Video Listeleri

## [Arduino Dersleri](https://www.youtube.com/playlist?list=PLSuhOGv534vS1MNrvdFhBovGIbofssf9r)

Arduino dersleri ve arduino projeleri kapsamındaki online eğitim seti ile arduino kodlama ve proje geliştirmeyi öğreneceksiniz. Arduino ve kodları öğrenmek isteyenler için hazırlanan bu eğitim serisinde yalnızca arduino projelerinin videolarını izlemeyeceksiniz. Hayalinizdeki fikirleri projelere dönüştürmek için gerekli bilgi seviyesine ulaşacaksınız.

Arduino ve gerekli bileşenleri satın alma imkanı bulunmayan, ancak arduino öğrenmek isteyenler için simülasyon üzerinden de anlatım gerçekleştireceğiz. Böylece daha büyük bir kitleye Arduino kodlama öğreteceğiz.

Arduino dersleri oynatma listesi aşağıdaki konularda eğitim videoları içermektedir. Oynatma listesinin ilk videosu ile Arduino nedir? Arduino ne işe yarar? sorularına yanıt arayacağız. Arduino hakkında bilgi verdikten sonra Arduino Uno, Arduino Mega, Arduino Nano ve Arduino Esplora başta olmak üzere Arduino modellerini inceleyeceğiz. Daha sonra bu arduino modelleri ile birlikte kullanılacak sensörler konusunda bilgi paylaşımında bulunacağız. Arduino ürünleri ile yapılabilecek projeler hakkında bilgi vereceğiz.

Daha sonra orijinal Arduino Uno ile Klon Arduino Uno arasındaki farkları, avantaj ve dezavantajları inceleyeceğiz. Böylece orijinal arduino nasıl anlaşılır öğreneceğiz. Oynatma listesinde kullanılacak materyallerle ilgili Arduino başlangıç seti yani arduino malzeme listesi hazırlayacağız.

Arduino projeleri üzerinde çalışırken arduino kartına nasıl usb, pil veya vin girişi ile güç verilir anlatacağız. Temel Elektronik ve Ölçme bilgisine sahip olmayanlar için temel devre elemanları ve kullanımlarından bahsedeceğiz. Bu kapsamda devre nedir? Direnç renk kodu nasıl hesaplanır? sorularına yanıt arayacağız. Sokakta Sayamam Gibi ifadesinden yola çıkarak ve gerekli metodu öğrenerek dirençlerin renk kodlarını kolaylıkla okuyabileceğiz. Daha sonra breadboard üzerine devre kurmayı öğreteceğiz. Fritzing programı yardımı ile devre şemasına breadboard üzerine kolaylıkla oluşturabileceğiz. Böylece elektrik devreleri ve arduino uygulamaları sayesinde projelerimizi kolaylıkla hayata geçirebileceğiz.

Yukarıda bahsi geçen temel bilgileri verdikten sonra Arduino Uno R3 modeli üzerindeki tüm detayları inceleyeceğiz. Bu kapsamda Arduino giriş ve çıkış pinlerinden tüm detayları ile bahsedeceğiz. Digital ve analog giriş çıkış nedir? IOREF nedir? ISCP Nedir? AREF Nedir? SDA SCL Nedir? gibi soruların yanıtlarını vereceğiz. Bir Arduino modeline ve bileşenlerine sahip olmayanlar için Tinkercad uygulaması üzerinden devre kurma, simülasyon ve kodlama işlemlerini anlatacağız. Tinkercad uygulaması sayesinde fiziksel ortam yerine sanal ortamda projelerimizi hayata geçirebileceğiz. Tinkercad yazılımını kullanarak Arduino öğrenme süreçlerini sanal ortamda uygulama imkanı bulacağız.

Daha sonra Arduino için gerekli kütüphaneleri ve kullanımlarını inceleyeceğiz. Yüklü olmayan kütüphanelerin kurulumunu anlattıktan sonra temel arduino fonksiyonlarını anlatacağız. Temel arduino kodları ve anlamlarını öğrendikten sonra arduino kod örnekleri geliştireceğiz. Arduino kodlama bir başka deyişle arduino programlama dersleri kapsamında Programlama Temelleri eğitimleri vereceğiz. Bu kapsamda değişkenler ve veri tipleri, sabitler, if else yapısı, if else if merdiven yapısı, switch case yapısı, for döngüsü, while döngüsü, do while döngüsü konularını anlatacağız.

Ardından diziler ve metotlar gibi programlamanın temel yapı taşı olan konuları anlatacağız. Arduino bluetooth, wireless ve kızılötesi haberşeşme yöntemlerini kullanarak kablosuz uygulamalar geliştireceğiz. Arduino otopark projesi, engelden kaçan robot, akıllı ev otomasyonu, uzaktan kumandalı sistemler üzerinde çalışmalar yapacağız. Arduino ile 7 segment display, 16x2 lcd ekran ve Nokia 5110 ekranları gibi kullanıcı bilgilendirme ekranlarını kullanacağız. Hobi elektronik devreleri ile ilgilenen her yaştaki bireyler bu online eğitim serisinden faydalanacaktır. Basit projelerin yanında eğitimin ilerleyen kısımlarında Arduino Robot Uygulamaları konusunda kapsamlı projeler geliştireceğiz. Arduino ders videolarını izlerken anlaşılmayan hususları yorum satırlarında yazanlara aynı gün içerisinde geri dönüş yapmaya çalışacağız.

## [Evde Elektroniğe Giriş Bölümleri](https://www.youtube.com/playlist?list=PLsH-EmuhVHnaKtNXg_jQ3zgN8BIg6HFYZ)

Bu listedeki bölümler elektroniğe sıfırdan başlamak isteyen herkesin ihtiyaç duyacağı temel bilgileri içermektedir. Kullanılacak alet ve parçaların tanıtımı, fiyat bilgisi ile başlayan anlatımlarım her bir elektronik devre elemanının kullanımı ve özellikleri ile ilgili bilgilerle devam etmektedir. Devre elemanları yanında ARDUINO ve güç modülleri de (Adaptör, Buck - Boost Converter) yine bu listede inceleniyor. İyi seyirler...
