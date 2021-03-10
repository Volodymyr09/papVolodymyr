<?php
include_once ("includes/body.inc.php");

top();
?>
<div class="container">
<h1>Adicionar Produto</h1>
<form action="confirmaNovoProduto.php" method="post" enctype="multipart/form-data">
    <label>Nome: </label>
    <input type="text" name="nomeProduto"><br>
    <label>Logótipo: </label>
    <input type="file" name="imagemProduto"><br>
    <label>Descrição: </label>
    <input type="text" name="descricaoProduto"><br>
    <label>Preço: </label>
    <input type="text" name="precoProduto"><br>

     <br>
    <input type="Submit" value="Adiciona"><br>
</div>

    <?php
    Bottom();
    ?>
