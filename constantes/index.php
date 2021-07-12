<?php
// - Las constantes no se pueden cambiar una vez que se declaran.
// - Las constantes en una clase pueden ser útiles si necesita definir 
//  algunos datos constantes detro de una clase.
// - Una constante de clase se declara dentro de una clase con la 'const' palabra clave.
// - Para user la constante dentro de la clase usamos 'self' palabra clave.
class Goodbye{
    const LEAVING_MESSAGE = "Trank your visting";
    public function byebye()
    {
        echo self::LEAVING_MESSAGE;
    }
}
echo Goodbye::LEAVING_MESSAGE;
echo '<br>';
$goodbye = new Goodbye;
$goodbye -> byebye();