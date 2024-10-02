<!DOCTYPE html>
<html lang="en">

<?php
// memanggil tag head
include '../Config/header.php';
session_start();

?>

<body>

    <?php
        // memanggil navbar
        include '../Config/nav.php';
    ?>

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

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">



            <!-- Card Camera -->
            <div class="col-xxl-12 col-xl-12">
                <div class="card info-card revenue-card">
                    <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                        </li>
                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                    </div>

                    <div class="card-body">
                    <h5 class="card-title">Kamera Tangkapan</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-camera-fill"></i>
                        </div>
                        <div class="ps-3">
                        <h6 id="kamera-status">Kamera Siap</h6>
                        <span class="text-muted small pt-2 ps-1">Tangkapan akan ditampilkan di bawah ini</span>
                        </div>
                    </div>

                    <div class="mt-3">
                        <!-- Video element to display camera stream -->
                        <video id="cameraStream" width="100%" height="auto" autoplay playsinline></video>
                        <!-- Button to trigger camera capture -->
                        <!-- <button class="btn btn-primary mt-3" id="captureBtn">Tangkap Gambar</button> -->
                        <!-- Image to display captured image -->
                        <!-- <img id="capturedImage" class="img-fluid mt-3" style="display: none;" /> -->
                    </div>

                    </div>
                </div>
            </div>
            <!-- End Card Camera -->





          </div>
        </div><!-- End Left side columns -->


        

        <!-- Right side columns -->
        <div class="col-lg-4">

          

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <?php
    // Untuk koneksi ke Database
	  include '../Config/footer.php';
  
  ?>

</body>

</html>