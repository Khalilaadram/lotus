<?php 
 
$server = "localhost";
$username = "root";
$password = "";
$database = "payrollotus";
 
$koneksi = mysqli_connect($server, $username, $password, $database);
 
if (!$koneksi) 
{
    echo "Database Tidak Koneksi";
}

else
{
    echo "Koneksi Berhasil";
}
 
?>