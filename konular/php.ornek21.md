# PHP Örnek Çalışmaları

## Arduino IDE Web Client ve ESP8266 İle PHP Kullanımı

### veri.txt Dosyasında Oluşacak Örnek İçerik
```
2019-01-20 14:31:05;22.00;67.00
2019-01-20 14:31:08;22.00;67.00
2019-01-20 14:31:12;22.00;66.00
2019-01-20 14:31:15;22.00;66.00
2019-01-20 14:31:18;21.00;65.00
2019-01-20 14:31:21;22.00;67.00
2019-01-20 14:31:24;22.00;67.00
```

### yaz.php Dosyası İçeriği
```PHP
<?php
  $OKUNAN_DEGERLER = sprintf("%s;%s;%s", date('Y-m-d H:i:s'), $_GET['ISI'], $_GET['NEM']);
  file_put_contents('veri.txt', $OKUNAN_DEGERLER, FILE_APPEND);
  echo "TAMAM ".date('Y-m-d H:i:s');
?>
```

### oku.php Dosyası İçeriği
```PHP
<?php
  echo nl2br(file_get_contents('veri.txt'));
?>
```

### web_isi_nem.ino Dosyası İçeriği
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
