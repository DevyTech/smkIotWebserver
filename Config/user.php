<?php
  // Untuk koneksi ke Database
	include '../Config/koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<?php  
// memanggil tag head
include '../Config/header.php';

?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">IOT</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->



        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
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

 
  <?php
   // memanggil navbar
  include '../Config/nav.php';


  ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Laman Pengguna</h1>
        <nav>
        <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Users</li>
            <li class="breadcrumb-item active">Profile</li> -->
        </ol>
        </nav>
    </div><!-- End Page Title -->


    <section class="section">
        <div class="row">
        <div class="col-lg-12">

            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Data Pengguna</h5>
                <a class="btn btn-success mb-3" href="../Admin/tambah-pengguna.php" title="Tambah Data"><i class="bx bxs-user-plus"></i> Tambah Pengguna</a>
                <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

                <!-- Table with stripped rows -->
                <table class="table datatable">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Level</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                        $no = 1;
                        $pengguna = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
                        if(mysqli_num_rows($pengguna) > 0) {
                            while($p = mysqli_fetch_array($pengguna)) {
                    ?>

                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $p['nama'] ?></td>
                        <td><?= $p['username'] ?></td>
                        <td><?= $p['level'] ?></td>
                        <td>
                        <a title="Edit Data" class="btn btn-primary" href="../Admin/ubah-pengguna.php?id=<?= $p['id'] ?>"><i class="bx bx-edit"></i> Edit</a> | <a class="btn btn-danger" title="Hapus Data" href="../Admin/hapus-pengguna.php?idpengguna=<?= $p['id'] ?>" onclick="return confirm('Yakin Ingin Menghapus Data Ini?');"><i class="bx bxs-trash"></i> Hapus</a>
                        </td>
                    </tr>
                    <?php } }else{ ?>
                    <tr>
                        <td>Tidak Ada Data</td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
            </div>

        </div>
        </div>
    </section>
</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>IOT SMKN 2 MANADO</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="#">IOT TEAM SMKN 2 MANADO</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>