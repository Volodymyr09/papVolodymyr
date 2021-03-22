<?php
include_once ("includes/body.inc.php");

$id=intval($_GET['id']);

$sql="select * from categorias where categoriaId=$id";
$resultCategoria=mysqli_query($con,$sql);
$dadosCategoria=mysqli_fetch_array($resultCategoria);
top();
?>
<div class="container">
<h1>Editar categoria</h1>
<form action="confirmaEditaCategoria.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="categoriaId" value="<?php echo $id?>">
    <label>Nome: </label>
    <input type="text" name="nomeCategoria" value="<?php echo $dadosCategoria['categoriaNome']?>"><br>
    <label>Imagem:</label>
    <img src="../<?php echo $dadosCategoria['categoriaImagemURL']?>" width="220"><br>
    <input type="file" name="imagemCategoria"><br>
    <br>
    <select name="categoriaCategoria">
        <option value="-1">Escolha a categoria...</option>
        <?php
        $sql="select * from categorias order by categoriaNome";
        $result=mysqli_query($con,$sql);
        while ($dados=mysqli_fetch_array($result)){
            ?>
            <option
                <?php
                if($dadosCategoria['categoriaCategoriaId']==$dados['categoriaId'])
                    echo " selected ";
                ?>
                    value="<?php echo $dados['categoriaId']?>"><?php echo $dados['categoriaNome']?></option>
            <?php
        }


        ?>
    </select>
    <br>
    <input type="Submit" value="Edita"><br>
</div>

<?php
Bottom();
?>