<?php include 'head.php'; ?>
<body >
<?php include 'nav.php'; ?>
<?php include 'sidebar.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>BORROWING</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">BORROWING</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
       <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <div class="card-header" style="background-color:rgb(153, 0, 0)">
                  <h5 class="card-title" style="color:white;">BORROWING <span>| Information</span></h5>
            </div>

                   <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                         <th scope="col">Borrower ID/LRN</th>
                        <th scope="col">Borrower</th>
                        <th scope="col">Borrow Date</th>
                         <th scope="col">Returned Date</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php 
                      $query = "SELECT tbl_borrowedbooks.id,tbl_books.booktitle,tbl_books.description,tbl_students.lrn,tbl_students.name,tbl_borrowedbooks.borroweddate,tbl_borrowedbooks.returndate,tbl_borrowedbooks.status FROM tbl_borrowedbooks LEFT JOIN tbl_books ON tbl_borrowedbooks.bookid = tbl_books.id LEFT JOIN tbl_students ON tbl_borrowedbooks.lrn = tbl_students.lrn";
                      $read = mysqli_query($con,$query) or die(mysqli_error());
                      while ($row = mysqli_fetch_array($read)){
                        $id=$row['id'];
                        $booktitle = $row['booktitle'];
                        $description = $row['description'];
                        $lrn = $row['lrn'];
                        $name = $row['name'];
                        $borroweddate = $row['borroweddate'];
                        $returndate = $row['returndate'];
                        $status = $row['status'];
                      ?>



                         <tr>
                        <td><?php echo $booktitle; ?></td>
                        <td><?php echo $description; ?></td>
                        <td><?php echo $lrn; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $borroweddate; ?></td>
                         <td><?php echo $returndate; ?></td>
                        <td> <?php
                          if($status=='Borrowed'){

                            echo'<span class="badge bg-warning">'.$status.'</span>';
                          }elseif ($status=='Returned') {
                             echo'<span class="badge bg-success">'.$status.'</span>';
                          }else{
                             echo'<span class="badge bg-danger">'.$status.'</span>';
                          }

                        ?></td>

                       

                    <?php } ?>






                    </tbody>
                  </table>


                </div>

              </div>
            </div><!-- End Recent Sales -->
      </div>
    </section>

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>BatStateU Students</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="">BatStateU Students</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <?php include 'script.php'; ?>

</body>

</html>