<?php
include_once ("includes/config.inc.php");
include_once("includes/body.inc.php");
$id=intval($_GET['idPrd']);
$sql="select * from produtos where produtoId=$id";
$result=mysqli_query($con,$sql);
top();
?>

<div id="main" class="alt">

    <!-- One -->
    <section id="one">
        <?php
        while($dados=mysqli_fetch_array($result)){

        ?>
        <div class="inner">
            <header class="major">
                <h1><?php echo $dados['produtoNome']?></h1>
            </header>

            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo $dados['produtoImagemURL']?>" class="img-responsive" alt="">
                </div>

                <div class="col-md-7">
                    <h2><?php echo $dados['produtoPreco']?></h2>

                    <p> (Intel Core i7-10700 - NVIDIA GeForce RTX 2060 - RAM: 16 GB - 512 GB SSD).</p>

                    <div class="row">


                        <div class="col-sm-8">


                            <div class="row">


                                <div class="col-sm-6">
                                    <input type="submit" class="primary" value="Adicionar ao Carrinho">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <br>
            <h3>Sobre:</h3>
            <p><?php echo $dados['produtoDescricao']?></p>
            <?php
            }
            ?>
        </div>


        <div class="inner">
            <section>
                <header class="major">
                    <h1>Características</h1>
                </header>

                <form method="post" action="#">

                    <div class="fields">
                        <?php
                        $sql="select categoriaChaveId, categoriaChaveNome
                from categoriachaves inner join chaves on categoriaChaveId = chaveCategoriaChaveId
                inner join produtochaves on chaveId = produtoChaveChaveId
                where produtoChaveProdutoId=$id group by categoriaChaveId";
                        $resultCategorias=mysqli_query($con,$sql);
                        while($dadosCategorias=mysqli_fetch_array($resultCategorias)){
                            $sqlChaves="select chaveNome, produtoChaveValor
                          from chaves inner join produtochaves on chaveId=produtoChaveChaveId
                          where chaveCategoriaChaveId=".$dadosCategorias['categoriaChaveId']." and 
                          produtoChaveProdutoId=$id";
                            $resChaves=mysqli_query($con,$sqlChaves);
                            ?>
                        <div class="field half">
                            <label for="field-1"><b><?php echo $dadosCategorias['categoriaChaveNome']?></b></label>
                            <?php
                            while($dadosChaves=mysqli_fetch_array($resChaves)){
                                ?>
                                <p><?php echo $dadosChaves['chaveNome']?> : <?php echo $dadosChaves['produtoChaveValor']?></p>

                                <?php

                            }
                            ?>
                        </div>
                            <?php
                        }

                        ?>
                    </div>
                </form>
            </section>
        </div>

    </section>


</div>

<?php
Bottom();
?>
