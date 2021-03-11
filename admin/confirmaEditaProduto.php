<?php
include_once ("includes/body.inc.php");

$nome=addslashes($_POST['nomeProduto']);
$imagem=$_FILES['imagemProduto']['name'];
$novoNome="images/".$imagem;
$descricao=addslashes($_POST['descricaoProduto']);
$preco=floatval($_POST['precoProduto']);
$id=intval($_POST['produtoId']);
$catId=intval($_POST['produtoCategoria']);
$sql="Update produtos set produtoNome='".$nome."', produtoDescricao='".$descricao."', produtoPreco='".$preco."', produtoCategoriaId=".$catId;
if($imagem!=''){
    $sql.=", produtoImagemURL='images/".$imagem."'";
    copy($_FILES['imagemProduto']['tmp_name'],$novoNome);
}
$sql.=" where produtoId=".$id;
mysqli_query($con,$sql);
header("location:listaProduto.php");
?>
