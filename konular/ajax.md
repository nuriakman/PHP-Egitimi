## Ajax Nedir?

AJAX internet sayfalarında JavaScript ve XMLHttpRequest kullanımı ile etkileşimli uygulamalar yaratan tekniğin adıdır.

### Nerelerde kullanılır?

Formlarda, Oylama ve Sıralama işlemlerinde, Captcha kontrolleri, Chat uygulamaları vb. alanlarda kullanılır. Ajax ile formlarla post ve get işlemleri yapabiliriz.

### Örnek Kullanım:

Aşağıda ki örnekte **ajax'ın jquery ile kullanımını** anlatacağım.
Bootstrap ve Jquery kütüphanelerini projemize dahil ettik. Ardından basit bir form tasarımı oluşturduk ve forma id olarak ajaxTest yazdık.
Bu ID'yi formumuzu post ederken kullanacağız. Ad ve soyad için input alanlarımızı oluşturduk ve ID'lerini tanımladık. 

Ajaxpost için açıklamalar yorum satırı olarak belirtildi.
```
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Ajax Kullanımı</title>

    <style>

    </style>
</head>
<body>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-6 p-5">
            <form id="ajaxTest" >
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" id="surname">
                </div>
                <button type="submit" class="btn btn-primary submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <div class="alert alert-success d-none"></div> <!-- Name ve Surname'i yazdırdığımız alan.
        </div>
    </div>
</div>

<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>

<script>
    $(document).ready(function () { // Sayfam yüklenince bu fonksiyonu hazırla.
        $("#ajaxTest").on('submit', function(e) { // Form, submit olduğu zaman bir fonksiyon çalıştır dedik.
            e.preventDefault();
            var $name = $('input#name', this).val(); // Id'si name olan input'un değerini aldık. (Input'a ne yazarsak o gelecektir.)
            var $surname = $('input#surname', this).val(); // Id'si surname olan input'un değerini aldık.
            $.post('index.php', {name: $name, surname: $surname}, function () { // index.php formu submit ettiğimiz yer. { $name ve $surname} değerlerimizi gönderiyoruz. Bu işlem başarılı olunca bir fonksiyon çağırdık.
                $( ".alert" ).removeClass( "d-none" ); // Class'ı alert olan div'in, d-none classını kaldırdık. Bu şekilde div'imiz görünür oldu.
                $( ".submit" ).attr( "disabled", "disabled" ); // Gönderim yapılınca butonumuza disabled attribute'ü ekledik.

                $('<p>' + 'Merhaba <strong>'+ $name + " " +$surname+ '</strong></p>').appendTo('.alert'); // Post işlemi tamamlanınca alert içerisinde ad ve soyadı yazdırdık.

            });
        });
    })
</script>

</body>
</html>
```

Evet, ajax ile post işlemimizi gerçekleştirdik. Eğer veri tabanına kayıt yapmak isterseniz yapacağınız işlem formu gönderdiğiniz sayfadan post verilerini almak.
