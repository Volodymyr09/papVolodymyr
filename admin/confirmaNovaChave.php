<?php
include_once ("includes/body.inc.php");


$nome=addslashes($_POST['nomeChave']);
$idCat=intval($_POST['chaveCategoria']);


$sql="insert into chaves(chaveNome, chaveCategoriaChaveId) values('".$nome."',".$idCat.");";
mysqli_query($con,$sql);
header("location:listaChave.php");

?>

