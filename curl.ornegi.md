# CURL ile Başka Sitelerde Veri Çekme

libcurl kütüphanesi farklı türdeki sunuculara bağlanmaya ve farklı protokollerle iletişim kurmaya yarar.

```PHP
<?php
    ################
    ################ doviz.com Sitesinden Döviz Kurlarını Çekelim
    ################
    //$useragent = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; tr-TR; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13';
    //$referer = 'http://www.google.com/';
    $ch = curl_init();
    $SayfaAdresi = 'https://www.doviz.com/';
    curl_setopt ($ch, CURLOPT_URL, $SayfaAdresi);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    //curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $zaman);
    //curl_setopt ($ch, CURLOPT_REFERER, $referer);
    //curl_setopt ($ch, CURLOPT_USERAGENT, $useragent);
    $KURSAYFASI = curl_exec($ch);
    curl_close($ch);

    preg_match_all('#<div class="header-doviz">(.*?)<div class="header-nav">#Ssie',$KURSAYFASI, $dovizheader);
    preg_match_all('#<span class="menu-row2">(.*?)</span>#Ssie',$dovizheader[1][0], $dovizic);

?>

    <!-- 
    ################
    ################ Döviz Kurlarını Ekrana Yazdıralım
    ################
    -->
    <h1>doviz.com Sitesinden Anlık Döviz ve Altın Bilgileri</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td><strong>Gram Altın Fiyatı</strong></td>
            <td><strong>Dolar Fiyatı</strong></td>
            <td><strong>Euro Fiyatı</strong></td>
        </tr>
        <tr>
            <td><?php echo $dovizic[1][0]; ?> TL </td>
            <td><?php echo $dovizic[1][1]; ?> TL </td>
            <td><?php echo $dovizic[1][2]; ?> TL </td>
        </tr>
    </table>
```


# Başka Sitelerden XML Türündeki Veriyi Çekme

simplexml_load_file, Bir XML dosyasının içeriğini bir nesne haline getirir

```PHP
<?php
    ################
    ################ Merkez Bankasından Döviz Kurlarını Çekelim
    ################
    $open = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');

    // dolar
    $usd_alis = $open->Currency[0]->BanknoteBuying;
    $usd_satis = $open->Currency[0]->BanknoteSelling;

    // euro
    $euro_alis = $open->Currency[11]->BanknoteBuying;
    $euro_satis = $open->Currency[11]->BanknoteSelling;
?>

    <!-- 
    ################
    ################ Döviz Kurlarını Ekrana Yazdıralım
    ################
    -->

    <h1>Merkez Bankası Döviz Kurları</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td><strong>Dolar Fiyatı</strong></td>
            <td><strong>Euro Fiyatı</strong></td>
        </tr>
        <tr>
            <td><?php echo $usd_alis; ?> TL </td>
            <td><?php echo $euro_alis; ?> TL </td>
        </tr>
    </table>
```
