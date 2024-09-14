<?php

abstract class Shape
{
    abstract public function calculateArea() : int;
}

class Circle extends Shape
{
    private $radius;

    public function __construct ($radius)
    {
        $this->radius = $radius;
    }
    public function calculateArea() : int
    {
        return pi() * pow($this->radius, 2);
    }
}

class Triangle extends Shape
{
    private $base;
    private $height;

    public function __construct ($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }
    public function calculateArea() : int
    {
        return (1/2) * $this->base * $this->height;
    }
}

class Ractangle extends Shape
{
    private $width;
    private $height;

    public function __construct ($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea() : int
    {
        return $this->width * $this->height;
    }
}



$circle = new Circle(7);
$ractangle = new Ractangle(7, 5);
$triangle = new Triangle(6, 4);

echo "Area of the Circle is ".$circle->calculateArea();
echo "<br>";
echo "Area of the Triangle is ".$triangle->calculateArea();
echo "<br>";
echo "Area of the Ractangle is ".$ractangle->calculateArea();
