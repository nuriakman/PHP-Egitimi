# WORDPRESS Kurulumu

```BASH
cd ~
wget --no-check-certificate https://tr.wordpress.org/wordpress-4.9.8-tr_TR.tar.gz
tar xzvf wordpress-4.9.8-tr_TR.tar.gz
mv wordpress /var/www/html/
cd /var/www/html/wordpress
sudo chmod -R 777 ../wordpress
cp wp-config-sample.php wp-config.php
atom wp-config.php
```

Atom editör içinde DB_NAME, DB_USER, DB_PASSWORD, DB_HOST Sabitleri tanımlanır.

http://localhost/wordpress adresinden wordpress sitesine girilebilir.

http://localhost/wordpress/wp-admin adresinden wordpress YÖNETİM sayfalarına girilebilir.
