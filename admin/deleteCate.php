
<?php
ob_start();
require 'model/dbCon.php';
$id = $_GET['id'];
$sql= "DELETE FROM Categories WHERE id='$id'";
mysqli_query($conn,$sql);
header('location:category.php');

?>