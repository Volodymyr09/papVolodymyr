<?php

include_once ("includes/config.inc.php");
include_once("includes/body.inc.php");
$id=intval($_GET['idCat']);

// dados da categoria
$sql=" select categoriaNome from categorias where categoriaId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
//***********************************

// dados dos produtos
$sql="select * from produtos inner join categorias on produtoCategoriaId=categoriaId";
$sql.=" where produtoCategoriaId=".$id;
$result=mysqli_query($con,$sql);
top();
?>

<div id="main" class="container-fluid">

    <!-- One -->
    <section id="one">
        <div class="inner">
            <header class="major">
                <h1><?php echo $dados['categoriaNome']?></h1>
            </header>
            <a class="btn btn-primary" href="categorias.php" role="button">Voltar</a>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="tiles">
        <?php
        while($dados=mysqli_fetch_array($result)){
        ?>

        <article>
            <span class="image">
                <img src="<?php echo $dados['produtoImagemURL']?>" alt="" />
            </span>
            <header class="major">
                <h3><?php echo $dados['produtoNome']?></h3>
                <p><strong><?php echo $dados['produtoPreco']?></strong></p>
                <div class="major-actions">
                    <a href="produto.php?idPrd=<?php echo $dados['produtoId']?>" class="button small next">Ver Produto</a>
                </div>
            </header>
        </article>

            <?php
        }
        ?>

    </section>

</div>

<?php
Bottom();
?>

