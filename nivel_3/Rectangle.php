<?php

class Rectangle extends Shape
{

    public function __construct(public int|float $height, public int|float $width) {}
    public function calculateArea(): float
    {
        return $this->height * $this->width;
    }
}
