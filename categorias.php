<?php
include_once("includes/body.inc.php");

$id=0;
if(isset($_GET['idCat']))
    $id=intval($_GET['idCat']);

$con=mysqli_connect("localhost","root","","pap2021pcgammer");
$con->set_charset("utf8");
$sql="select * from categorias where categoriaCategoriaId";
if($id==0)
    $sql.=" is null ";
else
    $sql.="=".$id;
$result=mysqli_query($con,$sql);
if(mysqli_affected_rows($con)==0)// não há nenhuma sub-categoria
    header("location:produtos.php?idCat=".$id);
top();
?>

<div id="main" class="container-fluid">

    <!-- One -->
    <section id="one">
        <div class="inner">
            <header class="major">
                <h1>Categorias</h1>
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
                    <a href="categorias.php?idCat=<?php echo $dados['categoriaId']?>" class="button small next">Ver Produtos</a>
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
