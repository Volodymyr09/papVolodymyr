<?php
include_once("includes/body.inc.php");
$con=mysqli_connect("localhost","root","","pap2021pcgammer");
$con->set_charset("utf8");
$sql="Select * from noticias";
$result=mysqli_query($con,$sql);

top();
?>


<div class="container">
    <h1>Processadores</h1>

    <table class='table table-striped' width="100%">
        <tr>
            <td colspan="5" align='right'>
                <a href="adicionaNoticia.php"><i class='btn btn-success btn-xs'> Adicionar</i></a>
            </td>
        </tr>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Imagem</th>
            <th colspan="2">opções</th>
        </tr>
        <?php
        while($dados=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $dados['noticiaId']?></td>
                <td><?php echo $dados['noticiaTitulo']?></td>
                <td><img width='90' src=../<?php  echo $dados['noticiaImagemURL']?>></td>

                <td><a class='btn btn-warning btn-xs' href="editaNoticia.php?id=<?php echo $dados['noticiaId']?>"><i class='fa fa-pencil'></i>Editar</a></td>
                <td><a class='btn btn-danger btn-xs' href="#" onclick="confirmaEliminaNoticia(<?php echo $dados['noticiaId']?>);"> <i class='fa fa-trash'></i>Eliminar</a></td>

            </tr>
            <?php
        }
        ?>


    </table>



</div>

<?php
Bottom();
?>
