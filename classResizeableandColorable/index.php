<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$cylinder = new Cylinder('Cylinder 01', 3, 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

$rectangle = new Rectangle('Rectangle 01', 3, 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Square('Square 01', 4);
echo 'Square area: ' . $square->calculateArea() . '<br />';

echo '----------------------------------<br>';
$percentage = rand(1, 100);
echo 'Percentage: ' . $percentage . '<br>';
echo 'Circle area resized: ' . $circle->resize($percentage) . '<br />';
echo 'Circle perimeter resized: ' . $circle->resize($percentage) . '<br />';

echo 'Cylinder area resized: ' . $cylinder->resize($percentage) . '<br />';
echo 'Cylinder perimeter resized: ' . $cylinder->resize($percentage) . '<br />';

echo 'Rectangle area resized: ' . $rectangle->resize($percentage) . '<br />';
echo 'Rectangle perimeter resized: ' . $rectangle->resize($percentage) . '<br />';

echo 'Square area: ' . $square->resize($percentage) . '<br />';
echo $square->howToColor();