<?php
    // Untuk koneksi ke Database
	include '../Config/koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">

<?php  
    // memanggil tag head
    include '../Config/header.php';
    // Menggunakan prepared statement untuk mencegah SQL Injection
    $id = $_GET['id'];
    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $p = mysqli_fetch_object($result);

    mysqli_stmt_close($stmt);

?>

<body>

  <?php  
    // memanggil tag head
    include '../Config/header-nav.php';

  ?>

 
  <?php
   // memanggil navbar
  include '../Config/nav.php';


  ?>

<main id="main" class="main">

<div class="pagetitle">
    <h1>Laman Pengguna</h1>
    <nav>
      <ol class="breadcrumb">
      </ol>
    </nav>
  </div><!-- End Page Title -->


  <section class="section profile">
    <div class="row">

      <div class="col-xl-12">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Ubah Data Pengguna</button>
                <button title="Kembali" name="submit" type="submit" class="btn btn-primary mt-3" onclick="window.location = '../Config/user.php'"><i class="bx bxs-log-out"></i> Kembali</button> 
                <div class="mt-3"></div>
              </li>

            </ul>
            <div class="tab-content pt-2 mt-3">


              <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                <form action="" method="post">

                  <div class="row mb-3">
                    <label for="nama" class="col-md-4 col-lg-3 col-form-label">Nama :</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="nama" type="text" class="form-control" id="nama" autocomplete="off" value="<?= htmlspecialchars($p->nama) ?>" required>
                    </div>
                  </div>


                  <div class="row mb-3">
                    <label for="username" class="col-md-4 col-lg-3 col-form-label">Username :</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="username" type="text" class="form-control" id="username" autocomplete="off" value="<?= htmlspecialchars($p->username) ?>" required>
                    </div>
                  </div>


                  <div class="row mb-3">
                    <label for="password" class="col-md-4 col-lg-3 col-form-label">Password :</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="password" type="password" class="form-control" id="password" autocomplete="off" value="<?= htmlspecialchars($p->password) ?>" required>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <label for="level" class="col-md-4 col-lg-3 col-form-label">Level :</label>
                    <div class="col-md-8 col-lg-9"> 
                      <select class="form-control" name="level" id="level">
                        <option value="">-Pilih-</option>
                        <option value="Super Admin" <?= ($p->level == 'Super Admin')? 'selected' : ''; ?>>1. Super Admin</option>
                        <option value="Admin" <?= ($p->level == 'Admin')? 'selected' : ''; ?>>2. Admin</option>
                      </select>
                    </div>
                  </div>


                  <div class="" style="margin-left:24rem;">
                    <button title="Simpan Data" name="submit" type="submit" class="btn btn-success mb-3"><i class="bx bxs-archive-in"></i> Simpan Perubahan Data</button>
                  </div>
                </form>
                <!-- End Profile Edit Form -->

                <?php
                
                    if(isset($_POST['submit'])) {
                      //tampung data dari input atribut name ke dalam variabel
                      $nama = addslashes(ucwords($_POST['nama']));
                      $username = addslashes($_POST['username']);
                      $password = $_POST['password'];
                      $level = $_POST['level'];

                      // Hash kata sandi sebelum menyimpannya dalam database
                      $password_hash = password_hash($password, PASSWORD_DEFAULT);

                      //query ubah data menggunakan prepared statement
                      $stmt = mysqli_prepare($conn, "UPDATE users SET nama = ?, username = ?, password = ?, level = ? WHERE id = ?");
                      mysqli_stmt_bind_param($stmt, "ssssi", $nama, $username, $password_hash, $level, $id);
                      $ubah = mysqli_stmt_execute($stmt);

                      if($ubah) {
                        echo '<script>
                                alert("Data berhasil diubah");
                                window.location.href = "../Config/user.php";
                              </script>';
                              
                      }else{
                        echo '<div class="alert alert-danger" role="alert">
                                                            Pengguna Gagal Di Ubah!
                                                      </div>'.mysqli_error($conn);                     
                      }

                      mysqli_stmt_close($stmt);
                    }
                
                ?>

              </div>



            </div><!-- End Bordered Tabs -->

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