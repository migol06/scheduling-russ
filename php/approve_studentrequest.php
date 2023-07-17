<?php 
include'../connection/conn.php';
$id = mysqli_real_escape_string($con,$_GET['id']);
$returndate = date("Y-m-d");
$query = "UPDATE tbl_borrowedbooks SET status='Borrowed',returndate='".$returndate."' where id='$id'";
mysqli_query($con, $query);
echo '<script type="text/javascript">alert("Request has been approved!"); window.location = "../student_bookrequest.php";</script>';
$con->close();
?>