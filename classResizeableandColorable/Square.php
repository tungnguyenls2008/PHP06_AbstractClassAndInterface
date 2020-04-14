<?php
include_once "Resizeable.php";
include_once "Colorable.php";
include_once('Rectangle.php');

class Square extends Shape implements Resizeable,Colorable
{
    public $width;

    public function __construct($name, $width)
    {
        parent::__construct($name);
        $this->width = $width;
    }

    public function calculateArea()
    {
        return pow($this->width, 2);
    }

    public function resize($percentage)
    {
        return $this->calculateArea() + ($this->calculateArea() * $percentage) / 100;
    }

    public function howToColor()
    {
        echo "Color all four sizes";
    }
}