<?php
include_once ("includes/body.inc.php");


$nome=addslashes($_POST['nomeCategoriaChave']);
$idCat=intval($_POST['categoriaCategoria']);


copy($_FILES['tmp_name']);

$sql="insert into categoriachaves(categoriaChaveNome, categoriaChaveCategoriaId) values('".$nome."',".$idCat.");";
mysqli_query($con,$sql);
header("location:listaCategoriaChave.php");
?>

