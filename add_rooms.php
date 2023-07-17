<?php include 'head.php'; ?>
<body >
<?php include 'nav.php'; ?>
<?php include 'sidebar.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>ROOM MANAGEMENT</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">ROOM MANAGEMENT</li>
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
                  <h5 class="card-title" style="color:white;">Rooms <span>| Information</span></h5>
            </div>
            <div class="card-body">
                <?php 

                       if (isset($_POST['onadd_rooms'])){
                          onadd_rooms($_POST);
                       }
                      
                ?>
              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST">

                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">Building</label>
                   <select class="form-select" name="buildingname">
                    <option value="CICS BUILDING">CICS BUILDING</option>
                    <!-- <option value=""></option> -->
                  </select>
                </div>


                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">Room</label>
                  <input type="text" value="" required name="room" class="form-control" placeholder="Room" id="inputName5">
                </div>
               

                <div class="">
                  <button type="submit" class="btn btn-primary" name="onadd_rooms">Save Room</button>
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
                  <h5 class="card-title" style="color:white;">ROOM INFORMATION <span>| Records</span></h5>
               </div>
                <div class="card-body">

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                       <th scope="col">Building</th>
                        <th scope="col">Room</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                      $query = "SELECT * FROM tbl_rooms";
                      $read = mysqli_query($con,$query) or die(mysqli_error());
                      while ($row = mysqli_fetch_array($read)){
                        $id=$row['id'];
                        $buildingname = $row['buildingname'];
                        $room = $row['room'];
                      ?>



                      <tr>
                        <td><?php echo $buildingname; ?></td>
                        <td><?php echo $room; ?></td>
                        <td><a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal<?php echo $id; ?>"> <i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-danger" onclick="confirmAction<?php echo $id;?>()" > <i class="bi bi-trash-fill"></i></a></td>
                      </tr>
                      

                      <script>
                        // The function below will start the confirmation dialog
                        function confirmAction<?php echo $id;?>() {
                          let confirmAction = confirm("Are you sure to execute this action?");
                          if (confirmAction) {
                            window.location = "php/delete_rooms.php?id=<?php echo $id; ?>";
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
                              <form class="row g-3" method="POST" action="php/edit_rooms.php">
                                    <input type="hidden" value="<?php echo $id;?>" required name="id" class="form-control" id="inputName5">

                                      <div>
                                        <label for="inputName5" class="form-label">Building</label>
                                        <input type="text" required value="<?php echo $buildingname;?>" name="buildingname" class="form-control" id="inputName5">
                                      </div>


                                       <div >
                                        <label for="inputName5" class="form-label">Room</label>
                                        <input type="text" required value="<?php echo $room;?>" name="room" class="form-control" id="inputName5">
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