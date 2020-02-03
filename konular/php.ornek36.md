# PHP Örnek Çalışmaları

## Basit CHAT uygulaması

KAYNAK: [kenanatmaca.com](https://kenanatmaca.com/php-ile-ajax-chat-scripti/)

# Örnek Kod

### `home.php` Dosyası İçeriği
```HTML
<!DOCTYPE html>
<html>
<head>
	<title>Ajax Sohbet Odası</title>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<style type="text/css">

	body{background-color: lightgrey;}
	.txtarea{width:500px; height:40px; resize:none; overflow:hidden; font-size:20px;}
	.txtadi {width:100px; font-size:20px;}
	.yazilar{border-style:none; width:600px; height:500px; background-color:#eee; overflow:scroll; font-family:Arial; font-size:16px; padding:0px; line-height: 1.5em;}
</style>


<script type="text/javascript">
	
	$(function(){

		// Sohbet yönetimi burada
		$(".txtarea").keyup(function(e){

			var deger=$("#text").val();
			var kullanici=$("#adi").val();

			var TusKodu=e.whitch ? e.whitch : e.keyCode;

			if (TusKodu=='13') {

				// ENTER basılırsa mesajı POST et
				$.post("ajax.php", {txt:deger, adi:kullanici}, function(cevap) {});

				// Mesaj yazma sahasını boşalt
				$(this).val("");
				
			}

		});

	});

</script>



<script type="text/javascript">
	
	$.loader=function(){
		var d=5;

		$.get("verick.php", {dd:d}, function(cevap){
			$(".yazilar").html(cevap);
		});

	}

	// Her 500ms'de bir defa sohbet geçmişi bölümünü otomatik güncelle
	setInterval("$.loader()", 500);

</script>


<body>

	<h1>PHP ve Ajax ile Sohbet Odası</h1>

	<div class="yazilar"></div>
	
	<form method="post" onsubmit="return false" autocomplete="off">
		<p>Adınız: <input type="text" class="txtadi"  name="adi"  id="adi"  placeholder="Adınız?" value="Misafir"></p>
		<p>Mesajınız: <input type="text" class="txtarea" name="text" id="text" placeholder="buraya yaz..."></p>
	</form>

</body>
</html>
```

### `verick.php` Dosyası İçeriği
```PHP
<?php 

	if ($_GET) {

		$count=count(file("sohbet.txt"));
		$DOSYA="sohbet.txt";

		if ($count>100) {

			$SohbetDosyasi=fopen($DOSYA,"w");
			fwrite($SohbetDosyasi,"");
			fclose($SohbetDosyasi);

		} else {

			$SohbetDosyasi=fopen("$DOSYA","r");

			while (!feof($SohbetDosyasi)){
				echo fgets($SohbetDosyasi)."<br>";
			}

			fclose($SohbetDosyasi);

		}

	}

 ?>
```

### `ajax.php` Dosyası İçeriği
```PHP
<?php 

    if ($_POST){

        $TXT  =$_POST['txt'];
        $ADI  =$_POST['adi'];
        $DOSYA="sohbet.txt";

        if (!empty($TXT)){

            $SohbetDosyasi=fopen("$DOSYA","a");
            fwrite($SohbetDosyasi,"\n<b>$ADI:</b> {$TXT}\r");
            fclose($SohbetDosyasi);

        }

    }

?>
```
