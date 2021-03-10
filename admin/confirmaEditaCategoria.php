<?php
include_once ("includes/body.inc.php");
$nome=addslashes($_POST['nomeCategoria']);
$id=intval($_POST['categoriaId']);
$imagem=$_FILES['imagemCategoria']['name'];
$novoNome="images/".$imagem;
$sql="Update categorias set categoriaNome='".$nome."'";
if($imagem!=''){
    $sql.=", categoriaImagemURL='images/".$imagem."'";
    copy($_FILES['imagemCategoria']['tmp_name'],$novoNome);
}
$sql.=" where categoriaId=".$id;
mysqli_query($con,$sql);
header("location:listaCategoria.php");
?>
