<?php 
include'../connection/conn.php';
$id = mysqli_real_escape_string($con,$_POST['id']);
$fullname = mysqli_real_escape_string($con,$_POST['fullname']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$contactnumber = mysqli_real_escape_string($con,$_POST['contactnumber']);
$username = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);

$query = "UPDATE tbl_admin SET fullname='".$fullname."',
address='".$address."',
contactnumber='".$contactnumber."',
username='".$username."',
password='".$password."' where id='$id'";
mysqli_query($con, $query);
echo '<script type="text/javascript">alert("INFORMATION HAS BEEN UPDATED!"); window.location = "../add_admin.php";</script>';
$con->close();
?>