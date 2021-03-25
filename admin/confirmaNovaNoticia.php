<?php
include_once ("includes/body.inc.php");


$nome=addslashes($_POST['tituloNoticia']);
$link=addslashes($_POST['linkNoticia']);
$imagem=$_FILES['imagemNoticia']['name'];
$novoNome="../images/".$imagem;
$destaque=addslashes($_POST['destaqueNoticia']);


copy($_FILES['imagemNoticia']['tmp_name'],$novoNome);

echo $sql="insert into noticias(noticiaTitulo, noticiaLinkURL, noticiaImagemURL, noticiaDestaque)
values('".$nome."','".$link."','images/".$imagem."','".$destaque."')";
mysqli_query($con,$sql);
header("location:listaNoticia.php");
?>