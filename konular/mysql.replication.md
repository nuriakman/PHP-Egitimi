# MySQL Replication

## MASTER Sunucu MY.INI içinde yapılacaklar
```
log-bin = mysql-bin
server-id = 1
#binlog-do-db=test         ---> Sadece bu database'i replike eder
#binlog-ignore-db=otokoc   ---> Bu database hariç tüm database'leri replike eder.
```

## MASTER Sunucuda Yukarıdaki Ayarlar Sonrası Yapılacaklar
```
Sunucuyu restart et ve aşağıdaki SQL'leri çalıştır:
GRANT REPLICATION SLAVE ON *.* TO 'slave_user'@'%' IDENTIFIED BY 'PAROLANIZ';
FLUSH PRIVILEGES;
USE testdb;
FLUSH TABLES WITH READ LOCK;
SHOW MASTER STATUS;

Show master status dediğiniz zaman replike edeceğiniz db’nin durumunu gösteren, aşağıdakine benzer bir çıktı almanız gerekir;
+------------------+----------+---------------+------------------+
| File             | Position | Binlog_Do_DB  | Binlog_Ignore_DB |
+------------------+----------+---------------+------------------+
| mysql-bin.000002 |      351 | testdb,testdb |                  |
+------------------+----------+---------------+------------------+
1 row in set (0.00 sec)
```

## SLAVE Sunucu MY.INI içinde yapılacaklar
server-id=2


## SLAVE Sunucuda Yukarıdaki Ayarlar Sonrası Yapılacaklar
Sunucuyu restart et
```
SLAVE STOP;

CHANGE MASTER TO
        MASTER_HOST='master_mysqlin_ipsi',
        MASTER_USER='slave_user',
        MASTER_PASSWORD='PAROLANIZ',
        MASTER_LOG_FILE='mysql-bin.000002',
        MASTER_LOG_POS=351;
       
SLAVE START;
```
