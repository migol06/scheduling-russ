<?php include 'head.php'; ?>
<body >
<?php include 'nav.php'; ?>
<?php include 'sidebar.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>ADMINISTRATOR MANAGEMENT</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">ADMINISTRATOR MANAGEMENT</li>
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
                  <h5 class="card-title" style="color:white;">Admin <span>| Information</span></h5>
            </div>
            <div class="card-body">
                <?php 

                       if (isset($_POST['onadd_admin'])){
                          onadd_admin($_POST);
                       }
                      
                ?>
              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST">

                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">Fullname</label>
                  <input type="text" value="" required name="fullname" class="form-control" id="inputName5">
                </div>


                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">Address</label>
                  <input type="text" value="" required name="address" class="form-control" id="inputName5">
                </div>

              

                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Contact Number</label>
                  <input type="text" required name="contactnumber" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="11" class="form-control" id="inputPassword5">
                </div>



                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Username</label>
                  <input type="text" value=""  name="username" class="form-control" id="inputName5">
                </div>

                    <div class="col-md-6">
                  <label for="inputName5" class="form-label">Password</label>
                  <input type="text" value=""  name="password" class="form-control" id="inputName5">
                </div>

                <div class="">
                  <button type="submit" class="btn btn-primary" name="onadd_admin">Save Account</button>
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
                  <h5 class="card-title" style="color:white;">ADMINISTRATOR INFORMATION <span>| Records</span></h5>
               </div>
                <div class="card-body">

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                       <th scope="col">Fullname</th>
                        <th scope="col">Address</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Username</th>
                         <th scope="col">Password</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                      $query = "SELECT * FROM tbl_admin";
                      $read = mysqli_query($con,$query) or die(mysqli_error());
                      while ($row = mysqli_fetch_array($read)){
                        $id=$row['id'];
                        $fullname = $row['fullname'];
                        $address = $row['address'];
                        $contactnumber = $row['contactnumber'];
                        $username = $row['username'];
                        $password = $row['password'];

                      ?>  

                      <tr>
                        <td><?php echo $fullname; ?></td>
                        <td><?php echo $address; ?></td>
                         <td><?php echo $contactnumber; ?></td>
                         <td><?php echo $username; ?></td>
                         <td><?php echo $password; ?></td>
                        <td><a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal<?php echo $id; ?>"> <i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-danger" href="php/delete_student.php?id=<?php echo $id; ?>"> <i class="bi bi-trash-fill"></i></a></td>
                      </tr>
                      




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
                              <form class="row g-3" method="POST" action="php/edit_admin.php">
                                    <input type="hidden" value="<?php echo $id;?>" required name="id" class="form-control" id="inputName5">
                                     <div class="col-md-12">
                                      <label for="inputName5" class="form-label">Fullname</label>
                                      <input type="text" value="<?php echo $fullname;?>" required name="fullname" class="form-control" id="inputName5">
                                    </div>


                                     <div class="col-md-12">
                                      <label for="inputName5" class="form-label">Address</label>
                                      <input type="text" value="<?php echo $address;?>" required name="address" class="form-control" id="inputName5">
                                    </div>

                                  

                                    <div class="col-md-12">
                                      <label for="inputPassword5" class="form-label">Contact Number</label>
                                      <input type="text" required value="<?php echo $contactnumber;?>" name="contactnumber" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="11" class="form-control" id="inputPassword5">
                                    </div>



                                    <div class="col-md-12">
                                      <label for="inputName5" class="form-label">Username</label>
                                      <input type="text" value="<?php echo $username;?>"  name="username" class="form-control" id="inputName5">
                                    </div>

                                        <div class="col-md-12">
                                      <label for="inputName5" class="form-label">Password</label>
                                      <input type="text" value="<?php echo $password;?>" name="password" class="form-control" id="inputName5">
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