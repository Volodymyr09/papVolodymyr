<?php
include_once ("includes/body.inc.php");

top();
?>
<div class="container">
<h1>Adicionar Categoria</h1>
<form action="confirmaNovaCategoria.php" method="post" enctype="multipart/form-data">
    <label>Nome: </label>
    <input type="text" name="nomeCategoria"><br>
    <label>Logótipo:</label>
    <input type="file" name="imagemCategoria"><br>
     <br>
    <input type="Submit" value="Adiciona"><br>
</div>

    <?php
    Bottom();
    ?>
