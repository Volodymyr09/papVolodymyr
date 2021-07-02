<?php
include_once ("includes/body.inc.php");

$id=intval($_GET['id']);

$sql="select * from encomendas inner join produtos on produtoId=encomendaDetalheProdutoId where encomendaDetalheEncomendaId";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
top();
?>
<div class="container">
<h1>Editar Estado</h1>
    <div style="text-align: center">
        <img src="../<?php echo $dados['produtoImagemURL']?>" width="220">
        <p class="text-dark bg-white" style="font-weight: bold"><?php echo $dados['produtoNome']?></p>
    </div>
<form action="confirmaEditaEstadoCompra.php" method="post" enctype="multipart/form-data" class="align-center">

    <div class="form-check form-check-inline" >
        <p><input type="radio" name="EstadoCompra" value="preparçao"
               <?php if( $dados['encomendaEstado'] == 'preparçao') echo " checked ";?>
            >&nbsp;Preparação</p>
    </div>
    <div class="form-check form-check-inline">
        <p><input type="radio" name="EstadoCompra" value="caminho"
                <?php if( $dados['encomendaEstado'] == 'caminho') echo " checked ";?>
            >&nbsp;A caminho</p>
    </div>
    <div class="form-check form-check-inline">
        <p><input type="radio" name="EstadoCompra" value="entregue"
                <?php if( $dados['encomendaEstado'] == 'entregue') echo " checked ";?>
            >&nbsp;Entregue</p>
    </div>
    <br>
    <br>
    <input type="Submit" value="Edita"><br>
</form>
</div>

<?php
Bottom();
?>