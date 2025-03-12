<?php
    $signinError = $_GET["signin"];
    $areInputsEmpty = false;
    
    if($signinError == "inputs-empty") {
        $areInputsEmpty = true;
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
            }
        ?>

    </form>

</body>
</html>