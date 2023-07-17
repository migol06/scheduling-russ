<?php 
include'connection/conn.php'; 
include'php/functions.php';   
session_start();
if ($id=$_SESSION['id'] =="") {
    header("location:index.php");
}
$id=$_SESSION['id'];
$query = "SELECT * FROM tbl_admin WHERE id='".$id."'";
$read = mysqli_query($con,$query) or die(mysqli_error());
  while ($row = mysqli_fetch_array($read)){
  $id = $row['id']; 
  $fullname = $row['fullname'];
  $address = $row['address'];
  $contactnumber = $row['contactnumber'];
  $position = $row['position'];
  $password = $row['password'];
  $username = $row['username'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BATSTATEU TNEU JPLPC-MALVAR SCHEDULING SYSTEM USING RULE-BASED ALGORITHM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logomain.png" rel="icon">
  <link href="img/logomain.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
  <!-- jQuery UI -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <script type="text/javascript" src="assets/js/instascan.min.js"></script>
</head>