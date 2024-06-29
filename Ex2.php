 <!-- Programer name : wuttiwong -->

<?php
    echo   "Hello";
    echo   "<br>";
    echo    2+3;
    echo   "<br>";
    echo    "2 + 3 = " . 2+3;
    echo   "<br>";
    echo    strlen("Thailand");
    echo   "<br>";
    echo str_word_count("Hello world!");
    echo   "<br>";
    echo strpos("Hello world!", "d");
    echo   "<br>";
    $x = "Hello World!";
    echo strtoupper($x);
    echo strtolower($x);
    echo   "<br>";
    $x = "Hello World!";
    echo str_replace("World", "Dolly", $x);
    echo   "<br>";
    echo strrev($x);
    echo   "<br>";
    $x = " Hello World! ";
    echo trim($x);
    echo   "<br>";
    $x = "Hello World!";
    $y = explode(" ", $x);
    print_r($y);
    echo   "<br>";
    $x = "Hello";
    $y = "World";
    $z = $x . $y;
    echo $z;
    echo   "<br>";
    $x = "Hello";
    $y = "World";
    $z = $x . " " . $y;
    echo $z;
    echo   "<br>";
    $x = "Hello";
    $y = "World";
    $z = "$x $y";
    echo $z;
    echo   "<br>";
    $x = "Hello World!";
    echo substr($x, 6, 5);
    echo   "<br>";
    $x = "Hello World!";
    echo substr($x, 6);
    echo   "<br>";
    $x = "Hello World!";
    echo substr($x, -5, 3);
    echo   "<br>";
    $x = "Hi, how are you?";
    echo substr($x, 5, -3);
    echo   "<br>";
    $x = "We are the so-called \"Vikings\" from the north.";
    echo $x;

    $a = 5;
    $b = 5.34;
    $c = "25";

    var_dump($a);
    var_dump($b);
    var_dump($c);

    $x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

$x = 10.365;
var_dump(is_float($x));

$x = 1.9e411;
var_dump($x);

$x = acos(8);
var_dump($x);

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;

$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  
  $myCar = (array) $myCar;
  var_dump($myCar);

  $a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array

$a = (object) $a;
$b = (object) $b;

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

// $a = (unset) $a;
// $b = (unset) $b;
// $c = (unset) $c;
// $d = (unset) $d;
// $e = (unset) $e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

?>