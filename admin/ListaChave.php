<?php
include_once("includes/body.inc.php");
$con=mysqli_connect("localhost","root","","pap2021pcgammer");
$con->set_charset("utf8");
$sql="Select * from chaves ";
$result=mysqli_query($con,$sql);

top();
?>
<script>
    function confirmaElimina(id) {
        $.ajax({
            url:"AJAX/AJAXGetNameChave.php",
            type:"post",
            data:{
                idEmpresa:id
            },
            success:function (result){
                if(confirm('Confirma que deseja eliminar a chave:'+result+"?"))
                    window.location="eliminaChave.php?id=" + id;
            }
        })
    };




    $('document').ready(function (){
        $('#search').keyup(function (){
            fillTableChaves(this.value);
        });
        fillTableChaves();
    })
</script>

    <div class="container">
        <h1>Chaves</h1>

        <table class='table table-striped' width="100%">
            <tr>
                <td colspan="5" align='right'>
                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#AdicionarChave">Adicionar</a></a>
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

    </div>

<div class="modal fade" id="AdicionarChave" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar Chave</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                echo "<form action=\"confirmaNovaChave.php\" method=\"post\" enctype='multipart/form-data'>";

                echo" <label>Nome: </label>";
                echo"  <input type=\"text\" name=\"nomeChave\"><br>";
                ?>
            </div>
            <div class="modal-footer">
                <?php
                echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancela</button>";
                echo" <button type=\"Submit\" class='btn btn-primary'>Adiciona</button> ";
                ?>
            </div>
        </div>
    </div>
</div>

<?php
    Bottom();
?>
