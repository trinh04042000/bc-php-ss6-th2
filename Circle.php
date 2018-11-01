<?php
include "Shape.php";
class Circle extends Shape
{
    public $radius;
    public function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->radius= $radius;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius,2);
    }
    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }
}
