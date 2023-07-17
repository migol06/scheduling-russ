<!-- ======= Header ======= -->
  <header id="header" style="background-color:rgb(255, 255, 255)  " class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
           <img src="../assets/img/logomain.png" alt="" height="50px">

                  <span class="d-none d-lg-block" style="color:black">ADMIN DASHBOARD</span>
      </a>
      <i style="color:black" class="bi bi-list toggle-sidebar-btn" ></i>
    </div><!-- End Logo -->

   
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="img/administrator.png" alt="Profile" class="rounded-circle" style="color:black">
            <span class="d-none d-md-block dropdown-toggle ps-2" style="color:black"><?php echo $fullname; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $position; ?></h6>
              <span><?php echo $contactnumber; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>


            <li>
              <a class="dropdown-item d-flex align-items-center" href="php/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->