<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

error_reporting(E_ALL);
ini_set('display_errors', 'On');

date_default_timezone_set("Europe/Zagreb");

require_once (ROOT . DS . 'core' . DS . 'Circle.php');
require_once (ROOT . DS . 'core' . DS . 'Triangle.php');

$circle = new Circle(3);
$circle->calc_circumference();
$circle->calc_area();

echo "<br>";

$triangle = new Triangle(4, 3, 5);
echo "Opseg trokuta {$triangle->calc_circumference()} <br>";
$triangle->calc_area();
