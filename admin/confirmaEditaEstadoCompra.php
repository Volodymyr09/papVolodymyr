<?php
include_once ("includes/body.inc.php");

$id=intval($_POST['encomendaId']);

$estado=addslashes($_POST['encomendaEstado']);

$sql="Update encomendas set encomendaEstado='".$estado."'";

$sql.=" where encomendaId=".$id;
mysqli_query($con,$sql);
header("location:listaEstadoCompras.php");
?>
