<?php
include_once("includes/body.inc.php");
$con=mysqli_connect("localhost","root","","pap2021pcgammer");
$con->set_charset("utf8");
$sql="Select * from produtos ";
$result=mysqli_query($con,$sql);

top();
?>
<script>
    function confirmaElimina(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameProduto.php",
            type:"post",
            data:{
                idProduto:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar o produto:'+result+"?"))
                    window.location="eliminaProduto.php?id=" + id;
            }
        })
    };




    $('document').ready(function (){
        $('#search').keyup(function (){
            fillTableProdutos(this.value);
        });
        fillTableProdutos();
    })
</script>

<div class="container">
    <h1>Produtos</h1>

    <table class='table table-striped' width="100%">
        <tr>
            <td colspan="5" align='right'>
                <a href="adicionaProduto.php"><i class='btn btn-success btn-xs'>Adicionar</i></a>
            </td>
        </tr>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Imagem</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th colspan="2">opções</th>
        </tr>
        <?php
        while($dados=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $dados['produtoId']?></td>
                <td><?php echo $dados['produtoNome']?></td>
                <td><img width='90' src="../<?php  echo $dados['produtoImagemURL']?>"></td>
                <td><?php echo $dados['produtoDescricao']?></td>
                <td><?php echo $dados['produtoPreco']?></td>
                <td><a class='btn btn-primary btn-xs' href="gerirCategoriaChave.php?id=<?php echo $dados['produtoId']?>"><i class='fa fa-cog'></i>Gerir</a></td>
                <td><a class='btn btn-warning btn-xs' href="editaProduto.php?id=<?php echo $dados['produtoId']?>"><i class='fa fa-pencil'></i>Editar</a></td>
                <td><a class='btn btn-danger btn-xs' href="#" onclick="confirmaElimina(<?php echo $dados['produtoId']?>);"> <i class='fa fa-trash'></i>Eliminar</a></td>

            </tr>
            <?php
        }
        ?>


    </table>


</div>

<?php
Bottom();
?>

