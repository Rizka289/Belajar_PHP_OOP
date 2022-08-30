<?php
require_once "Data/Person.php";

$person = new Person("Budi","Subang");
$person->name = "Rizka Rachmawati";
$person->address = "Semarang";
$person->country = "Indonesia";
var_dump($person);

$person2 = new Person("Joni","Semarang");
$person2->name = "Rizka Rachmawati";
$person2->address = 23;
$person2->country = null;
var_dump($person2);

// error
// $person2->address = [];