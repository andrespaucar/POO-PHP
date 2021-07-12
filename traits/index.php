<?php
// - Una clase secundaria solo puede heredar un padre único, entonces que pasa
//    si quiere heredar multiples comportamientos , los trairs resuelven el problema.
// - Para utilizar el Trait o rasgo se pone 'use' palabra clave en la clase secundaria.
trait TraitName{
    //...
}
class MyClass{
    use TraitName;
}

// Example
trait message1{
    public function msg1(){
        echo 'OOP is fun!';
    }
}
trait message2 {
    public function msg2() {
      echo "OOP reduces code duplication!";
    }
}
class Welcome{
    use message1;
}
class Welcome2{
    use message1,message2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();