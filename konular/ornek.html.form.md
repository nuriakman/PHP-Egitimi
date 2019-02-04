# Örnek HTML Form

```HTML
<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
</head>

<html>
  <h1>Form Kullanım Örneği</h1>
  <form action="test.php" name="test" method="post">

     <fieldset>
      <legend>Kişisel Bilgiler</legend><br/>
      Adı: <input name="personal_fname" type="text" size="20" tabindex="1"/>    
      Soyadı: <input name="personal_lname" type="text" size="25" tabindex="2"/><br/><br/>
      Adresi: <input name="personal_address" type="text" size="55" tabindex="3"/><br/><br/>
      Medeni Hali: <select name="medeni_hal">
        <option value="E">Erkek</option>
        <option value="K">Kadın</option>
      </select>

      <p>
        Kullanıcı: <input type="text" name="username">
      </p> 

      <p>
        Parola: <input type="password" name="password">
      </p>
   
      <!-- ...diğer kişisel bilgiler... -->
     </fieldset>
     <fieldset>
      <legend>Tıbbî Geçmişi</legend><br/>
      <input name="gecirilen_hastalik"
             type="checkbox"
             value="bogmaca" tabindex="20"/> Boğmaca    
      <input name="gecirilen_hastalik"
             type="checkbox"
             value="kabakulak" tabindex="21"/> Kabakulak    
      <input name="gecirilen_hastalik"
             type="checkbox"
             value="kizamik" tabindex="22"/> Kızamık    
     <input name="gecirilen_hastalik"
             type="checkbox"
             value="sucicegi" tabindex="23"/> Suçiçeği<br/><br/>

      <!-- ...tıbbi geçmişi ile ilgili diğer... -->
     </fieldset>
     <fieldset>
      <legend>İlaç Tedavisi</legend><br/>
      Halen kullanmakta olduğunuz ilaçlar var mı?<br/>
      <input name="medication_now"
             type="radio"
             value="Evet" tabindex="35"/> Evet    
      <input name="medication_now"
             type="radio"
             value="Hayir" tabindex="35"/>Hayır<br/><br/>

      Eğer ilaç kullanıyorsanız, aşağıya kullandığınız ilaçları ve
      günlük dozlarını belirtiniz:<br/>
      <textarea name="kullandigi_ilaclar"
                rows="10" cols="60"
                tabindex="40">
      </textarea>
     </fieldset>

    <input type="hidden" name="islem" value="yenikayit">

  </form>
 </html>
 ```

