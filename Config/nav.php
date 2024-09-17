<?php
  // Untuk koneksi ke Database
	include '../Config/koneksi.php';


?>



  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">IOT</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- Status Device ESP32 -->
    <span class="ms-auto">Status : <strong class="text-danger" id="ESP32_Status">Offline</strong></span>

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->



        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../assets/img/human.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Aldy Bawotong</span>
          </a><!-- End Gambar Profil -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Aldy Bawotong</h6>
              <span>Teknisi IOT</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Pengaturan Akun</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../Config/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
              </a>
            </li>

          </ul><!-- End Dropdown Item Profile -->
        </li><!-- End Navbar Profil -->


      </ul>
    </nav><!-- End Icon Navigasi -->

  </header><!-- End Header -->
  
  
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="../Admin/index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- Menu Yang Bisa di akses Oleh Super Admin -->
      <?php if($_SESSION['ulevel'] == 'Super Admin'){ ?>

  
      <li class="nav-item">
          <a class="nav-link " href="../Config/user.php">
          <i class="bi bi-person"></i>
            <span>Pengguna</span>
          </a>
      </li><!-- End pengguna Nav -->
    
      <!-- End Menu Yang Bisa di akses Oleh SuperAdmin -->


      <!-- Menu Yang Bisa di akses Oleh Admin -->

      <?php } elseif($_SESSION['ulevel'] == 'Admin') { ?>


      <li class="nav-item">
        <a class="nav-link " href="../Admin/sensor.php">
        <i class="bi bi-gear-wide-connected"></i>
          <span>Sensor</span>
        </a>
      </li><!-- End Sensor Nav -->

      <li class="nav-item">
        <a class="nav-link " href="../Admin/led.php">
        <i class="bi bi-lightbulb"></i>
          <span>Lampu LED</span>
        </a>
      </li><!-- End led Nav -->

      <li class="nav-item">
        <a class="nav-link " href="../Admin/servo.php">
        <i class="bi bi-gear-wide"></i>
          <span>Servo</span>
        </a>
      </li><!-- End servo Nav -->

    

      <?php } ?>
      <!-- End Menu Yang Bisa di akses Oleh Admin -->

    </ul>

  </aside><!-- End Sidebar-->