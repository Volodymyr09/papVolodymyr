<?php
include_once ("includes/body.inc.php");

$nome=addslashes($_POST['nomeProduto']);
$imagem=$_FILES['imagemProduto']['name'];
$novoNome="images/".$imagem;
$descricao=addslashes($_POST['descricaoProduto']);
$preco=floatval($_POST['precoProduto']);
$id=intval($_POST['produtoId']);
$catId=intval($_POST['produtoCategoria']);
$destaque=addslashes($_POST['destaqueProduto']);

$sql="Update produtos set produtoNome='".$nome."', produtoDescricao='".$descricao."', produtoPreco='".$preco."', produtoCategoriaId='".$catId."', produtoDestaque='".$destaque."'";
if($imagem!=''){
    $sql.=", produtoImagemURL='images/".$imagem."'";
    copy($_FILES['imagemProduto']['tmp_name'],$novoNome);
}
$sql.=" where produtoId=".$id;
mysqli_query($con,$sql);
header("location:listaProduto.php");
?>
