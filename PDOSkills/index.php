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
        try {
       $results=$dbh->query('select * from film');
      
        } catch (Exception $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
        }
       $films=$results->fetchAll();
       foreach ($films as $film){
           echo '<li class="filmItem">'.'<a href="films.php?f='.$film["film_id"].'">'.$film["title"].'</a></li>';
       }
        
        ?>
    </body>
</html>
