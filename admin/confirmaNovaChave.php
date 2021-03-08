<?php
include_once ("includes/body.inc.php");
$con=mysqli_connect("localhost","root","","pap2021pcgammer");


$nome=$_POST['nomeChave'];


copy($_FILES['tmp_name']);

$sql="insert into chaves(chaveNome) values('".$nome."');";
mysqli_query($con,$sql);
header("location:listaChave.php");
?>

