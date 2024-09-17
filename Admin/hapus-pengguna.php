<?php
    // memanggil koneksi ke database
    include '../Config/nav.php';

    // kondisi hapus pengguna / user
    if(isset($_GET['idpengguna'])) {

        $hapus = mysqli_query($conn, "DELETE FROM users WHERE id = '".$_GET['idpengguna']."' ");

        echo "<script> alert('Data Berhasil Di Hapus'); window.location = '../Config/user.php' </script>";

    }
?>