<?php
include_once ("includes/body.inc.php");

$id=intval($_GET['id']);

$sql="select * from produtos where produtoId=$id";
$resultProduto=mysqli_query($con,$sql);
$dadosProduto=mysqli_fetch_array($resultProduto);
top();
?>
<div class="container">
<h1>Editar Produto</h1>
    <form action="confirmaEditaProduto.php" method="post" enctype="multipart/form-data">
        <label>Nome: </label>
        <input type="text" name="nomeProduto" value="<?php echo $dadosProduto['produtoNome']?>"><br>
        <img src="../<?php echo $dadosProduto['produtoImagemURL']?>" width="220">
        <label>Imagem: </label>
        <input type="file" name="imagemProduto"><br>
        <label>Descrição: </label>
        <textarea type="text" name="descricaoProduto"><?php echo $dadosProduto['produtoDescricao'];?></textarea>
        <label>Preço: </label>
        <input type="text" name="precoProduto"><br>
        <select name="produtoCategoria">
            <option value="-1">Escolha a categoria...</option>
            <?php
            $sql="select * from categorias order by categoriaNome";
            $result=mysqli_query($con,$sql);
            while ($dados=mysqli_fetch_array($result)){
                ?>
                <option
                        <?php
                            if($dadosProduto['produtoCategoriaId']==$dados['categoriaId'])
                                echo " selected ";
                        ?>

                        value="<?php echo $dados['categoriaId']?>"><?php echo $dados['categoriaNome']?></option>
                <?php
            }


            ?>
        </select>
        <br>
        <input type="hidden" name="produtoId" value="<?php echo $id?>">
        <input type="Submit" value="Edita"><br>
</div>

<?php
Bottom();
?>