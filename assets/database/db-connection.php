<?php 
    try {
        $db = new PDO(
        "mysql:host=localhost;dbname=mural_proz;charset=utf8;", 
        "root", 
        "");

    } catch(Exception $e) {
        $e->getMessage();
    }