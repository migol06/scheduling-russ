<?php include 'head.php'; ?>
<body >
<?php include 'nav.php'; ?>
<?php include 'sidebar.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>FILES FOR APPROVAL</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">FILES FOR APPROVAL</li>
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
                  <h5 class="card-title" style="color:white;">FILES FOR APPROVAL <span>| Information</span></h5>
            </div>

                    <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                       <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Year Level</th>
                        <th scope="col">Section</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                      $query = "SELECT * FROM tbl_files where status='Pending'";
                      $read = mysqli_query($con,$query) or die(mysqli_error());
                      while ($row = mysqli_fetch_array($read)){
                        $id=$row['id'];
                        $title = $row['title'];
                        $description = $row['description'];
                        $yearlevel = $row['yearlevel'];
                        $section = $row['section'];
                        $dateuploaded = $row['dateuploaded'];
                        $status = $row['status'];
                        $file = $row['file'];
                      ?>  

                      <tr>
                        <td><?php echo $title; ?></td>
                        <td><?php echo $description; ?></td>
                         <td><?php echo $yearlevel; ?></td>
                         <td><?php echo $section; ?></td>
                          <td><?php echo $status; ?></td>
                        <td>
                          <a href="../users/<?php echo $file;?>" download class="btn btn-info" readonly="">View</a>
                          <a onclick="confirmAction<?php echo $id;?>()"  class="btn btn-success" readonly="">Approve</a>
                          <a onclick="confirmAction2<?php echo $id;?>()" class="btn btn-danger" readonly="">Reject</a>
                      </tr>


                       <script>
                            // The function below will start the confirmation dialog
                            function confirmAction<?php echo $id;?>() {
                              let confirmAction = confirm("Are you sure to execute this action?");
                              if (confirmAction) {
                                window.location = "php/approved.php?id=<?php echo $id;?>";
                              } 
                            }


                            function confirmAction2<?php echo $id;?>() {
                              let confirmAction = confirm("Are you sure to execute this action?");
                              if (confirmAction) {
                                window.location = "php/reject.php?id=<?php echo $id;?>";
                              } 
                            }
                          </script>
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