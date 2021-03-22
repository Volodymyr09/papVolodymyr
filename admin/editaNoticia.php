<?php
include_once ("includes/body.inc.php");

$id=intval($_GET['id']);

$sql="select * from noticias where noticiaId=$id";
$resultNoticia=mysqli_query($con,$sql);
$dadosNoticia=mysqli_fetch_array($resultNoticia);
top();
?>
<div class="container">
<h1>Editar noticia</h1>
<form action="confirmaEditaNoticia.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="noticiaId" value="<?php echo $id?>">
    <label>Nome: </label>
    <input type="text" name="tituloNoticia" value="<?php echo $dadosNoticia['noticiaTitulo']?>"><br>
    <label>Imagem:</label>
    <img src="../<?php echo $dadosNoticia['noticiaImagemURL']?>" width="220"><br>
    <input type="file" name="imagemNoticia"><br>
    <br>
    <br>
    <input type="Submit" value="Edita"><br>
</div>

<?php
Bottom();
?>