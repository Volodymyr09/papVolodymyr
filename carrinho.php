<?php
include_once("includes/body.inc.php");
top();

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
            $lista="(0";
            if(isset($_SESSION['carrinho'])){
                foreach ($_SESSION['carrinho'] as $produto){
                    $lista.=",".$produto;
                }
            }
            $lista.=")";

            $sql="select * from produtos where produtoId in $lista";
            $result=mysqli_query($con,$sql);
            $i=0;
            $k=0;
            while ($dados=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $dados['produtoNome']?></td>
                <td><img src="<?php echo $dados['produtoImagemURL']?>" width="120"></td>
                <td><?php echo $dados['produtoPreco']?>&euro;</td>
                <td><p><input type="number" value="1" min="1" style=" width: 50px; text-align: center ;color: #000000!important;"></p></td>
                <td><a href="#" onclick="confirmaEliminaCarrinho(<?php echo $dados['produtoId']?>);"><img src="images/trash_tb.png" width="20"></a></td>
            </tr>
            <?php
                $k++;
                $i+=$dados["produtoPreco"];
            }
            ?>


            <tr style="text-align: right">
                <th colspan="6">
                    <?php
                    if($k == 0){
                        ?> <span style="color: #FFFFFF!important; font-size: 25px; font-weight: bold">Total ( <?php echo $k?> Produtos): <?php echo $i ?>&nbsp;€</span>

                        <?php
                    }elseif ($k < 2){

                        ?>
                        <span style="color: #FFFFFF!important; font-size: 25px; font-weight: bold">Total ( <?php echo $k?> Produto): <?php echo $i ?>&nbsp;€</span>

                        <?php
                    }elseif ($k > 1){
                        ?>
                        <span style="color: #FFFFFF!important; font-size: 25px; font-weight: bold">Total ( <?php echo $k?> Produtos): <?php echo $i ?>&nbsp;€</span>

                        <?php
                    }
                    ?>
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
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="validationServer01" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="validationServer01"  required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputTelephone4" class="form-label">Telemóvel</label>
                        <input type="email" class="form-control" id="inputTelephone4">
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Morada</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">País</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Pagamento</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>Pagamento a cobrança</option>
                        </select>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-warning">Finalizar</button>
            </div>
        </div>
    </div>
</div>

<?php
Bottom();
?>

