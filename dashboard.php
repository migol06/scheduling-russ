<?php include 'head.php'; ?>
<body >
<?php include 'nav.php'; ?>
<?php include 'sidebar.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
           <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Students</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php 
                      $query1="SELECT count(*) as totalstudents FROM tbl_students WHERE type='Student'";
                      $result=mysqli_query($con,$query1);
                      if($result){
                          while($row=mysqli_fetch_assoc($result))
                        {
                              $totalstudents=$row['totalstudents'];
                        } 
                        }
                        ?>
                          <?php echo $totalstudents; ?></h6><span class="text-muted small pt-2 ps-1">Total Students</span>

                    </div>
                  </div>

                </div>
              </div>
            </div><!-- End Customers Card -->

            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Borrowed Books</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php 
                      $query1="SELECT count(*) as totalparents FROM tbl_students GROUP BY username";
                      $result=mysqli_query($con,$query1);
                      if($result){
                          while($row=mysqli_fetch_assoc($result))
                        {
                              $totalparents=$row['totalparents'];
                        } 
                        }
                        ?>
                          <?php echo $totalparents; ?></h6><span class="text-muted small pt-2 ps-1">Total Borrowed Books</span>

                    </div>
                  </div>

                </div>
              </div>
            </div><!-- End Customers Card -->



               <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Teachers</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-check"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php 
                      $query1="SELECT count(*) as totalteacher FROM tbl_students WHERE type='Teacher'";
                      $result=mysqli_query($con,$query1);
                      if($result){
                          while($row=mysqli_fetch_assoc($result))
                        {
                              $totalteacher=$row['totalteacher'];
                        } 
                        }
                        ?>
                          <?php echo $totalteacher;?></h6><span class="text-muted small pt-2 ps-1">Total Teachers</span>

                    </div>
                  </div>

                </div>
              </div>
            </div><!-- End Customers Card -->

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            

           

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-header" style="background-color:rgb(153, 0, 0)">
                  <h5 class="card-title" style="color:white;">Students <span>| Information</span></h5>
               </div>
                <div class="card-body">
                 

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Fullname</th>
                        <th scope="col">LRN</th>
                        <th scope="col">School Year</th>
                        <th scope="col">Strand</th>
                        <th scope="col">Section</th>
                        <th scope="col">Contact Number</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                      $query = "SELECT * FROM tbl_students WHERE type='Student'";
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
                        echo'<tr>
                           <td>'.$name.'</td>
                           <td>'.$lrn.'</td>
                           <td>'.$schoolyear.'</td>
                           <td><span class="badge bg-success">'.$strand.'</span></td>
                           <td>'.$section.'</td>
                           <td>'.$contactnumber.'</td>
                        </tr>';
                        }

                      ?>
                      
                      
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


 <?php include 'footer.php'; ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <?php include 'script.php'; ?>

</body>

</html>