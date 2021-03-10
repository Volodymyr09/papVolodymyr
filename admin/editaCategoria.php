<?php
include_once ("includes/body.inc.php");
$con=mysqli_connect("localhost","root","","pap2021pcgammer");
$id=intval($_GET['id']);

$sql="select * from categorias where categoriaId=$id";
$resultCategoria=mysqli_query($con,$sql);
$dadosCategoria=mysqli_fetch_array($resultCategoria);
top();
?>
<div class="container">
<h1>Editar categoria</h1>
<form action="confirmaEditaCategoria.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="categoriaId" value="<?php echo $id?>">
    <label>Nome: </label>
    <input type="text" name="nomeCategoria" value="<?php echo $dadosCategoria['categoriaNome']?>"><br>
    <label>Logótipo:</label><br>
    <img src="../<?php echo $dadosCategoria['categoriaImagemURL']?>"><br>
    <input type="file" name="imagemCategoria"><br>
    <br>
    <input type="Submit" value="Edita"><br>
</div>

<?php
Bottom();
?>