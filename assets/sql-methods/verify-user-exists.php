<?php
    function checkIfUserExistsByEmail($email, $pdo) {
        $userExist = false;

        $selectEmail = $pdo->prepare("SELECT email FROM administrators where email = :email");
        $selectEmail->bindParam("email", $email);
        $selectEmail->execute();

        $userExist = ($selectEmail->rowCount() > 0)? true: false;
        return $userExist;
    }    
