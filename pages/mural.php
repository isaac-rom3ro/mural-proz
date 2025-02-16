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
                    <a class="" href=""> Login </a>
                </div>

                <div class="a-button subscribe">
                    <a href=""> Cadrastre-se</a>
                </div>
            </div>
        </div>

        <nav class="header__nav">
            <div class="nav__content">

            </div>
        </nav>
    </header>

    <main class="main__content">
       
    </main>

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

    
    <script src="../assets/src/content-focus.js"></script>
    <script src="../assets/src/add-data.js"></script>
    <script src="../assets/src/click-add-content.js"></script>
</body>
</html>