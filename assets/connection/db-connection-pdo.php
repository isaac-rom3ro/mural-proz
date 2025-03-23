<?php 
    //starting a new connection with our database
    $host = "";
    $dbname = "";
    $charset = "";
    $user = "";
    $passwordOfDB = "";

    try {
        $pdo = new PDO(
        "mysql:host=$host;
        dbname=$dbname;
        charset=$charset;", 
        "$user", 
        "$passwordOfDB");

        //Set attributes to make errors to be throw as exceptions 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(Exception $e) {
        $e->getMessage();
    }