<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);
$sql="select * from produtos where produtoId=$id";
$result=mysqli_query($con,$sql);
$dadosProduto=mysqli_fetch_array($result);

top();
?>


    <div class="container">
        <h1>Detalhes</h1>
        <div style="text-align: center">
        <img src="../<?php echo $dadosProduto['produtoImagemURL']?>" width="220">
        <p class="text-dark bg-white" style="font-weight: bold"><?php echo $dadosProduto['produtoNome']?></p>
        </div>
        <form action="confirmaNovaCompatibilidade.php" method="post" >
            <input id="idProduto" type="hidden" value="<?php echo $id?>" name="produtoChaveProduto">
            <label>Categoria dos produtos</label>
            <select name="catChaveProduto" id="chaveCategoria">
                <option value="-1">Escolha a categoria ...</option>
                <?php
                $sql="select * from categorias";
                $result=mysqli_query($con,$sql);
                while ($dados=mysqli_fetch_array($result)){
                    ?>
                    <option value="<?php echo $dados['categoriaId']?>"><?php echo $dados['categoriaNome']?></option>
                    <?php
                }


                ?>
            </select>
            <h1>Produtos</h1>

            <div class="table-responsive" align="center">
               <div id="tableContent">

               </div>
            </div>
        </form>
    </div>


<?php
Bottom();

?>

