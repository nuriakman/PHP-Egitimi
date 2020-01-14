# Örnek HTML Form

```HTML
<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <title>HTML ile form oluşturma</title>
</head>

<html>
<h1>Form Kullanım Örneği</h1>
<form action="test.php" name="test" method="post">

  <fieldset>
    <legend>Kişisel Bilgiler</legend><br />
    Adı: <input name="personal_fname" type="text" size="20" />
    Soyadı: <input name="personal_lname" type="text" size="25" /><br /><br />
    Adresi: <input name="personal_address" type="text" size="55" /><br /><br />
    Medeni Hali: <select name="medeni_hal">
      <option value="E">Erkek</option>
      <option value="K">Kadın</option>
    </select>

    <p> Kullanıcı: <input type="text" name="username"> </p>

    <p> Parola: <input type="password" name="password"> </p>

    <!-- ...diğer kişisel bilgiler... -->
  </fieldset>
  <fieldset>
    <legend>Tıbbî Geçmişi</legend><br />
    <input name="gecirilen_hastalik" type="checkbox" value="bogmaca" /> Boğmaca
    <input name="gecirilen_hastalik" type="checkbox" value="kabakulak" /> Kabakulak
    <input name="gecirilen_hastalik" type="checkbox" value="kizamik" /> Kızamık
    <input name="gecirilen_hastalik" type="checkbox" value="sucicegi" /> Suçiçeği<br /><br />

    <!-- ...tıbbi geçmişi ile ilgili diğer... -->
  </fieldset>
  <fieldset>
    <legend>İlaç Tedavisi</legend><br />
    Halen kullanmakta olduğunuz ilaçlar var mı?<br />
    <input name="medication_now" type="radio" value="Evet" /> Evet
    <input name="medication_now" type="radio" value="Hayir" />Hayır<br /><br />

    Eğer ilaç kullanıyorsanız, aşağıya kullandığınız ilaçları ve günlük dozlarını belirtiniz:<br />
    <textarea name="kullandigi_ilaclar" rows="10" cols="60"></textarea>
  </fieldset>

  <input type="submit" name="islem" value="yenikayit">

</form>

</html>
```

# On-Line HTML Form Üreticiler
- https://www.phpformbuilder.pro/index.html
- https://bootstrapformbuilder.com/
- https://bootsnipp.com/forms
- https://getfuelux.com/index.html --- https://github.com/ExactTarget/fuelux
- https://www.layoutit.com/en
- https://formoid.com/ -- Paralı?


# HTML Input Etiketi
- [HTML Input Turleri](https://www.w3schools.com/html/html_form_input_types.asp)
- [HTML Input Attributes](https://www.w3schools.com/htmL/html_form_attributes.asp
- [HTML5 New Attributes](https://html5doctor.com/html5-forms-introduction-and-new-attributes/)

```HTML
<form method="post">

	<p>Renk Seçin:<br>
<input type="color" name="favcolor" value="#ff0000"><br><br></p>

<p>Tarih Girin:<br>
<input type="date" name="bday"><br><br></p>

<p>1980-01-01 Öncesi bir tarih giriniz:<br>
<input type="date" name="bday" max="1979-12-31"><br><br></p>

<p>2000-01-01 Sonrası bir tarih giriniz:<br>
<input type="date" name="bday" min="2000-01-02"><br><br></p>

<p>ePosta Giriniz:<br>
<input type="email" name="email"><br><br></p>

<p>Adet Giriniz (1 - 100 Arasında):<br>
<input type="number" name="quantity" min="1" max="100" step="5" value="30"><br><br></p>

<p>Aralık:<br>
<input type="range" name="points" min="0" max="10"><br><br></p>

<p>Telefon:<br>
<input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}"><br><br></p>

<p>Saat Giriniz:<br>
<input type="time" name="usr_time"><br><br></p>

<p>URL Giriniz:<br>
<input type="url" name="homepage"><br><br></p>

<br><br>
<input type="submit" value="Gönder">

</form>
```


