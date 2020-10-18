<?php
require_once('../ShapeOOP/Shape.php');
// Circle Class
class Circle implements Shape
{
    public function draw()
    {
        echo "Draw Circle";
    }
}