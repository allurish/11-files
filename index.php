<?php

//1

abstract class Figure {
    public $area, $color, $sides;
    abstract public function infoAbout();
};

interface IFigure {
    public function getArea();
}

class Rectangle extends Figure implements IFigure {
    public function __construct(private $a, private $b)
    {
        $this->a = $a;
        $this->b = $b;
        $sides = 4;
    }
    public function infoAbout() {
        echo "это класс прямоугольника у него $sides стороны<br>";
    }
    public function getArea() {
        return $this->a*$this->b;
    }
};
class Triangle extends Figure implements IFigure {
    public function __construct(private $a, private $b, private $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $sides = 3;
    }
    public function infoAbout() {
        echo "это класс треугольника у него $sides стороны<br>";
    }
    public function getArea() {
        $p = ($this->a+$this->b+$this->c)/2;
        return sqrt($p*($p-$this->a)*($p-$this->b)*($p-$this->c));
    }
};
class Square extends Figure implements IFigure {
    public function __construct(private $a)
    {
        $this->a = $a;
        $sides = 4;
    }
    public function infoAbout() {
        echo "это класс квадрата у него $sides стороны<br>";
    }
    public function getArea() {
        return $this->a*$this->a;
    }
};

$sq1 = new Square(5);
$sq2 = new Square(4.7);
$tr1 = new Triangle(9, 4, 6);
$tr2 = new Triangle(8.1, 4.3, 5);
$re1 = new Rectangle(10, 9.2);
$re2 = new Rectangle(22.8, 115);

echo "площадь первого квадрата - " . $sq1->getArea() . "<br>";
echo "площадь второго квадрата - " . $sq2->getArea() . "<br>";
echo "площадь первого треугольника - " . $tr1->getArea() . "<br>";
echo "площадь второго треугольника - " . $tr2->getArea() . "<br>";
echo "площадь первого прямоугольника - " . $re1->getArea() . "<br>";
echo "площадь второго прямоугольника - " . $re2->getArea() . "<br>";


