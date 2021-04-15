<?php
include_once ("includes/config.inc.php");
include_once("includes/body.inc.php");
$sql="Select * from users";
$res=mysqli_query($con,$sql);

top();

?>
<div class="container">
    <h1>Login</h1>
<form action="confirmaLogin.php" method="post">
    <select name="utilizador">
        <?php
        while ($dados=mysqli_fetch_array($res)){
            ?>
            <option value="<?php echo $dados['userId']?>"><?php echo $dados['userName']?></option>
            <?php
        }
        ?>
    </select>
    <br>
    <input type="submit">
</form>
</div>
<?php
Bottom();
?>