<?php
include_once ("includes/body.inc.php");

$id=intval($_POST['produtoId']);
$nome=addslashes($_POST['nomeProduto']);
$imagem=$_FILES['imagemProduto']['name'];
$novoNome="images/".$imagem;
$descricao=addslashes($_POST['descricaoProduto']);
$preco=floatval($_POST['precoProduto']);
$catId=floatval($_POST['produtoCategoria']);
$sql="Update produtos set produtoNome='".$nome."', produtoDescricao='".$descricao."', produtoPreco='".$preco."' produtoCategoria='".$catId."'";
if($imagem!=''){
    $sql.=", produtoImagemURL='images/".$imagem."'";
    copy($_FILES['imagemProduto']['tmp_name'],$novoNome);
}
$sql.=" where produtoId=".$id;
mysqli_query($con,$sql);
//header("location:listaProduto.php");
?>
