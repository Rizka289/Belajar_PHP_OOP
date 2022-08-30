<?php


class Manager {

    var string $name;

    // void -> tidak mengembalikan value 
    function sayHello(string $name):void{
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    // function overriding -> menimpa dengan function barunya
    function sayHello(string $name):void{
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }

}