# PHP Örnek Çalışmaları

## Cookie Kullanım Örneği

### ```index.php``` Dosyası İçeriği
```PHP
<?php
	//	sitemizdeki içeriklerin kullanıcının tercih ettiği renkte gözükmesini istiyoruz
	//	bu tercih yapıldıktan sonra hafızada tutulmasını ve site içinde dolaşılırken de her zaman tercih edilen son rengin kullanılmasını istiyoruz

	if(isset( $_GET['color'] )) {
		setcookie("RENKTERCIHI", $_GET['color']);
	}

	$RENK = "black";

	if( isset( $_COOKIE['RENKTERCIHI'] ) ) $RENK = $_COOKIE['RENKTERCIHI'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cookie ile renk tercihi...</title>
</head>

<body style="color:<?php echo $RENK; ?>;">

	<div style="width:60%;margin:auto;">
		<div>
			Renk tercihi yapabilirsiniz :
			<a href="?color=black">Siyah</a>
			<a href="?color=red">Kırmızı</a>
			<a href="?color=green">Yeşil</a>
			<a href="?color=blue">Mavi</a>
		</div>

		<h1>Ana sayfa</h1>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aperiam dicta excepturi explicabo officia recusandae consectetur reiciendis quisquam a nostrum repellendus asperiores quaerat eligendi quasi quos facere ullam iste, facilis.
		</p>
		<a href="hakkimizda.php">Hakkımızda</a>
	</div>

</body>

</html>
```

### ```hakkimizda.php``` Dosyası İçeriği

```PHP
<?php
	$RENK = "black";
	if( isset( $_COOKIE['RENKTERCIHI'] ) ) $RENK = $_COOKIE['RENKTERCIHI'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cookie ile renk tercihi...</title>
</head>

<body style="color:<?php echo $RENK; ?>;">

	<div class="container" style="width:60%;margin:auto;">
		<h1>Hakkımızda</h1>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aperiam dicta excepturi explicabo officia recusandae consectetur reiciendis quisquam a nostrum repellendus asperiores quaerat eligendi quasi quos facere ullam iste, facilis.
		</p>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aperiam dicta excepturi explicabo officia recusandae consectetur reiciendis quisquam a nostrum repellendus asperiores quaerat eligendi quasi quos facere ullam iste, facilis.
		</p>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aperiam dicta excepturi explicabo officia recusandae consectetur reiciendis quisquam a nostrum repellendus asperiores quaerat eligendi quasi quos facere ullam iste, facilis.
		</p>
		<a href="index.php">Ana sayfa</a>
	</div>

</body>

</html>
```
