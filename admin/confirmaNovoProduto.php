<?php
include_once ("includes/body.inc.php");
$con=mysqli_connect("localhost","root","","pap2021pcgammer");

$nome=addslashes($_POST['nomeProduto']);
$imagem=$_FILES['imagemProduto']['name'];
$novoNome="../images/".$imagem;
$descricao=addslashes($_POST['descricaoProduto']);
$preco=floatval($_POST['precoProduto']);

copy($_FILES['imagemProduto']['tmp_name'],$novoNome);

$sql="insert into produtos(produtoNome,produtoImagemURL,produtoDescricao,produtoPreco) 
values('".$nome."','images/".$imagem."',".$descricao.",".$preco.")";
mysqli_query($con,$sql);
header("location:listaProduto.php");
?>

