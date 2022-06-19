
<!--POTWIERDZENIE USUNIECIA JAKO ADMIN-->

<?php
session_start();

include 'functions.php';
$id=$_GET['id'];
$db=mysqli_select_db($login,"kopshoes");
$query = "DELETE from product where item_id = '$id'";
$login->query($query);
header("Location:index.php");
?>


