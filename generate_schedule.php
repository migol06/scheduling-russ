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

                       // if (isset($_POST['onadd_teacher'])){
                       //    onadd_teacher($_POST);
                       // }
                      
                ?>
              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST">


                <div class="col-md-6">
                  <label for="inputName5" class="form-label">School Year</label>
                  <select class="form-select" name="section">
                          <option value="2023-2024">2023-2024</option>
                          <option value="2023-2024">2023-2024</option>
                          </select>
                </div>


                   <div class="col-md-6">
                  <label for="inputName5" class="form-label">Semister</label>
                  <select class="form-select" name="section">
                          <option value="1st Semister">1st Semister</option>
                          <option value="2nd Semister">2nd Semister</option>
                          <option value="Summer">Summer</option>
                          </select>
                </div>


                

              

             

               

                <div class="">
                  <button type="submit" class="btn btn-primary" name="onadd_teacher">GENERATE SCHEDULE</button>
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
                  <h5 class="card-title" style="color:white;">SCHEDULE INFORMATION <span>| Records</span></h5>
               </div>
                <div class="card-body">

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                       <th scope="col">Instructor</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Hours</th>
                        <th scope="col">Section</th>
                        <th scope="col">Room</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>





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