<?php include 'head.php'; ?>
<body >
<?php include 'nav.php'; ?>
<?php include 'sidebar.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>FACULTY MANAGEMENT</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">TEACHER MANAGEMENT</li>
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
                  <h5 class="card-title" style="color:white;">TEACHER <span>| Information</span></h5>
            </div>
            <div class="card-body">
                <?php 

                       if (isset($_POST['onadd_teacher'])){
                          onadd_teacher($_POST);
                       }
                      
                ?>
              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST">

                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">Fullname</label>
                  <input type="text" value="" required name="name" class="form-control" id="inputName5">
                </div>


                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">LRN/ID NUMBER</label>
                  <input type="text" value="" required name="lrn" class="form-control" id="inputName5">
                </div>

              

                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Contact Number</label>
                  <input type="text" required name="contactnumber" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="11" class="form-control" id="inputPassword5">
                </div>

                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Section</label>
                  <select class="form-select" name="section">
                          <option value="Section 1">Section 1</option>
                          <option value="Section 2">Section 2</option>
                          </select>
                </div>


                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Email</label>
                  <input type="text" value=""  name="email" class="form-control" id="inputName5">
                </div>

                <div class="">
                  <button type="submit" class="btn btn-primary" name="onadd_teacher">Save Account</button>
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
                  <h5 class="card-title" style="color:white;">TEACHER INFORMATION <span>| Records</span></h5>
               </div>
                <div class="card-body">

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                       <th scope="col">Fullname</th>
                        <th scope="col">LRN</th>
                        <th scope="col">Section</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                      $query = "SELECT * FROM tbl_students WHERE type='Teacher'";
                      $read = mysqli_query($con,$query) or die(mysqli_error());
                      while ($row = mysqli_fetch_array($read)){
                        $id=$row['id'];
                        $name = $row['name'];
                        $lrn = $row['lrn'];
                        $schoolyear = $row['schoolyear'];
                        $strand = $row['strand'];
                        $contactnumber = $row['contactnumber'];
                        $parents = $row['parents'];
                        $parentscontactnumber = $row['parentscontactnumber'];
                        $section = $row['section'];
                        $email = $row['email'];
                        $file = $row['file'];
                        $username = $row['username'];
                        $password = $row['password'];
                      ?>



                      <tr>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $lrn; ?></td>
                        <td><?php echo $section; ?></td>
                         <td><?php echo $contactnumber; ?></td>
                         <td><?php echo $email; ?></td>

                        <td><a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal<?php echo $id; ?>"> <i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-danger" onclick="confirmAction<?php echo $id;?>()" > <i class="bi bi-trash-fill"></i></a></td>
                      </tr>
                      

                      <script>
                        // The function below will start the confirmation dialog
                        function confirmAction<?php echo $id;?>() {
                          let confirmAction = confirm("Are you sure to execute this action?");
                          if (confirmAction) {
                            window.location = "php/delete_student.php?id=<?php echo $id; ?>";
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
                              <form class="row g-3" method="POST" action="php/edit_student.php">


                                    <input type="hidden" value="<?php echo $id;?>" required name="id" class="form-control" id="inputName5">
                                  
                                

                                  <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Fullname</label>
                                    <input type="text" value="<?php echo $name;?>" required name="name" class="form-control" id="inputName5">
                                  </div>


                                   <div class="col-md-12">
                                    <label for="inputName5" class="form-label">LRN/STUDENT NUMBER</label>
                                    <input type="text" value="<?php echo $lrn;?>" required name="lrn" class="form-control" id="inputName5">
                                  </div>


                                  <div class="col-md-12">
                                    <label for="inputPassword5" class="form-label">Contact Number</label>
                                    <input type="text" value="<?php echo $contactnumber;?>" required name="contactnumber" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="11" class="form-control" id="inputPassword5">
                                  </div>


                                

                                  <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Section</label>
                                    <select class="form-select" name="section">
                                      <option value="<?php echo $section;?>" style="color:darkred;"><?php echo $section;?></option>
                                            <option value="Section 1">Section 1</option>
                                             <option value="Section 2">Section 2</option>
                                            </select>
                                  </div>


                                  <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Email</label>
                                    <input type="text" value="<?php echo $email;?>"  name="email" class="form-control" id="inputName5">
                                  </div>

                                  <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Parent/Guardian Password</label>
                                    <input type="text" value="<?php echo $password;?>"  name="password" class="form-control" id="inputName5">
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