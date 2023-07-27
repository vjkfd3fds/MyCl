<?php
$host="localhost";
$user="root";
$pass="";
$db="php-project";
$con=mysqli_connect($host,$user,$pass) or die ("error");
$db1=mysqli_select_db($con,$db) or die("Error with database");
?>