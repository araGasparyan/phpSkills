<?php

  ini_set('display_errors', 'On');
        $user='user1';
        $pass='ca8e4957a6';
        try {
        $dbh = new PDO('mysql:host=109.75.36.10;dbname=sakila', $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
        }
