<?php
include_once ("includes/body.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$id=intval($_GET['id']);
$produto=intval($_POST['produtoChaveProdutoId']);

$sql= "delete from produtochaves where produtoChaveChaveId=".$id;
mysqli_query($con,$sql);
header("location:gerirCategoriaChave.php?id=$produto");


?>