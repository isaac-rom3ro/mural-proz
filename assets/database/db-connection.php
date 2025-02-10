<?php 
    //Block that start a new database connection
    try {
        $db = new PDO(
        "mysql:host=localhost;
        dbname=mural_proz;
        charset=utf8;", 
        "root", 
        "");

    } catch(Exception $e) {
        $e->getMessage();
    }