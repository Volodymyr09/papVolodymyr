<?php
include_once("includes/body.inc.php");
$con=mysqli_connect("localhost","root","","pap2021pcgammer");
$con->set_charset("utf8");
$sql="Select * from encomendas inner join perfis on perfilId=encomendaPerfilId ";
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
                <td><?php echo $dados['perfilNome']?></td>
                <td>
                    <?php
                    $sql="Select * from encomendadetalhes inner join produtos on produtoId=encomendaDetalheProdutoId ";
                    $sql.=" where encomendaDetalheEncomendaId=".$dados['encomendaId'];
                    $resultPrd=mysqli_query($con,$sql);
                    while($dadosPrd=mysqli_fetch_array($resultPrd)) {
                        echo '<li>' . $dadosPrd['produtoNome'] . '</li>';
                    }
                    ?>
                </td>
                <td><?php echo $dados['encomendaData']?></td>
                <td><?php echo $dados['encomendaEstado']?></td>
                <td>
                    <?php
                        if($dados['encomendaEstado']=='preparacao'){
                    ?>
                    <a class='btn btn-warning btn-xs' href="caminhoEncomenda.php?id=<?php echo $dados['encomendaId']?>">
                        <i class='fa fa-pencil'></i>Despachar</a>

                    <a class='btn btn-primary btn-xs' href="verEncomenda.php?id=<?php echo $dados['encomendaId']?>">
                        <i class='fa fa-pencil'></i>Detalhes</a>
                    <?php
                        }
                        if($dados['encomendaEstado']=='caminho'){
                    ?>
                    <a class='btn btn-success btn-xs' href="entregaEncomenda.php?id=<?php echo $dados['encomendaId']?>">
                        <i class='fa fa-pencil'></i>Entregar</a>

                    <a class='btn btn-primary btn-xs' href="verEncomenda.php?id=<?php echo $dados['encomendaId']?>">
                         <i class='fa fa-pencil'></i>Detalhes</a>
                    <?php
                        }
                        if($dados['encomendaEstado']=='entregue'){
                    ?>
                    <a class='btn btn-primary btn-xs' href="verEncomenda.php?id=<?php echo $dados['encomendaId']?>">
                        <i class='fa fa-pencil'></i>Detalhes</a>
                    <?php
                        }
                    ?>

                </td>
            </tr>
            <?php
        }
        ?>


    </table>



</div>

<?php
Bottom();
?>
