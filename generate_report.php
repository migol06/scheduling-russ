<?php include 'head.php';

// $datefrom = mysqli_real_escape_string($con,$_POST['datefrom']);
// $dateto = mysqli_real_escape_string($con,$_POST['dateto']);
 ?>
<body >








         <!-- Right side columns -->
        <div class="col-lg-12">

            <!-- Right side columns -->
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header" style="background-color:#4A9900;">
                <center><h5 class="card-title" style="color:black;">ALL BORROWED RECORDS</h5></center>
                </div>




            <div class="card-body">
             
             
                   <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                         <th scope="col">Borrower ID/LRN</th>
                        <th scope="col">Borrower</th>
                        <th scope="col">Borrow Date</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php 
                      $query = "SELECT tbl_borrowedbooks.id,tbl_books.booktitle,tbl_books.description,tbl_students.lrn,tbl_students.name,tbl_borrowedbooks.borroweddate,tbl_borrowedbooks.status FROM tbl_borrowedbooks LEFT JOIN tbl_books ON tbl_borrowedbooks.bookid = tbl_books.id LEFT JOIN tbl_students ON tbl_borrowedbooks.lrn = tbl_students.lrn WHERE tbl_borrowedbooks.status='Borrowed'";
                      $read = mysqli_query($con,$query) or die(mysqli_error());
                      while ($row = mysqli_fetch_array($read)){
                        $id=$row['id'];
                        $booktitle = $row['booktitle'];
                        $description = $row['description'];
                        $lrn = $row['lrn'];
                        $name = $row['name'];
                        $borroweddate = $row['borroweddate'];
                        $status = $row['status'];
                      ?>



                         <tr>
                        <td><?php echo $booktitle; ?></td>
                        <td><?php echo $description; ?></td>
                        <td><?php echo $lrn; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $borroweddate; ?></td>
                        <td>
                          
                        <?php
                          if($status=='Borrowed'){

                            echo'<span class="badge bg-info">'.$status.'</span>';
                          }elseif ($status=='Returned') {
                             echo'<span class="badge bg-success">'.$status.'</span>';
                          }else{
                             echo'<span class="badge bg-danger">'.$status.'</span>';
                          }

                        ?>


                        </td>

                      </tr>

                    <?php } ?>






                    </tbody>
                  </table>
           
            </div>
          </div>
        </div><!-- End Right side columns -->
         

        </div><!-- End Right side columns -->


      

<script type="text/javascript"> window.print();</script>



  <?php include 'script.php'; ?>

</body>

</html>