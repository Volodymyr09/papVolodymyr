<?php
include_once ("includes/body.inc.php");

top();
?>
<div class="container">
<h1>Adicionar Noticias</h1>
<form action="confirmaNovaNoticia.php" method="post" enctype="multipart/form-data">
    <label>Nome: </label>
    <input type="text" name="tituloNoticia"><br>
    <label>Imagem:</label>
    <input type="file" name="imagemNoticia"><br>
     <br>
    <input type="Submit" value="Adiciona"><br>
</div>

    <?php
    Bottom();
    ?>
