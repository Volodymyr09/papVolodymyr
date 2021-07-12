<?php
include_once ("includes/body.inc.php");

print_r($_POST);
$idProduto=intval($_POST['produtoId']);

foreach ($_POST['produto'] as $item){
    $sql="insert into compatibilidades values(".$idProduto.",".$item.")";
    mysqli_query($con,$sql);
}

header("location:listaProduto.php");

?>