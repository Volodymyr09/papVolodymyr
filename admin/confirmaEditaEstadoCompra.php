<?php
include_once ("includes/body.inc.php");

$id=intval($_POST['produtoId']);

$estado=addslashes($_POST['destaqueProduto']);

$sql="Update noticias set noticiaTitulo='".$nome."', noticiaLinkURL='".$link."', noticiaDestaque='".$destaque."'";

$sql.=" where produtoId=".$id;
mysqli_query($con,$sql);
header("location:listaEstadoNoticia.php");
?>
