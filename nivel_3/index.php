<?php


require_once 'Triangle.php';
require_once 'Rectangle.php';
require_once 'Circle.php';

$triangulo1 = new Triangle(4,3);
$rectangle1 = new Rectangle(5,7);
$circle1 = new Circle(4);

echo "El área del triángulo es: " . $triangulo1->calculateArea();
echo "<br>";
echo "El área del rectángulo es: " . $rectangle1->calculateArea();
echo "<br>";
echo "El área del círculo es: " . number_format($circle1->calculateArea(), 2);