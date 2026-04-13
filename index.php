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
        echo "rectangle<br>";
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
        echo "triangle<br>";
    }
};
class Square extends Figure implements IFigure {
    public function __construct(private $a)
    {
        $this->a = $a;
        $sides = 4;
    }
    public function infoAbout() {
        echo "square<br>";
    }
};

