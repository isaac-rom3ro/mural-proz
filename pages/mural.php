<!--Pasta asset contem tudo relacionado com estilo, interacao, imagens-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mural Proz</title>
    <link rel="stylesheet" href="../assets/style/reset.css">                                   <!--limpa estilo css padrão dos navegadores -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/style/header.css">
    <link rel="stylesheet" href="../assets/style/main.css">
    <link rel="stylesheet" href="../assets/style/footer.css">
</head>
<body>

    <header class="header__content">
        <div class="header__top">  
            <div class="header__logo">
                <div class="img-background">
                    <img class="header__img" src="../assets/images/placeholderLogo.png" alt="">
                </div>
            </div>

            <div class="header__h1">
                <h1>Mural da Proz</h1>
            </div>

            <div class="header__user">
                <div class="a-button login">
                   <a class="" href="../index.php"> login </a>
                </div>

                 <div class="a-button subscribe">
                    <a href="./register-page.php"> Cadrastre-se</a>
                </div>
            </div>
        </div>
                
        <nav class="header__nav"> 
            <div class="nav__content">
                <form action="../assets/methods/pull-data.php" method="POST">
                    <button type="submit" name="filter" value="all">Todos</button>    
                    <button type="submit" name="filter" value="vacancies">Vagas</button>
                    <button type="submit" name="filter" value="warnings">Avisos</button>
                    <button type="submit" name="filter" value="posts">Posts</button>
                </form>
            </div>
        </nav>
    </header>

    <main class="main__board">
            <!-- ALERTA DE GAMBIARRA-->
             <!--depois faço direito com o display grid-->
        <?php
            //add posts dinamically
            // include_once '../assets/database/db-connection.php';
            
            // $stmt = $db->prepare("SELECT * FROM vacancies");
            // $stmt->execute();

            // while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //     echo $row["enterprise_name"];
            //     echo $row["job"];
            // }
        ?>
    </main>
    
    <footer class="footer__content">
        <div class="footer__credits">
            <div class="credits-github">
                <h1>Git hub dos cria</h1>
            </div>

        </div>
        
    </footer>
</body>
</html>