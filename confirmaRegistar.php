<?php
include_once ("includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);

$nome=addslashes($_POST['nome']);
$email=addslashes($_POST['email']);
$password=addslashes($_POST['password']);
$telefone=addslashes($_POST['telemovel']);
$morada=addslashes($_POST['morada']);


echo $sql="insert into users(userName,userPassword,userState) values('$nome','$password','inativo')";
mysqli_query($con,$sql);
$lastId=mysqli_insert_id($con);

echo $sql2="insert into perfis(perfilNome,perfilMorada,perfilEmail,perfilTelefone) values('$nome','$morada','$email','$telefone')";
mysqli_query($con,$sql2);


session_start();
$_SESSION['id']=$lastId;
$_SESSION['nome']=$nome;

header("location:index.php");

?>

