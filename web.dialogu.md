# Web Nasıl Çalışır Dialoğu

## Hadi gidelim!

```Tarayıcı:``` "Tamam, öyleyse, bu adresi isteyen bir kullanıcım var: www.cnn.com. Herhangi bir eğik çizgi karakteri (slash) veya bir şey olmadığından, bu bir ana sayfanın doğrudan bir talebidir. protokol veya bağlantı noktası tanımlanmadı, bu yüzden bunun HTTP olduğunu ve 80 numaralı bağlantı noktasına gideceğini varsayacağım ... Önce ilk şeyler.... Hey DNS, dostum, uyan! Bu www.cnn.com nerede saklanıyor? "

```DNS:``` "Doğru ... bir saniye bekle, ISS sunucularına soracağım. Tamam, 157.166.226.25 gibi görünüyor."

```Tarayıcı:``` "Tamam. Internet Protocol Suite, sıra sizde! 157.166.226.25 numaralı IP'yi arayın, lütfen. Onlara bu HTTP başlığını gönderin. Ana sayfalarının temel yapısını ve içeriğini soruyor, bu yüzden başka ne getireceğimi biliyorum."

```TCP / IP:``` "Benim sıram derken ne demek istiyorsun? Sadece DNS için az önce çalışmadım mı? Tanrım, burada biraz takdir almak için ne gerekiyor? "

```Tarayıcı:``` ...

```TCP / IP:``` "Evet, evet ... Bağlanıyor ... Sadece ağ geçidinden iletmesini isteyeceğim. Biliyorsun, bu kadar kolay değil, Oraya ulaşabilmek için bu talebi parçalara bölmek zorunda kalacağım, böylece hedefe ulaşırlar ve döndürülecek  binlerce paketti toplayıp bir araya getireceğim...."" ah, doğru, umrunda değil.

Bu arada, CNN merkezinde, bir mesaj Web Sunucusunun kapısına kadar ulaşmıştır.

```CNN Web Sunucusu:``` "Evvet! Yeni bir müşteri! Haber istiyor! Ön Sayfa! Ne yapsak?"

```CNN Sunucu Tarafı Komut Dosyası Motoru:``` "Sağ, yapacak! Ön sayfa, değil mi?"

```CNN Veritabanı Sunucusu:``` "Hey! Benim için çalış! Hangi içeriğe ihtiyacın var?"

```CNN Sunucu Tarafı Komut Dosyası Motoru:``` "... Hımm, üzgünüm DB, istenilen sayfanın bir kopyasını önbelleğimde saklıyorum, herhangi bir şey derlemeye gerek yok. Ama bir dakika! bu kullanıcı kimliğini al ve sakla, Bunu müşteriye de göndereceğim, böylece kiminle konuştuğumuzu bileceğim. "

```CNN Veritabanı Sunucusu:``` "Tamam dostum!"

## Kullanıcının bilgisayarına dönersek ...

```TCP / IP:``` "Ooookeeey, işte cevap geliyor. Oh oğlum, bunun büyük bir şey olacağı hissediyorum ..."

```Tarayıcı:``` "Oooo, vaaaay ... burada biraz javascript kodu var ... birçok resim, birkaç form ... Doğru, bu işlem biraz zaman alacak. Hey, IP sistemi, almanız gereken bir sürü şey var ... i.cdn.turner.com adresinden birkaç stil sayfasına ihtiyacım var - HTTP üzerinden ve /cnn/.element/css/2.0 dosyasını istiyorum /common.css. Ve sonra da i.cdn.turner.com'da bu betiklerden bazılarını alın, şimdiye kadar altı tane saydım ... "

```TCP / IP:``` "Resmi aldım. Bana sadece sunucu adreslerini ver, hepsi bu kadar. Ve bu dosyayı HTTP isteği içinde ekle, bununla uğraşmak istemiyorum."

```DNS:``` "i.cdn.turner.com adresini kontrol edin ... hey, önemsiz şeyler, buna cdn.cnn.com.c.footprint.net denir. IP 4.23.41.126"

```Tarayıcı:``` "Elbette, elbette ... bir saniye bekle, bu işlem birkaç nsec alacaktır, tüm bu betiği anlamaya çalışıyorum ..."

```TCP / IP:``` "Hey, işte istediğiniz CSS. Ve ... evet, bu ek komut dosyaları da geri döndü."

```Tarayıcı:``` "bitmedi, dahası var ... bir tür video reklam!"

```TCP / IP:``` "Oooo, kulağa hoş geliyor :) ..."

```Tarayıcı:``` "Her türlü görüntü de var! Ve bu CSS biraz iğrenç görünüyor ... doğru, bu kısım oraya giderse ve bu çizgiyi en üste çıkarsa ... olur, hem de iyi olur ... hayır, bunu yapmak için biraz uzatmak zorunda kalacağım ... Aaaaa, ama diğer CSS dosyaları bu kuralı geçersiz kıldı ... Peki, bu işlemek için kolay bir parça olmayacak, Kesinlikle!"

```TCP / IP:``` "Tamam, tamam, bir saniye beni rahatsız etmeyi bırak, burada yapmam gereken çok şey var."

```Tarayıcı:``` "Kullanıcı, işte size küçük bir ilerleme raporu. Üzgünüm, bu işlem birkaç saniye sürebilir, yüklenecek 140 farklı öğe var ve şimdiye kadar 16 oldu."

## Bir veya iki saniye sonra ...

```TCP / IP:``` "Tamam, hepsi bu kadar olmalı. Hey, dinle ... üzgünüm sana bir anda bir sürü şey gönderdim, orayı idare ediyor musun? Bu senin için de kolay görünmüyor."

```Tarayıcı:``` "Evet, bugünlerde tüm bu web siteleri böyle bir sürü içerik barındırıyor. Bu işler kolay değil, ne yapalım... idare edeceğim. Bunun için buradayım."

```TCP / IP:``` Bunun yorucu bir iş olduğunu kabul ediyorum ... Haset etmeyi bırak DNS!"

```Tarayıcı:``` "Hey kullanıcı! Web sitesi hazır - gel haberi al!"


# Faydalı Linkler

- [Detaylı Anlatım: Web nasıl çalışır?](https://github.com/vasanthk/how-web-works)

- [Tarayıcınıza google.com yazıp enter tuşuna bastığınızda ne olur?](https://github.com/alex/what-happens-when)
