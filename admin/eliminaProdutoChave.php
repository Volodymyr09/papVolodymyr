<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);
$sql= "delete from produtochaves inner join chaves on produtoChaveChaveId=chaveId where chaveId=".$id;
mysqli_query($con,$sql);
header("location:gerirCategoriaChave.php?id=".$produto);


?>