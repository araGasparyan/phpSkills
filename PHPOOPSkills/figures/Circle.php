<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/GeoFigures/opt/Figure.php';

class Circle extends Figure {
    private $radius="";
    
    function getRadius() {
        return $this->radius;
    }

    function setRadius($radius) {
        $this->radius = $radius;
    }

    function perimetr(){
        $per=$this->radius*2;
        return $per;         
    }
    
    function __construct($radius) {
        $this->radius = $radius;
    }

    
    public function area() {
        $area=($this->radius+$this->radius);
       
        return $area;
    }
}
