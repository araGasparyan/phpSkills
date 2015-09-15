<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/GeoFigures/opt/Figure.php';

class Triangle extends Figure {
    private $side1="";
    private $side2;
    private $side3;
    
    function getSide1() {
        return $this->side1;
    }

    function getSide2() {
        return $this->side2;
    }

    function getSide3() {
        return $this->side3;
    }

    function setSide1($side1) {
        $this->side1 = $side1;
    }

    function setSide2($side2) {
        $this->side2 = $side2;
    }

    function setSide3($side3) {
        $this->side3 = $side3;
    }

    function __construct($side1, $side2, $side3) {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    function perimetr(){
        $per=$this->side1+$this->side2+$this->side;
        return $per;
    }
    
    function area(){
        $area=$this->side1;
        return $area;
    }
}
