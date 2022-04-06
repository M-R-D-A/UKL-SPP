<?php
    include "koneksi.php";
    $id_petugas = $_POST['id_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_petugas = $_POST['nama_petugas'];
    $level = $_POST['level'];

    $input = mysqli_query($koneksi, "update petugas set username='".$username."', password='".md5($password)."', nama_petugas='".$nama_petugas."', level='".$level."' where id_petugas ='".$id_petugas."' ") or die(mysqli_error($koneksi)); //('{$nama_kelas}', '{$kelompok}')");
    if($input){
        echo "<script>alert('SELAMAT ANDA BERHASIL'); location.href='tampil_petugas.php';</script>";
    }
    else{
            echo "<script>alert('hiya gagal'); location.href='tampil_petugas.php';</script>";
            // echo $username;
            // echo $password;
            // echo $nama_petugas;
            // echo $level;
            // echo $id_petugas;
        }
         
?>