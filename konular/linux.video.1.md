# Linux Komut Satırı Yardımı İle Veri Toplama
Bu sunum sırasında bir siteden döviz kurlarını çekme örneği, bir sitedeki bazı fotoğrafların indirilmesi örneği, bir eticaret sitesinden bazı ürün fiyatlarının çekilmesi örnekleri yapıldı.

Video: [Linux Komut Satırı Yardımı İle Veri Toplama](https://www.youtube.com/watch?v=Y6YPNln3E70)

## Öğrendiğimiz Komutlar

Komut | Açıklama
---|---
`mkdir` | Klasör oluşturur
`cd` | Klasör değiştirir
`ls` | Klasördeki dosyaları listeler
`mv` | Dosyaları başka bir hedefe taşır. Dosya adı değiştirmek için de kullanılır
`wget` | Bir internet sayfasının kaynak kodunu indirir. Dosya ise, dosyayı indirir
`cat` | Dosya içeriğini ekrana gösterir
`grep` | Dosya içinden istediğimiz satırları süzer
`sed` | Dosya içinden istediğimiz ifadeyi bir diğer ifade ile değiştirir
`wc` | Dosyanın satır, kelime ve harf sayısını verir
`tr` | Karakter silme veya değiştirme işini yapar
`head` | Dosyanın sadece ilk N satırının alınmasını sağlar
`cut` | Dosya içeriğini belirli ayıraçlara göre böler ve istenilen sutunları alır
`rm` | Dosya siler
`paste` | Birden fazla dosyayı YAN YANA birlştirip tek dosya yapar
`crontab` | Sistemin belirli zamanlarda belirli komutları çalıştırmasını sağlar
`seq` | İstenilen aralıkta sayı üretir
`xargs` | Bir önceki komutun her bir çıktısını almak ve kullanmak işlevini görür


## ÖRNEK 1; Döviz Kurlarını çekme
```bash
wget -O kur.txt https://kur.doviz.com/serbest-piyasa
cat kur.txt | tr -d '\r' | tr -d '\n' |  sed "s|</table>|\n\n|g" | sed "s/<tr/\n\n<tr/g" | grep "time" | sed -e 's/<[^>]*>/\t/g' | tr -s ' ' | cut -f 6,9,11,19 | tr '\t' ';' > sonuc.txt
```

## ÖRNEK 2; eTicaret Sitesinden ürün adı ve fiyatlarını çekme
```bash
wget -O 1.txt https://www.migros.com.tr/ariel-b-35f/camasir-yikama-c-86
cat 1.txt | grep "data-product-name" | grep "product-card" | sed $'s/data-product-name/\\\nXXX/g'  | grep "XXX" | cut -d \" -f 2 > AD.txt
cat 1.txt | grep "data-monitor-name" | grep "product-card" | sed $'s/data-monitor-price/\\\nXXX/g' | grep "XXX" | cut -d \" -f 2 > FIYAT.txt
paste FIYAT.txt AD.txt
```

## ÖRNEK 3; Duvarkağıdı sitesinden resim indirme
```bash
wget -O 1.txt https://www.hdwallpapers.in/flowers-desktop-wallpapers/page/1
cat 1.txt | grep "t1.jpg" | cut -d \" -f 2 | sed "s|/thumbs|https://www.hdwallpapers.in/thumbs|g" | sed "s/t1.jpg/t2.jpg/g" > resimler.txt
wget -i resimler.txt
```

## ÖRNEK 4; Duvarkağıdı sitesinden resim indirme (Paralel Görev)
33 Sayfadaki resimlerin 15 koldan paralel zamanlı çalışma ile indirilmesi örneği
```bash
seq 1 33 | xargs -P 15 -I{} wget -q -O {}.html https://www.hdwallpapers.in/flowers-desktop-wallpapers/page/{}
cat *.html > TOPLU.txt
cat TOPLU.txt | grep "t1.jpg" | cut -d \" -f 2 | sed "s|/thumbs|https://www.hdwallpapers.in/thumbs|g" | sed "s/t1.jpg/t2.jpg/g" > resimler.txt
cat resimler.txt | xargs -P 15 -I{} wget -q {}
```
