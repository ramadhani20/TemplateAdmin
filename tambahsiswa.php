<?php 
require 'koneksi.php';
// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])){

// cek apakah data berhasil ditambahkan atau tidak
if (tambah ($_POST) > 0 ) {
    // menggunakan javascript
    echo "
    <script>
    alert ('data berhasil ditambahkan!')
    document.location.href ='mahasiswa.php';
    </script>";
} else {
    echo "
    <script>
    alert ('data gagal ditambahkan!')
    document.location.href ='mahasiswa.php';
    </script>";
}

                                    
                               
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">

    <title>Praktikum Luring</title>
  </head>
  <body>
    <!-- Navbar-->
    <!-- Merubah bg-light menjadi bg-warning fixed-top-->
   
<!-- Akhir Navbar-->

<!-- Membuat Content-->
<div class="row no-gutters mt-5">
  <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
    <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
        <a class="nav-link active text-white" href="dashboard.html"><i class="fas fa-tachometer mr-2"></i>Dashboard</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="mahasiswa.php"><i class="fas fa-user-graduate mr-2"></i>Daftar Mahasiswa</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="dosen.php"><i class="fas fa-chalkboard-teacher mr-2"></i>Daftar Dosen</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="staf.php"><i class="fas fa-user-edit mr-2"></i>Daftar Pegawai</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="jadwal.html"><i class="fas fa-calendar-alt mr-2"></i>Jadwal Praktikum</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="nilai.html"><i class="fas fa-paper-plane mr-2"></i>Nilai Mahasiswa</a><hr class="bg-secondary">
      </li>
    </ul>


  </div>
  <div id="content">
   <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>KAMPUS</b></a>
  <!-- Hapus Button NAV s.d penutup UL dan tambahkan ml-auto pada Class - Form-->
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <div class="icon ml-4">
        <h5>
            <i class="fas fa-envelope mr-3" data-toogle="tooltip" title="Surat Masuk"></i>
            <i class="fas fa-bell mr-3" data-toogle="tooltip" title="Notifikasi"></i>
            <i class="fas fa-sign-out-alt mr-3" data-toogle="tooltip" title="Sign Out"></i>
        </h5>
    </div>
</nav>

           
                <div class="container-fluid">     
                    <div class="row">
                    <div class="card col-md-12 mx-auto p-12">
                        
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat akun</h1>
                            </div>
                            <form  class= "user"method="POST" action="">

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"  placeholder="Masukkan NIM..." name="nim" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" placeholder="Masukkan nama..." name="nama" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"  placeholder="tempat, tanggal lahir.." name="ttl"  required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"  placeholder="Masukkan Alamat..." name="alamat" required autocomplete="off">
                                </div>
                              
                                <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">
                                    Buat Akun
                                </button>


                            </form>


                                           </div>
                </div>



                  </div>
</div>

   
              </body>
              </html>