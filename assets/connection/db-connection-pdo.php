<?php 
    //starting a new connection with our database
    $host = "";
    $dbname = "";
    $charset = "";
    $user = "";
    $password = "";

    try {
        $pdo = new PDO(
        "mysql:host=$host;
        dbname=$dbname;
        charset=$charset;", 
        "$user", 
        "$password");

        //Set attributes to make errors to be throw as exceptions 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        var_dump($pdo);
    } catch(Exception $e) {
        $e->getMessage();
    }