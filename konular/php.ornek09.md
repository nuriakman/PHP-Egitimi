# PHP Örnek Çalışmaları

## Kurallı İfade - Veri Ayıklama Örneği

```PHP
<?php
  $METIN = <<<EOF
  Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
  AFYON: Mehmet Zurnacı
  Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
  Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
  Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...

  ANKARA: Mehmet Kilimci

  Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
  Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
  Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
  Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
  Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...

  BALIKESİR: Yücel Yıldırım
  Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
  Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...

  BİNGÖL: Erdal Ağaçlı
  Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
  Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
  Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...

  ÇANAKKALE: Ayhan Germiç
  Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...
  Belediye başkanlıkları açıklandı...Belediye başkanlıkları açıklandı...

  ÇANKIRI: Hüseyin Arabacı

  ESKİŞEHİR: Burhan Öksöz

  ÇORUM: İbrahim Kınacı

  HATAY: İbrahim Ağlar

  İZMİR: Nihat Hasırcı

  KONYA: Uğur Türkmen

  KARAMAN: Mahmut Eker

  SAKARYA: Ekrem Yaren
  EOF;

  // preg_match_all('/(.*): ((E|K|U).*);(.*);(.*)/', $METIN, $SONUC);
  preg_match_all('/(.*): (.*)/', $METIN, $SONUC);

  echo "<table border=1>";
  foreach ($SONUC[1] as $key => $value) {
     echo "<tr><td>{$SONUC[1][$key]}</td><td>{$SONUC[2][$key]}</td></tr>";
  }
  echo "</table>";
```
