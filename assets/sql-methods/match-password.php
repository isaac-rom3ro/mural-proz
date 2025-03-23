<?php
    function verifyPasswordMatch($email, $password, $pdo) {
        $arePasswordEqual = false;

        $selectPassword = $pdo->prepare("SELECT password from administrators WHERE email = :email");
        $selectPassword->bindParam("email", $email);
        $selectPassword->execute();

        $fetchInfo = $selectPassword->fetch(PDO::FETCH_ASSOC);
        $passwordFromDatabase = $fetchInfo["password"];

        $arePasswordEqual = ($password == $passwordFromDatabase)? true: false;

        return $arePasswordEqual;
    }