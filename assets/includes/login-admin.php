<?php 
    //Verify if the user submitted the form
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            //Catch the information that contains inside the inputs
            //Preventing SQL INJECTION with htmlspecialchars function
            $user = htmlspecialchars($_POST["user"]);
            $email = htmlspecialchars($_POST["email"]);
            $password = htmlspecialchars($_POST["password"]);

            //Check if the user didn't fill the input
            if(empty($user) && empty($email) && empty($password)) {
                header("Location: ../../index.php?sign=empty-inputs");
            } else if(empty($user)) {
                header("Location: ../../index.php?sign=empty-user");
            } else if(empty($email)) {
                header("Location: ../../index.php?sign=empty-email");
            } else if(empty($password)) {
                header("Location: ../../index.php?sign=empty-password");
            } else { //if user filled correctly 
                include '../database/db-connection.php'; //include the connection

                //prepare and did the query with bindParam
                $stmt = $db->prepare("SELECT * FROM admin WHERE email = :email AND pass = :pass");
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":pass", $password);
                $stmt->execute();
                
                $result = $stmt->rowCount(); //Get the number of rows returned

                if($result) { //if it returns 1 
                    echo "user registered";
                } else { // if it returns 0
                    echo "user unregistered";
                }
            }
        } catch(Exception $e) {
            echo $e->getMessage();
        }
}