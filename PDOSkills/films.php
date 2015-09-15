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
        require_once $_SERVER['DOCUMENT_ROOT'].'/PDO/database.php';
        if(!empty($_GET["f"])){
          //  $film_id=  intval($_GET["f"]);
        $film_id= $_GET["f"];
            
        }
        
        try {
        //$results=$dbh->query('select * from film where film_id= '.$film_id);
        $results=$dbh->prepare('select * from film where film_id= ?');
        $results->bindParam(1,$film_id);
        $results->execute();
        } catch (Exception $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
        }
        $films=$results->fetch();
        //echo var_dump($films);
        if($films==FALSE){
            echo 'Can not find by provided ID';
        }
        ?>
        
           <h1><?php
           
           echo $films['title']    
                   
                   ?></h1>
    </body>
</html>