# JavaScript ile Tablodan Veri Süzme

## HTML Tablo içinde veri süzme örneği


```HTML
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>TABLODAN VERİ SÜZME ÖRNEĞİ</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!-- jQuery ile çalışılacaksa bu satır gereklidir. -->
</head>
<body>

	<h2>İsim Listesinde Süzme Yapma</h2>

	<p>Aranacak İfade: <input type='text' name='myInput' id='myInput' onkeyup='TablodaSuzmeYap()' placeholder="Süzme yapın..." onkeypress="TablodaSuzmeYap()"></p>
						
	<table id="myTable" border="1" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC">
	<tr>
		<th><strong>Ref No</strong></th>
		<th><strong>Yolcu Adı</strong></th>
		<th><strong>Telefonu</strong></th>
	</tr>
	<tr>
		<td>57787</td>
		<td>MERYEM</td>
		<td>0544 3332211</td>
	</tr>
	<tr>
		<td>387499</td>
		<td>MUSTAFA KEMAL</td>
		<td>0544 3331122</td>
	</tr>
	<tr>
		<td>36547</td>
		<td>KEMAL</td>
		<td>0544 3332211</td>
	</tr>
	</table>


</body>
</html>


<script>
	function TablodaSuzmeYap() {
	  // Declare variables
	  var input, filter, table, tr, td, i;
	  input  = document.getElementById("myInput");
	  filter = input.value.toUpperCase();
	  table  = document.getElementById("myTable");
	  tr     = table.getElementsByTagName("tr");

	  // Loop through all table rows, and hide those who don't match the search query
	  for (i = 0; i < tr.length; i++) {
	    
	    td = tr[i].getElementsByTagName("td")[0]; // 1: Tablonun İKİNCİ Sutununda Arar,  0: Tablonun BİRİNCİ Sutununda Arar, 
	    
	    if (td) {
	      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
	        tr[i].style.display = "";
	      } else {
	        tr[i].style.display = "none";
	      }
	    }
	  }
	}

/***
	jQuery ile yapılmak istenirse

	jQuery(document).ready(function($) {
		$("#myInput").focus();
	});
**/

</script>

```
