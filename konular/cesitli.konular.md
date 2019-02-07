# Çeşitli Konular


## GIT ve Atom Kullanımı Sırasında Sorun Olursa
```
git config --global push.default simple
git push --set-upstream origin master
```


## Apache hangi user ile çalışıyor? sorusunun cevabı
```
ps aux | egrep '(apache|httpd)'
ps -ef | egrep '(httpd|apache2|apache)' | grep -v `whoami` | grep -v root | head -n1 | awk '{print $1}'
```


## HTML dizini için yetkilendirme
```
sudo adduser $USER www-data
sudo chown -R $USER:www-data /var/www/html/
```


## Kullanıcı Yetkileri
![Kullanıcı Yetkileri](http://www.macinstruct.com/images/permissions/permissions1.png)
