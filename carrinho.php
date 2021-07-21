<?php
include_once("includes/body.inc.php");
top();
$sql="select * from perfis where perfilId=".$_SESSION['id'];
$res=mysqli_query($con,$sql);
$dadosPerfil=mysqli_fetch_array($res);
?>

<div class="container">
    <section>
        <header class="major">
            <h1>Carrinho de compra</h1>
        </header>

        <table class='table table-striped table-hover' width="100%">
            <tr>
                <th width="40%">Nome</th>
                <th width="20%">Imagem</th>
                <th width="15%">Preço</th>
                <th width="15%">Quant.</th>
                <th width="10%">&nbsp;Opções</th>
            </tr>
            <?php
            $total=0;
            $k=0;
            if(isset($_SESSION['carrinho'])){
                foreach ($_SESSION['carrinho'] as $produto){
                    foreach ($produto as $prdId => $quant){
                        $sql="select * from produtos where produtoId =".$prdId;
                        $result=mysqli_query($con,$sql);
                        if(mysqli_affected_rows($con)>0){
                            $dados=mysqli_fetch_array($result);
                        ?>

                            <tr>
                                <td><?php echo $dados['produtoNome']?></td>
                                <td><img src="<?php echo $dados['produtoImagemURL']?>" width="120"></td>
                                <td><?php echo $dados['produtoPreco']?>&euro;</td>
                                <td><p><input onclick="atualizaCarrinho(this.value,<?php echo $prdId?>)" type="number" value="<?php echo $quant?>" min="1" style=" width: 50px; text-align: center ;color: #000000!important;"></p></td>
                                <td><a href="#" onclick="confirmaEliminaCarrinho(<?php echo $prdId?>);"><img src="images/trash_tb.png" width="20"></a></td>
                            </tr>
                            <?php
                            $k+=$quant;
                            $total+=$dados["produtoPreco"]*$quant;
                        }
                    }
                 }
            }
            ?>

            <tr style="text-align: right">
                <th colspan="6">
                    <span style="font-size: 25px; font-weight: bold">Total ( <?php echo $k?> Produto<?php echo $k!=1?'s':''?>): <?php echo $total ?>&nbsp;€</span>
                </th>
            </tr>
        </table>

    </section>

    <div class="field half text-right">
        <ul class="actions">
            <li> <a href="#" data-toggle="modal" data-target="#checkout"><span class="label"></span> <input type="submit" value="Comprar" class="primary" /></a></li>
        </ul>
    </div>
</div>

<div class="modal fade" id="checkout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Checkout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="confirmaEncomenda.php" method="post">
                    <input type="hidden" name="total" value="<?php echo $total ?>">
                    <div class="col-md-6">
                        <label for="validationServer01" class="form-label">Nome</label>
                        <input type="text" value="<?php echo $dadosPerfil['perfilNome']?>" class="form-control" id="validationServer01"  required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputTelephone4" class="form-label">Telemóvel</label>
                        <input type="text" class="form-control" id="inputTelephone4"  value="<?php echo $dadosPerfil['perfilTelefone']?>" >
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Morada</label>
                        <input type="text"  value="<?php echo $dadosPerfil['perfilMorada']?>"  class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email"  value="<?php echo $dadosPerfil['perfilEmail']?>"  class="form-control" placeholder="name@example.com">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-transparent" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn bg-transparent">Finalizar</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php
Bottom();
?>

