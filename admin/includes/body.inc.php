<?php
include_once("config.inc.php");
    $con=mysqli_connect(HOST,USER,PWD,DATABASE);
    $con->set_charset("utf8");

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
        <script src="js/commonAdmin.js"></script>

    </head>
    <body class="is-preload">


    <!-- Wrapper -->
    <body id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">
                <nav>
                     <a  href="#menu">Menu</a>
                </nav>

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

                <li class="active"> <a href="listaUtilizadores.php">Utilizadores</a> </li>

                <li class="active"> <a href="listaEstadoCompras.php">Estado das Encomendas</a> </li>

            </ul>
       </nav>


    <?php
}
?>
<?php
    function Bottom($menu = HOME){
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
                <script>

    $('document').ready(function (){
        <?php
        if ($menu == CATEGORIAS){
        ?>
        $('#search').keyup(function (){
            fillTableCategorias(this.value);
        });
        fillTableCategorias();
        <?php
        }

        if ($menu == PRODUTOS){
        ?>
        $('#search').keyup(function (){
            fillTableProdutos(this.value);
        });
        fillTableProdutos();
        <?php
        }

        if ($menu == CHAVES){
        ?>
        $('#search').keyup(function (){
            fillTableChaves(this.value);
        });
        fillTableChaves();
        <?php
        }

        if ($menu == CATCHAVES){
        ?>
        $('#search').keyup(function (){
            fillTableCatChaves(this.value);
        });
        fillTableCatChaves();
        <?php
        }

        if ($menu == NOTICIAS){
        ?>
        $('#search').keyup(function (){
            fillTableNoticias(this.value);
        });
        fillTableNoticias();
        <?php
        }

        if ($menu == COMPATIVEIS){
        ?>
        $('#categoria').on('change',function (){
            fillTableCompativeis(this.value);
        });
        fillTableCompativeis(-1);
        <?php
        }
        ?>
    });

    </script>
        </body>
    </HTML>

<?php
}
?>
