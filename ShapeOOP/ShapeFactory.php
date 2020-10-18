<?php
require_once('./Shape.php');
require_once('../Shape/Square.php');
require_once('../Shape/Circle.php');
require_once('../Shape/Rectangle.php');
class ShapeFactory
{
    public function getShape($value)
    {

        switch ($value) {
            case 1:
                return new Square;
                continue;
            case 2:
                return new Circle;
                continue;
            case 3:
                return new Rectangle;
                continue;
        }
        return null;
    }
}

if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $key => $value) {
        $factory = new ShapeFactory();
        //Draw 
        $shapeCircle = $factory->getShape($value);
        $shapeCircle->draw();
        echo "<br />";
    }
}
if (empty($_POST['id'])) {
    echo '<a  style= "text-decoration: none"; href="ChooseShape.php" target="_parent" title ="Back to choose shapes"><strong>Lets Choose Shapes To Draw</strong></a>';
}
