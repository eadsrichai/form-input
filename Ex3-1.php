<?php
namespace myArea2;

function myValue2(){
  return __NAMESPACE__;
}
?>

<?php
namespace myArea3;

class Fruits3 {
  public function myValue3(){
    return Fruits::class;
  }
}
?>


<?php
class Fruits {
  public function myValue(){
    return __CLASS__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();
?>

<?php
echo "<br>";
echo __DIR__;

echo "<br>";
echo __FILE__;

echo "<br>";
function myValue(){
  return __FUNCTION__;
}
echo myValue();
echo "<br>";
echo __LINE__;
echo "<br>";

class Fruits1 {
    public function myValue(){
      return __METHOD__;
    }
  }
  $kiwi = new Fruits1();
  echo $kiwi->myValue();

echo "<br>";

?>


<?php
// echo myValue2();
echo "<br>";

trait message1 {
    public function msg1() {
      echo __TRAIT__; 
    }
  }
  
  class Welcome {
    use message1;
  }
  
  $obj = new Welcome();
  $obj->msg1();

echo "<br>";

$kiwi = new Fruits3();
echo $kiwi->myValue3();
?>

?>