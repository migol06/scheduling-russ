<?php include 'head.php'; ?>
<body >
<?php include 'nav.php'; ?>
<?php include 'sidebar.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>SUBJECT MANAGEMENT</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">SUBJECT MANAGEMENT</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">


         <!-- Right side columns -->
        <div class="col-lg-12">

          <!-- Recent Activity -->
          <div class="card">
            <div class="card-header" style="background-color:rgb(153, 0, 0)">
                  <h5 class="card-title" style="color:white;">SUBJECT <span>| Information</span></h5>
            </div>
            <div class="card-body">
                <?php 

                       if (isset($_POST['onadd_subject'])){
                          onadd_subject($_POST);
                       }
                      
                ?>
              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST">


                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">Subject Code</label>
                  <input type="text" value="" required name="subjectcode" class="form-control" placeholder="Subject Code" id="inputName5">
                </div>

                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Subject Name</label>
                  <input type="text" value="" required name="subjectname" class="form-control" placeholder="Subject Name" id="inputName5">
                </div>

                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">Hours</label>
                  <input type="text" value="" required name="hours" class="form-control" placeholder="Hours" id="inputName5">
                </div>
               

                <div class="">
                  <button type="submit" class="btn btn-primary" name="onadd_subject">Save Subject</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        

          
         

        </div><!-- End Right side columns -->

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            

           

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-header" style="background-color:rgb(153, 0, 0)">
                  <h5 class="card-title" style="color:white;">SUBJECT INFORMATION <span>| Records</span></h5>
               </div>
                <div class="card-body">

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                       <th scope="col">Subject Code</th>
                        <th scope="col">Subject Name</th>
                        <th scope="col">Hours</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                      $query = "SELECT * FROM tbl_subjects";
                      $read = mysqli_query($con,$query) or die(mysqli_error());
                      while ($row = mysqli_fetch_array($read)){
                        $id=$row['id'];
                        $subjectcode = $row['subjectcode'];
                        $subjectname = $row['subjectname'];
                        $hours = $row['hours'];
                        $type = $row['type'];
                      ?>



                      <tr>
                        <td><?php echo $subjectcode; ?></td>
                        <td><?php echo $subjectname; ?></td>
                         <td><?php echo $hours; ?></td>
                        <td><a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal<?php echo $id; ?>"> <i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-danger" onclick="confirmAction<?php echo $id;?>()" > <i class="bi bi-trash-fill"></i></a></td>
                      </tr>
                      

                      <script>
                        // The function below will start the confirmation dialog
                        function confirmAction<?php echo $id;?>() {
                          let confirmAction = confirm("Are you sure to execute this action?");
                          if (confirmAction) {
                            window.location = "php/delete_subject.php?id=<?php echo $id; ?>";
                          } 
                        }
                      </script>


                      <div class="modal fade" id="basicModal<?php echo $id; ?>" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Update Information</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="card">
                                <div class="card-body"> 
                                  <br>
                                  <br>
                              <!-- Multi Columns Form -->
                              <form class="row g-3" method="POST" action="php/edit_subjects.php">
                                    <input type="hidden" value="<?php echo $id;?>" required name="id" class="form-control" id="inputName5">

                                       <div >
                                        <label for="inputName5" class="form-label">Subject Code</label>
                                          <input type="text" value="<?php echo $subjectcode;?>" required name="subjectcode" class="form-control" placeholder="Subject Code" id="inputName5">
                                        </div>

                                        <div >
                                          <label for="inputName5" class="form-label">Subject Name</label>
                                          <input type="text" value="<?php echo $subjectname;?>" required name="subjectname" class="form-control" placeholder="Subject Name" id="inputName5">
                                        </div>

                                         <div >
                                          <label for="inputName5" class="form-label">Hours</label>
                                          <input type="text" value="<?php echo $hours;?>" required name="hours" class="form-control" placeholder="Hours" id="inputName5">
                                        </div>
                                  
                                

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" name="onadd_admin">Update Information</button>
                                </div>
                              </form><!-- End Multi Columns Form -->

                              <br>
                                </div>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div><!-- End Disabled Backdrop Modal-->





                    <?php } ?>






                    </tbody>
                  </table>
                </div>

              </div>
            </div><!-- End Recent Sales -->

            

          </div>
        </div><!-- End Left side columns -->

       

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