<?php
include_once("includes/body.inc.php");
$id=intval($_GET['id']);
$con=mysqli_connect("localhost","root","","pap2021pcgammer");
$con->set_charset("utf8");
$sql="update encomendas set encomendaEstado='entregue' where encomendaId=$id ";
mysqli_query($con,$sql);
header("location:listaEstadoCompras.php");
?>