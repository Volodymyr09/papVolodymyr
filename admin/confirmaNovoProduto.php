<?php
include_once ("includes/body.inc.php");
$nome=addslashes($_POST['nomeProduto']);
$imagem=$_FILES['imagemProduto']['name'];
$novoNome="../images/".$imagem;
$descricao=addslashes($_POST['descricaoProduto']);
$preco=floatval($_POST['precoProduto']);
$catId=floatval($_POST['produtoCategoria']);
$destaque=addslashes($_POST['destaqueProduto']);
copy($_FILES['imagemProduto']['tmp_name'],$novoNome);

$sql="insert into produtos(produtoNome,produtoImagemURL,produtoDescricao,produtoPreco, produtoCategoriaId, produtoDestaque) 
        values('".$nome."','images/".$imagem."','".$descricao."',".$preco.",".$catId.",'".$destaque."')";
mysqli_query($con,$sql);

header("location:listaProduto.php");
?>

