<?php

include_once ("admin/includes/config.inc.php");
include_once("includes/body.inc.php");
$id=intval($_GET['idCat']);
$sql="select * from produtos inner join categorias on produtoCategoriaId=categoriaId";
$sql.=" where produtoCategoriaId=".$id;
$result=mysqli_query($con,$sql);
top();
?>

<div id="main" class="container">

    <!-- One -->
    <section id="one">
        <div class="inner">
            <header class="major">
                <h1>Caixas</h1>
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
                    <a href="<?php echo $dados['produtoNome']?>.php" class="button small next">Ver Produto</a>
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

