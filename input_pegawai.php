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
  <a class="navbar-brand text-white" href="#">Payroll Lotus</a>
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
    
    <div class="col-md-9 p-5 pt-2">
        <h3><i class="fa-sharp fa-solid fa-user" style="color: #000000;"></i>Input Data Pegawai</h3>
        <div class="row">
        <div class="col-md-12">
          <form action="input_pegawai.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" name="nama" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">NIP</label>
        <input type="text" name="NIP" class="form-control"required/>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Jabatan</label>
        <input type="text" name="jabatan" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Masuk</label>
        <input type="number" name="tanggal_masuk" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Lahir</label>
        <input type="number" name="tanggal_lahir" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <textarea name="text" name="alamat" cols="30" rows="3" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Status</label>
        <input type="text" name="status" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Foto</label>
        <input type="text" name="foto" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Divisi</label>
        <input type="text" name="divisi" class="form-control" required/>
    </div>
    <button type="submit" class="btn btn-primary" value="submit">Simpan Data</button>
        </form>   
        </div>
       
        </div>

    </div>
    
    <div class="col-md-9 bg-white">
    </div>

</div>
    
</body>
</html>