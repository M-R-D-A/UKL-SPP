<?php
    $angkatan = $_POST["angkatan"];
    $tahun = $_POST["tahun"];
    $nominal = $_POST["nominal"];
    echo $nama_kelas;
    echo $jurusan;
    include "koneksi.php";
    $input = mysqli_query($koneksi, "INSERT INTO spp (angkatan, tahun, nominal) VALUES ('{$angkatan}','{$tahun}','{$nominal}')");

    if($input){
        echo "<script>alert('SELAMAT ANDA BERHASIL'); location.href='tambah_spp.php';</script>";
    }
    else{
        echo "<script>alert('gagal'); location.href='tambah_spp.php';</script>";
    }    
?>