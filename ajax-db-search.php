<?php
include'connection/conn.php'; 
if (isset($_GET['booktitle'])) {
    
   $query = "SELECT * FROM tb_books WHERE booktitle LIKE '{$_GET['booktitle']}%'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
     while ($booktitle = mysqli_fetch_array($result)) {
      $res[] = $booktitle['booktitle'];
     }
    } else {
      $res = array();
    }
    //return json res
    echo json_encode($res);
}
?>