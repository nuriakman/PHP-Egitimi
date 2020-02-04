# PHP Örnek Çalışmaları

## PHP ile MarkDown Parser Kullanımı

KAYNAKLAR: 
- https://github.com/erusev/parsedown
- https://github.com/erusev/parsedown/wiki/Usage

### Hazırlık
```
mkdir mdParserOrnegi
cd mdParserOrnegi
composer require erusev/parsedown
```

### `mdParserOrnegi.php` dosyası içeriği
```PHP
<?php

require 'vendor/autoload.php';

$Parsedown = new Parsedown();

// Temel markdown kullanımı:

echo $Parsedown->text('Hello _Parsedown_!'); // Şu çıktıyı üretir: <p>Hello <em>Parsedown</em>!</p>

// inline markdown kullanımı:

echo $Parsedown->line('Hello _Parsedown_!'); // Şu çıktıyı üretir: Hello <em>Parsedown</em>!

```
