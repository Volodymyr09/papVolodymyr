<?php
include_once("includes/body.inc.php");

if(isset($_GET['erro'])) {


    alert("Nome de utilizador ou palavra-passe errada, tente de novo.");
}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

top();

?>

<section>
    <div class="container">
        <div class="text-center">
            <h1>Login</h1>
            <p class="lead">Entre na sua conta e continue a fazer suas compras!</p>
        </div>
    </div>
</section>

<div class="container">
    <form action="confirmaLogin.php" method="post">
        <div class="container">
            <div class="modal-body">
                <div class="form-group">
                    <label for="InputName">Nome de Utilizador:</label>
                    <input type="name" class="form-control" name="nome">
                </div>
                <div class="form-group">
                    <label for="InputPassword1">Palavra-passe</label>
                    <input type="password" class="form-control"  name="password">
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="w-25" value="Entrar">
                <a href="registar.php"><button type="button" class="primary">Registar</button></a>
            </div>
        </div>

    </form>
</div>

<?php
Bottom();
?>

