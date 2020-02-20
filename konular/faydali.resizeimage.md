# Resim Dosyası Boyutu Değiştirme

### Yöntem 1

Aktif klasördeki dosyaları `yeni` adlı klasöre yeniden boyutlandırma

```BASH
mkdir yeni
for i in *.jpg; do convert $i -resize 800x600 yeni/$i;done
```
### Yöntem 2
Aktif klasördeki dosyaları yeniden boyutlandırma. **DİKKAT:** Orjinal dosyanın üzerine yazar!

```BASH
mogrify -resize 800x *.jpg
```

### Yöntem 3
Aktif klasör ve altındaki TÜM dosyaları yeniden boyutlandırma

```BASH
find . -name '*.jpg' -execdir mogrify -resize 800x {} \;
```

Resim oranlarının korunması hakkında: https://www.imagemagick.org/Usage/resize/#resize

