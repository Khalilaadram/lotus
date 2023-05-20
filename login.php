<?php

    //manggil file koneksi
    include "koneksi.php";


    //untuk memulai session pada web
    session_start();

    //untuk ngambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from user where username='".$username."' and password='".$password."'";
    $data = mysqli_query($koneksi, $query);

    $cek = mysqli_num_rows($data);

    if($cek > 0)
    {
        $baris = mysqli_fetch_array($data);
        $_SESSION['id'] = $baris["id"];
        $_SESSION['username'] = $baris["username"];
        $_SESSION['password'] = $baris["password"];
        header("Location:dashboard.php");
    }
    else
    {
        header("Location:index.php");
    }


?>