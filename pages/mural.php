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
    <link rel="stylesheet" href="../assets/style/footer.css">

    <script src="../assets/src/script.js" defer></script>
    <script src="../assets/src/add-data.js" defer></script>
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
                    <a href=""> Cadrastre-se</a>
                </div>
            </div>
        </div>

        <nav class="header__nav">
            <div class="nav__content">
                    <!--Send the filter chosen to fill the url-->
                    <form action="../assets/methods/content-filter.php" method="POST" name="filter-form" class="filter-form">
                        <button name="filter" type="submit" value="all">Todos</button>
                        <button name="filter" type="submit" value="vancacies">Vagas</button>
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

                      showPosts($db);
                } catch(Exception $e) {
                    echo $e->getMessage();
                }

            ?>
            <!-- <div class="post p1"> -->
            <!-- </div> -->
            <!-- <div class="pin"> -->
                <!-- <img src="../assets/images/pin_yellow.png" alt=""> -->
            <!-- </div> -->
                <div class="post p2">
                <div class="pin">
                    <img src="../assets/images/pin_purple.png" alt="">
                </div>
            </div>

            <div class="post p3">
                <div class="pin">
                    <img src="../assets/images/pin_green.png" alt="">
                </div>
            </div>

            <div class="post p4">
                <div class="pin">
                    <img src="../assets/images/pin_red.png" alt="">
                </div>
            </div>

            <div class="post p5">
                <div class="pin">
                    <img src="../assets/images/pin_pink.png" alt="">
                </div>
            </div>

            <div class="post p3">
                <div class="pin">
                    <img src="../assets/images/pin_blue.png" alt="">
                </div>
            </div>

            <div class="post p2">
                <div class="pin">
                    <img src="../assets/images/pin_orange.png" alt="">
                </div>
            </div>

            <div class="post p1">
                <div class="pin">
                    <img src="../assets/images/pin_darkblue.png" alt="">
                </div>
            </div>

            <div class="post p4">
                <div class="pin">
                    <img src="../assets/images/pin_green.png" alt="">
                </div>
            </div>

            <div class="post p2">
                <div class="pin">
                    <img src="../assets/images/pin_pink.png" alt="">
                </div>
            </div>
        </div>
    </main>

    <div onclick="openWindow()" class="main__buttom" id="mainButton">
        <button class="buttom-add-post">+</button>
    </div>

    <div class="window__content hidden" id="windowContent">
        <div class="create-post" id="createPost">
            <div class="exit" id="exit">
                X
            </div>

            <div>
                <select name="select-option" id="select-option" class="select-option">
                    <option value="vancacies">Vagas</option>
                    <option value="mural_warnings">Avisos</option>
                    <option value="posts">Posts</option>
                </select>
             </div>

            <div id="inside-post-content" class="post-content">
                <input type="text" class="enterprise-name" id="enterprise-name" placeholder="Nome da Empresa">

                <input type="text" class="job" id="job" placeholder="Cargo">

                <input type="text" class="vacancy-description" id="vacancy-description" placeholder="Descricao">

                <input type="text" class="vacancy-address" id="vacancy-address" placeholder="Endereço">

                <input type="text" class="vacancy-link" id="vacancy-link" placeholder="Link">

                <input type="text" class="vacancy-phone-number" id="vacancy-phone-number" placeholder="Telefone">
            </div>
        </div>
    </div>

    <footer class="footer__content">
        <div class="footer__credits">
            <div class="credits-github">
                <h1>Git hub dos cria</h1>
            </div>
        </div>
    </footer>
</body>
</html>