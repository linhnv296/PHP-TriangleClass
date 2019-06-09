<?php


class Shape
{
    protected $side1 = 1.0;
    protected $side2 = 1.0;
    protected $side3 = 1.0;
    public function __construct()
    {
    }
    public function setInputSide123($side1, $side2, $side3){
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;

    }

    /**
     * @param float $side1
     */
    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    /**
     * @return float
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @param float $side2
     */
    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    /**
     * @return float
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @param float $side3
     */
    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    /**
     * @return float
     */
    public function getSide3()
    {
        return $this->side3;
    }
}