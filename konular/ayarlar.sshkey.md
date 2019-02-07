# SSH KEY Üretme

## ssh key Üretimi

```BASH
**cd ~/.ssh**
**ssh-keygen**
```

## ssh key Üretimi Ekranları

```
Generating public/private rsa key pair.
Enter file in which to save the key (/home/nuri/.ssh/id_rsa): **ENTER BASINIZ**
Enter passphrase (empty for no passphrase): **ENTER BASINIZ**
Enter same passphrase again: **ENTER BASINIZ**
Your identification has been saved in /home/nuri/.ssh/id_rsa.
Your public key has been saved in /home/nuri/.ssh/id_rsa.pub.
The key fingerprint is:
SHA256:0EOJV1HNjSxnrDqZxiE6B9EyOwpf8w0vlAK5MHV7/Xo nuri@nuri-LIFEBOOK-S751
The key's randomart image is:
+---[RSA 2048]----+
|   ....o.ooo.= o |
|  o o.=++.  . O .|
|   o oo*+..  =   |
|  . . Bo=....    |
|   o o OS* =.    |
|    o o + X.     |
|       o o..E    |
|           .     |
|                 |
+----[SHA256]-----+
```

## GitHub Sitesine SSH Key'i Ekleme

- ```cat ~/.ssh/id_rsa.pub``` Komutu ile ssh key içeriği ekrana yazdırılır
- Ekrana çıkan döküm kopyalanır
- github.com sitesine gidilir ve login olunur
- https://github.com/settings/keys sayfasına geçilir
- ```New SSH Key``` Düğmesine basılır
- **Title** başlığına bir isim verilir
- **Key** başlığı altına da yukarıda kopyalanan değer yapıştırılır
