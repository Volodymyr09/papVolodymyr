<?php
include_once ("includes/config.inc.php");
include_once("includes/body.inc.php");
$sql="Select * from users";
$res=mysqli_query($con,$sql);

top();

?>
    <section>
        <div class="container">
            <div class="text-center">
                <h1>Regista-se</h1>
                <p class="lead">Cria uma conta e começa realizar as compras!</p>
            </div>
        </div>
    </section>



<div class="container">
<form action="confirmaRegistar.php" method="post">
    <div class="container">
        <div class="modal-body">
                <div class="form-group">
                    <label for="InputName">Nome de Utilizador:</label>
                    <input type="name" class="form-control" name="nome">
                </div>
                <div class="form-group">
                    <label for="InputEmail" >E-mail address</label>
                    <input type="email" class="form-control"  placeholder="name@example.com" name="email">
                </div>
                <div class="form-group">
                    <label for="InputTelephone" >Telemovel</label>
                    <input type="text" class="form-control"  name="telemovel">
                </div>
                <div class="form-group">
                    <label for="InputTelephone" >Morada</label>
                    <input type="text" class="form-control"  name="morada">
                </div>
                <div class="form-group">
                    <label for="InputPassword1">Palavra-passe</label>
                    <input type="password" class="form-control"  name="password">
                </div>
        </div>
        <div class="modal-footer">
            <input type="submit" class="form-control" value="Registar">
            <input type="submit" class="form-control" onclick="location.href='login.php';" value="Login">
        </div>
    </div>

</form>
</div>
<!--
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <form id="contact-form" role="form" action="criarconta.php" method="post">
                        <div class="section-title">
                            <h2>Junte-se a nós<small>Faça parte da grande comunidade do voluntariado!</small></h2>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="email" class="form-control" placeholder="Escreva o seu email" name="email" required>

                            <input type="text" class="form-control" placeholder="Escreva o seu nome de utilizador" name="nome" required>

                            <input type="password" class="form-control" placeholder="Escreva a sua palavra-passe" name="password" required>

                            <input type="text" class="form-control" placeholder="Escreva o seu numero de telemovel" name="telefone" required>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="submit" class="form-control" value="Criar a conta">
                            <input type="submit" class="form-control" onclick="location.href='login.php';" value="Já tem conta? Entra!">
                        </div>

                    </form>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="contact-image">
                        <img src="images/lock.png" style="height: 404px; width: 404px" class="img-responsive" alt="Smiling Two Girls">
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php
Bottom();
?>