<?php 
$dbcon= mysqli_connect('localhost','root','','user');
$id=$_GET['id'];
$query= "DELETE from info where id=$id";
mysqli_query($dbcon,$query); 
header('location:users.php');
?>