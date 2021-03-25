<?php
include_once ("includes/body.inc.php");
$nome=addslashes($_POST['tituloNoticia']);
$id=intval($_POST['noticiaId']);
$imagem=$_FILES['imagemNoticia']['name'];
$novoNome="images/".$imagem;
$destaque=addslashes($_POST['destaqueNoticia']);
$link=addslashes($_POST['linkNoticia']);
$sql="Update noticias set noticiaTitulo='".$nome."', noticiaLinkURL='".$link."', noticiaDestaque='".$destaque."'";
if($imagem!=''){
    $sql.=", noticiaImagemURL='images/".$imagem."'";
    copy($_FILES['imagemNoticia']['tmp_name'],$novoNome);
}
$sql.=" where noticiaId=".$id;
mysqli_query($con,$sql);
header("location:listaNoticia.php");
?>
