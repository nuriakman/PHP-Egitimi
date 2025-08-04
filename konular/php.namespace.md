# PHP Namespace / İsim Uzayı

## Namespace'in Çakışmayı Engellemesine Canlı Örnek

Aynı isimdeki sınıfların farklı namespace'lerde nasıl kullanılabileceğini gösteren bir örnek:

```php
<?php

// Birinci namespace (Database bağlantısı için)
namespace Database;

class Connection {
    public function connect() {
        return "Veritabanı bağlantısı kuruldu (Database\Connection)";
    }
}

// İkinci namespace (Network bağlantısı için)
namespace Network;

class Connection {
    public function connect() {
        return "Ağ bağlantısı kuruldu (Network\Connection)";
    }
}

// Üçüncü namespace (Uygulamamızın ana kodu)
namespace App;

use Database\Connection as DBConnection;
use Network\Connection as NetConnection;

// Kullanım örnekleri
$db = new DBConnection();
echo $db->connect() . "\n";
// Çıktı: Veritabanı bağlantısı kuruldu (Database\Connection)

$net = new NetConnection();
echo $net->connect() . "\n";
// Çıktı: Ağ bağlantısı kuruldu (Network\Connection)

// Namespace kullanmasaydık ne olurdu?
// Aynı dosyada iki tane Connection sınıfı tanımlayamazdık!
// Fatal error: Cannot redeclare class Connection
```

## Senaryo Açıklaması:

1. **Database** namespace'i altında bir `Connection` sınıfı oluşturduk (veritabanı bağlantısı için)
2. **Network** namespace'i altında yine `Connection` sınıfı oluşturduk (ağ bağlantısı için)
3. **App** namespace'i içinde her ikisini de `use` ve `as` anahtar kelimeleriyle farklı isimlerle kullandık
4. Eğer namespace kullanmasaydık, aynı isimde iki sınıf tanımlayamayacağımız için hata alırdık

## Gerçek Dünya Örneği:

Örneğin bir projede:
- `App\Mail\Message` (Uygulamamızın mail sınıfı)
- `Vendor\Package\Message` (Yüklediğimiz bir kütüphanenin mail sınıfı)

Namespace olmasaydı, bu iki `Message` sınıfı çakışacak ve ikisini aynı projede kullanamayacaktık.

## Diğer Notlar

#### Simple use of namespace
```PHP
//food.php

<?php
namespace Food;

require ('Apple.php');
require('Orange.php');

use Apples;
use Oranges;

  Apples\eat();
  Oranges\eat();
?>

//Apple.php
<?php
namespace Apples;

function eat()
{
  echo "eat apple";
}
?>

//Orange.php
<?php
namespace Oranges;

function eat()
{
  echo "eat Orange";
}
?> 
```

#### Example #1 Declaring multiple namespaces, simple combination syntax
```PHP

<?php
namespace MyProject;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */ }

namespace AnotherProject;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */ }
?>

```

#### Example #2 Declaring multiple namespaces, bracketed syntax
```PHP
<?php
namespace MyProject {

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */ }
}

namespace AnotherProject {

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */ }
}
?>

```

#### Example #3 Declaring multiple namespaces and unnamespaced code
```PHP
<?php
namespace MyProject {

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */ }
}

namespace { // global code
session_start();
$a = MyProject\connect();
echo MyProject\Connection::start();
}
?>

---------------------------------------------------------------


Example #4 Declaring multiple namespaces and unnamespaced code
<?php
declare(encoding='UTF-8');
namespace MyProject {

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */ }
}

namespace { // global code
session_start();
$a = MyProject\connect();
echo MyProject\Connection::start();
}
?>
```

#### Namespace can be used in this way also
```PHP
<?php
namespace MyProject {

function connect() { echo "ONE";  }
    Sub\Level\connect();
}

namespace MyProject\Sub {
   
function connect() { echo "TWO";  }
    Level\connect();
}

namespace MyProject\Sub\Level {
   
    function connect() { echo "THREE";  }   
    \MyProject\Sub\Level\connect(); // OR we can use this as below
    connect();
}


