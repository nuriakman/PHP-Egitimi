# PHP Örnek Çalışmaları

## PHP ile Excell'e Veri Aktarma (Basit Liste)

# Örnek 1
```PHP
<?php
    
    $VERILER  ="";
    $VERILER .="SicilNo\tAdıSoyadı\tUnvanı\n";
    $VERILER .="123\tNuri Akman\tProgramcı\n";
    $VERILER .="456\tHasan Çiçek\tUzman\n";
    $VERILER .="789\tKemal Mutlu\tÖğrenci\n";


    $filename ="liste.xls";
    header('Content-type: application/ms-excel');
    header('Content-Disposition: attachment; filename='.$filename);
    echo $VERILER;

?>

```

# Örnek 2
```PHP
<?php
    
    $VERILER = array();
    $VERILER[] = "SicilNo\tAdıSoyadı\tUnvanı";
    $VERILER[] = "123\tNuri Akman\tProgramcı";
    $VERILER[] = "456\tHasan Çiçek\tUzman";
    $VERILER[] = "789\tKemal Mutlu\tÖğrenci";

    $filename ="liste.xls";
    header('Content-type: application/ms-excel');
    header('Content-Disposition: attachment; filename='.$filename);
    echo implode("\n", $VERILER);

?>

```

# Örnek 3
```PHP
<?php

    function Birlestir($arr) {
        return implode("\t", $arr);
    }
    
    $VERILER = array();
    $VERILER[] = array("SicilNo", "AdıSoyadı", "Unvanı");
    $VERILER[] = array("123", "Nuri Akman", "Programcı");
    $VERILER[] = array("456", "Hasan Çiçek", "Uzman");
    $VERILER[] = array("789", "Kemal Mutlu", "Öğrenci");

    $filename ="liste.xls";
    header('Content-type: application/ms-excel');
    header('Content-Disposition: attachment; filename='.$filename);

    
    $TEMP = array_map('Birlestir', $VERILER);

    echo implode("\n", $TEMP);

?>
```




