<?php

abstract class Shape
{
    public int|float $height;
    public int|float $width;

    function __construct(int|float $height, int|float $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    abstract public function calculateArea(): float;
}
