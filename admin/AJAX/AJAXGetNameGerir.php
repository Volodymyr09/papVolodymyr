<?php
// dados na base de dados
include_once("includes/body.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
$id=intval($_POST['id']);
$sql="Select * from produtochaves inner join chaves on produtoChaveChaveId=chaveId where chaveId=".$id;
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
echo $dados['chaveNome'];

?>
