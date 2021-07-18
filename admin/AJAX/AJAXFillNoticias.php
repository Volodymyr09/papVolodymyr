<?php
include_once("../includes/body.inc.php");
$txt=addslashes($_POST['txt']);

$sql="Select * from noticias where noticiaTitulo LIKE '%$txt%'";
$result=mysqli_query($con,$sql);
?>

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

            <td><a title="Editar" class='btn btn-warning btn-xs' href="editaNoticia.php?id=<?php echo $dados['noticiaId']?>"><i class='fa fa-pencil'></i></a></td>
            <td><a title="Eliminar" class='btn btn-danger btn-xs' href="#" onclick="confirmaEliminaNoticia(<?php echo $dados['noticiaId']?>);"> <i class='fa fa-trash'></i></a></td>

        </tr>
        <?php
    }
    ?>


</table>
