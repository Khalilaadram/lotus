<?php
// Koneksi ke database (sesuaikan dengan konfigurasi Anda)
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'payrollotus';
$koneksi = mysqli_connect($server, $username, $password, $database);

// Periksa koneksi
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal: " . mysqli_connect_error();
  exit();
}

// Query untuk membaca data pegawai
$query = "SELECT * FROM master_pegawai";
$result = mysqli_query($koneksi, $query);

// Tampilkan data pegawai dalam tabel
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id_pegawai'] . "</td>";
    echo "<td>" . $row['NIP'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['jabatan'] . "</td>";
    echo "<td>" . $row['tanggal_masuk'] . "</td>";
    echo "<td>" . $row['jenis_kelamin'] . "</td>";
    echo "<td>" . $row['tanggal_lahir'] . "</td>";
    echo "<td>" . $row['alamat'] . "</td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "<td>" . $row['foto'] . "</td>";
    echo "<td>" . $row['divisi'] . "</td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='4'>Tidak ada data pegawai.</td></tr>";
}

// Tutup koneksi
mysqli_close($koneksi);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>
        .nav-link:hover{
            background-color:grey;
        }
    </style>
</head>
<body>
    <?php session_start();?>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-white" href="dashboard.php">Payroll Lotus</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <div class="icon ml-5"> 
  <i class="fa-sharp fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>      
    <a href="logout.php">Klik Disini untuk Logout</a>
  </div>
</nav>

<div class="row no-gutters">
    <div class="col-md-3 bg-dark">
    <ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active text-white" href="dashboard.php">Dashboard</a>
    <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link active text-white" href="read_pegawai.php">Data Pegawai</a>
    <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link active text-white" href="#">Absensi</a>
    <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="master_cuti.php">Cuti</a>
    <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="master_divisi.php">Divisi</a>
    <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="master_pelamar.php">Rekruitment</a>
    <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="master_training.php">Training</a>
    <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="master_kinerja.php">Kinerja Pegawai</a>
    <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">Laporan</a>
    <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="master_gaji.php">Gaji</a>
    <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="master_naikpangkat.php">Naik Pangkat</a>
    <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">SOP</a>
    <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">Penilaian Kerja</a>
    <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">Surat</a>
    <hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="logout.php">Keluar</a>
    <hr class="bg-secondary">
  </li>
</ul>
</div>

<body>
<div class="col-md-9 p-5 pt-2">
        <h3><i class="fa-sharp fa-solid fa-user" style="color: #000000;"></i>Input Data Pegawai</h3>
        <table class="table">
        <div class="row">
        <div class="col-md-12">
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Tanggal Masuk</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Foto</th>
                    <th>Divisi</th>
                </tr>
            </thead>
            
        </table>
    </div>
</body>


    
</body>
</html>