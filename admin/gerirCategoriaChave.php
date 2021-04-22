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
        <form action="confirmaNovoProdutoChave.php" method="post" enctype="multipart/form-data">
            <input id="idProduto" type="hidden" value="<?php echo $id?>" name="produtoChaveProduto">
            <label>Categoria Chaves</label>
            <select name="catChaveProduto" id="chaveCategoria">
                <option value="-1">Escolha a categoria chave...</option>
                <?php
                $sql="select * from categoriachaves 
                            where categoriaChaveTipo='geral'
                            or categoriaChaveId in(
                            select categoriaChaveId
                            from categoriachaves inner join categorias on categoriaId =categoriaChaveCategoriaId inner join produtos on categoriaId= produtoCategoriaId
	                        where produtoId=".$id.") order by categoriaChaveNome";
                $result=mysqli_query($con,$sql);
                while ($dados=mysqli_fetch_array($result)){
                    ?>
                    <option value="<?php echo $dados['categoriaChaveId']?>"><?php echo $dados['categoriaChaveNome']?></option>
                    <?php
                }


                ?>
            </select>
            <br>
            <label>Chaves</label>
            <select name="chaveChaveProduto" id="chave">

            </select>
            <br>
            <label>Valor</label>
            <input type="text" name="valorChaveProduto" class="w-50 p-3"><br>
            <br>
            <div class="container">

                <table class='table table-striped' width="100%">
                    <tr>
                        <td colspan="5" align='right' width="25%">
                            <input type="Submit" value="Adicionar">
                        </td>
                    </tr>
                    <tr>
                        <th>Categoria Chave</th>
                        <th>Chave</th>
                        <th>Valor</th>
                        <th colspan="2">opções</th>
                    </tr>
                    <?php
                    $sql="Select * from produtochaves 
                                    inner join chaves on chaveId=produtoChaveChaveId
                                    inner join categoriaChaves on categoriaChaveId = chaveCategoriaChaveId
                                    where produtoChaveProdutoId=".$id;
                    $result=mysqli_query($con,$sql);
                    while($dados=mysqli_fetch_array($result)){
                        ?>

                        <tr>
                            <td><?php echo $dados['categoriaChaveNome']?></td>
                            <td><?php echo $dados['chaveNome']?></td>
                            <td><?php echo $dados['produtoChaveValor']?></td>

                            <td><a class='btn btn-danger btn-xs' href="#"  onclick="confirmaElimina(<?php echo $dados['chaveId']?>,<?php echo $id?>);"><i class='fa fa-trash'></i>Eliminar</a></td>

                        </tr>
                        <?php
                    }
                    ?>

                </table>
            </div>
        </form>
    </div>


<?php
Bottom();

?>

