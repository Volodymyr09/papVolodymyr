<?php
include_once ("includes/body.inc.php");


$chave=intval($_POST['chaveChaveProduto']);
$produto=intval($_POST['produtoChaveProduto']);
$valor=addslashes($_POST['valorChaveProduto']);

$sql="insert into produtochaves(produtoChaveChaveId, produtoChaveProdutoId, produtoChaveValor) values(".$chave.",".$produto.",'".$valor."');";
mysqli_query($con,$sql);
header("location:gerirCategoriaChave.php?id=$produto");

?>

