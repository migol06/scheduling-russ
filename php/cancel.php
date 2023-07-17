<?php 
include'../connection/conn.php';
$id = mysqli_real_escape_string($con,$_GET['id']);
$query = "UPDATE tbl_borrowedbooks SET status='Cancel' where id='$id'";
mysqli_query($con, $query);
echo '<script type="text/javascript">alert("Request has been cancelled!"); window.location = "../borrowed_books_records.php";</script>';
$con->close();
?>