<?php
include_once("includes/body.inc.php");
top();
?>

<div id="main" class="container">

    <!-- One -->
    <section id="one">
        <div class="inner">

            <header class="major">
                <h1>Administrador</h1>

            </header>
            <div class="container">

                <div class="row">
                    <table class='table table-striped table-hover' width="90%">
                        <tr>
                            <td>
                                <a class="btn btn-success" href="AdminAdicionarPcPort.php" role="button">Adicionar Pc/Portatil</a>
                            </td>
                            <td >
                                <a class="btn btn-success" href="AdminAdicionarHardware.php" role="button">Adicionar Hardware</a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="AdminAdicionarAcessoarios.php" role="button">Adicionar Acessorios</a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="AdminAdicionarMonitor.php" role="button">Adicionar Monitor</a>
                            </td>
                        </tr>
                        <tr>
                            <th width="5%">Id</th>
                            <th width="25%">Imagem</th>
                            <th width="50%">Nome</th>
                            <th width="10%">opçoes</th>

                        </tr>
                        <tr>
                            <td>#1</td>
                            <td><img src="images/ListaHardwareMotherboardAsusB450FGaming.jpg" width="120"></td>
                            <td>Motherboard ASUS XPTO 175HZ</td>

                            <td><a class="btn btn-warning" href="AdminEditar.php" role="button">Editar</a> </td>
                            <td><a class="btn btn-danger" href="#" role="button">Eliminar</a> </td>
                        </tr>
                        <tr>
                            <td>#2</td>
                            <td><img src="images/ListaCaixaNoxInfinityAtomRGB.jpg" width="120"></td>
                            <td>Caixa PC NOX Infinity Atom RGB</td>

                            <td><a class="btn btn-warning" href="AdminEditar.php" role="button">Editar</a> </td>
                            <td><a class="btn btn-danger" href="#" role="button">Eliminar</a> </td>
                        </tr>
                        <tr>
                            <td>#3</td>
                            <td><img src="images/ListaDeskGamLegionT5.jpg" width="120"></td>
                            <td>Desktop Gaming MSI MPG Trident</td>

                            <td><a class="btn btn-warning" href="AdminEditar.php" role="button">Editar</a> </td>
                            <td><a class="btn btn-danger" href="#" role="button">Eliminar</a> </td>
                        </tr>
                        <tr>
                            <td>#4</td>
                            <td><img src="images/ProcessadorAMDRyzen53600.jpg" width="120"></td>
                            <td>Processador AMD Ryzen 5 3600</td>

                            <td><a class="btn btn-warning" href="AdminEditar.php" role="button">Editar</a> </td>
                            <td><a class="btn btn-danger" href="#" role="button">Eliminar</a> </td>
                        </tr>
                    </table>


                </div>
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

