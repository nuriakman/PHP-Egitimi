# Bootstrap Grid Yapısını Anlamak

&nbsp;|Extra small (<576px)|Small (≥576px)|Medium(≥768px)|Large(≥992px)|Extra large(≥1200px)
------------|------------|-------------|------------|-------------|------------|
Max container width |None (auto)|540px|720px|960px|1140px
Class prefix|.col-|.col-sm-| 	.col-md-|.col-lg-|.col-xl-

Aşağıda belirtilen class'lar birlikte kullandığı zaman içeriklerinizin telefon,tablet,bilgisayar vb. ekranlarda nasıl görüntüleceğinizi ayarlamanızı sağlıyor.Responsive tasarımlar çıkarmanıza yardımcı oluyor.


## xs - Extra small
576px den küçük ekranlarda görüntülecek ayardır.Kullanımı için ```<div class="col-12">``` kodunu kullanabiliriz.Buradaki 12 576px'den küçük ekrana geldiği zaman içerğimizin ekrana yayılmasını sağlayacaktır.

## sm - Small
576px'den büyük, 768px'den küçük ekranlar için görüntülecek ayardır.Tek başına kullandığı zaman 576'dan büyük ekranlarda bu class'daki ayarlarımız geçerli olur.Kullanımı ```<div class="col-sm-12"``` kodunu kullanabiliriz.Extra small ile birlikte de kullanabiliriz.Örneğin ```<div class="col-12 col-sm-8">```.Buraki kodda içeriğimiz 576px'den küçük ekranlarda ekrana yayılacak , 576px'den büyük ekranlar için bir kısmı boş kalacak şekilde ekrana gelecektir.

## md - Medium
768px'den büyük 992px'den küçük ekranlar için kullanılan classtır.Tek başına kullandığı zaman 768'den büyük ekranlarda bu class'daki ayarlarımız geçerli olur.Kullanımı ```<div class="col-md-12">``` şeklindedir.

## lg - Large
992px'den büyük ekrankar için görüntülenecek ayardır.Extra Large ile birlikte kullanılırsa 992px ve 1200px arası ekranlarda içeriğimiz gösterileceği bölümü içeririr.
Kullanımı ```<div class="col-lg-12">``` şeklindedir.

## xl - Extra large
1200px'den büyük ekranlar için kullanılan ayardır.Kullanımı ```<div class="col-xl-12">```şeklindedir.

# Örneklerle Grid

Aşağıdaki örneklerde grid yapısını ve iç içe sütün kullanılınımı inceleyeceğiz.

## Grid 1. Örnek:

![Grid Örneği](https://raw.githubusercontent.com/kemtake/PHP-Egitimi/master/bootstrap.grid/img/bootstrap1.png)

Böyle bir görsel elde etmek şu kodları kullanacağız.
Detaylı incelemek isterseniz [adresinden](https://github.com/kemtake/PHP-Egitimi/blob/master/bootstrap.grid/ornek1.html) inceleyebilirsiniz.


```HTML
<div class="container">
  <div class="row">
    <div class="col-12"> ... </div>
    <div class="col-12">
      <div class="row">
        <div class="col-4">
          <div class="row">
            <div class="col-12"> ... </div>
            <div class="col-12"> ... </div>
            <div class="col-12"> ... </div>
            <div class="col-12"> ... </div>
            <div class="col-12"> ... </div>
          </div>
        </div>
        <div class="col-8">
          <div class="row">
            <div class="col-12" style="height:400px;"> ... </div>
            <div class="col-12" style="height:400px;"> ... </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12"> ... </div>
  </div>
</div>
```

## Grid 2. Örnek:

![Grid Örneği](https://raw.githubusercontent.com/kemtake/PHP-Egitimi/master/bootstrap.grid/img/bootstrap2.png)

Böyle bir görsel elde etmek şu kodları kullanacağız.
Detaylı incelemek isterseniz [adresinden](https://github.com/kemtake/PHP-Egitimi/blob/master/bootstrap.grid/ornek2.html) inceleyebilirsiniz.

```HTML
<div class="container">
  <div class="row">
    <div class="col-12"> ... </div>
    <div class="col-12">
      <div class="row">
        <div class="col-3">
          <div class="row">
            <div class="col-12" style="height:200px"> ... </div>
            <div class="col-12" style="height:200px"> ... </div>
          </div>
        </div>
        <div class="col-9">
          <div class="row">
            <div class="col-12" style="height:400px"> ... </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-3"> ... </div>
    <div class="col-3"> ... </div>
    <div class="col-3"> ... </div>
    <div class="col-3"> ... </div>
    <div class="col-3"> ... </div>
    <div class="col-3"> ... </div>
    <div class="col-3"> ... </div>
    <div class="col-3"> ... </div>
  </div>
</div>
```

## Grid 3. Örnek:

![Grid Örneği](https://raw.githubusercontent.com/kemtake/PHP-Egitimi/master/bootstrap.grid/img/bootstrap3.png)

Böyle bir görsel elde etmek şu kodları kullanacağız.
Detaylı incelemek isterseniz [adresinden](https://github.com/kemtake/PHP-Egitimi/blob/master/bootstrap.grid/ornek3.html) inceleyebilirsiniz.


```HTML
<div class="container">
  <div class="row">
    <div class="col-12"> ... </div>
    <div class="col-4"> ... </div>
    <div class="col-8"> ... </div>
    <div class="col-8"> ... </div>
    <div class="col-4"> ... </div>
    <div class="col-4"> ... </div>
    <div class="col-8"> ... </div>
    <div class="col-12"> ... </div>
    <div class="col-12"> ... </div>
  </div>
</div>
```
