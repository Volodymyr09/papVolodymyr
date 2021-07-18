<?php
include_once("../includes/body.inc.php");
$txt=addslashes($_POST['txt']);

$sql="Select * from chaves inner join categoriachaves on chaveCategoriaChaveId=categoriaChaveId where chaveNome LIKE '%$txt%'";
$result=mysqli_query($con,$sql);

?>

<table class='table table-striped' width="100%">
    <tr>
        <td colspan="5" align='right'>
            <a href="adicionaChave.php"><i class='btn btn-success btn-xs'>Adicionar</i></a>
        </td>
    </tr>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Categoria Chave</th>
        <th colspan="2">opções</th>
    </tr>
    <?php
    while($dados=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $dados['chaveId']?></td>
            <td><?php echo $dados['chaveNome']?></td>
            <td><?php echo $dados['categoriaChaveNome']?></td>

            <td><a title="Editar" class='btn btn-warning btn-xs' href="editaChave.php?id=<?php echo $dados['chaveId']?>"><i class='fa fa-pencil'></i></a></td>
            <td><a title="Eliminar" class='btn btn-danger btn-xs' href="#" onclick="confirmaEliminaChave(<?php echo $dados['chaveId']?>);"> <i class='fa fa-trash'></i></a></td>

        </tr>
        <?php
    }
    ?>


</table>
