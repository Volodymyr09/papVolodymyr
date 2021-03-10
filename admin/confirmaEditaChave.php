<?php
include_once ("includes/body.inc.php");
$con=mysqli_connect("localhost","root","","pap2021pcgammer");
$nome=addslashes($_POST['nomeChave']);
$id=intval($_POST['chaveId']);
$idCategoria=intval($_POST['chaveCategoria']);

$sql="UPDATE chaves SET chaveNome='".$nome."'" ;

$sql.=" where chaveId=".$id;
mysqli_query($con,$sql);
header("location:listaChave.php");
?>