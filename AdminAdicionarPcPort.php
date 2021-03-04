<?php
include_once("includes/body.inc.php");
top();
?>




    <!-- Main -->
    <div id="main" class="container">

        <!-- One -->
        <section id="one">
            <div class="inner">

                <header class="major">
                    <h1>Adicionar</h1>

                </header>
                <div class="container">
                    <div class="row">
                        <form method="post" action="#">
                            <div class="field half">
                                <label for="name">Nome</label>
                                <input type="text" name="name" id="name" />
                            </div>
                            <br>
                            <div class="field half">
                                <label for="subname">Sub-Nome</label>
                                <input type="text" name="subname" id="subname" />
                            </div>
                            <br>
                            <div class="field half">
                                <label for="name">imagem</label>
                                <input type="submit" value="Adicionar Imagem" class="primary" />
                            </div>
                            <br>
                            <div class="field half">
                                <label for="preço">Preço</label>
                                <input type="text" name="preço" id="preço" />
                            </div>
                            <br>

                            <h1>Características</h1>

                            <div class="field half">
                                <label for="referencias">Referências</label>
                                <textarea name="referencias" id="referencias" rows="1"></textarea>
                            </div>
                            <br>
                            <div class="field half">
                                <label for="processador">Processador</label>
                                <textarea name="processador" id="processador" rows="1"></textarea>
                            </div>
                            <br>
                            <div class="field half">
                                <label for="caracteristicasfisical">Caracteristicas Físical</label>
                                <textarea name="caracteristicasfisical" id="caracteristicasfisical" rows="1"></textarea>
                            </div>
                            <br>
                            <div class="field half">
                                <label for="memoria">Memória e Armazenamento</label>
                                <textarea name="memoria" id="memoria" rows="1"></textarea>
                            </div>
                            <br>
                            <div class="field half">
                                <label for="conexoes">Conexões</label>
                                <textarea name="conexoes" id="conexoes" rows="1"></textarea>
                            </div>
                            <br>
                            <div class="field half">
                                <label for="conetividade">Conetividade: Wi-Fi e Bluetooth</label>
                                <textarea name="conetividade" id="conetividade" rows="1"></textarea>
                            </div>
                            <br>
                            <div class="field half">
                                <label for="placagrafica">Placa Gráfica</label>
                                <textarea name="placagrafica" id="placagrafica" rows="1"></textarea>
                            </div>
                            <br>
                            <div class="field half">
                                <label for="software">Sistema Operativo e Software</label>
                                <textarea name="software" id="software" rows="1"></textarea>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="field half text-right">
                    <ul class="actions">
                        <li><input type="submit" value="Adicionar" class="primary" /></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Featured Products -->
        <section class="tiles">


        </section>

    </div>



<?php
Bottom();
?>

