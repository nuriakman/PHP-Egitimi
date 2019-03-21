# CSS Seçicileri

CSS, bir seçici ve bir bildiri blogundan oluşur. Seçici, HTML ile oluşturulan web sayfalarında yer alan elementlere verilen biçim özelliklerini işaretlemeye yarar. Bildiri blogu ise seçicilere atanan bir veya daha fazla özelliği içeren bildirilerden oluşur. Eğer bir seçiciye birden fazla bildiri atanacaksa, bunlar birbirinden ';' ile ayrılır. Her biri bir 'özellik adı' ve bir 'değer'den oluşan bildiri grupları, '{}' sembolü arasında gruplanır.

Örneğin; HTML kodu

```html
<a>
</a>
```
şeklinde olan bir a elementini

```css
a { }
```
şeklinde seçeriz.

#### ID (kimlik) Seçici
HTML etiketinin id özelliğini kullanır. ID, sayfa içinde bir tane olmalıdır. Bir HTML kodu içerisinde id özelliği
```html
<... id="unique"/>
```
şeklinde kullanılır ve css ile
```css
#unique {}
```
şeklinde seçilir.
#### Class (sınıf) Seçici
Sınıf seçici, aradığı elemanları HTML sınıf özelliğine göre arar.
```html
<... class="intro"/>
```
HTML kodunu CSS ile seçmek için '.' sembolü kullanılır.
```css
.intro {}
```
Aynı sınıfa (class) ait birden fazla eleman varsa bunlardan birini seçmek için sınıf seçici aşağıdaki şekilde kullanılır:
```html
<a class="combine"/>
<b class="combine"/>
<c class="combine"/>
```
HTML koduna sahip elementlerden b' nin sınıfını seçmek için
```css
b.c {}
```
CSS kodu kullanılır.
#### Descendant (torun) Seçici
Diyelim ki aşağıdaki kodda a elemanının içindeki tüm b elemanlarının rengini yeşil yapmak istiyoruz. Normalde bu işlem her bir b elemanı için bir font tanımlayarak yapılabilir ancak descendant (torun) seçici aşağıdaki
```html
<a>
  <b>  
    <a/><b/>
  </b>
  <b>  
    <a/><b/>
  </b>
</a>
```
HTML kodunu "a' nın altındaki tüm b' ler için rengi yeşil yap." anlamına gelebilecek
```css
a b {
  color: green;
}
```
şeklinde seçmeye yarar.
Descendant (torun) seçici, id ve class özellikleriyle de kullanılabilir.
Örnek (id):
```html
<a id="a">
  <b>  
    <a/><b/>
  </b>
  <b>  
    <a/><b/>
  </b>
</a>
```
kodunda `id="a"` özelliği taşıyan elementin altındaki tüm b' lerin rengini kırmızı yapmak için
```css
#a b {
  color: red;
}
```
yazarız. <br>
Örnek (class):
```html
<a class="a">
  <b>  
    <a/><b/>
  </b>
  <b>  
    <a/><b/>
  </b>
</a>
```
kodunda `class="b"` özelliği taşıyan elementin altındaki tüm b' lerin rengini beyaz yapmak için
```css
.a b {
  color: red;
}
```
yazarız. <br>
#### CSS Seçicilerde Virgül Kullanımı
Diyelim ki HTML kodunuzdaki h1, h2 ve p elementlerine `color: green;` özelliğini eklemek istiyorsunuz. Bunun için aşağıdaki gibi elementleri tek tek seçip her birine bu özelliği atamak yerine aralarına virgül (,) koyarak yazarsak kodu sadeleştirmiş ve kolay okunabilir bir hale getirmiş oluruz. Yani;
```css
h1 {color: green;}
h2 {color: green;}
p {color: green;}
```
yerine
```css
h1, h2, p {color: green;}
```
Ayrıca elementleri bir grup halinde seçip özellik atama işlemine 'gruplama' denir.
#### Evrensel Seçici
Evrensel seçici, tüm HTML elemanlarını seçmek için kullanılır. Örneğin bir HTML sayfasında aşağıdaki kod yer alıyor olsun.
```html
<h1>Evrensel Seçici</h1>
<p>
  <em>Evrensel seçici,</em>
  <strong>tüm HTML elemanlarını</strong>
  seçmek için kullanılır.
</p>
```
Diyelim ki bu sayfadaki tüm elemanlara `{color: pink;}` özelliğini atamak istiyoruz. Sayfadaki tüm elemanları gruplayarak istediğimiz özelliği atamak, daha geniş içerikli bir HTML sayfası için kullanışlı olmayacaktır. Sayfadaki tüm elementleri ' * ' sembolü ile
```css
* { color: pink; }
```
şeklinde yazarak seçeriz. <br>
Evrensel seçici, bir elementin altındaki tüm elementleri seçmek için de kullanılabilir. Yukarıdaki örnekte p elementinin altındaki em ve strong elementlerine `{font-size: 20px;}` özelliğini atayalım:
```css
p * {font-size: 20px;}
```
#### Adjacent Sibling (Komşu) Seçici
Komşu seçici, kendisinden sonra gelen ilk elementi seçmek için kullanılır ve iki element birbirine '+' sembolü ile bağlanır. <br>
Örnek: Diyelim ki
```html
<div>
  <h1>Başlık</h1>
  <p>Paragraf 1</p>
  <p>Paragraf 2</p>
  <p>Paragraf 3</p>
  <p>Paragraf 4</p>
</div>
```
kodunda h1 elementinin altındaki p elementinin kırmızı olmasını istiyoruz.Bunu sağlayan CSS kodu aşağıdaki gibi olur:
```css
h1+p {color: red;}
```
#### General Sibling (Kardeş) Seçici
Kardeş seçici, kendisinden sonra gelen tüm elementleri seçmek için kullanılır ve iki element birbirine '~' sembolü ile bağlanır. <br>
Diyelim ki yukarıdaki örnekte yer alan HTML kodundaki h1 elementinden sonraki tüm p elementlerine `{background-color: yellow;}` özelliğini atamak istiyoruz. Bunun için yazılması gereken CSS kodu aşağıdaki gibidir:
```css
h1~p {background-color: yellow;}
```
#### Child (Çocuk) Seçici
Çocuk seçici, bir elemanın alt seviyesinde bulunan tüm elemanları seçmeye yarar ve iki eleman arasında ">" sembolü kullanılır. `parent>child {}` formundadır. <br>
   Örneğin; yukarıdaki HTML kodunda `div` elementinin çocuğu konumundaki tüm `h1` elementlerine `{text-decoration: underline;}` özelliğini atayalım:
