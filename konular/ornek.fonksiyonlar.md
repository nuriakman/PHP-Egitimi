# Örnek Fonksiyonlar

```PHP
<?php


###########################################################################################
########### Mutlaka Yazılması Gerekenler
###########################################################################################
mb_internal_encoding("UTF-8");

if (function_exists('date_default_timezone_set')) {
    date_default_timezone_set('Europe/Istanbul');  // Saat dilimini ayarlayalım...
} else {
    putenv("TZ=Europe/Istanbul"); // Zaman Dilimini TÜRKİYE'ye göre ayarla.
}


###########################################################################################
########### BuyukHarf(string) -- Stringi büyük harflere çevirir
###########################################################################################
function BuyukHarf($str) {
	$kucuk = array('ğ','ü','ş','i','ö','ç','ı');
	$buyuk = array('Ğ','Ü','Ş','İ','Ö','Ç','I');
	$str = trim(str_replace($kucuk, $buyuk, $str));
	$str = strtoupper($str);
	return $str;
} // BuyukHarf

###########################################################################################
########### KucukHarf(string) -- Stringi küçük harflere çevirir
###########################################################################################
function KucukHarf($str) {
	$kucuk = array('ğ','ü','ş','i','ö','ç','ı');
	$buyuk = array('Ğ','Ü','Ş','İ','Ö','Ç','I');
	$str = trim(str_replace($buyuk, $kucuk, $str));
	$str = strtolower($str);
	return $str;
} // KucukHarf


###########################################################################################
########### Yaziyla(rakam) -- rakamı yazıyla yazar.
###########################################################################################
function Yaziyla($rakam){
   $rakam   = explode(".",$rakam);
   $ytl     = preg_split('//', preg_replace('/[^\d]/','',$rakam[0]),-1,1);
   $ykr     = preg_split('//', preg_replace('/[^\d]/','',$rakam[1]),-1,1);
              krsort($ytl); $ytl = array_values($ytl);

   $basamak = count($ytl);
   $birler  = array("","bir","iki","üç","dört","beş","altı","yedi","sekiz","dokuz" );
   $onlar   = array("","on","yirmi","otuz","kırk","elli","altmış","yetmiş","seksen","doksan");
   $katlar  = array("","bin","milyon","milyar","trilyon","katrilyon","trilyar","katrilyar"); # ....

   if(!isset($katlar[floor(($basamak-1)/3)]))
   return -1;

   for($i=0; $i < $basamak; $i=$i+3){
     $kat   = $katlar[floor($i/3)];
     $bolum =
       ( $ytl[$i+2] ? ( $ytl[$i+2] == 1 ? "yüz" : $birler[$ytl[$i+2]]."yüz" ) : "" ).
       ( $onlar [$ytl[$i+1]] ).
       ( $i == 3 ? ( $ytl[3] == 1 ? ( $basamak == 4 ? " " : "bir" ) : $birler[$ytl[$i]] ) : $birler[$ytl[$i]] );
     $sonuc = ( $bolum ? $bolum.$kat : "" ).$sonuc;
     }

   $sonuc = "XX " . $sonuc . " TL ".( $ykr[0] ? $onlar[$ykr[0]].$birler[$ykr[1]]." Kuruş " : "" ) . "XX";
   return $sonuc;
   }

###########################################################################################
########### processing_time  -- İşlemde geçen zamanı hesaplamada kullanılır.
###########################################################################################
function processing_time() {
  //Örnek: processing_time(); ....(İşlemler).... echo "<p>Geçen Süre : <b>" . processing_time() . " Saniye</b></p>";
	$an = 6;    // Geçen sürenin hassasiyeti kaç digit olsun?
    static $a;
    if($a == 0) $a = microtime(true);
    else return "islem suresi: " . (string)round((microtime(true)-$a), $an) . " saniye";
}


###########################################################################################
########### TemizleTR(string) -- Sadece TR karakterleri bırakır
###########################################################################################
function TemizleTR($str) {
	$str = preg_replace("/[^üğşçöıÜĞİŞÇÖ ,:a-zA-Z\.\-]/", "", $str);
	return $str;
} // TemizleTR


###########################################################################################
########### TemizleNum(string) -- Sadece rakamları bırakır
###########################################################################################
function TemizleNum($str) {
	// $str = preg_replace("/[^0-9.]/", "", $str); // Eğer, sayı içinde NOKTA kalsın istenirse bu kod
	$str = preg_replace("/[^0-9]/", "", $str);
	return $str;
} // TemizleNum


###########################################################################################
########### GetRandomString(uzunluk) -- Belirtilen uzunluk kadar rasgele karakter üretir.
###########################################################################################
function GetRandomString($length) {
	settype($template, "string");
	$template = "1234567890abcdefghijklmnopqrstuvwxyz";
	settype($length, "integer");
	settype($rndstring, "string");
	settype($a, "integer");
	settype($b, "integer");
	for ($a = 0; $a <= $length; $a++) {
		   $b = rand(0, strlen($template) - 1);
		   $rndstring .= $template[$b];
	}
	return $rndstring;
} // GetRandomString

###########################################################################################
########### getip() -- Kullanıcının geldiği IP numarasını bulur....
###########################################################################################
function getip() {
     if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
     $ip = getenv("HTTP_CLIENT_IP");

     else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
     $ip = getenv("HTTP_X_FORWARDED_FOR");

     else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
     $ip = getenv("REMOTE_ADDR");

     else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
     $ip = $_SERVER['REMOTE_ADDR'];

     else
     $ip = "unknown";

     return(trim($ip));
} //getip




###########################################################################################
########### AcikTarih(tarih) -- Belirtilen tarihi şu örneğe göre yazdırır: 07 Aralık
###########################################################################################
function AcikTarih($tarih) {
	// putenv("TZ=Asia/Istanbul");
	if(gettype($tarih) == "string") $tarih = strtotime($tarih);
	if(gettype($tarih) <> "integer") return "(Tarih Hatalı!!!)";

	$arrGunler  = array("Pazar", "Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi");
	$arrGunler3 = array("PAZ", "PZT", "SAL", "ÇAR", "PER", "CUM", "CMT");
	$arrAylar   = array("", "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık");
	$arrAylar3  = array("", "OCA", "ŞUB", "MAR", "NİS", "MAY", "HAZ", "TEM", "AĞU", "EYL", "EKİ", "KAS", "ARA");

	$g   = $arrGunler[date("w", $tarih)];
	$gg  = date("d", $tarih);
	$ggg = $arrGunler3[date("w", $tarih)];

	$a   = $arrAylar[date("n", $tarih)];
	$aa  = date("m", $tarih);
	$aaa = $arrAylar3[date("n", $tarih)];

	$yy  = date("y", $tarih);
	$yyyy= date("Y", $tarih);
	return "$gg $a $yyyy";
}

###########################################################################################
########### TarihinGunAdi(tarih) -- Belirtilen tarihi şu örneğe göre yazdırır: Çarşamba
###########################################################################################
function TarihinGunAdi($tarih) {
	// putenv("TZ=Asia/Istanbul");
	if(gettype($tarih) == "string") $tarih = strtotime($tarih);
	if(gettype($tarih) <> "integer") return "(Tarih Hatalı!!!)";

	$arrGunler  = array("Pazar", "Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi");
	$arrGunler3 = array("PAZ", "PZT", "SAL", "ÇAR", "PER", "CUM", "CMT");

	$g   = $arrGunler[date("w", $tarih)];
	$ggg = $arrGunler3[date("w", $tarih)];

	return "$g";
}



##########################################################################################
#################### ParaYaz0 -- Rakamın sadece tam sayı kısmını yazdırır. Örnek: 1,234,567
##########################################################################################
function ParaYaz0($ParaTutari){
	return number_format($ParaTutari, 0, '.', ',');
}



##########################################################################################
#################### ParaYaz2 -- Rakamı 2 hane ondalıklı olarak yazdırır. Örnek: 1,234,567.89
##########################################################################################
function ParaYaz2($ParaTutari){
	return number_format($ParaTutari, 2, '.', ',');
}



###########################################################################################
########### print_nice -- print_r komutunun renkli çıktısını üretir...
###########################################################################################
	function print_nice($elem,$max_level=10,$print_nice_stack=array()){
		if(is_array($elem) || is_object($elem)){
			if(in_array($elem,$print_nice_stack,true)){ // Orjinal: if(in_array(&$elem,$print_nice_stack,true)){
				echo "<font color=red>RECURSION</font>";
				return;
			}
			$print_nice_stack[]=&$elem;
			if($max_level<1){
				echo "<font color=red>nivel maximo alcanzado</font>";
				return;
			}
			$max_level--;
			echo "<table border=1 cellspacing=0 cellpadding=3 width=100%>";
			if(is_array($elem)){
				echo '<tr><td colspan=2 style="background-color:#333333;"><strong><font color=white>ARRAY</font></strong></td></tr>';
			}else{
				echo '<tr><td colspan=2 style="background-color:#333333;"><strong>';
				echo '<font color=white>OBJECT Type: '.get_class($elem).'</font></strong></td></tr>';
			}
			$color=0;
			foreach($elem as $k => $v){
				if($max_level%2){
					$rgb=($color++%2)?"#888888":"#BBBBBB";
				}else{
					$rgb=($color++%2)?"#8888BB":"#BBBBFF";
				}
				echo '<tr><td valign="top" style="width:40px;background-color:'.$rgb.';">';
				echo '<strong>'.$k."</strong></td><td>";
				print_nice($v,$max_level,$print_nice_stack);
				echo "</td></tr>";
			}
			echo "</table>";
			return;
		}
		if($elem === null){
			echo "<font color=green>NULL</font>";
		}elseif($elem === 0){
			echo "0";
		}elseif($elem === true){
			echo "<font color=green>TRUE</font>";
		}elseif($elem === false){
			echo "<font color=green>FALSE</font>";
		}elseif($elem === ""){
			echo "<font color=green>EMPTY STRING</font>";
		}else{
			echo str_replace("\n","<strong><font color=red>*</font></strong><br>\n",$elem);
		}
	} 	

```
