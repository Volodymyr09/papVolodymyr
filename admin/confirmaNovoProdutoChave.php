<?php
include_once ("includes/body.inc.php");

/*
$nome=addslashes($_POST['nomeChave']);
$idCat=intval($_POST['chaveCategoria']);
*/

$chaveCat=intval($_POST['chaveChaveProduto']);
$chave=intval($_POST['produtoChaveProduto']);
$valor=addslashes($_POST['valorChaveProduto']);

$sql="insert into produtochaves(produtoChaveChaveId, produtoChaveProdutoId, produtoChaveValor) values(".$chaveCat.",".$chave.",'".$valor."');";
mysqli_query($con,$sql);
header("location:gerirCategoriaChave.php");

?>

