<?php
// Koneksi ke database
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tangkap data dari form
    $NIP = $_POST['NIP'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];
    $foto = $_POST['foto'];
    $divisi = $_POST['divisi'];

    // Query untuk menyimpan data pegawai
    $query = "INSERT INTO master_pegawai (NIP, jabatan, tanggal_masuk, jenis_kelamin, alamat, status, foto, divisi) VALUES ($NIP, $nama, $jabatan, $tanggal_masuk, $jenis_kelamin, $alamat, $status, $foto, $divisi)";

    if (mysqli_query($koneksi, $query)) {
        // Jika penyimpanan data berhasil, kembali ke halaman utama
        header('Location: read_pegawai.php');
        exit();
    } else {
        // Jika terjadi error, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>