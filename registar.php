<?php
include_once ("includes/config.inc.php");
include_once("includes/body.inc.php");
//$sql="Select * from users";
$sql="Select * from users inner join perfis on perfilId=userId";
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
            <input type="submit" class="w-25" value="Registar">
            <a href="login.php"><button type="button" class="primary">Login</button></a>
        </div>
    </div>

</form>
</div>

<?php
Bottom();
?>