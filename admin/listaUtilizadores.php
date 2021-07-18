<?php
include_once("includes/body.inc.php");
$con=mysqli_connect("localhost","root","","pap2021pcgammer");
$con->set_charset("utf8");
$sql="Select * from users";
$result=mysqli_query($con,$sql);

top();
?>


<div class="container">
    <h1>Utilizadores</h1>

    <table class='table table-striped' width="100%">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Palavra-Passe</th>
            <th>Estado</th>
            <!--
            <th colspan="4">opções</th>
            -->
        </tr>
        <?php
        while($dados=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td width="1%"><?php echo $dados['userId']?></td>
                <td width="30%"><?php echo $dados['userName']?></td>
                <td width="30%"><?php echo $dados['userPassword']?></td>
                <td width="30%"><?php echo $dados['userState']?></td>
                <!--
                <td width="1%"><a title="Ativar" class='btn btn-warning btn-xs' href="editaProduto.php?id=<?php echo $dados['userId']?>"><i class='fa fa-pencil'></i></a></td>
                <td width="1%"><a title="Desativar" class='btn btn-danger btn-xs' href="#" onclick="confirmaEliminaProduto(<?php echo $dados['userId']?>);"> <i class='fa fa-trash'></i></a></td>
                -->
            </tr>
            <?php
        }
        ?>


    </table>

</div>

<?php
Bottom();
?>
