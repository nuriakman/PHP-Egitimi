## Temanın Kodlanması
- https://getbootstrap.com/ sitesine gidilir.Documentation bölümüne girdim.
- Starter template başlığı altındaki şablon kopyaladım.
- Sol tarafta çıkan menude Components bölümüne girdim ve Navbar sekmesine tıkladım ve aşağıdaki şablonu kopyaladım.

```html
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
```
- Tasarımda arka planın siyah olduğunu gördüm ve bg-light class'ı yerine style="background-color:#212121; yaptım.Components bölümünde navbar şablonlarını incelerken style verebildiğimi gördüm.

-  Tasarımda dropdown buttonlar gördüm.Documentation bölümünde sol tarafta çıkan pencereye dropdown yazdım ve gelen pencerede şu şablonu aldım.

```html
<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown link
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
```
- Yukarıdaki şablonu tasarıma göre düzenlendim.

- Navbar'a kodumu inceledim ve Home,link,dropdown,disabled gibi linkleri kaldırdım.Dropdown button'umu navbar'ıma ekledim.

- Tasarımda dropdown menüm sola yaslanmış şekildeydi.```<ul class="navbar-nav mr-auto">```  mr-auto class'ını ml-auto yaptım.

- Daha sonra li class'ının içerisine ```  <li class="nav-item active mr-3">``` mr-2 class'ını ekledim ve buttonlar ile arama bölümü arasında boşluk bıraktım.

- Dropdown menümün rengini yeşil yapmak için Components bölümünde button sekmesine tıkladım ve butonları inceledim.```btn btn-success``` class'ı ile butonumu yeşil yaptım ve Unvanlar ismini verdim.

- Arama kısmındaki Search butonunun ismini Bul! olarak değiştirdim ve btn btn-outline-success class'ını ```btn btn-success``` yaptım.

- Dropdown butonumu kopyaladım ve ismini Daireler olarak değiştirdim.Components bölümünde butonlarda gördüğüm ```btn btn-warning``` class'ını ekli olan ```btn btn-success``` class'ı ile değiştirdim.

- Ardından sol tarafta çıkan Layout sekmesi altında Grid başlığına girdim ve bootstrap grid sistemi inceledim.
- Daha sonra container ile sayfamın kenarlarında boşluk olacak şekilde çalışacağımız bir div açtım.
- Ardından bir satır oluşturdum.Row class'ı ile.
- Ardından sütünlarımı hazırladım.Layout bölümünde offset class'ını inceledim ve tek satırlarda sütünları ayarlamayı inceledim ve şu class'ı ekledim: ```<div class="col-md-10 offset-md-1">```.
- Daha sonra Components bölümünde jumbotron bölümüne girdim ve şu şablonu kopyaladım.
```html
<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
```
- Tasarımda şablonun üstten boşluğu olduğunu gördüm ve ```<div class="jumbotron mt-3">``` class'ına mt-3 class'ını ve text-center class'ını ekledim.

- Documentation menusünde sol sekmede açılan Utilities/text sekmesine tıkladım ve text-center class'ını ```<div class="jumbotron mt-3 text-center">``` class'ına ekledim.

- jumbotron'unun içeriğini tasarımdaki içerik ile değiştirdim.```<a class="btn btn-primary btn-lg" href="#" role="button">Tamam</a>``` class'ındaki btn-primary class'ını ```<a class="btn btn-success btn-lg" href="#" role="button">Tamam</a>``` olarak değiştirdim.

- Tasarımda navbar yazan yeri TUGM Telefon Rehberi olarak değiştirdim.Renginin gri olduğunu görünce title etiketlerinin altında style etikerleri açıp şu css dosyasını yazdım.
```
<style  type="text/css">

.navbar-brand {
 color:gray !important;
}
</style>
```
- Important yazmamızın nedeni bootstrap'in kendi css kodları bizim css kodlarımıza izin vermiyor.İlk o tanımlandığı için.Important yazdığımız zaman bizim kodumuzu geçerli kılıyor.

- kisiler.html sayfası oluşturdum ve index.html sayfasındaki jumbotron kodları hariç bütün kodları oraya yapıştırdım.

- kisiler.html sayfasında bir container oluşturdum ve mt-2 class'ı ile yukardan boşluk verdim.

- ardından bir h2 etiketi oluşturdum ve Arama sonucu yazdıp h2 etiketini kapattım.

- ardından bir hr etiketi ile çizgi çektim.

- Bir row classı yazıp satır oluşturdum.Ardından sütünlar için ```<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">```
bu grid yapısını kullandım.

- Sonra bir center etiketi açtım ve arasına img etiketi ile resmimi dahil ettim. ```<img src="personel.resimleri/avatar.png" alt="" class="img-rounded" width="150" height="200">```

- Arından bir div etiketi açtım ve  Documentation bölümünde sol tarafta bulunan Utilities/text sekmesinden text classlarını inceledim.Div etiketime text-muted classını verdim.

- Daha sonra tasarımda fotoğraflara tıklayınca bir pencere açıldığını gördüm.Documentation sekmesinde components/modal/ bölümünden şu şablonu kopyaladım.
```
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
```

- Benim tasarımımda button olmadığı için button'u sildim ve button'dan şu classları koyaladım.
```
data-toggle="modal" data-target="#exampleModal"
```

- Buradaki classları şu class'ıma ekledim.
```
<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" data-toggle="modal" data-target="#exampleModal"">
```
- Burada yapmak istediğimiz resimlere tıklanınca pencerede gelmesini istememiz.Az önce button'a tıklanınca geliyordu.data-target bölümünde verdiğimiz ismi nereye bağlarsak orası açılır.

- Tıkladığımız zaman bizim modalımız açılır.O kodlar şuradadır.
```
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
```

- Burayı tasarıma göre düzenlemeye başladım.
- Modal title bölümüne isim-soyisim yazdım.
- Save changes butonunu sildim ve close butonuna kapat ismini verdim.
- Daha sonra ```  <div class="modal-body">``` altına resimimi ekledim şu kod ile ```img src="personel.resimleri/avatar.png" alt="" class="img-rounded" width="150" height="200">```
- Documentation/Content/Table sekmelerinden şu şablonu kopyaladım.
```
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
```

- Bölümünü ekledim ve fazla satırları çıkartıp tasarıma göre ad-Soyad,telefon , oda no gibi bölümleri ekledim.Daha sonra açılan pencerenin küçük olduğunu farkettim ve components/modal/ kısmında Optional sizes başlığı altındaki classları inceleyip ```<div class="modal-dialog modal-lg" role="document">``` model-lg class'ını ekledim.

- Açılan modal'da tablo aşağıda kaldığı için bir row class'ı ile satır oluşturdum ve col-3 ile resmimi col-9 class'ı ile tablomu tek bir satıra yerleştirdim.
