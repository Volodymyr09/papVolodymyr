<?php
function top()
{
    ?>

    <!DOCTYPE HTML>
    <html>
    <head>
        <title>PC-GAMER</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/main.css" />

        <link rel="icon" href="images/log.jpg">
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

        <style>
        .cardNoticias {

             border: 0px solid rgba(0,0,0,.125);
             border-radius: .25rem;
    }
</style>


    </head>
    <body class="is-preload">


    <!-- Wrapper -->
    <body id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">

            <nav>
                <a  href="#menu">Menu</a>
            </nav>

            <a href="index.php" class="logo"><strong>PC-GAMER</strong></a>

            <a href="carrinho.php" class="icon alt fa-shopping-cart"><span class="label"></span></a>
            <a href="#" class="icon alt fa-user-circle" data-toggle="modal" data-target="#login"><span class="label"></span></a>
        </header>



        <!-- Menu -->
        <nav id="menu">


            <ul class="links">
                <li class="active"> <a href="index.php">Pagina Principal</a> </li>

                <li> <a href="products.php">Produtos</a> </li>

                <li> <a href="carrinho.php">Carrinho de Compras</a> </li>

                <li><a href="contact.php">Contactos</a></li>

                <li><a href="configurador.php">Configurador</a></li>

                <li><a href="team.php">Equipa</a></li>

                <li><a href="Administrador.php">Administrador</a></li>
            </ul>
        </nav>

        <!-- ======= Login======= -->
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="InputEmail">E-mail:</label>
                                <input type="email" class="form-control" id="InputEmail">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Palavra-passe:</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">


                            </div>

                            <h8>Ainda n�o tem conta?</h8>
                            <a href="#" onclick="fecha()" data-toggle="modal" data-target="#regista"><button type="submit" class="btn btn-outline-warning">Registar</button></a>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-warning">Submeter</button>
                    </div>
                </div>
            </div>
        </div>
        <!--End Login -->

        <!-- ======= Registar======= -->
        <div class="modal fade" id="regista" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="InputName">Nome:</label>
                                <input type="name" class="form-control" id="InputName" aria-describedby="emailHelp">

                            </div>
                            <div class="form-group">
                                <label for="InputEmail">E-mail:</label>
                                <input type="email" class="form-control" id="InputEmail">
                            </div>
                            <div class="form-group">
                                <label for="InputPassword1">Palavra-passe</label>
                                <input type="password" class="form-control" id="InputPassword1">

                            </div>
                            <div class="form-group">
                                <label for="InputPassword1">Reptir Palavra-passe</label>
                                <input type="password" class="form-control" id="InputPassword1">

                            </div>


                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-warning">Submeter</button>
                    </div>
                </div>
            </div>
        </div>

    <?php
}

    function Bottom(){
    ?>
        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <ul class="icons">

                    <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="https://www.instagram.com/" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>

                </ul>
                <ul class="copyright">
                    <li>Copyright � 2020 Company Name - Template by</li>
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
        </body>
    </HTML>

<?php
}
?>


