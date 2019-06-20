# RSS İle Veri 

Son Dakika Resimi:
https://pbs.twimg.com/media/D34LHyKWAAEWZW_.jpg

BBS Türkçe: http://feeds.bbci.co.uk/turkce/rss.xml
https://haberss.mertskaplan.com/Haber_sitelerinin_RSS_adresleri


## ```RSS_Ornegi.php``` Dosya içeriği

```PHP
<?php
/*
	$URL = "https://tr.sputniknews.com/export/rss2/archive/index.xml";
	//$URL = "http://www.hurriyet.com.tr/rss/ekonomi";
	$xml = simplexml_load_file($URL);
	$json_string = json_encode($xml); // $mxl değişkeninin JSON karşılığını içeren bir dizge döndürür. 
	$result_array = json_decode($json_string, TRUE); // Kodlanmış bir JSON dizgesini çözümler ve PHP değişkenine çevirir. 
	$Haberler = $result_array["channel"]["item"];
	print_r($Haberler);
	die();
*/

$HaberURL     = "https://tr.sputniknews.com/export/rss2/archive/index.xml";
$HaberDosyasi = "haberler.txt";

if (file_exists($HaberDosyasi) and (filemtime($HaberDosyasi) > (time() - 60 * 5 ))) {
   // Önbellekteki dosya 5 dakikadan daha yeni.
   // İçeriği siteden yenileyip zaman kaybetmeyelim.
   $file = file_get_contents($HaberDosyasi);
} else {
   // Önbellekteki dosya 5 dakikadan daha eski.
   // İçeriği siteden yenileyip talep edelim ki yeni haberleri görebilelim.
   $file = file_get_contents($HaberURL);
   // Yeni haberleri de dosyaya yazalım.
   // Böylece takip eden 5 dakika boyunca bu dosya bize hizmet edebilsin.
   file_put_contents($HaberDosyasi, $file, LOCK_EX);
}


$xml = simplexml_load_file($HaberDosyasi);

$json_string = json_encode($xml); // $mxl değişkeninin JSON karşılığını içeren bir dizge döndürür. 

$result_array = json_decode($json_string, TRUE); // Kodlanmış bir JSON dizgesini çözümler ve PHP değişkenine çevirir. 
                                                 // TRUE olduğu zaman nesneler bir ilişkisel diziye dönüştürülür.
$Haberler = $result_array["channel"]["item"];

unset($xml);
unset($json_string);
unset($result_array);

//echo "<pre>";
//print_r($Haberler);

/*

    [1] => Array
        (
            [title] => Habertürk yazarı Yılman: Şaban Vatan'a reva görülen apaçık vicdansızlıktır
            [link] => https://tr.sputniknews.com/turkiye/201904111038722256-haberturk-yazari-yilman-saban-vatana-reva-gorulen-apacik-vicdansizliktir/
            [guid] => https://tr.sputniknews.com/turkiye/201904111038722256-haberturk-yazari-yilman-saban-vatana-reva-gorulen-apacik-vicdansizliktir/
            [pubDate] => Thu, 11 Apr 2019 10:00:44 +0300
            [description] => Habertürk yazarı Sevilay Yılman, Şaban Vatan ile ilgili olarak "Rabia Naz’ın babası Şaban Vatan’ın kızının ölümünü şüpheli bulup detaylı hukuki araştırma ve soruşturma istediği için savcılığın akıl hastanesine sevki haberini görünce çöktüm kaldım olduğum yerde" dedi.
            [category] => Türkiye
            [enclosure] => Array
                (
                    [@attributes] => Array
                        (
                            [url] => https://cdntr1.img.sputniknews.com/images//103872/22/1038722226.jpg
                            [type] => image/jpeg
                            [length] => 66295
                        )

                )

        )
*/

$arrHaberKategorileri = array();
foreach ($Haberler as $key => $Haber) {
    $Kategori = $Haber["category"];
    if(!isset($arrHaberKategorileri[ $Kategori ])) {
        $arrHaberKategorileri[ $Kategori ] = 0;
    }
    $arrHaberKategorileri[ $Kategori ] ++;
}

echo "<h1>Sputnik Son Dakika Haberleri</h1>";

echo "<hr>";
foreach ($arrHaberKategorileri as $Kategori => $Adet) {
    echo sprintf("<a href='?k=%s' style='margin-right: 20px;'>%s</a>", 
         urlencode($Kategori), 
         $Kategori);
}
echo "<hr>";

$Adet = 0;
foreach ($Haberler as $key => $Haber) {
    if(isset($_GET["k"])) {
        $ArananKategori = $_GET["k"];
        if($ArananKategori <> $Haber["category"]) continue; // Bir sonraki habere geç
    } else {
      $Adet++;
      if($Adet>9) break; // Filtre konulmamışsa sadece son 9 haberi listele ve dur...
    }

    $HaberOzeti = $Haber["description"];
    if(mb_strlen($HaberOzeti, "UTF-8") > 200) {
    	$HaberOzeti = preg_replace('/\s+?(\S+)?$/', '', substr($HaberOzeti, 0, 200)) . " ...";
    }
    $ResimURL = "https://cdntr1.img.sputniknews.com/images/103870/65/1038706532.jpg"; // Varsayılan resim bu olsun :)
    if( isset($Haber["enclosure"]["@attributes"]["url"]) ) {
    	$ResimURL = $Haber["enclosure"]["@attributes"]["url"];
    }
    echo sprintf("<div style='width: 450px; height: 375px; overflow:hidden; margin: 10px; padding: 5px; display:inline-block; float: left; border: 1px solid red;'>
                    <img src='%s' width='100%%'>
                    <p><a href='%s'>%s</a></p>
                    <p>%s</p>
                  </div>
                 ",
            $ResimURL,
            $Haber["link"],
            $Haber["title"],
            $HaberOzeti
        );
}


die("<br style='clear: both;'>bitti...");


```
