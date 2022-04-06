<?php
    $nama_kelas = $_POST["nama_kelas"];
    $jurusan = $_POST["jurusan"];
    $angkatan = $_POST["angkatan"];

    echo $nama_kelas;
    echo $jurusan;
    include "koneksi.php";
    $input = mysqli_query($koneksi, "INSERT INTO kelas (nama_kelas, jurusan, angkatan) VALUES ('{$nama_kelas}','{$jurusan}','{$angkatan}')");

    if($input){
        echo "<script>alert('SELAMAT ANDA BERHASIL'); location.href='tambah_kelas.php';</script>";
    }
    else{
        echo "<script>alert('gagal'); location.href='tambah_kelas.php';</script>";
    }    
?>