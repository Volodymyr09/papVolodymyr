<?php
include_once("includes/body.inc.php");

$con=mysqli_connect("localhost","root","","pap2021pcgammer");
$sql="select * from categorias ";
$result=mysqli_query($con,$sql);
top();
?>

<div id="main" class="container">

    <!-- One -->
    <section id="one">
        <div class="inner">
            <header class="major">
                <h1>Produtos</h1>
            </header>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <input style="width: 95%;" type="text" id="search" class="border float-left" >
                        <img src="images/find-icon-20.png" width="25" class="ml-1 mt-3 float-left">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="tiles">

        <?php
        while($dados=mysqli_fetch_array($result)){

        ?>
        <article>
            <span class="image">
                <img src="<?php echo $dados['categoriaImagemURL']?>" alt="" />
            </span>
            <header class="major">
                <h3><?php echo $dados['categoriaNome']?></h3>

                <div class="major-actions">
                    <a href="<?php echo $dados['categoriaNome']?>.php" class="button small next">Ver Produtos</a>
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
