<?php
$id = intval($_POST['id']);


$lista="(0";
if(isset($_SESSION['carrinho'])){
    foreach ($_SESSION['carrinho'] as $produto){
        $lista.=",".$produto;
    }
}
$lista.=")";

if(($key = array_search($id, $lista)) !== false){
    unset($lista[$key]);
}


header("location:carrinho.php ");
?>