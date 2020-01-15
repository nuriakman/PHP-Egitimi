# Bower - Npm - WebPack

## UBUNTU'da nodejs ve npm Kurulumu

- https://nodejs.org/en/download/ sayfasından "Linux Binaries (x64)" dosyasını indir. Aşağıdaki adımları uygula:
```BASH
VERSION=v12.14.1
DISTRO=linux-x64
sudo mkdir -p /usr/local/lib/nodejs
sudo tar -xJvf node-$VERSION-$DISTRO.tar.xz -C /usr/local/lib/nodejs 
cd
mkdir npm-global
```
- `~/.profile` dosyasının sonuna şu satırları ekle
```
# Nodejs
VERSION=v12.14.1
DISTRO=linux-x64
export PATH=/usr/local/lib/nodejs/node-$VERSION-$DISTRO/bin:$PATH
export PATH=/home/$USER/npm-global/bin:$PATH
export npm_config_loglevel=silent
```
- Profil dosyasını tekrar yükle: `source ~/.profile`
- Yükleme başarılı mı test et
```
node -v
npm version
npx -v
```
- Node, npm ve npx için /usr/bin/ dizinine link oluştur
```
sudo ln -s /usr/local/lib/nodejs/node-$VERSION-$DISTRO/bin/node /usr/bin/node
sudo ln -s /usr/local/lib/nodejs/node-$VERSION-$DISTRO/bin/npm /usr/bin/npm
sudo ln -s /usr/local/lib/nodejs/node-$VERSION-$DISTRO/bin/npx /usr/bin/npx
```


# npm Komutları
Komut|Anlamı
---|---
npm init --yes|xx
npm install paketadi --save|Paket yükleme
npm install bootstrap --save|Paket yükleme
npm install bootstrap@4.3.1 --save|Sadece belirtilen dürüme ait paket yükleme
npm install|**package.json** dosya içeriğinde belirtilen paketleri yükler
npm update|**package.json** dosya içeriğinde belirtilen paketleri günceller
npm ls|Yükle paketleri listeler



# WebPack
https://webpack.js.org/


# Bower

Bower Twitter tarafından geliştirilen, Front-end dünyasına hitap eden bir paket yöneticisidir. Web uygulamaları geliştirirken hepimiz Javascript ve CSS kütüphanelerine, framework’lerine yani kısacası bağımlılıklara ihtiyaç duymaktayız.

Örneğin projemizde Jquery kütüphanesine ihtiyaç duyuyoruz diyelim. Geleneksel yöntemlerde yapılan adımlar genel olarak şöyle işlemektedir.

- Jquery sayfasına gidilir.
- Download tuşuna basılır.
- İndirilen zip ayıklanır.
- Web sayfasının uygun dizinine kopyalanır.
- `<script>` tagi içerisinde sayfanıza tanımlanır.

Ne kadar yıpratıcı değil mi? Tek bir Javascript bağımlılığı için 5 adım gerçekleştirdik. 5 bağımlılığa ihtiyaç duysadık eğer 5×5 adım işletiyor olacaktır. İşte bu süreç yazılım geliştiriciler için tam bir israf noktasıdır.

Peki Bower kullanırsak, sürecimiz nasıl olur?

- İstediğin lokasyona git.
- `bower install jquery` işlet.
- `<script>` tagi içerisinde sayfana tanımla.

Bower ile yukarıda işletilen 5 adım, 3 adıma indirgenmiş olur. 1. ve 3. adım olmazsa olmaz adımlar olduğu için aslında tek bir adımda istenilen bağımlılık edinilmiş olur.


**Kaynaklar:**
- https://bower.io/
- https://fatihhayrioglu.com/arayuz-gelistiriciler-icin-paket-yonetimi-bower/
- https://kodedu.com/2014/05/bower-nedir-nasil-kullanilir/

Komut|Anlamı
---|---
npm install -g bower|bower'ı kurar
bower --version|Bower sürüm bilgisini gösterir
bower init --yes|**bower.json** dosyasını oluşturur
bower install bootstrap --save|Paket yükleme
bower install jquery@3.4.1 --save|Paket yükleme
bower install jquery#3.4.1 --save|Paket yükleme
bower uninstall bootstrap --save|Paket kaldırma
bower list|Yüklü paketleri listeler
bower list --paths|Paketin kullanımı için yükleme bilgisini gösterir
bower list -p|Paketin kullanımı için yükleme bilgisini gösterir




