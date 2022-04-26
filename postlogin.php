<?php
if (empty($_POST['nama'])){
    header("Location:formkosong.php");
}else echo "<center>Nama :".$_POST['nama']."</center><br>";
if (empty($_POST['email'])){
    header("Location:formkosong.php");
}else echo "<center>Email :".$_POST['email']."</center><br>";
?>
<?php
echo "<center>" . date("h:i:s a l, Y-m-d") . "</center><br>";
?>
