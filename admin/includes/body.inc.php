<?php
include_once("config.inc.php");
    $con=mysqli_connect(HOST,USER,PWD,DATABASE);
    $con->set_charset("utf8");

    session_start();
function top()
{
    ?>

    <!DOCTYPE HTML>
    <html>
    <head>
        <title>PC-GAMER-Admin</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/main.css" />

        <link rel="icon" href="../images/log.jpg">
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

    </head>
    <body class="is-preload">


    <!-- Wrapper -->
    <body id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">
        <nav>

                <a  href="#menu">Menu</a>
                </nav>
                <?php
                if(isset($_SESSION['id'])){
            ?>
            <a href="../logout.php" style="float:right;">Logout</a>
            <?php
                }
                ?>


        </header>



        <!-- Menu -->
        <nav id="menu">


            <ul class="links">
                <li class="active"> <a href="index.php">Pagina Principal</a> </li>

                <li class="active"> <a href="listaCategoria.php">Categorias</a> </li>

                <li class="active"> <a href="listaProduto.php">Produtos</a> </li>

                <li class="active"> <a href="listaChave.php">Chaves</a> </li>

                <li class="active"> <a href="listaCategoriaChave.php">Categoria Chaves</a> </li>

                <li class="active"> <a href="listaNoticia.php">Noticias</a> </li>

                <li class="active"> <a href="configurador.php">Configurador</a> </li>

            </ul>
       </nav>


    <?php
}

    function Bottom(){
    ?>
        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <ul class="copyright">
                    <li>PC-GAMER PAP © 2021</li>
                    <li> <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                </ul>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="js/commonAdmin.js"></script>
        </body>
    </HTML>

<?php
}
?>
