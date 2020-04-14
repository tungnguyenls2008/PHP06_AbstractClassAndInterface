<?php
include_once "Resizeable.php";
include_once('Circle.php');

class Cylinder extends Circle implements Resizeable
{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }

    public function resize($percentage)
    {
        return $this->calculateArea() + ($this->calculateArea() * $percentage) / 100;
    }
}