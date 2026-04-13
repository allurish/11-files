<?php

//1

abstract class Figure {
    public $area, $color, $sides;
    abstract public function infoAbout();
};

class Rectangle extends Figure {
    public function infoAbout() {
        echo "rectangle<br>";
    }
};
class Triangle extends Figure {
    public function infoAbout() {
        echo "triangle<br>";
    }
};
class Square extends Figure {
    public function infoAbout() {
        echo "square<br>";
    }
};