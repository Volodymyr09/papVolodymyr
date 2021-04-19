<?php
    include_once("includes/body.inc.php");
    include_once ("includes/config.inc.php");

    // dados produtosDestaque
    $sql="select * from produtos where produtoDestaque='sim'";
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
    
    top();
?>



    <section id="banner" class="major">
        <div class="inner">
            <header class="major">
                <h1>Bem Vindo! <?php if(isset($_SESSION['id'])) echo $_SESSION['nome']?> </h1>
            </header>
        </div>
    </section>



    <div id="main">
    <!-- About us -->
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
                        <p><del><span style="padding: 10px; font-size: 10px"  class="badge badge-success">New</span></del></p>
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
<br>

    <div class="container">

        <header class="major">
            <h1>Notícias</h1>
        </header>

    <div class="card-group">
        <?php
        $sql="Select * from noticias where noticiaDestaque = 'sim'";
        $result=mysqli_query($con,$sql);
        while($dados=mysqli_fetch_array($result)){
        ?>
        <div div class="card cardNoticias  text-white bg-primary mb-3" style="max-width: 18rem; background-color: #242941!important ">
            <a href="<?php echo $dados['noticiaLinkURL']?>"><img src="<?php echo $dados['noticiaImagemURL']?>" class="card-img-top" alt="..."></a>
            <div class="card cardNoticias text-white bg-primary " style="max-width: 18rem; background-color: #242941!important ">

                <div class="card-body">
                    <h5 class="card-title"><?php echo $dados['noticiaTitulo']?></h5>

                </div>
            </div>
        </div>
            <?php
        }
        ?>
    </div>

    </div>

<?php
Bottom();
?>


