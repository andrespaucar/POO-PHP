<?php

// Overload the Methods  o Functions in PHP

class App{
    public function __call($name, $arguments)
    {
        $numberOfArguments = count($arguments);
 
        if (method_exists($this, $function = $name.$numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }else{

            echo 'no exit';
        }
    }

    private function foo1($argument1){
        echo $argument1;
    }
        
    // private function get($arg){
        // echo $arg;
    // }
}

$class = new App();
 $class->foo(5);
 $class->foo(9);
// var_dump($class->get('home')) ;
// echo $class->get('users');