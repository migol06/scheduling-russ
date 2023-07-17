<?php 
include'../connection/conn.php';
$id = mysqli_real_escape_string($con,$_GET['id']);
$query = "UPDATE tbl_files SET status='Approved' where id='$id'";
mysqli_query($con, $query);
echo '<script type="text/javascript">alert("FILE HAS BEEN APPROVED!"); window.location = "../files.php";</script>';
$con->close();
?>