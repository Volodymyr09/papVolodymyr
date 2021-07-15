<?php
include_once("../includes/body.inc.php");
$txt=addslashes($_POST['txt']);

$sql="Select * from produtos where produtoNome LIKE '%$txt%'";
$result=mysqli_query($con,$sql);

?>

<table class='table table-striped' width="100%">
    <tr>
        <td colspan="9" align='right'>
            <a href="adicionaProduto.php"><i class='btn btn-success btn-xs'>Adicionar</i></a>
        </td>
    </tr>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Imagem</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th colspan="4">opções</th>
    </tr>
    <?php
    while($dados=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td width="1%"><?php echo $dados['produtoId']?></td>
            <td width="30%"><?php echo $dados['produtoNome']?></td>
            <td width="10%"><img width='90' src="../<?php  echo $dados['produtoImagemURL']?>"></td>


            <td width="30%"><?php echo substr($dados['produtoDescricao'],0,100)." (...)"?></td>
            <td width="10%"><?php echo $dados['produtoPreco']?>&euro;</td>
            <td width="1%"><a title="Gerir compatibilidades" class='btn btn-secondary btn-xs' href="gerirCompatibilidade.php?id=<?php echo $dados['produtoId']?>"><i class='fa fa-lock'></i></a></td>
            <td width="1%"><a title="Gerir detalhes" class='btn btn-primary btn-xs' href="gerirCategoriaChave.php?id=<?php echo $dados['produtoId']?>"><i class='fa fa-cog'></i></a></td>
            <td width="1%"><a title="Editar" class='btn btn-warning btn-xs' href="editaProduto.php?id=<?php echo $dados['produtoId']?>"><i class='fa fa-pencil'></i></a></td>
            <td width="1%"><a title="Eliminar" class='btn btn-danger btn-xs' href="#" onclick="confirmaEliminaProduto(<?php echo $dados['produtoId']?>);"> <i class='fa fa-trash'></i></a></td>

        </tr>
        <?php
    }
    ?>


</table>
