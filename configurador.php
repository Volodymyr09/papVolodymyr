<?php
include_once("includes/body.inc.php");
top();
?>

<section id="contact">
    <div class="inner">
        <section>
            <header class="major">
                <h1>Configurador</h1>
            </header>

            <form method="post" action="#">
                <div>



                    <div class="field half">
                        <label for="field-1">Placa Motherboard</label>

                        <select>
                            <option value="-1">Escolha a motherboard ...</option>
                            <?php
                            $sql="select * from produtos inner join categorias";
                            $result=mysqli_query($con,$sql);
                            while ($dados=mysqli_fetch_array($result)){
                            ?>

                            <option value="<?php echo $dados['produtoId']?>"><?php echo $dados['produtoNome']?> - <?php echo $dados['produtoPreco']?>&euro;</option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="field half">
                        <label for="field-1">Processador</label>

                        <select>
                            <option value="-1">Escolha o processador ...</option>
                            <?php
                            $sql="select * from produtos order by produtoNome";
                            $result=mysqli_query($con,$sql);
                            while ($dados=mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $dados['produtoId']?>"><?php echo $dados['produtoNome']?> - <?php echo $dados['produtoPreco']?>&euro;</option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="field half">
                        <label for="field-1">Memória RAM</label>

                        <select>
                            <option value="-1">Escolha a RAM ...</option>
                            <?php
                            $sql="select * from produtos order by produtoNome";
                            $result=mysqli_query($con,$sql);
                            while ($dados=mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $dados['produtoId']?>"><?php echo $dados['produtoNome']?> - <?php echo $dados['produtoPreco']?>&euro;</option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="field half">
                        <label for="field-1">Disco</label>

                        <select>
                            <option value="-1">Escolha o disco ...</option>
                            <?php
                            $sql="select * from produtos order by produtoNome";
                            $result=mysqli_query($con,$sql);
                            while ($dados=mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $dados['produtoId']?>"><?php echo $dados['produtoNome']?> - <?php echo $dados['produtoPreco']?>&euro;</option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="field half">
                        <label for="field-1">Caixa PC</label>

                        <select>
                            <option value="-1">Escolha a caixa ...</option>
                            <?php
                            $sql="select * from produtos order by produtoNome";
                            $result=mysqli_query($con,$sql);
                            while ($dados=mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $dados['produtoId']?>"><?php echo $dados['produtoNome']?> - <?php echo $dados['produtoPreco']?>&euro;</option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="field half">
                        <label for="field-1">Cooler CPU</label>

                        <select>
                            <option value="-1">Escolha o cooler ...</option>
                            <?php
                            $sql="select * from produtos order by produtoNome";
                            $result=mysqli_query($con,$sql);
                            while ($dados=mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $dados['produtoId']?>"><?php echo $dados['produtoNome']?> - <?php echo $dados['produtoPreco']?>&euro;</option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="field half">
                        <label for="field-1">Fonte de Alimentação</label>

                        <select>
                            <option value="-1">Escolha a fonte de alimentação ...</option>
                            <?php
                            $sql="select * from produtos order by produtoNome";
                            $result=mysqli_query($con,$sql);
                            while ($dados=mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $dados['produtoId']?>"><?php echo $dados['produtoNome']?> - <?php echo $dados['produtoPreco']?>&euro;</option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="field half">
                        <label for="field-1">Placa Grafica</label>

                        <select>
                            <option value="-1">Escolha a placa grafica ...</option>
                            <?php
                            $sql="select * from produtos order by produtoNome";
                            $result=mysqli_query($con,$sql);
                            while ($dados=mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $dados['produtoId']?>"><?php echo $dados['produtoNome']?> - <?php echo $dados['produtoPreco']?>&euro;</option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="field half">
                        <label for="field-1">Placa de Som</label>

                        <select>
                            <option value="-1">Escolha a placa de som ...</option>
                            <?php
                            $sql="select * from produtos order by produtoNome";
                            $result=mysqli_query($con,$sql);
                            while ($dados=mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $dados['produtoId']?>"><?php echo $dados['produtoNome']?> - <?php echo $dados['produtoPreco']?>&euro;</option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="field half">
                        <label for="field-1">Placa de Rede</label>

                        <select>
                            <option value="-1">Escolha a placa de rede ...</option>
                            <?php
                            $sql="select * from produtos order by produtoNome";
                            $result=mysqli_query($con,$sql);
                            while ($dados=mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $dados['produtoId']?>"><?php echo $dados['produtoNome']?> - <?php echo $dados['produtoPreco']?>&euro;</option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="field half">
                        <label for="field-1">Sistema Operativo</label>

                        <select>
                            <option value="-1">Escolha o sistema operativo ...</option>
                            <?php
                            $sql="select * from produtos order by produtoNome";
                            $result=mysqli_query($con,$sql);
                            while ($dados=mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $dados['produtoId']?>"><?php echo $dados['produtoNome']?> - <?php echo $dados['produtoPreco']?>&euro;</option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="field half">
                        <label for="field-1">Montagem do Computador</label>

                        <select>
                            <option value="-1">Escolha ...</option>
                            <option value="">Sim</option>
                            <option value="">Não</option>
                        </select>
                    </div>
                    <br>

                    <div class="field half text-right">
                        <ul class="actions">
                            <li> <a href="#" data-toggle="modal" data-target="#checkout1"><span class="label"></span> <input type="submit" value="Comprar" class="primary" /></a></li>
                        </ul>
                    </div>
                </div>
            </form>

        </section>
        <section class="split">
            <section>
                <br>
                <div class="contact-method">
                    <span class="icon alt fa-credit-card"></span>
                    <h3>Preço Total</h3>
                    <span>$ 975.00</span>
                </div>


            </section>
        </section>
    </div>
</section>
<div class="modal fade" id="checkout1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label for="validationServer01" class="form-label">Primeiro Nome</label>
                        <input type="text" class="form-control" id="validationServer01"  required>

                    </div>
                    <div class="col-md-6">
                        <label for="validationServer02" class="form-label">Apelido</label>
                        <input type="text" class="form-control" id="validationServer02" required>

                    </div>
                    <div class="col-md-6">
                        <label for="inputTelephone4" class="form-label">Telemóvel</label>
                        <input type="email" class="form-control" id="inputTelephone4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
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

