<?php 
include'../connection/conn.php';
$id = mysqli_real_escape_string($con,$_GET['id']);
$query = "DELETE FROM tbl_files WHERE status='Rejected' where id='$id'";
mysqli_query($con, $query);
echo '<script type="text/javascript">alert("FILE HAS BEEN REJECTED!"); window.location = "../files.php";</script>';
$con->close();
?>