<?php 
include'../connection/conn.php';
$id = mysqli_real_escape_string($con,$_POST['id']);
$booktitle = mysqli_real_escape_string($con,$_POST['booktitle']);
$description = mysqli_real_escape_string($con,$_POST['description']);
$author = mysqli_real_escape_string($con,$_POST['author']);
$datepublish = mysqli_real_escape_string($con,$_POST['datepublish']);

$query = "UPDATE tbl_books SET booktitle='".$booktitle."',
description='".$description."',
author='".$author."',
datepublish='".$datepublish."' where id='$id'";
mysqli_query($con, $query);
echo '<script type="text/javascript">alert("INFORMATION HAS BEEN UPDATED!"); window.location = "../add_books.php";</script>';
$con->close();
?>