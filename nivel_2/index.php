<?php

require_once 'Shape.php';
require_once 'Triangle.php';
require_once 'Rectangle.php';

$triangulo1 = new Triangle(4,3);
$rectangle1 = new Rectangle(5,7);

echo "El área del triángulo es: " . $triangulo1->calculateArea();
echo "<br>";
echo "El área del rectángulo es: " . $rectangle1->calculateArea();