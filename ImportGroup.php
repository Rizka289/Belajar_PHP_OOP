<?php
require_once "Data/Conflict.php";
require_once "Data/Helper.php";

use Data\One\{Conflict as Conflict1, Sample, Dummy};
use function Helper\{helpMe};

$conflict = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();