<?php
include_once ("includes/body.inc.php");

$id=intval($_GET['id']);

$sql="select * from produtos where produtoId=$id";
$resultProduto=mysqli_query($con,$sql);
$dadosProduto=mysqli_fetch_array($resultProduto);
top();
?>
<div class="container">
<h1>Editar Estado</h1>
    <div style="text-align: center">
        <img src="../<?php echo $dadosProduto['produtoImagemURL']?>" width="220">
        <p class="text-dark bg-white" style="font-weight: bold"><?php echo $dadosProduto['produtoNome']?></p>
    </div>
<form action="confirmaEditaNoticia.php" method="post" enctype="multipart/form-data" class="align-center">

    <div class="form-check form-check-inline" >
        <p><input type="radio" name="EstadoCompra" value="preparçao"
               <?php if( $dadosProduto['produtoDestaque'] == 'preparçao') echo " checked ";?>
            >&nbsp;Preparação</p>
    </div>
    <div class="form-check form-check-inline">
        <p><input type="radio" name="EstadoCompra" value="caminho"
                <?php if( $dadosProduto['produtoDestaque'] == 'caminho') echo " checked ";?>
            >&nbsp;A caminho</p>
    </div>
    <div class="form-check form-check-inline">
        <p><input type="radio" name="EstadoCompra" value="entregue"
                <?php if( $dadosProduto['produtoDestaque'] == 'entregue') echo " checked ";?>
            >&nbsp;Entregue</p>
    </div>
    <br>
    <!--
    <p><input type="radio" name="destaqueNoticia" value="sim"
            <?php if( $dadosProduto['noticiaDestaque'] == 'sim') echo " checked ";?>
        >&nbsp;Sim</p>
    <p><input type="radio" name="destaqueNoticia" value="nao"
            <?php if( $dadosProduto['noticiaDestaque'] == 'nao') echo " checked ";?>
        >&nbsp;Não</p>
        -->
    <br>
    <input type="Submit" value="Edita"><br>
</form>
</div>

<?php
Bottom();
?>