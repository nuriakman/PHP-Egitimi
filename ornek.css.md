# CSS Nedir?

CSS, “Cascading Style Sheets" kelimelerinin kısaltılmasından oluştur ve türkçe anlamı Basamaklı Stil Şablonları ya da Basamaklı Biçim Sayfaları şeklindedir.

CSS en temel haliyle HTML etiketlerimizin görsel açından biçimlendirilmesini (Renk, yazı şekli, arka plan rengi, genişlik, yükseklik, pozisyon durumu vs) sağlar.

CSS’in sahip olduğu seçiciler vardır. Bunlar id ve class olarak ikiye ayrılır. HTML etiketlerinde tanımladığımız seçici isimleriyle birlikte CSS kullanarak etiketleri biçimlendiririz.


## CSS'in Yapısı

[](http://zinzinzibidi.com/Areas/web_tasarim/Content/img/css-yapisi-01.jpg)
[](http://zinzinzibidi.com/Areas/web_tasarim/Content/img/css-yapisi-02.jpg)


## HTML + CSS + JS = Web Page
[](https://cdn-images-1.medium.com/max/1600/1*GMHYx3zVUybjg0qQ2n9QSA.png)


## Inline CSS
```HTML
<h1 style="color: blue"> Merhaba Dünya! </h1>
```


## Internal CSS
```HTML
<head>
    <style>
        h1 {
            color: blue;
        }
    </style>
</head>
```


## External CSS
```HTML
<head>
    <link rel="stylesheet" href="style.css">
</head>
```

//style.css
```CSS
h1 {
   color: blue;
}
```


## Element
```CSS
h1 {
    font-size: 20px;
}
p {
    color: green;
}
div {
    margin: 10px;
}
```


## Class
```HTML
<div class='container'>
    <h1> Burası başlıktır </h1>
</div>
...
...
```
```CSS
.container {
    margin: 10px;
}
```


## ID
```HTML
<div>
    <p id='para1'> Burası bir paragraftır </p>
</div>
...
...
```
```CSS
#para1 {
    color: green;
    font-size: 16px;
}
```


## CSS'de Açıklama Kullanmak
```CSS
   /* Paragraf Stilim */
   p
   {
      /* Renk kırmızı olacak */
      color: red;

      /* Ortalanmış olacak */
      text-align: center;
   }
```


## CSS Seçicileri
```CSS
  .stil {
      font: 10pt Tahoma, Verdana;
      color: blue;
   }
   
   div.stil {
      font: 10pt Tahoma, Verdana;
      color: blue;
   }
```

