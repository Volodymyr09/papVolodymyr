<?php
include_once ("includes/body.inc.php");

top();
?>
<div class="container">
<h1>Adicionar Produto</h1>
<form action="confirmaNovoProduto.php" method="post" enctype="multipart/form-data">
    <label>Nome: </label>
    <input type="text" name="nomeProduto"><br>
    <label>Imagem: </label>
    <input type="file" name="imagemProduto"><br>
    <label>Descrição: </label>
    <textarea type="text" name="descricaoProduto">
    </textarea>
    <label>Preço: </label>
    <input type="text" name="precoProduto"><br>
    <select name="produtoCategoria">
        <option value="-1">Escolha a categoria...</option>
        <?php
        $sql="select * from categorias order by categoriaNome";
        $result=mysqli_query($con,$sql);
        while ($dados=mysqli_fetch_array($result)){
            ?>
            <option value="<?php echo $dados['categoriaId']?>"><?php echo $dados['categoriaNome']?></option>
            <?php
        }


        ?>
    </select>

     <br>
    <input type="Submit" value="Adiciona"><br>
</div>

    <?php
    Bottom();
    ?>
