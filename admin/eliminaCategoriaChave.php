<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);
$sql= "delete from categoriaChaves where categoriaChaveId=".$id;
mysqli_query($con,$sql);
header("location:listaCategoriaChave.php");


?>