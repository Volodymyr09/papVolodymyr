<?php
include_once ("includes/body.inc.php");

top();
?>
<div class="container">
<h1>Adicionar Produto</h1>
<form action="confirmaNovoProduto.php" method="post" enctype="multipart/form-data">
    <label>Nome: </label>
    <input type="text" name="nomeProduto"><br>
    <label>Log�tipo: </label>
    <input type="file" name="imagemProduto"><br>
    <label>Descri��o: </label>
    <input type="text" name="descricaoProduto"><br>
    <label>Pre�o: </label>
    <input type="text" name="precoProduto"><br>

     <br>
    <input type="Submit" value="Adiciona"><br>
</div>

    <?php
    Bottom();
    ?>
