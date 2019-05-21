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
#### Pseudo (Sözde) Sınıf Seçiciler
 elementleri CSS'i destekleyen web tarayıcıları tarafından otomatik olan tanınan özel elementlerdir.  elementi, bir elementi alt sınıflara (bir paragrafın ilk satırı gibi) böler. [*](https://fatihhayrioglu.com/-siniflari-ve--elementleri/) <br>
`HTMLelementi:first-child {}` formundadır. Aşağıda  seçicileri birer örnekle açıklamaya çalışalım:
#### :first-child Seçici
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
#### :last-child Seçici
Yukarıdaki HTML kodunda son `li` elemanının rengini pembe yapalım:
```css
li:last-child {color: pink;}
```
#### :only-child Seçici
Yukarıdaki HTML kodunda `ul` elementinin altındaki tüm elementlerin arkaplan rengini sarı yapalım:
```css
ul:only-child {background-color: yellow;}
```
#### :nth-child Seçici
n ile bildirilen aynı düzeydeki elementleri seçmek için kullanılır. Index numarasına göre seçim yapılır ve index sıfırdan başlamaz. Bir parent elementin altındaki elementten bahsetmiyorsak tüm body elementler arasından seçim yapar. Bir parent elementin altındaki child elementlerden bahsediyorsak bu parent elementler arasında seçim yapar. [**](http://www.ozturkenes.com/css/2016/08/27/nth-child-ve-nth-of-type-farki/) Örneğin;
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
kodunda parent element `.container` sınıfının bulunduğu `div` elementidir.
```css
:nth-child(3) {background-color: red;}
```
stilini uygularsak, parent elementten sonra indexi 3 olan `li` elementlerinin bulunduğu bölümün arka planını kırmızı yapar.
#### :nth-last-child Seçici
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
#### :first-of-type Seçici
Yukarıdaki HTML kodundaki `div` parent elementinin altındaki ilk `p` elementini seçmeye yarar. `first-child` seçiciden farkı, tipi eşleşen ilk elementi seçiyor olmasıdır. Örneğin; yukarıdaki kodda ilk p elementine `{color: red;}` özelliğini atayalım:
```css
p:first-of-type {color: red;}
```
#### :nth-of-type Seçici
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
* nth-of-type seçicinin farklı kullanım şekillerini örneklerle açıklayalım:
Örnek 1:
```html
<div>
  <p>The first paragraph.</p>
  <p>The second paragraph.</p>
  <p>The third paragraph.</p>
  <p>The fourth paragraph.</p>

</div>
```
HTML kodu ile yazılmış bir sayfada birinci ve üçüncü yani tek indexli paragraflara `{background-color: pink;}` özelliğini; ikinci ve dördüncü yani çift indexli paragraflara `{background-color: red;}` özelliğini atamak istiyorsak;
tek indekslileri seçmek için
```css
:nth-of-type(odd) {background-color: pink;}
/** veya :nth-of-type(2n+1) {background-color: pink;} **/
```
şeklinde ve çift indexlileri seçmek için
```CSS
:nth-of-type(even) {background-color: red;}
/** veya :nth-of-type(2n) {background-color: red;} **/
```
şeklinde yazmalıyız.
#### :only-of-type Seçici
`:only-child` seçicisinin aksine sadece bir tane olan nesneleri seçer. Örneğin;
```Html
<div>
  <p>Hello</p>
  <h1>Bonjour</h1>
</div>
```
HTML kodunda tek bir p elementi var ve bu tek `p` elementini seçip buna `{background-color: red;}` özelliğini atamak istiyorsak
```Css
p:only-of-typ{background-color: red;}
```
şeklinde yazmalıyız.
#### :last-of-type Seçici
`:last-child` seçici HTML kodundaki son elementi seçerken `:last-of-type` seçici, koddaki seçilmek istenen tipin eşleştiği son elementi seçer. Örneğin;
```HTML
<div>
  <p>Bonjour!</p>
  <p>Bonjour à tous!</p>
  <h2>Good Morning</h2>
  <p>Bonne Nuit!</p>
</div>
```
HTML kodundaki son p elementine `{background-color: pink;}` özelliğini atamak için
````CSS
p:last-of-type {background-color: pink;}
````
şeklinde yazmamız gerekir.
#### :empty Seçici
Alt elemanı (çocuk) olmayan elemanları seçmek için kullanılır. Örneğin;
```HTML
<div class="box"><!-- I will be green. --></div>
<div class="box">I will be pink.</div>
<div class="box">
    <!-- I will be pink in older browsers because of the whitespace around this comment. -->
</div>
```
HTML kodundaki div elementlerinden child (çocuk) elemanı olmayana `{background-color:green;}` özelliğini atayalım:
```CSS
.box:empty{background-color:green;}
```
Bu işlemden sonra sınıfı 'box' olan div elementlerinden ilk sırada olan kutucuğun rengi gri olacaktır. Sondaki div elementi gri olmayacak çünkü yorum satırı boşluklar arasına yazılmıştır, dolayısıyla sondaki div elementi bir çocuk elemana sahiptir.
#### :not Sözde Sınıfı (Pseudo-class)
`:not(element)` formunda olan `:not`seçici, içine yazılan element dışındaki elementleri seçmeye yarar. </br>
Örnek:
```HTML
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
<div>This is not a paragraph</div>
```
HTML kodundaki p olmayan elementleri seçelim:
```CSS
:not(p){
  color: blue;
  text-decoration: underline;
}
```
Yukarıdaki CSS koduna göre p olmayan elementlere (yani div elementine) belirtilen özellikler atanmış oldu.
#### [attribute] Nitelik Seçici
Nitelik seçicileri, elementlerin özelliklerine ve özellik değerlerine göre öğeleri eşleştiren bir seçici türüdür. Örneğin;
```HTML
<input name="name"/>
<input name="email"/>
```
kodunda `name:"email"` özelliği bulunan `input` elementine `font-size:16px` özelliğini atayalım:
```CSS
input[name="email"] {
  font-size: 16px;
}
```
Yukarıdaki `input`elementlerinden name özelliği bulunanların hepsine `{border-radius: 5px;}` özelliğine sahip olmasını istiyoruz diyelim. O zaman aşağıdaki şekilde bu özelliği sağlayabiliriz:
```CSS
input[name] {
  border-radius: 5px;
}
```
Veya
```HTML
<a href="https://example.org"/>
<a href="https://example.com"/>
<a href="https://basichelloworldpage.com"/>
```
kodunda içinnde 'example' geçen `a` elementlerine `{font-style: italic}` özelliği kazandırmak istiyoruz diyelim. Bu durumda aşağıdaki gibi yapmalıyız:
```CSS
a[href*="example"] {
  font-style: italic;
}
```
Nitelik seçiciyi bu kez de 'b' ile başlayan `a` elementine `{background-color: red;}` özelliği vermek için kullanalım:
```CSS
a[href^="b"] {
  background-color: red;
}
```
Şimdi de 'ge' ile biten `a` elementlerine `{color: blue;}` özelliği kazandırmaya çalışalım:
```CSS
a[href$="ge"] {
  color: blue;
}
```


Bu yazı [MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Selectors), [W3](https://www.w3schools.com/cssref/css_selectors.asp), [CSS Selectors](https://medium.com/design-code-repository/css-selectors-cheatsheet-details-9593bc204e3f), [Attribute Selectors](https://fatihhayrioglu.com/ozellik-secicileriattribute-selectors/) sayfalarından yardım alınarak hazırlandı.
