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
        <div class="col-lg-8">
          <div class="row">



            <!-- Card Servo Garasi -->
            <div class="col-xxl-6 col-xl-12">

              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Servo Garasi</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-car-front-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6 id="garasi">Servo Terbuka</h6>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- Card Servo Garasi -->




            <!-- Card Servo Pintu -->
            <div class="col-xxl-6 col-xl-12">

              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Servo Pintu</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-microsoft"></i>
                    </div>
                    <div class="ps-3">
                      <h6 id="pintu">Pintu Tertutup</h6>



                      <div class="form-check form-switch" style="font-size: 25px;">
                        <input class="form-check-input" type="checkbox" role="switch" id="pintuToggle" onclick="togglePintu()">
                      </div>


                    </div>
                  </div>

                </div>
              </div>

            </div><!-- Card Servo Pintu -->






            <!-- Card Servo Jendela -->
            <div class="col-xxl-6 col-xl-12">

              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Servo Jendela</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-microsoft"></i>
                    </div>
                    <div class="ps-3">
                      <h6 id="jendela">Jendela Tertutup</h6>



                      <div class="form-check form-switch" style="font-size: 25px;">
                        <input class="form-check-input" type="checkbox" role="switch" id="jendelaToggle" onclick="toggleJendela()">
                      </div>


                    </div>
                  </div>

                </div>
              </div>

              </div><!-- Card Servo Jendela -->





          </div>
        </div><!-- End Left side columns -->


        

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Recent Activity <span>| Today</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Voluptatem blanditiis blanditiis eveniet
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Voluptates corrupti molestias voluptatem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 day</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 days</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    Est sit eum reiciendis exercitationem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">4 weeks</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

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