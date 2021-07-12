<?php
// - Las interfaces no pueden tener Propiedades.
// - Todos los métodos de la Interfaz deben ser publicos.
// - Todos los métodos en una interfaz son abstractos, por lo que no es necesaria 
//      implementar en el codigo la palabra abstracta.
interface InterfaceName{
    public function someMethod1();
    public function someMethod2($name, $color);
    public function someMethod3() : string;
}

// EXAMPLE
interface Animal{
    public function makeSound();
}

class Cat implements Animal{
    public function makeSound()
    {
        echo 'Wouw';
    }
}
class Dog implements Animal {
    public function makeSound() 
    {
      echo " Bark ";
    }
  }
  
class Mouse implements Animal {
    public function makeSound() 
    {
        echo " Squeak ";
    }
}
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

foreach($animals as $animal) {
    $animal->makeSound();
}