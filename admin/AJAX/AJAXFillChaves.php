<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$txt=addslashes($_POST['txt']);
$sql="Select * from chaves where chaveNome LIKE '$txt%'";
$result=mysqli_query($con,$sql);

?>
<table class='table table-striped' width="100%">
    <tr>
        <td colspan="5" align='right'>
            <a href="adicionaChave.php"><i class='fas fa-plus text-success'> Adiciona</i></a>
        </td>
    </tr>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th colspan="2">opções</th>
    </tr>
    <?php
    while($dados=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $dados['chaveId']?></td>
            <td><?php echo $dados['chaveNome']?></td>
            <td><a href="editaChave.php?id=<?php echo $dados['chaveId']?>"> <i class="fas fa-edit text-primary"></i></a></td>
            <td><a href="#" onclick="confirmaElimina(<?php echo $dados['chaveId']?>);"> <i class="fas fa-trash  text-danger"></i></a></td>
        </tr>
        <?php
    }
    ?>


</table>

