<?php
include_once ("includes/body.inc.php");


$nome=addslashes($_POST['nomeCategoria']);
$imagem=$_FILES['imagemCategoria']['name'];
$novoNome="../images/".$imagem;

copy($_FILES['imagemCategoria']['tmp_name'],$novoNome);

echo $sql="insert into categorias(categoriaNome,categoriaImagemURL)
values('".$nome."','images/".$imagem."');";
mysqli_query($con,$sql);
header("location:listaCategoria.php");
?>