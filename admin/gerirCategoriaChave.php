<?php
include_once ("includes/body.inc.php");

top();
?>
    <div class="container">
        <h1>Detalhes</h1>
        <form action="#" method="post" enctype="multipart/form-data">
            <label>Categoria Chave</label>
            <select name="chaveCategoria">
                <option value="-1">Escolha a categoria...</option>
                <?php
                $sql="select * from categoriachaves order by categoriaChaveNome";
                $result=mysqli_query($con,$sql);
                while ($dados=mysqli_fetch_array($result)){
                    ?>
                    <option value="<?php echo $dados['categoriaChaveId']?>"><?php echo $dados['categoriaChaveNome']?></option>
                    <?php
                }


                ?>
            </select>
            <br>
            <label>Chave</label>
            <select name="chaveCategoria">
                <option value="-1">Escolha a categoria...</option>
                <?php
                $sql="select * from chaves order by chaveNome";
                $result=mysqli_query($con,$sql);
                while ($dados=mysqli_fetch_array($result)){
                    ?>
                    <option value="<?php echo $dados['chaveId']?>"><?php echo $dados['chaveNome']?></option>
                    <?php
                }


                ?>
            </select>
            <br>
            <label>Valor</label>
            <input type="text" name="valor" class="w-50 p-3"><br>
            <br>
            <input type="Submit" value="Adiciona"><br>
        </form>
    </div>

<?php
Bottom();
?>