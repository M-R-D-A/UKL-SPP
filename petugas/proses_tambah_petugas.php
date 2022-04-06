<?php

    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];
    $input = mysqli_query($koneksi,"INSERT INTO petugas (username, password, nama_petugas, level) VALUES ('{$username}','".md5($password)."','{$nama_petugas}','{$level}')");
    if($input){
        echo "<script>alert('SELAMAT ANDA BERHASIL'); location.href='tampil_petugas.php';</script>";
    } else {
        echo "hiya gagal";
    }
?>