<?php
include_once ("includes/body.inc.php");


$nome=addslashes($_POST['tituloNoticia']);
$imagem=$_FILES['imagemNoticia']['name'];
$novoNome="../images/".$imagem;


copy($_FILES['imagemNoticia']['tmp_name'],$novoNome);

echo $sql="insert into noticias(noticiaTitulo,noticiaImagemURL)
values('".$nome."','images/".$imagem."'";
mysqli_query($con,$sql);
header("location:listaNoticias.php");
?>