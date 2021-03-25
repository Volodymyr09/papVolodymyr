<?php
include_once ("includes/body.inc.php");

top();
?>
<div class="container">
<h1>Adicionar Noticia</h1>
<form action="confirmaNovaNoticia.php" method="post" enctype="multipart/form-data">
    <label>Titulo: </label>
    <input type="text" name="tituloNoticia"><br>
    <label>Link:</label>
    <input type="text" name="linkNoticia"><br>
    <label>Imagem:</label>
    <input type="file" name="imagemNoticia"><br>
    <br>
    <label>Destaque</label>
    <p><input type="radio" name="destaqueNoticia" value="sim" >&nbsp;Sim</p>
    <p><input type="radio" name="destaqueNoticia" value="nao" checked>&nbsp;Não</p>
     <br>
    <input type="Submit" value="Adiciona"><br>
</div>

    <?php
    Bottom();
    ?>
