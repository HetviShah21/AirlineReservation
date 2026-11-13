<?php
include('config.php');
$pname = $_POST['p_name'];

$pemail = $_POST['p_email'];

$pmobno = $_POST['p_mobno'];

$pseatno = $_POST['p_seatno'];


$query = "insert into register(p_name, p_email, p_mobno,p_seatno) 
values('$pname' , '$pemail' , '$pmobno' , '$pseatno')";
$result=mysqli_query($con,$query);
if($result)
{
    echo "<script>alert('success');</script>";
    echo "<script>window.open('confirm.php','_self');</script>";

}
else{
    echo "<script>alert('Fail');</script>";
    // echo "<script>window.open('subject.php','_self');</script>";
}
?>
