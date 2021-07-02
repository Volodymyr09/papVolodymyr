<?php
include_once("includes/body.inc.php");
$con=mysqli_connect("localhost","root","","pap2021pcgammer");
$con->set_charset("utf8");
$sql="Select * from encomendas";
$result=mysqli_query($con,$sql);

top();
?>


<div class="container">
    <h1>Estado das encomendas</h1>

    <table class='table table-striped' width="100%">
        <tr>
            <th>Id</th>
            <th>Nome Cliente</th>
            <th>Nome Produto</th>
            <th>Data</th>
            <th>Estado</th>
            <th colspan="2">opções</th>
        </tr>
        <?php
        while($dados=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $dados['encomendaId']?></td>
                <td><?php echo $dados['encomendaPerfilId']?></td>
                <td><?php echo $dados['produtoNome']?></td>
                <td><?php echo $dados['encomendaData']?></td>
                <td><?php echo $dados['encomendaEstado']?></td>
                <td><a class='btn btn-warning btn-xs' href="editaEstadoCompra.php?id=<?php echo $dados['encomendaId']?>"><i class='fa fa-pencil'></i>Editar</a></td>
            </tr>
            <?php
        }
        ?>


    </table>



</div>

<?php
Bottom();
?>
