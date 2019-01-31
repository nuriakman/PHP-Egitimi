# HTML Nedir?

İşaretleme dili olan Html, web sayfalarının hazırlanmasında kullanılan sistemdir. Bir programlama dili olmayan Html bilgisayarlarımızda kullandığımız web sitelerinin oluşturulmasında kullanılır. Chrome, Fİrefox ve İnternet Explorer gibi tarayıcılar html kodlarını işleyerek bu kodları web sayfasına dönüştürür.

HTML “Hyper Text Markup Language” kelimelerinin kısaltılmasından oluşur. Türkçe anlamı Zengin metin işaretleme dilidir. Web sitesi oluşturmak için kullanılan bir betik dilidir. Uzantısı .html veya .htm şeklinde tanımlanır.

HTML dili tag (etiket) yapısından oluşur. Genel olarak <etiket></etiket> şeklinde tanımlanmış alanlar arasında işlemler yapılır. Burada dikkat edilmesi gereken nokta, etiketlerin açılması (<etiket>) ve kapatılması</etiket> olayıdır.

İstisnalar olsa da genel anlamda her etiketin kapatılması gerekir.

HTML bir programlama dili olmadığı için derlenme gibi bir gereksinimi yoktur. Standart bir metin belgesinin uzantısını .html yapıp kaydetmemiz halinde dosyamızı direk tarayıcı üzerinde görüntüleyebilir ve değişikler yapabiliriz. 


HTML için güzel bir sunum: https://marcysutton.github.io/gdi-core-html-css/class1.html


[](https://www.mediaclick.com.tr/mp-include/uploads/2018/10/grumpy-cat-small.png)

[](https://www.igyaddel.hu/blog-10.png)
[](https://tutorial.techaltum.com/images/element.png)
[](http://www.squalorsurvivors.com/images/html_tag.gif)
[](https://s3.amazonaws.com/viking_education/web_development/web_app_eng/html5_sectioning_high_level.jpg)



```HTML
<!DOCTYPE html>
<html lang="en">

<head> <!- head kısmına sayfanın içeriğiyle ilgili bilgileri giriyoruz ->
    <meta charset="UTF-8">
    
    <title>Araç Kiralama</title> <!- Sekme kısmında sayfanın görüntülenecek ismi ->
    
    <meta name="title" content="Araç Kiralama Şirketi"> <!- Sayfanın ismi ->
    
    <meta name="keywords" content="araç kiralama, uygun araç kiralama, kocaeli araç kiralama"> <!- Anahtar kelimeler (arama da ön plana çıkarmak için)->
    
    <meta name="description" content="30 yıldır hizmetinizdeyiz."> <!- Sayfayla ilgili açıklama ->
    
</head>

<body> <!- Body kısmı sayfanın görünen, kullanıcı tarafından görüntülenecek kısmı ->
    

    <h1>Araç Kiralama Şirketi</h1> <!-Birinci başlık etiketi ->
    
    <h3>Araçsız kalmayın</h3> <!- Üçüncü başlık etiketi(başlık numaraları h1'den h6'ya kadar) ->
    
    <hr> <!- Çizgi çekme ->

    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia adipisci minima vero deleniti cum rerum quia commodi illo, veniam eum facere inventore numquam accusamus expedita fugiat illum quaerat iste at! <!- Normal yazı ->
    
    <br> <!- Alt satıra inme etiketi ->
    <br> 
    
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius et, reiciendis iusto sit quo architecto nesciunt debitis possimus perspiciatis voluptas, explicabo minima eum voluptatem cum, aliquam quibusdam odit expedita veritatis! <!- Aynı şekilde düz yazı ->
    
    <p> <!- p etiketi (paragraf etiketi) arasında kalan kısmın bir paragrafa ait olduğunu belirtir. bir sonraki etiket ya da yazı alttan bir boşluk bırakarak devam eder ->
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima harum, quisquam dolor, odit officia quaerat minus veniam nam quae dignissimos excepturi, voluptates ut placeat maxime sequi porro ratione aut adipisci.
    </p>
    
    <p> <!- Bir paragraf etiketi daha ekledik ->
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quae, ratione. Nostrum vero neque, suscipit aliquid, excepturi optio eum quo molestiae dignissimos quos dolorem eligendi ratione deleniti aperiam, distinctio dolore!
    </p>
    
    <p> <!- b etiketi (bold) yazıyı normalden kalın yazar ->
        Lorem <b>ipsum dolor</b> sit amet, consectetur adipisicing elit. Alias, pariatur?
    </p>
    
    <p> <!- b etiketi ile aynı işlevi görür ->
        Lorem <strong>ipsum dolor</strong> sit amet, consectetur adipisicing elit. Adipisci, labore.
    </p>
    
    <p> <!- i etiketi (italik) yazının eğik yazılmasını sağlar ->
        Lorem <i>ipsum dolor</i> sit amet, consectetur adipisicing elit. Voluptas, vel!
    </p>
    
    <p> <!- em etiketi de aynı şekilde italık yazar ancak i etiketine göre biraz daha kalın yazar ->
        Lorem <em>ipsum dolor</em> sit amet, consectetur adipisicing elit. Laborum, aperiam.
    </p>
    
    <p> <!- u etiketi yazının altını çizer ->
        Lorem <u>ipsum dolor</u> sit amet, consectetur adipisicing elit. Hic, perferendis!
    </p>
    
    <p> <!- ins etiketi de yazının altını çizer ->
        Lorem <ins>ipsum dolor</ins> sit amet, consectetur adipisicing elit. Voluptas, a.
    </p>
    
    <p> <!- sup etiketinormal satırın biraz üstüne küçük yazı olarak ekler. matematikte üs alma işlemi için kulanılabilir, sub etiketi ise altına yazar. sup-sub birbirlerinin tam tersi ->
        Lorem <sup>ipsum dolor</sup> sit amet, consectetur adipisicing elit. Non, assumenda. Ev toplam 125 m<sup>2</sup> alana sahiptir. Berilyum Be<sup>+2</sup> değerliklidir.
    </p>
    
    <p> <!- sub etiketinormal satırın biraz altına küçük yazı olarak ekler. sub-sub birbirlerinin tam tersi ->
        Lorem <sub>ipsum dolor</sub> sit amet, consectetur adipisicing elit. Non, assumenda.  Kimyada sülfirik asit H<sub>2</sub>SO<sub>4</sub> ile sembolize edilir.
    </p>
    
    <p> <!- del etiketi yazının üstünü çizer ->
        Lorem <del>ipsum dolor</del> sit amet, consectetur adipisicing elit. Dolorum, repudiandae.
    </p>
    
    <p> <!- small etiketi yazıyı küçültür ->
        Lorem <small>ipsum dolor</small> sit amet, consectetur adipisicing elit. Ipsum, iure.
    </p>
    
    <p> <!- mark etiketi yazıya belirgin olması için sarı arka plan ekler ->
        Lorem <mark>ipsum dolor</mark> sit amet, consectetur adipisicing elit. Sapiente, recusandae.
    </p>

    
    

</body>

</html>
```

KAYNAK: https://github.com/uguryuce/HTML_CSS sayfasından alınmıştır.


