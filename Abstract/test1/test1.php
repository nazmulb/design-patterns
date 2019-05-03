<?php
error_reporting(E_USER_WARNING);

function __autoload($class)
{
    include_once ($class.'.php');

    // Check to see if the include declared the class
    if (!class_exists($class, false)) {
        trigger_error("Unable to load class: $class", E_USER_WARNING);
    }
}

/*
$sc = new StandardCalculator(5, 3);
echo "add=".$sc->add()."<br>";
echo "x=".$sc->getX()." y=".$sc->getY()."<br>";
echo "sub=".$sc->sub()."<br>";
$sc->setX(10);
echo "x=".$sc->getX()." y=".$sc->getY()."<br>";
echo "sub=".$sc->sub()."<br>";
$sc->setY(6);
echo "x=".$sc->getX()." y=".$sc->getY()."<br>";
echo "sub=".$sc->sub()."<br>";
//print_r($sc);
*/

$sc = new ScientificCalculator(12, 5);
echo "x=".$sc->getX()." y=".$sc->getY()."<br>";
echo "mult=".$sc->mult()."<br>";
$sc->setX(2);
$sc->setY(3);
echo "x=".$sc->getX()." y=".$sc->getY()."<br>";
echo "power=".$sc->power()."<br>";

?>