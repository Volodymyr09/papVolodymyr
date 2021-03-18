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
        </div>


        <div class="inner">
            <section>
                <header class="major">
                    <h1>Características</h1>
                </header>

                <form method="post" action="#">
                    <div class="fields">
                        <div class="field half">
                            <label for="field-1">Referências:</label>
                            <p>Marca: ASUS</p>
                            <p>Modelo: ROG Strix G15 G512LU-70AT6PB1</p>

                        </div>

                        <div class="field half">
                            <label for="field-2">Processador:</label>
                            <p>CPU: Intel Core i7-10750H</p>
                            <p>Familia de Processador: Intel Core i7</p>
                            <p>Velocidade Processador: 2.6 GHz (Turbo: 5 GHz)</p>
                            <p>Geração do Processador: 10ª Geração</p>
                            <p>Arquitetura CPU: Comet Lake</p>
                            <p>Número de Núcleos Core: Hexa Core</p>

                        </div>

                        <div class="field half">
                            <label for="field-3">Características Físicas:</label>
                            <p>Cor: Preto</p>
                            <p>Peso (kg): 2.4</p>
                            <p>Altura: 2.1</p>
                            <p>Largura: 36</p>
                            <p>Profundidade: 27.5</p>
                            <p>Unidade de Medida: (cm)</p>
                        </div>

                        <div class="field half">
                            <label for="field-4">Memória e Armazenamento:</label>
                            <p>Memória RAM: 16 GB</p>
                            <p>Armazenamento: 1 TB SSD</p>
                            <p>Tipo de Armazenamento: SSD</p>

                        </div>

                        <div class="field half">
                            <label for="field-5">Conexões:</label>
                            <p>Drive: Não

                            </p>
                            <p>Conetividade: Wi-Fi e Bluetooth</p>
                            <p>Conexões: 3x USB 3.2 Gen 1, 1x USB-C 3.2 Gen 2 with Display Port and G-Sync, 1x 3.5mm combo audio jack, 1x HDMI 2.0b</p>

                        </div>


                        <div class="field half">
                            <label for="field-7">Placa Gráfica:</label>
                            <p>Gráfica: NVIDIA GeForce GTX 1660 Ti</p>
                            <p>Tipo de Placa Gráfica: NVIDIA GeForce GTX</p>
                            <p>Memória GPU: 6 GB</p>

                        </div>

                        <div class="field half">
                            <label for="field-8">Ecrã:</label>
                            <p>Diagonal do Ecrã: 15.6</p>
                            <p>Ecrã: IPS 144 Hz</p>
                            <p>Resolução de Ecrã: 1920 x 1080 (FHD)</p>
                            <p>Ecrã Tátil: Não</p>

                        </div>


                        <div class="field half">
                            <label for="field-8">Sistema Operativo e Software:</label>
                            <p>Sistema Operativo: Windows 10 Home</p>

                        </div>






                    </div>
                </form>
            </section>
        </div>
            <?php
        }
        ?>
    </section>


</div>

<?php
Bottom();
?>
