<?php
//Ejercicio 1
abstract class Animal
{
    public string $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
    abstract public function makeSound(): string;
}

class Dog extends Animal
{
    public function makeSound(): string
    {
        return "Bup, bup!";
    }
}

class Cat extends Animal
{
    public function makeSound(): string
    {
        return "Miau!";
    }
}
$perro = new Dog("Tobby");
$gato = new Cat("Lili");

echo $perro->getName() . " hace " . $perro->makeSound();
echo "<br>";
echo $gato->getName() . " hace " . $gato->makeSound();
