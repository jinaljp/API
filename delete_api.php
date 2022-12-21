<?php 
include("dbconfig.php");
$id = $_GET['id'];
$delete_data = "delete from user where id=$id";
$res = mysqli_query($conn, $delete_data);
header("Location: show.php"); 
?>