<?php
require_once "Data/Person.php";

define("APPLICATION", "Belajr PHP OOP");

// versi php 7.4
const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

// Mengakses constant
echo Person::AUTHOR . PHP_EOL;