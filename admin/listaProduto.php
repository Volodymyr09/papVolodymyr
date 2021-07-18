<?php
include_once("includes/body.inc.php");

$con=mysqli_connect("localhost","root","","pap2021pcgammer");
$con->set_charset("utf8");

top();
?>


<div class="container">
    <h1>Produtos</h1>

    <div class="table-responsive" align="center">
        <div class="row mb-2" style="width: 50%" >

            <div class="col-11">
                <input id="search" class="form-control">

            </div>

        </div>

        <div id="tableContent">

        </div>
    </div>


</div>

<?php
Bottom(PRODUTOS);
?>

