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
    public function infoAbout() {
        echo "rectangle<br>";
    }
};
class Triangle extends Figure implements IFigure {
    public function infoAbout() {
        echo "triangle<br>";
    }
};
class Square extends Figure implements IFigure {
    public function infoAbout() {
        echo "square<br>";
    }
};

