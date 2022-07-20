<?php
$hostname="localhost";
$database="Name";  //Nome da database
$username="root";
$password="";
$con=mysqli_connect($hostname,$username,$password)
or die (mysqli_error()."erro ao tentar ligar-se base de dados");
mysqli_select_db($con,$database);
?>