<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <?php
        //Im handling the possible errors that come after the user submitted the form
        try {
            if($_GET["sign"] == "empty-inputs") {
                echo "Fill the inputs!";
            } else if($_GET["sign"] == "empty-user") {
                echo "empty username!";
            } else if($_GET["sign"] == "empty-email") {
                echo "empty email!";
            } else if($_GET["sign"] == "empty-password") {
                echo "empty password!";
            }
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    ?>

    <form action="./assets/includes/login-admin.php" method="POST">
        <input type="text" name="user" placeholder="Username">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">

        <button type="submit">Login</button>
    </form>
</body>
</html>