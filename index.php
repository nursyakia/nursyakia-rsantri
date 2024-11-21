<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Rumah Sakit</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f4f7fc;
        }
        .navbar {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .jumbotron {
            background-image: url('path_to_your_image.jpg');
            background-size: cover;
            color: white;
            text-align: center;
            padding: 80px 0;
        }
        .jumbotron h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }
        .jumbotron p {
            font-size: 1.2rem;
        }
        .btn-primary {
            font-size: 1.2rem;
            padding: 10px 20px;
        }
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
<!--Main Navigation-->
<header>
  <!-- Jumbotron -->
  <div class="p-3 text-center bg-white border-bottom">
    <div class="container">
      <div class="row">
        <!-- Left elements -->
        <div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-3 mb-md-0">
          <a href="#!" class="ms-md-2">
            <img src="asset/img/imges.png" height="60" width="90" style="margin-left: 150px;" />
          </a>
        </div>
        <!-- Left elements -->

        <!-- Center elements -->
        <div class="col-md-4">
          <form class="d-flex input-group w-auto my-auto mb-3 mb-md-0">
            <input autocomplete="on" type="search" class="form-control" placeholder="Search" />
            <span class="input-group-text border-0 d-none d-lg-flex"><i class="fas fa-search"></i></span>
          </form>
        </div>
        <!-- Center elements -->
         
           
      </div>
    </div>
  </div>
  <!-- Jumbotron -->

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <!-- Container wrapper -->
    <div class="container justify-content-center justify-content-md-between">
      <!-- Left links -->
      <ul class="navbar-nav flex-row">
        <li class="nav-item me-2 me-lg-0">
          <a class="nav-link" href="#" role="button" data-mdb-toggle="sidenav" data-mdb-target="#sidenav-1"
            class="btn shadow-0 p-0 me-3" aria-controls="#sidenav-1" aria-haspopup="true">
          </a>
        </li>
        <li class="nav-item me-2 me-lg-0 d-none d-md-inline-block">
          <a class="nav-link" href="modul/tambah_antrian.php">Pendaftaran pasien</a>
        </li>
        <li class="nav-item me-2 me-lg-0 d-none d-md-inline-block">
          <a class="nav-link" href="modul/daftar_antrian.php">Daftar antrian </a>
        </li>
        <li class="nav-item me-2 me-lg-0 d-none d-md-inline-block">
          <a class="nav-link" href="modul/ubah_status.php">Ubah status</a>
        </li>
      </ul>
      <!-- Left links -->

      <button class="btn btn-outline-primary" data-mdb-ripple-color="dark" type="button">
        Sign out<i class=""></i>
      </button>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

</header>
<!--Main Navigation-->

      </div>
    </div>
  </div>
  <!-- Jumbotron -->
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!-- Jumbotron -->
<div class="jumbotron">
  <div class="mask" style="background-color: rgba(0, 0, 0, 0.7)"></div>
</main>
    <h1 style="color: black; margin-top: 25px; font-family: Garamond;">Selamat Datang di Rumah Sakit RSKC</h1>
    <p style="color: black; font-family: Garamaond;">Daftarkan diri Anda dengan mudah dan cepat secara online</p>
    <a href="modul/tambah_antrian.php" class="btn btn-primary btn-lg">Daftar Sekarang</a>
</div>

<!-- Fitur Pendaftaran -->
<div class="container my-5" id="pendaftaran">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-user fa-3x text-primary mb-3"></i>
                    <h5 class="card-title">Daftar Antrian Pasien</h5>
                    <p class="card-text">Formulir antrian pendaftaran pasien</p>
                    <a href="modul/daftar_antrian.php" class="btn btn-primary">Daftar Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-edit fa-3x text-success mb-3"></i>
                    <h5 class="card-title">Pendaftaran Pasien Baru</h5>
                    <p class="card-text">Untuk pasien baru, silakan isi formulir untuk memulai pendaftaran.</p>
                    <a href="modul/tambah_antrian.php" class="btn btn-success">Perbarui Pendaftaran</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-ambulance fa-3x text-danger mb-3"></i>
                    <h5 class="card-title">Ubah Status</h5>
                    <p class="card-text">Bagi yang ingin mengubah status pendaftaran bisa klik dibawah ini</p>
                    <a href="modul/ubah_status.php" class="btn btn-danger">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <p>&copy; 2024 Rumah Sakit RSKC - Semua Hak Dilindungi</p>
    <a href="#">Kontak</a> | <a href="#">Kebijakan Privasi</a> | <a href="#">Syarat & Ketentuan</a>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min

