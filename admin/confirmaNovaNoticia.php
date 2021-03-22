<?php
include_once ("includes/body.inc.php");


$nome=addslashes($_POST['nomeNoticia']);
$imagem=$_FILES['imagemNoticia']['name'];
$novoNome="../images/".$imagem;


copy($_FILES['imagemNoticia']['tmp_name'],$novoNome);

echo $sql="insert into noticias(noticiaNome,noticiaImagemURL)
values('".$nome."','images/".$imagem."'";
mysqli_query($con,$sql);
header("location:listaNoticias.php");
?>