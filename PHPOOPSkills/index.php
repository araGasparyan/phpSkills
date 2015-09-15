<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
   
       require_once $_SERVER['DOCUMENT_ROOT'].'/GeoFigures/figures/Circle.php';
       require_once $_SERVER['DOCUMENT_ROOT'].'/GeoFigures/figures/Triangle.php';
        
        //$figure = new Circle(10);
        $figure = new Triangle(3,4,5);
    
        echo $figure->area();
        
        
        
        ?>
    </body>
</html>
