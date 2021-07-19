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
    <label>Categoria-Mãe</label>
    <select name="categoriaCategoria">
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
</form>
</div>

    <?php
    Bottom();
    ?>
