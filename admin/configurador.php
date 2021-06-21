<?php
include_once("includes/body.inc.php");
$con=mysqli_connect("localhost","root","","pap2021pcgammer");
$con->set_charset("utf8");
$sql="Select * from noticias";
$result=mysqli_query($con,$sql);

top();
?>


<div class="container">
    <h1>Configurador</h1>

    <div class="card-group">

            <div div class="card cardNoticias  text-white bg-primary mb-3" style="max-width: 18rem; background-color: #242941!important ">
                <a href="processador.php"><img src="../images/ProcessadorAMDRyzen53600.jpg" class="card-img-top" alt="..."></a>
                <div class="card cardNoticias text-white bg-primary " style="max-width: 18rem; background-color: #242941!important ">

                    <div class="card-body">
                        <h5 class="card-title">Processador</h5>

                    </div>
                </div>
            </div>

        <div div class="card cardNoticias  text-white bg-primary mb-3" style="max-width: 18rem; background-color: #242941!important ">
            <a href="processador.php"><img src="../images/PlacaMotherboard.jpg" class="card-img-top" alt="..."></a>
            <div class="card cardNoticias text-white bg-primary " style="max-width: 18rem; background-color: #242941!important ">

                <div class="card-body">
                    <h5 class="card-title">Placa Motherboard</h5>

                </div>
            </div>
        </div>

        <div div class="card cardNoticias  text-white bg-primary mb-3" style="max-width: 18rem; background-color: #242941!important ">
            <a href="processador.php"><img src="../images/MemóriaRAMDDR4GSKILLAegis.jpg" class="card-img-top" alt="..."></a>
            <div class="card cardNoticias text-white bg-primary " style="max-width: 18rem; background-color: #242941!important ">

                <div class="card-body">
                    <h5 class="card-title">Memória RAM</h5>

                </div>
            </div>
        </div>

        <div div class="card cardNoticias  text-white bg-primary mb-3" style="max-width: 18rem; background-color: #242941!important ">
            <a href="processador.php"><img src="../images/CoolerCPUNOXHummerH-312120mmUniversal.jpg" class="card-img-top" alt="..."></a>
            <div class="card cardNoticias text-white bg-primary " style="max-width: 18rem; background-color: #242941!important ">

                <div class="card-body">
                    <h5 class="card-title">Cooler CPU</h5>

                </div>
            </div>
        </div>

    </div>

</div>

<?php
Bottom();
?>
