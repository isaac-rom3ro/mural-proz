<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./assets/style/login.css">
</head>
<body>
    
    <?php
        //Im handling the possible errors that come after the user submitted the form
        try {
            if($_GET["sign"] == "empty-inputs") {
                echo "<p class='error'>Fill the inputs!</p>";
            } else if($_GET["sign"] == "empty-user") {
                echo "<p class='error'>empty username!</p>";
            } else if($_GET["sign"] == "empty-email") {
                echo "<p class='error'>empty email</p>!";
            } else if($_GET["sign"] == "empty-password") {
                echo "<p class='error'>empty password!</p>";
            } else if($_GET["sign"] == "user-not-found") {
                echo "<p class='error'>user not found!</p>";
            }
        } catch(Exception $e) {
            echo "<p class='error'>{$e->getMessage()}</p>";
        }
    ?>
    
    <form action="./assets/includes/login-admin.php" method="POST">
        <div class="logo">    
                <img class="img" src="./assets/images/login-logo.png" alt="">
        </div>
        
        <input class="input" type="text" name="user" placeholder="Username">
        <input class="input" type="text" name="email" placeholder="Email">
        <input class="input" type="password" name="password" placeholder="Password">
        
        <div class="linha"></div>

        <button class="button" type="submit">Login</button>
    </form>
</body>
</html>