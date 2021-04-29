<?php
include_once("includes/body.inc.php");

if(isset($_GET['msg'])) {


    alert("Nome de utilizador ou palavra-passe errada, tente de novo.");
}
if(isset($_GET['message'])) {


    alertinativo("Esta conta foi desativada.");
}
if(isset($_GET['conetar'])) {


    alertcon("Precisa entrar na sua conta antes de requesitar um serviço.");
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
function alertinativo($message) {
    echo "<script type='text/javascript'>alert('$message');</script>";
}
function alertcon($conetar) {
    echo "<script type='text/javascript'>alert('$conetar');</script>";
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
                <input type="submit" class="form-control" value="Entrar">
                <input type="submit" class="form-control" onclick="location.href='registar.php';" value="Registar">
            </div>
        </div>

    </form>
</div>

<?php
Bottom();
?>

