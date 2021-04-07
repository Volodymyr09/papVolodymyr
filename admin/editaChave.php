<?php
include_once ("includes/body.inc.php");
    $id=intval($_GET['id']);
    $sql="select * from chaves inner join categoriachaves on chaveCategoriaChaveId = categoriaChaveId";
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
            $sql="select * from categoriaChaves order by categoriaChaveNome";
            $resultCategorias=mysqli_query($con,$sql);
            while ($dadosCategorias=mysqli_fetch_array($resultCategorias)){
                ?>
                <option value="<?php echo $dadosCategorias['categoriaChaveId']?>"
                    <?php
                    if($dadosChaves['chaveCategoriaChaveId']==$dadosCategorias['categoriaChaveId'])
                        echo " selected ";
                    ?>
                >
                    <?php echo $dadosCategorias['categoriaChaveNome']?>
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