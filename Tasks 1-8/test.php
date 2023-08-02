<?php
abstract class Shape
{
    abstract function calculate_Area();
    public function calculate()
    {
        echo (" hi ");
    }
}

class Rectangle extends Shape
{
    private $length;
    private $width;
    public function getlength()
    {
        return $this->length;
    }
    // public function calculate()
    // {
    //     echo (" hello ");
    // }

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }
    public function calculate_Area()
    {
        return $this->length * $this->width;
    }

}

class circle extends Shape
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function calculate_Area()
    {
        return M_PI * pow($this->radius, 2);
    }
}
$rectangle = new Rectangle(5, 6);
$circle = new circle(6);

echo 'Rectangle =' . $rectangle->calculate_Area();

echo '<br>';
echo 'Circle= ' . $circle->calculate_Area();
echo '<br>';
// abstract class Shape {
//     abstract public function getArea();
// }

//  abstract class Color {
//     abstract public function getColor();
// }

// class Rectangle extends Shape,Color{ // Error: PHP only supports single inheritance
//     // Implementation of getArea() method
//     public function getArea() {
//         // Implementation code
//     }
// }
//!Interface
interface Shape2
{
    public function getArea();
    // public function area(){

    // }
}
interface Color
{
    public function getColor();
}
class Rectangle2 extends Shape implements Shape2, Color
{
    private $color;
    private $width;
    private $length;
    public function __construct($length, $width, $color)
    {
        $this->length = $length;
        $this->width = $width;
        $this->color = $color;

    }
    public function getArea()
    {
        return $this->length * $this->width;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function calculate_Area()
    {
    }
}

$rectangle2 = new Rectangle2(2, 3, 'red');

echo 'Area= ' . $rectangle2->getArea();
echo '<br>';
echo 'Color= ' . $rectangle2->getColor();

?>