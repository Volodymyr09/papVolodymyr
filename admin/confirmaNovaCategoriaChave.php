<?php
include_once ("includes/body.inc.php");


$nome=addslashes($_POST['nomeCategoriaChave']);
$idCat=intval($_POST['categoriaCategoria']);


$sql="insert into categoriachaves(categoriaChaveNome, categoriaChaveCategoriaId) values('".$nome."',".$idCat.");";
mysqli_query($con,$sql);
header("location:listaCategoriaChave.php");
?>

