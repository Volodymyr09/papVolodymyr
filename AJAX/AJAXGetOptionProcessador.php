<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$idComPrd2=intval($_POST['idCompatibilidadeProduto2']);
$idPrd=intval($_POST['idProduto']);
$sql="Select * from compatibilidades where compatibilidadeProduto1Id=$idComPrd2 and compatibilidadeProduto2Id not in(
    select produtoChaveChaveId from produtoChaves where produtoChaveProdutoId = $idPrd
)";

$result=mysqli_query($con,$sql);
while($dados=mysqli_fetch_array($result)){
    echo "<option value=\"".$dados['produtoId']."\">".$dados['produtoNome']."</option>";
};

?>

