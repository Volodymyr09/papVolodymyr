<?php
include_once ("includes/body.inc.php");
$chvId=intval($_GET['chvId']);
$prdId=intval($_GET['prdId']);
$sql= "delete from produtochaves where produtoChaveChaveId=".$chvId." and produtoChaveProdutoId=".$prdId;
mysqli_query($con,$sql);
header("location:gerirCategoriaChave.php?id=$prdId");

?>