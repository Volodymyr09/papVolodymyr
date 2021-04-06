<?php
include_once ("includes/body.inc.php");

    $id=intval($_GET['id']);
    $sql="select * from categoriaChaves where categoriaChaveId=$id";
    $resultcategoriaChaves=mysqli_query($con,$sql);
    $dadoscategoriaChaves=mysqli_fetch_array($resultcategoriaChaves);
top();
?>
<div class="container">
    <h1>Editar chave</h1>
    <form action="confirmaEditaCategoriaChave.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="categoriaChaveId" value="<?php echo $id?>">
        <label>Nome: </label>
        <input type="text" name="nomeCategoriaChave" value="<?php echo $dadoscategoriaChaves['categoriaChaveNome']?>"><br>

        <select name="categoriaCategoria">
            <option value="-1">Escolha a categoria...</option>
            <?php
            $sql="select * from categorias order by categoriaNome";
            $resultCategorias=mysqli_query($con,$sql);
            while ($dadosCategorias=mysqli_fetch_array($resultCategorias)){
                ?>
                <option value="<?php echo $dadosCategorias['categoriaId']?>"
                    <?php
                    if($dadoscategoriaChaves['categoriaChaveCategoriaId']==$dadosCategorias['categoriaId'])
                        echo " selected ";
                    ?>
                >
                    <?php echo $dadosCategorias['categoriaNome']?>
                </option>
                <?php
            }


            ?>
        </select>
        <br>
        <input type="Submit" value="Editar">
    </form>
</div>

<?php
Bottom();
?>