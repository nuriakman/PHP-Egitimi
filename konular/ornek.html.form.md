# Örnek HTML Form

## ```index.html``` Dosyasının İçeriği

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
