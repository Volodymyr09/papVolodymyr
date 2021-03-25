<?php
include_once ("includes/body.inc.php");
    $id=intval($_GET['id']);
    $sql="select * from chaves where chaveId=$id";
    $resultChaves=mysqli_query($con,$sql);
    $dadosChaves=mysqli_fetch_array($resultChaves);
top();
?>
<div class="container">
    <h1>Editar chave</h1>
    <form action="confirmaEditaChave.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="chaveId" value="<?php echo $id?>">
        <label>Nome: </label>
        <input type="text" name="nomeChave" value="<?php echo $dadosChaves['chaveNome']?>"><br>

        <select name="chaveCategoria">
            <option value="-1">Escolha a categoria...</option>
            <?php
            $sql="select * from categorias order by categoriaNome";
            $resultCategorias=mysqli_query($con,$sql);
            while ($dadosCategorias=mysqli_fetch_array($resultCategorias)){
                ?>
                <option value="<?php echo $dadosCategorias['categoriaId']?>"
                    <?php
                    if($dadosChaves['chaveCategoriaId']==$dadosCategorias['categoriaId'])
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