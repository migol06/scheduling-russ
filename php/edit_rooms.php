<?php 
include'../connection/conn.php';
$id = mysqli_real_escape_string($con,$_POST['id']);
$buildingname = mysqli_real_escape_string($con,$_POST['buildingname']);
$room = mysqli_real_escape_string($con,$_POST['room']);

$query = "UPDATE tbl_rooms SET buildingname='".$buildingname."',
room='".$room."' where id='$id'";
mysqli_query($con, $query);
echo '<script type="text/javascript">alert("INFORMATION HAS BEEN UPDATED!"); window.location = "../add_rooms.php";</script>';
$con->close();
?>