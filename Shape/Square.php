<?php
require_once('../ShapeOOP/Shape.php');
// Square Class
class Square implements Shape
{
    public function draw()
    {
        echo "Draw Square";
    }
}