<?php
// - Una clase abstracta es una clase que contiene almenos un método abstracto.
// - Los métodos abstracto no se implementa codigo.
// - Los métodos de la clase secundaria tiene que definirse con el mismo nombre,parametros,modificador.
abstract class ParentClass {
    public $name;
    abstract public function someMethod1();
    abstract public function someMethod2($name, $color);
    public function someMethod3()
    {
        echo 'Tutorial';
    }
}

// Example
abstract class Car {
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro(): string;
}

class Audi extends Car{
    public function intro():string 
    {
        return "Elija calidad Alemana!¡Soy un {$this->name}";
    }
}
class Volvo extends Car{
    public function intro():string 
    {
        return "Orgulloso de ser sueco!¡Soy un {$this->name}";
    }
}

$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "<br>";