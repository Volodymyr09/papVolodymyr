<?php
include_once ("includes/body.inc.php");

top();
?>
    <div class="container">
        <h1>Detalhes</h1>
        <form action="ConfirmaNovoProdutoChave.php" method="post" enctype="multipart/form-data">
            <label>Categoria Chave</label>
            <select name="chaveChaveProduto">
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
            <select name="produtoChaveProduto">
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
                    $sql="Select * from produtochaves ";
                    $result=mysqli_query($con,$sql);
                    while($dados=mysqli_fetch_array($result)){
                        ?>

                        <tr>
                            <td><?php echo $dados['produtoChaveChaveId']?></td>
                            <td><?php echo $dados['produtoChaveProdutoId']?></td>
                            <td><?php echo $dados['produtoChaveValor']?></td>

                            <td><a class='btn btn-danger btn-xs' href="#" onclick="confirmaElimina(<?php echo $dados['categoriaId']?>);"> <i class='fa fa-trash'></i>Eliminar</a></td>

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