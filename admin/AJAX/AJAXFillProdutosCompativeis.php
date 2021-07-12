<?php
include_once("../includes/body.inc.php");
$idCat=intval($_POST['idCat']);

$sql="Select * from produtos where produtoCategoriaId = ".$idCat;
$result=mysqli_query($con,$sql);

?>

<table class='table table-striped' width="100%">

    <tr>
        <th>&nbsp;</th>
        <th>Id</th>
        <th>Nome</th>
        <th>Imagem</th>
        <th>Descrição</th>
    </tr>
    <?php
    while($dados=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td width="1%"><input type="checkbox" name="produto[]" value="<?php echo $dados['produtoId']?>"</td>
            <td width="1%"><?php echo $dados['produtoId']?></td>
            <td width="30%"><?php echo $dados['produtoNome']?></td>
            <td width="10%"><img width='90' src="../<?php  echo $dados['produtoImagemURL']?>"></td>
            <td width="30%"><?php echo substr($dados['produtoDescricao'],0,100)." (...)"?></td>
        </tr>
        <?php
    }
    ?>
    </form>

</table>
