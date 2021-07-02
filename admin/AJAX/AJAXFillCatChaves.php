<?php
include_once("../includes/body.inc.php");
$txt=addslashes($_POST['txt']);

$sql="Select * from categoriachaves left join categorias on categoriaChaveCategoriaId=categoriaId where categoriaChaveNome LIKE '%$txt%'";
$result=mysqli_query($con,$sql);

?>

<table class='table table-striped' width="100%">
    <tr>
        <td colspan="5" align='right'>
            <a href="adicionaCategoriaChave.php"><i class='btn btn-success btn-xs'>Adicionar</i></a>
        </td>
    </tr>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Tipo</th>
        <th colspan="2">opções</th>
    </tr>
    <?php
    while($dados=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $dados['categoriaChaveId']?></td>
            <td><?php echo $dados['categoriaChaveNome']?></td>
            <td><?php
                if(is_null($dados['categoriaNome']))
                    echo $dados['categoriaChaveTipo'];
                else
                    echo $dados['categoriaNome'];
                ?>
            </td>
            <td><?php echo $dados['categoriaChaveTipo']?></td>
            <td><a class='btn btn-warning btn-xs' href="editaCategoriaChave.php?id=<?php echo $dados['categoriaChaveId']?>"><i class='fa fa-pencil'></i>Editar</a></td>
            <td><a class='btn btn-danger btn-xs' href="#" onclick="confirmaEliminaCatChave(<?php echo $dados['categoriaChaveId']?>);"> <i class='fa fa-trash'></i>Eliminar</a></td>

        </tr>
        <?php
    }
    ?>


</table>
