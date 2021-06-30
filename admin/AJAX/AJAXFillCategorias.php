<?php
include_once("../includes/body.inc.php");
$txt=addslashes($_POST['txt']);

$sql="Select * from categorias where categoriaNome LIKE '%$txt%'";
$result=mysqli_query($con,$sql);

?>

    <table class='table table-striped' width="100%">
        <tr>
            <td colspan="5" align='right'>
                <a href="adicionaCategoria.php"><i class='btn btn-success btn-xs'>Adicionar</i></a>
            </td>
        </tr>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Imagem</th>
            <th colspan="2">opções</th>
        </tr>
        <?php
        while($dados=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $dados['categoriaId']?></td>
                <td><?php echo $dados['categoriaNome']?></td>
                <td><img width='90' src=../<?php  echo $dados['categoriaImagemURL']?>></td>

                <td><a class='btn btn-warning btn-xs' href="editaCategoria.php?id=<?php echo $dados['categoriaId']?>"><i class='fa fa-pencil'></i>Editar</a></td>
                <td><a class='btn btn-danger btn-xs' href="#" onclick="confirmaEliminaCategoria(<?php echo $dados['categoriaId']?>);"> <i class='fa fa-trash'></i>Eliminar</a></td>

            </tr>
            <?php
        }
        ?>


    </table>
