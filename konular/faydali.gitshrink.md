# Boyutu Artmış Git Projesini Küçültme

Projede kullanılacak .jpg dosyalarına küçültme yapılmadan (örneğin 800x600) eklenmesi sonucunda proje boyutunuz ciddi biçimde artar. Ayrıca yanlışlıkla .mov gibi bir dosyanın da eklenmesi aynı etkiyi yapar.

Proje geçmişindeki bu dosyalardan kurtulmak için araştırdığımda aşağıdaki çözümleri buldum. Denedim ve çalıştığını test ettim.

### Çözüm 1: git-filter-branch Kullanarak
Bu çözümde geçmişe ait commit kayıtları korunur. Burada yapılan şey şudur: Projede yer alan tüm **.mov** uzantılı dosyalar silinir. Doğrudan dosya adı yazılarak bir silme işlemi yapılması daha az riske girmiş olursunuz.

Bu konudaki çok detaylı açıklamalar için [buraya bakabilirsiniz.](https://stackoverflow.com/a/2158271/134739)

**DİKKAT:** Eğer, projenin son halinde kullanılan **.mov** uzantılı dosya varsa, bu dosyalar da **silinir!**

```BASH
cd ProjeKlasörünüz
git filter-branch --index-filter 'git rm --cached --ignore-unmatch *.mov' -- --all
rm -Rf .git/refs/original
rm -Rf .git/logs/
git gc --aggressive --prune=now
git push -f
```

veya

```BASH
git filter-branch --force --index-filter 'git rm -r --cached --ignore-unmatch *.mov' --prune-empty --tag-name-filter cat -- --all
rm -Rf .git/refs/original
rm -Rf .git/logs/
git gc --aggressive --prune=now
git push -f
```

### Çözüm 2: BFG programını kullanarak

- [BFG Repo Cleaner](https://rtyley.github.io/bfg-repo-cleaner/) çok hızlı, basit kullanımlı ve git-filter-branch komutununa alternatif bir *Depo Temizleyicisidir*. Git deponuzun geçmişine ait istenmeyen dosyaların temizliğinde kullanılır.
- BFG programı bu silme işlemini git-filter-branch komutuna göre 10 ila 720 kat daha hızlı gerçekleştirir.
- BFG programının kurulum bilgileri kendi sitesinde yer almaktadır.
- Aşağıdaki komut, dosya boyutu 100mb'dan fazla olan tüm dosyaları siler. (Son commit'inize ait olan dosyalar hariç)
- Orjinal kod örneği ve kullanım açıklamalarına [BFG sitesinden erişilebilir](https://rtyley.github.io/bfg-repo-cleaner/#usage).
```BASH
git clone --mirror git://example.com/some-big-repo.git
java -jar bfg.jar --strip-blobs-bigger-than 100M some-big-repo.git
cd some-big-repo.git
git reflog expire --expire=now --all && git gc --prune=now --aggressive
git push
```

### Çözüm 3: Büyük dosyaların tespit edilmesi
Yukarıda anlatılan çözümlerde tüm dosyalar için işlem yapmıştı. Eğer, projedeki en büyük dosyalar bilinirse sadece onların silinmesi ile büyük bir yer kazanma durumumuz olabilir. Aşağıdaki komut, git geçmişindeki en büyük boyuta sahip 20 dosyayı listeler.

```BASH
git rev-list --objects --all 
| git cat-file --batch-check='%(objecttype) %(objectname) %(objectsize) %(rest)' 
| awk '/^blob/ {print substr($0,6)}' 
| sort -r --numeric-sort --key=2 
| cut --complement --characters=13-40 
| numfmt --field=2 --to=iec-i --suffix=B --padding=7 --round=nearest 
| head -n 20
```

Büyük dosyaların BLOB ID'sini bulmak için:

```BASH
git verify-pack -v .git/objects/pack/*.idx \
| sort -k 3 -n \
| tail -10
```
