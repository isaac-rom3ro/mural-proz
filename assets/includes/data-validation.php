<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //Catching and sanitizing data from form
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);

        //If whatever input is empty is gonna return true
        $isEmptyEmail = (bool) empty($email);
        $isEmptyPassword = (bool) empty($password);

        //If both are empty
        if($isEmptyEmail && $isEmptyPassword) {
            header("Location: ../../index.php?signin=inputs-empty");
        } else if($isEmptyEmail && !$isEmptyPassword) { //Email is empty
            header("Location: ../../index.php?signin=email-empty");
        } else if(!$isEmptyEmail && $isEmptyPassword) { //Password is empty
            header("Location: ../../index.php?signin=password-empty");
        } else {
            include "../connection/db-connection-pdo.php";
            include "../sql-methods/verify-user-exists.php";
            
            if(!checkIfUserExistsByEmail($email, $pdo)) { //check if the user exists
                header("Location: ../../index.php?signin=undefined-user");
            } else {
                include "../sql-methods/match-password.php";
                
                if(!verifyPasswordMatch($email, $password, $pdo)) {
                    header("Location: ../../index.php?signin=incorrect-password");
                } else {
                    session_start();
                    $_SESSION["email"] = $email;
                    header("Location: ../../pages/mural.php");
                }
            }
        }
    }