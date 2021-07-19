<?php
include_once("../includes/body.inc.php");
$idCat=intval($_POST['idCat']);
$idPrd=intval($_POST['idPrd']);

if($idCat!=-1)
    $sql="Select * from produtos where produtoCategoriaId = ".$idCat;
else{
    $sql=" Select * from produtos where produtoId<>".$idPrd;
}

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
        $sql="select * from compatibilidades ";
        $sql.=" where compatibilidadeProduto1Id=".$dados['produtoId']." and compatibilidadeProduto2Id=".$idPrd;
       echo  $sql.=" or compatibilidadeProduto2Id=".$dados['produtoId']." and compatibilidadeProduto1Id=".$idPrd;
        mysqli_query($con,$sql);
        if($idCat!=-1){
        ?>

        <tr>
            <td width="1%"><input type="checkbox" <?php if(mysqli_affected_rows($con)>0) echo ' checked '?>name="produto[]" value="<?php echo $dados['produtoId']?>"</td>
            <td width="1%"><?php echo $dados['produtoId']?></td>
            <td width="30%"><?php echo $dados['produtoNome']?></td>
            <td width="10%"><img width='90' src="../<?php  echo $dados['produtoImagemURL']?>"></td>
            <td width="30%"><?php echo substr($dados['produtoDescricao'],0,100)." (...)"?></td>
        </tr>
        <?php
        }else if (mysqli_affected_rows($con) > 0){?>
            <tr>
                <td width="1%"><input type="checkbox"  checked name="produto[]" value="<?php echo $dados['produtoId']?>"</td>
                <td width="1%"><?php echo $dados['produtoId']?></td>
                <td width="30%"><?php echo $dados['produtoNome']?></td>
                <td width="10%"><img width='90' src="../<?php  echo $dados['produtoImagemURL']?>"></td>
                <td width="30%"><?php echo substr($dados['produtoDescricao'],0,100)." (...)"?></td>
            </tr>
    <?php
        }
    }
    ?>
    </form>

</table>
