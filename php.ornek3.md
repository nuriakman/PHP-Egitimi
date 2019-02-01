# PHP Örnek Çalışmaları

## Çoktan Seçmeli Soru Örneği

```PHP
<?php

	function SecimleriHazirla($c1, $c2, $c3, $Dogru, $Key) {
		return "<select name='cevap' onchange='KontrolEt(this.value, $Dogru, $Key)'>
							<option value='0'>** SEÇ **</option>
							<option value='1'>$c1</option>
							<option value='2'>$c2</option>
							<option value='3'>$c3</option>
				</select>
		";
	} // function ara($Aranan)


	$arrSorular = file("sorular.txt");

	echo "<ul>";
	foreach ($arrSorular as $key => $value) {
		list($c1, $c2, $c3, $Dogru, $Cumle)  = explode("|", $value);
		list($CumleBasi, $CumleSonu) = explode("{}", $Cumle);
		$INPUTUM = SecimleriHazirla($c1, $c2, $c3, $Dogru, $key);
		echo "\n<li id='$key'>$CumleBasi $INPUTUM $CumleSonu<br>&nbsp;</li>\n";
	}
	echo "</ul>";
?>

<script>
	function KontrolEt(Cevap, Dogru, Key) {
		if(Cevap == 0) {
			document.getElementById(Key).style.color = "#000000"
			return;
		};
		if(Cevap == Dogru) {
			document.getElementById(Key).style.color = "#07C707"
		} else {
			document.getElementById(Key).style.color = "#FF0000"
		}
	}
</script>
```

### sorular.txt
```TEXT
dün|bugün|yarın|1|Bu akşam sokakta {} gördüğüm araba aklıma geldi.
birşey|bugün|bir gün|2|Kim bilebilirdi seninle {} tekrar karşılaşacağız.
```
