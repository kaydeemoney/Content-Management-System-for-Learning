<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROJETO MVC</title>

    <!--===========================
            CSS PLUGINS
    ===============================-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!--===========================
            JS PLUGINS
    ===============================-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Latest compiled Fontanwesome -->
    <script src="https://kit.fontawesome.com/d3b16fe3ce.js" crossorigin="anonymous"></script>

</head>

<body>

    <!--===========================
            LOGO
    ===============================-->
    <div class="container-fluid">
        <h3 class="text-center py-3">TOBLER</h3>
    </div>

    <!--===========================
        BOTTON
    ===============================-->
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <!-- buttons with get variables -->
                <?php if (isset($_GET["page"])) : ?>

                    <?php if ($_GET["page"] == "register") : ?>

                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?page=register">Regitos</a>
                        </li>

                    <?php else : ?>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=register">Regito</a>
                        </li>

                    <?php endif ?>

                    <?php if ($_GET["page"] == "enter") : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?page=enter">Entrar</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=enter">Entrar</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["page"] == "home") : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?page=home">Início</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=home">Início</a>
                        </li>
                    <?php endif ?>

                    <?php if ($_GET["page"] == "exit") : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?page=exit">Sair</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=exit">Sair</a>
                        </li>
                    <?php endif ?>

                <?php else : ?>

                    <!--GET: $_GET["VARIABLES"]-->
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?page=register">Registo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=enter">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=home">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=exit">Sair</a>
                    </li>

                <?php endif ?>

            </ul>
        </div>
    </div>
    <!--===========================
        Container/White page
    ===============================-->
    <div class="container-fluid">
        <div class="container py-5">
            <?php
            if (isset($_GET["page"])) {
                if (
                    $_GET["page"] == "register" ||
                    $_GET["page"] == "enter" ||
                    $_GET["page"] == "home" ||
                    $_GET["page"] == "exit"
                ) {

                    include "pages/" . $_GET["page"] . ".php";
                } else {

                    include "pages/error404.php";
                }
            } else {

                include "pages/register.php";
            }
            ?>
        </div>
    </div>
</body>

</html>