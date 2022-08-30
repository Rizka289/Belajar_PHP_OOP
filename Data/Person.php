<?php

class Person 
{
    const AUTHOR = "Programmer Zaman Now";
    // properties 
    var $name;
    // properties ketika datanya null 
    var ?string $address = null;
    // default value
    var string $country = "Indonesia";

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name)
    {
        if(is_null($name))
        {
            echo "Hi, My name is $this->name" . PHP_EOL;
        }else {

            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }
    function info()
    {
        // self untuk mengakses constant didalam kelas
        echo "Author : ". self::AUTHOR . PHP_EOL;
    }

    function __destruct()
    {
        echo "Object Person $this->name is destroyed" . PHP_EOL;
    }
} 