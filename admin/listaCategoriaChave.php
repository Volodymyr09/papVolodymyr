<?php
include_once("includes/body.inc.php");

$sql="Select * from categoriachaves inner join categorias on categoriaChaveCategoriaId=categoriaId";
$result=mysqli_query($con,$sql);

top();
?>


    <div class="container">
        <h1>Categoria Chaves</h1>

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
                <th colspan="2">opções</th>
            </tr>
            <?php
            while($dados=mysqli_fetch_array($result)){
                ?>

                <tr>
                    <td><?php echo $dados['categoriaChaveId']?></td>
                    <td><?php echo $dados['categoriaChaveNome']?></td>
                    <td><?php echo $dados['categoriaNome']?></td>

                    <td><a class='btn btn-warning btn-xs' href="editaCategoriaChave.php?id=<?php echo $dados['categoriaChaveId']?>"><i class='fa fa-pencil'></i>Editar</a></td>
                    <td><a class='btn btn-danger btn-xs' href="#" onclick="confirmaEliminaCatChave(<?php echo $dados['categoriaChaveId']?>);"> <i class='fa fa-trash'></i>Eliminar</a></td>

                </tr>
                <?php
            }
            ?>


        </table>


    </div>

<?php
    Bottom();
?>
