# PHP Namespace / İsim Uzayı

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


