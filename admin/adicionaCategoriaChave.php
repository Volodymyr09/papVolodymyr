<?php
include_once ("includes/body.inc.php");

top();
?>
<div class="container">
<h1>Adicionar Categoria Chave</h1>
<form action="confirmaNovaCategoriaChave.php" method="post" enctype="multipart/form-data">
    <label>Nome: </label>
    <input type="text" name="nomeCategoriaChave">
    <br>
    <label>Categoria</label>
    <select name="categoriaCategoria">
        <option value="-1">Escolha a categoria...</option>
        <?php
        $sql="select * from categorias where categoriaCategoriaId is null order by categoriaNome";
        $result=mysqli_query($con,$sql);
        while ($dados=mysqli_fetch_array($result)){
            ?>
            <option value="<?php echo $dados['categoriaId']?>"><?php echo $dados['categoriaNome']?></option>
            <?php
        }


        ?>
    </select>
    <br>
    <div class="form-group">
        <div class="form-check form-check-inline">
            <input class="form-check-input" checked type="radio" name="tipoCategoria" id="inlineRadio1" value="geral">
            <label class="form-check-label" for="inlineRadio1">Geral (aparece em todos os produtos)</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipoCategoria" id="inlineRadio2" value="especifico">
            <label class="form-check-label" for="inlineRadio2">Específico (a uma categoria de produtos)</label>
        </div>
    </div>
     <br>
    <input type="Submit" value="Adiciona"><br>
</form>
</div>

    <?php
    Bottom();
    ?>
