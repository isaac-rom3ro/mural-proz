<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mural Proz</title>
    <link rel="stylesheet" href="../assets/style/reset.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/style/header.css">
    <link rel="stylesheet" href="../assets/style/main.css">
    <link rel="stylesheet" href="../assets/style/posts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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
                    <a class="" href="">Login</a>
                </div>

                <div class="a-button subscribe">
                    <a href="">Cadastre-se</a>
                </div>
            </div>
        </div>

        <nav class="header__nav">
            <div class="nav__content">
                    <!--Send the filter chosen to fill the url-->
                    <form action="../assets/methods/content-filter.php" method="POST" name="filter-form" class="filter-form">
                        <button name="filter" type="submit" value="all">Todos</button>
                        <button name="filter" type="submit" value="vacancies">Vagas</button>
                        <button name="filter" type="submit" value="warnings">Avisos</button>
                        <button name="filter" type="submit" value="posts">Posts</button>
                    </form>
            </div>
        </nav>
    </header>

    <main class="main__content">
        <div class="board-posts">
            <?php
                try {
                    include_once "../assets/includes/show-content.php";
                    include_once "../assets/database/db-connection.php";
                    //get the filter
                    $filter = $_GET["filter"];

                    //filter the content based on the value above
                    if(!isset($filter)) {
                        showAll($db);
                    } else if($filter == "vacancies") {
                        showVacancies($db);
                    } else if($filter == "warnings") {
                        showVacancies($db);
                    } else if($filter == "posts") {
                        showPosts($db);
                    } else {
                        showAll($db);
                    }
                } catch(Exception $e) {
                    echo $e->getMessage();
                }

            ?>
            <div class="post paper-green">
                <div class="pin">
                    <img src="../assets/images/pin_yellow.png" alt="">
                </div>
            </div>

            <div class="post paper-blue">
                <div class="pin">
                    <img src="../assets/images/pin_purple.png" alt="">
                </div>
            </div>

            <div class="post paper-orange">
                <div class="pin">
                    <img src="../assets/images/pin_green.png" alt="">
                </div>
            </div>

            <div class="post paper-yellow">
                <div class="pin">
                    <img src="../assets/images/pin_red.png" alt="">
                </div>
            </div>

            <div class="post paper-pink">
                <div class="pin">
                    <img src="../assets/images/pin_pink.png" alt="">
                </div>
            </div>

            <div class="post paper-orange">
                <div class="pin">
                    <img src="../assets/images/pin_blue.png" alt="">
                </div>
            </div>

            <div class="post paper-blue">
                <div class="pin">
                    <img src="../assets/images/pin_orange.png" alt="">
                </div>
            </div>

            <div class="post paper-green">
                <div class="pin">
                    <img src="../assets/images/pin_darkblue.png" alt="">
                </div>
            </div>

            <div class="post paper-yellow">
                <div class="pin">
                    <img src="../assets/images/pin_green.png" alt="">
                </div>
            </div>

            <div class="post paper-blue">
                <div class="pin">
                    <img src="../assets/images/pin_pink.png" alt="">
                </div>
            </div>
        </div>
        
        <div class="main__buttom" id="mainButton">
            <button class="buttom-add-post">+</button>
        </div>
    </main>


    <div class="window__content hidden" id="windowContent">
        <div class="create-post" id="createPost">
            <form action="../assets/methods/add-content-db.php" method="POST">
                <div>
                    <select name="select-option" id="select-option" class="select-option">
                       <option value="vancacies">Vagas</option>
                        <option value="mural_warnings">Avisos</option>
                        <option value="posts">Posts</option>
                    </select>

                     <div class="exit" id="exit">X</div>
                </div>
                
                <div id="inside-post-content" class="post-content">
                    <input type="text" class="enterprise-name" id="enterprise-name" name="enterprise-name" placeholder="Nome da Empresa">

                    <input type="text" class="job" id="job" name="job" placeholder="Cargo">

                    <textarea cols="0" rows="11" maxlength="704" type="text" class="vacancy-description" id="vacancy-description" name="vacancy-description" placeholder="Descrição"></textarea>

                    <input type="text" class="vacancy-address" id="vacancy-address" name="vacancy-address" placeholder="Endereço">

                    <input type="text" class="vacancy-link" id="vacancy-link" name="vacancy-link" placeholder="Link">

                    <input type="text" class="vacancy-phone-number" id="vacancy-phone-number" name="vacancy-phone-number" placeholder="Telefone (00) 0 0000-0000">
                </div>
                
                <div class="buttons-create-post">
                   
                <!--submit button-->
                    <button class="publish" type="submit"> 
                        <i class="fa fa-pencil" aria-hidden="true"></i>Publicar
                    </button>
                    
                    <button class="clear">
                        <i class="fa fa-eraser" aria-hidden="true"></i>Limpar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer__content">
        <div class="footer__credits">
            <div class="credits-github">
                <h1>Git hub dos cria</h1>
            </div>
        </div>
    </footer>

    
    <script src="../assets/src/content-focus.js"></script>
    <script src="../assets/src/add-data.js"></script>
    <script src="../assets/src/click-add-content.js"></script>
</body>
</html>