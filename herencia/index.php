<?php
// - Herencia cuando una clase deriva de otra clase
// - La clase secundaria heredará todas las propiedades , 
//    métodos públicos y protegidos de la clase principal.

class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "La fruta es {$this->name} y el color es {$this->color}.";
    }
}

class Strawberry extends Fruit{
    public function message()
    {
        echo '¿Soy una fruta o una baya?';
    }
}

$strawberry = new Strawberry("Strawberry","red");
$strawberry->message();
$strawberry->intro();