```CSS
div>h1 {text-decoration: underline;}
```
#### Pseudo Seçiciler
Pseudo elementleri CSS'i destekleyen web tarayıcıları tarafından otomatik olan tanınan özel elementlerdir. Pseudo elementi, bir elementi alt sınıflara (bir paragrafın ilk satırı gibi) böler. [*](https://fatihhayrioglu.com/pseudo-siniflari-ve-pseudo-elementleri/) <br>
`HTMLelementi:first-child {}` formundadır. Aşağıda Pseudo seçicileri birer örnekle açıklamaya çalışalım:
#### first-child Seçici
```html
<ul>
  <li>un vélo</li>
  <li>un train</li>
  <li>une voiture</li>
  <li>un avion</li>
  <li>un bateau</li>
</ul>
```
HTML kodunda ilk `li` elementinin arkaplan rengini yeşil yapalım:
```css
li:first-child {background-color: green;}
```
#### last-child Seçici
Yukarıdaki HTML kodunda son `li` elemanının rengini pembe yapalım:
```css
li:last-child {color: pink;}
```
#### only-child Seçici
Yukarıdaki HTML kodunda `ul` elementinin altındaki tüm elementlerin arkaplan rengini sarı yapalım:
```css
ul:only-child {background-color: yellow;}
```
#### nth-child Seçici
n ile bildirilen aynı düzeydeki elementleri seçmek için kullanılır. Index numarasına göre seçim yapılır ve index sıfırdan faşlamaz. Bir parent elementin altındaki elementten bahsetmiyorsak tüm body elementleri arasından seçim yapar. Bir parent elementin altındak child elementlerden bahsediyorsak bu parent elementler arasında seçim yapar. [**](http://www.ozturkenes.com/css/2016/08/27/nth-child-ve-nth-of-type-farki/) Örneğin;
```html
<div class="container">
  <ul class="list-group">
    <li class="list-group-item">Apple</li>
    <li class="list-group-item">Orange</li>
    <li class="list-group-item">Banana</li>
    <li class="list-group-item">Kiwi</li>
  </ul>
  <p>Hello!</p>
  <p>My name is</p>
  <p>Enes</p>
  <ul class="list-group">
    <li class="list-group-item">A</li>
    <li class="list-group-item">B</li>
    <li class="list-group-item">C</li>
    <li class="list-group-item">D</li>
  </ul>
</div>
```
kodunda parent element `container` elementidir.
```css
:nth-child(3) {background-color: red;}
```
stilini uygularsak parent elementten sonra indexi 3 olan `li` elementlerinin bulunduğu bölümün arka planını kırmızı yapar.
#### nth-last-child Seçici
n ile bildirilen sıradaki öğeyi sondan sıralayarak seçer. Örneğin;
```HTML
<div>
  <p>Box 1</p>
  <p>Box 2</p>
  <p>Box 3</p>
  <p>Box 4</p>
  <p>Box 5</p>
  <p>Box 6</p>
  <p>Box 7</p>
</div>
```
HTML kodunda sondan 2. p elementine `{background-color: white;}` özelliğini atamak istiyoruz. Bunun için
```css
p:nth-last-child(2) {background-color: white;}
```
şeklinde bir CSS kodu yazmalıyız.
#### first-of-type Seçici
Yukarıdaki HTML kodundaki `div` parent elementinin altındaki ilk `p` elementini seçmeye yarar. `first-child` seçiciden farkı, tipi eşleşen ilk elementi seçiyor olmasıdır. Örneğin; yukarıdaki kodda ilk p elementine `{color: red;}` özelliğini atayalım:
```css
p:first-of-type {color: red;}
```
#### nth-of-type Seçici
HTML elementleri arasından n. elementleri seçmek için kullanılr. Türe göre seçim yapar. Başına parent element tagi koyulmazsa aynı türdeki elementler arasında seçim yapar. [**](http://www.ozturkenes.com/css/2016/08/27/nth-child-ve-nth-of-type-farki/)<br>
Örnek:
```HTML
<div class="container">
  <ul class="list-group">
    <li class="list-group-item">Apple</li>
    <li class="list-group-item">Orange</li>
    <li class="list-group-item">Banana</li>
    <li class="list-group-item">Kiwi</li>
  </ul>
  <p>Hello!</p>
  <p>My name is</p>
  <p>Enes</p>
  <ul class="list-group">
    <li class="list-group-item">A</li>
    <li class="list-group-item">B</li>
    <li class="list-group-item">C</li>
    <li class="list-group-item">D</li>
  </ul>
</div>

```
koduna aşağıdaki
```css
:nth-of-type {color: green;}
```
stilini uygularsak tag kullanılmadığı için tüm elementlerin 2.sinin (`p`, `li`, `ul`) rengini yeşil yapar.
* nth-of-type seçici aşağıdaki şekillerde formüle edilerek de kullanılır: <br>
`:nth-of-type(even)`<br>
`:nth-of-type(odd)`<br>
`:nth-of-type(2)`<br>
`:nth-of-type(2n)` : <br>
`:nth-of-type(3n-1)`<br>
`:nth-of-type(2n+2)`<br>
