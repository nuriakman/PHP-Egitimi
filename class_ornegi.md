# PHP Sınıf Örneği (Class)

## Örnekte kullanılan komutlar ve açıklamaları

### serialize
Bir değerin saklanabilir bir gösterimini üretir 

### unserialize
Bir PHP değerini saklanmış gösteriminden oluşturur 

### file_exists
Bir dosya veya dizinin mevcut olup olmadığına bakar

### file_get_contents
Dosya içeriğinin tamamını bir dizge olarak döndürür

### file_put_contents
Bir dizgeyi bir dosyaya yazar 

### unset
Belirtilen değişkeni tanımsız yapar

### array()
Dizi tanımlamak için kullanılır


```PHP
<?php

class uyeler {
   private $DosyaAdi;
   
   public  $veriler;

   function __construct() {
      $this->DosyaAdi = "veriler.txt";
      if( file_exists( $this->DosyaAdi )) {
         $txtVeriler = file_get_contents( $this->DosyaAdi );
         $this->veriler = unserialize($txtVeriler);
      } else {
         $this->veriler = array();
      }
   }

   function sakla($YeniDosyaAdi = "") {
      if( $YeniDosyaAdi == "" ) $YeniDosyaAdi = $this->DosyaAdi;
      $txtVeriler = serialize($this->veriler);
      file_put_contents($YeniDosyaAdi, $txtVeriler );
   }

   function ekle($ad, $soyad) {
      $this->veriler[] = array('ad' => $ad, 'soyad' => $soyad);
   }
 
   function duzenle($no, $ad, $soyad) {
      if(!isset($this->veriler[$no])) return false;
      $this->veriler[$no] = array('ad' => $ad, 'soyad' => $soyad);
      return true;
   }
 
   function sil($no) {
      unset($this->veriler[$no]);
   }
 
   function listele() {
      foreach($this->veriler as $no => $uye) {
         echo $no . ' - ' . $uye['ad'] . ' ' . $uye['soyad'] . '<br/>';
      }
   }


}


$liste = new uyeler(); // Üyeler adlı sınıftan bir nesne oluştur

$liste->ekle('Nuri', 'Akman'); // ekle metodunu çağır

$liste->ekle('Kemal', 'MUTLU'); // ekle metodunu çağır

$liste->duzenle(0, 'Nuri', 'AKMAN'); // duzenle metodunu çağır

$liste->listele();  // listele metodunu çağır

$liste->sil(1);  // sil metodunu çağır

$liste->listele();  // listele metodunu çağır

$liste->sakla();  // sakla metodunu çağır

?>
```