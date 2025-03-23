<?php
    $signinError = $_GET["signin"];
    $areInputsEmpty = false;
    $emptyEmail = false;
    $emptyPassword = false;
    $undefinedUser = false;
    $incorrectPassword = false;

    if($signinError == "inputs-empty") {
        $areInputsEmpty = true;
    } else if($signinError == "email-empty") {
        $emptyEmail = true;
    } else if($signinError == "password-empty") {
        $emptyPassword = true;
    } else if($signinError == "undefined-user") {
        $undefinedUser = true;
    } else if($signinError == "incorrect-password") {
        $incorrectPassword = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./assets/style/login.css">
</head>
<body>
    <form action="./assets/includes/data-validation.php" method="POST">
        <div class="logo">    
                <img class="img" src="./assets/images/login-logo.png" alt="">
        </div>
        
        <input type="text" name="email" placeholder="Email">

        <input type="password" name="password" placeholder="Password">

        <button type="submit">Login</button>

        <?php
            if($areInputsEmpty) {
                echo "Those inputs are empty bra!";
            } else if($emptyEmail) {
                echo "Email input is empty brother!";
            } else if($emptyPassword) {
                echo "Sorry bra but you did not fill the password";
            } else if($undefinedUser) {
                echo "Sorry but this email is not in our database";
            } else if($incorrectPassword) {
                echo "Brah your password is incorrect, fix it NOW!";
            }
        ?>

    </form>

</body>
</html>