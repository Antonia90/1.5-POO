<?php

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





