<?php
include_once ("includes/body.inc.php");
$nome=addslashes($_POST['tituloNoticia']);
$id=intval($_POST['noticiaId']);
$imagem=$_FILES['imagemNoticia']['name'];
$novoNome="images/".$imagem;
$sql="Update noticias set noticiaNome='".$nome."'";
if($imagem!=''){
    $sql.=", noticiaImagemURL='images/".$imagem."'";
    copy($_FILES['imagemNoticia']['tmp_name'],$novoNome);
}
$sql.=" where noticiaId=".$id;
mysqli_query($con,$sql);
header("location:listaNoticia.php");
?>
