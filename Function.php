<?php
require_once "Data/Person.php";

$eko = new Person("Eko", "Kalimantan");
$eko->name = "Eko";
$eko->sayHello("Rizka");

$joko = new Person("Joko", null);
$joko->name = "Joko";
$joko->sayHello(null);

$eko->info();
$joko->info();