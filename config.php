<?php
$servername="localhost";
$username="root";
$password="";
$database="airline";

$con=mysqli_connect($servername,$username,$password,$database,"3307");
if(!$con)
{
    die("Connection failed: ".mysqli_connect_error());
}
// echo "Database selected successfully";
?>