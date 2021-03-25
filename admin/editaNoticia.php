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
    <label>Titulo: </label>
    <input type="text" name="tituloNoticia" value="<?php echo $dadosNoticia['noticiaTitulo']?>"><br>
    <label>Link:</label>
    <input type="text" name="linkNoticia" value="<?php echo $dadosNoticia['noticiaLinkURL']?>"><br>
    <label>Imagem:</label>
    <img src="../<?php echo $dadosNoticia['noticiaImagemURL']?>" width="220"><br>
    <input type="file" name="imagemNoticia"><br>
    <br>
    <label>Destaque</label>

    <p><input type="radio" name="destaqueNoticia" value="sim"
            <?php if( $dadosNoticia['noticiaDestaque'] == 'sim') echo " checked ";?>
        >&nbsp;Sim</p>
    <p><input type="radio" name="destaqueNoticia" value="nao"
            <?php if( $dadosNoticia['noticiaDestaque'] == 'nao') echo " checked ";?>
        >&nbsp;Não</p>
    <br>
    <input type="Submit" value="Edita"><br>
</form>
</div>

<?php
Bottom();
?>