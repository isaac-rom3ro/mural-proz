<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $user = htmlspecialchars($_POST["user"]);
            $email = htmlspecialchars($_POST["email"]);
            $password = htmlspecialchars($_POST["password"]);

            if(empty($user) && empty($email) && empty($password)) {
                header("Location: ../../index.php?sign=empty-inputs");
            } else if(empty($user)) {
                header("Location: ../../index.php?sign=empty-user");
            } else if(empty($email)) {
                header("Location: ../../index.php?sign=empty-email");
            } else if(empty($password)) {
                header("Location: ../../index.php?sign=empty-password");
            } 
            // include '../database/db-connection.php';

        } catch(Exception $e) {
            $e->getMessage();
        }
}