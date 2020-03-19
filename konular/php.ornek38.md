# PHP Örnek Çalışmaları

## SVG ile Basit Grafik Çizimi

### Örnek Kod
```PHP
<!DOCTYPE html>
<html>
<body>

	<h1>Örnek 1</h1>
	<table>
	<tr><td>Dolu   </td><td> <svg><rect class='dolu' x='0'  width='60'/></svg> </td></tr>
	<tr><td>Boş    </td><td> <svg><rect class='rez'  x='0'  width='20'/></svg> </td></tr>
	<tr><td>Rezerve</td><td> <svg><rect class='bos'  x='0'  width='90'/></svg> </td></tr>
	</table>

	<h1>Örnek 2</h1>
	<table>
	<tr><td>Tümleşik</td><td> 
		<svg>
			<rect class='dolu'  x='0'   width='60'/> 
			<rect class='rez'   x='60'  width='20'/> 
			<rect class='bos'   x='80'  width='90'/> <!-- 60+20 = 80-->
		</svg> </td></tr>
	</table>

	<style>
		svg   { height: 25px;  }
		.dolu { height: 25px; fill:rgb(255,61,0); }
		.rez  { height: 25px; fill:rgb(255,214,0); }
		.bos  { height: 25px; fill:rgb(100,221,23); }
	</style>

</body>
</html>
```
