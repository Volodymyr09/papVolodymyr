<?php
include_once ("includes/body.inc.php");

top();
?>
<div class="container">
<h1>Adicionar Chave</h1>
<form action="confirmaNovaChave.php" method="post" enctype="multipart/form-data">
    <label>Nome: </label>
    <input type="text" name="nomeChave"><br>
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
    <input type="Submit" value="Adiciona"><br>
</form>
</div>

    <?php
    Bottom();
    ?>
