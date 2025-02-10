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
            } else {
                include '../database/db-connection.php';
                // $hash = password_hash($password, PASSWORD_DEFAULT);
                
                $stmt = $db->prepare("SELECT * FROM admin WHERE email = :email AND pass = :pass");
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":pass", $password);
                $stmt->execute();
                $result = $stmt->rowCount();

                if($result) {
                    echo "user registered";
                } else {
                    echo "user unregistered";
                }
            }
        } catch(Exception $e) {
            $e->getMessage();
        }
}