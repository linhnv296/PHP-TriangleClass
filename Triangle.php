<?php


class Triangle Extends Shape
{
    public $color;

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
    function getArea()
    {
        $p = ($this->getSide1() + $this->getSide2()+$this->getSide3())/2;
        $rerultArea = sqrt($p*($p - $this->getSide1())*($p - $this->getSide2())*($p - $this->getSide3()));
        return $rerultArea;
    }
    function getPerimeter()
    {
        $result = $this->getSide1()+$this->getSide2()+$this->getSide3();
        return $result;
    }

    function getToString ()
    {
        if ($this->color <> ""){
            return "Color: ".$this->color." Area: ". $this->getArea()." Perimeter: ".$this->getPerimeter();
        }
        else{
            return " Area: ". $this->getArea()." Perimeter: ".$this->getPerimeter();
        }
    }

}