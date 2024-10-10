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

            <!-- Lampu Teras -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card gas">

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
                  <h5 class="card-title">Lampu Teras</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-lightbulb"></i>
                    </div>
                    <div class="ps-3">

                      <div class="form-check form-switch" style="font-size: 25px;">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" onclick="toggleLED()">
                        <label id="LEDTeras"class="form-check-label" for="flexSwitchCheckDefault">OFF</label>
                      </div>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- Lampu Teras -->


            <!-- Lampu R.Tengah -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card gas">

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
                  <h5 class="card-title">Lampu Ruang Tengah</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-lightbulb"></i>
                    </div>
                    <div class="ps-3">

                      <div class="form-check form-switch" style="font-size: 25px;">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">OFF</label>
                      </div>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- Lampu R.Tengah -->


            <!-- Lampu Kamar -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card gas">

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
                  <h5 class="card-title">Lampu Kamar 1</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-lightbulb"></i>
                    </div>
                    <div class="ps-3">

                      <div class="form-check form-switch" style="font-size: 25px;">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">OFF</label>
                      </div>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- Lampu Kamar -->


            <!-- Lampu Kamar 2 -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card gas">

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
                  <h5 class="card-title">Lampu Kamar 2</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-lightbulb"></i>
                    </div>
                    <div class="ps-3">

                      <div class="form-check form-switch" style="font-size: 25px;">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">OFF</label>
                      </div>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- Lampu Kamar 2 -->


            <!-- Lampu Dapur -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card gas">

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
                  <h5 class="card-title">Lampu Dapur</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-lightbulb"></i>
                    </div>
                    <div class="ps-3">

                      <div class="form-check form-switch" style="font-size: 25px;">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">OFF</label>
                      </div>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- Lampu Dapur -->




            <!-- Lampu Dapur -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card gas">

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
                  <h5 class="card-title">Lampu Garasi</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-lightbulb"></i>
                    </div>
                    <div class="ps-3">

                      <div class="form-check form-switch" style="font-size: 25px;">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">OFF</label>
                      </div>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- Lampu Dapur -->



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

<script>
  let ip_led = "http://192.168.1.79/"
  document.addEventListener("DOMContentLoaded", function() {
      getLEDStatus();
    });
  // function fetchLEDStatus() {
  //     var xhr = new XMLHttpRequest();
  //     xhr.open("GET", "http://192.168.1.7/led-status", true);
  //     xhr.onreadystatechange = function() {
  //       if (xhr.readyState == 4 && xhr.status == 200) {
  //         var status = xhr.responseText;
  //         document.getElementById("LEDTeras").innerText = status;
  //       }
  //     };
  //     xhr.send();
  //   }
  //   setInterval(fetchLEDStatus, 1000); // Fetch status every second
  function toggleLED() {
    // var xhr = new XMLHttpRequest();
    // xhr.open("GET", ip_led+"toggle-led", true);
    // xhr.onreadystatechange = function() {
    //     if (xhr.readyState == 4 && xhr.status == 200) {
    //       var status = xhr.responseText;
    //       document.getElementById("LEDTeras").innerText = status;
    //     }
    //   };
    // xhr.send();
  }
  function getLEDStatus() {
      var xhr = new XMLHttpRequest();
      xhr.open("GET", ip_led+"get-led-status", true);
      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          var response = JSON.parse(xhr.responseText);
          var status = response.ledState;
          document.getElementById("LEDTeras").innerText = status;
          document.getElementById("flexSwitchCheckDefault").checked = (status === "ON");
        }
      };
      xhr.send();
    }
</script>
</html>