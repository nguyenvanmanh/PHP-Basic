<?php
require_once('../ShapeOOP/Shape.php');
// Rectangle Class
class Rectangle implements Shape
{
    public function draw()
    {
        echo "Draw Rectangle";
    }
}