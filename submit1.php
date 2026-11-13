<?php 
include('config.php');
  $d_city = $_POST['d_city'];

  $a_city = $_POST['a_city'];
  
  $d_date = $_POST['d_date'];
  
  $a_date = $_POST['a_date'];
  
  
  $query = "insert into flights(d_city, a_city, d_date, a_date) 
  values('$d_city' , '$a_city' , '$d_date' , '$a_date')";
  $result=mysqli_query($con,$query);
  if($result)
  {
      echo "<script>alert('success');</script>";
      echo "<script>window.open('flights.php','_self');</script>";

  }
  else{
      echo "<script>alert('Fail');</script>";
      echo "<script>window.open('airline.php','_self');</script>";
  }
?>