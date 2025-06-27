<?php
class Circle extends Shape
{

    public function __construct(public int|float $radio) {}
    public function calculateArea(): float
    {
        return M_PI * pow($this->radio, 2);
    }
}