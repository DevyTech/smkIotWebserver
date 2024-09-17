<?php
  // Untuk koneksi ke Database
	include '../Config/koneksi.php';
  session_start();
  if(!isset($_SESSION['status_login'])) {
    echo "<script> window.location = '../pages-login.php' </script>";
  }


?>

<!DOCTYPE html>
<html lang="en">

<?php  
// memanggil tag head
include '../Config/header.php';

?>

<body>


 
  <?php
   // memanggil navbar
  include '../Config/nav.php';


  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard Admin</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard Admin</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Card Sensor Suhu -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Halo Admin</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                       <i class="bi bi-person-gear"></i>
                    </div>
                    <div class="ps-3">
                      <h6>100% Comfom Laman Admin</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- Card Sensor Suhu -->
            

          </div>
        </div><!-- End Left side columns -->


  

      </div>
    </section>

  </main><!-- End #main -->
  <?php
    // Untuk koneksi ke Database
	include '../Config/footer.php';
  
  ?>


</body>

</html>