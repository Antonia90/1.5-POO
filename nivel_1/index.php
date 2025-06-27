<?php
require_once 'Animal.php';
require_once 'Dog.php';
require_once 'Cat.php';

echo "<h1>Ejercicio 1 </h1>";
$perro = new Dog("Tobby");
$gato = new Cat("Lili");

echo $perro->getName() . " hace " . $perro->makeSound();
echo "<br>";
echo $gato->getName() . " hace " . $gato->makeSound();
