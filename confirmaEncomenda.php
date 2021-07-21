<?php
include_once("includes/body.inc.php");
$total=intval($_POST['total']);
$sql="insert into encomendas(encomendaValorFinal,encomendaData,encomendaPerfilId) values(".$total.", now(),".$_SESSION['id'].")";
mysqli_query($con,$sql);
$encomendaId=mysqli_insert_id($con);

$cont=0;
if(isset($_SESSION['carrinho'])) {
    foreach ($_SESSION['carrinho'] as $produto) {
        foreach ($produto as $prdId => $quant) {
            $sql = "select produtoPreco from produtos where produtoId =".$prdId;
            $result = mysqli_query($con, $sql);
            if (mysqli_affected_rows($con) > 0) {
                $dados = mysqli_fetch_array($result);

                $sql = "insert into encomendadetalhes values(0,$encomendaId,$prdId,$dados[0],$quant)";
                mysqli_query($con, $sql);

                echo mysqli_error($con);
            }
        }
        unset($_SESSION['carrinho'][$cont++]);
    }
}
header("location:utilizador.php");
?>