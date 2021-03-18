<?php
include_once ("includes/body.inc.php");


$nome=addslashes($_POST['nomeCategoria']);
$imagem=$_FILES['imagemCategoria']['name'];
$novoNome="../images/".$imagem;
$catId=intval($_POST['categoriaCategoria']);

copy($_FILES['imagemCategoria']['tmp_name'],$novoNome);

echo $sql="insert into categorias(categoriaNome,categoriaImagemURL,categoriaCategoriaId)
values('".$nome."','images/".$imagem."',".($catId==-1?'NULL':$catId).");";
mysqli_query($con,$sql);
header("location:listaCategoria.php");
?>