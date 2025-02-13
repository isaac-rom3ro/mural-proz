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
                include_once '../database/db-connection.php'; //include the connection

                //prepare and did the query with bindParam
                $stmt = $db->prepare("SELECT * FROM admin WHERE email = :email AND pass = :pass");
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":pass", $password);
                $stmt->execute();
                
                $result = $stmt->rowCount(); //Get the number of rows returned

                if($result) { 
                    $user = $stmt->fetch(PDO::FETCH_ASSOC); //Get the user's information 
                    
                    session_start(); //start a session
                    $_SESSION["user-id"] = $user["user_id"]; //Get the id from the database and put it inside a session variable called user-id   

                    header("Location: ../../pages/mural.php"); //redirect to the main page
                } else { // if it returns 0
                    header("Location: ../../index.php?sign=user-not-found");
                }
            }
        } catch(Exception $e) {
            echo $e->getMessage();
        }
}