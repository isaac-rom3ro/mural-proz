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
        }

    }