<?php 
include'../connection/conn.php';
$id = mysqli_real_escape_string($con,$_POST['id']);
$subjectcode = mysqli_real_escape_string($con,$_POST['subjectcode']);
$subjectname = mysqli_real_escape_string($con,$_POST['subjectname']);
$hours = mysqli_real_escape_string($con,$_POST['hours']);

$query = "UPDATE tbl_rooms SET subjectcode='".$subjectcode."',
subjectname='".$subjectname."',
hours='".$hours."' where id='$id'";
mysqli_query($con, $query);
echo '<script type="text/javascript">alert("INFORMATION HAS BEEN UPDATED!"); window.location = "../add_subjects.php";</script>';
$con->close();
?>