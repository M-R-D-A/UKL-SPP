<?php
    $nama_kelas = $_POST["nama_kelas"];
    $jurusan = $_POST["jurusan"];
    $angkatan = $_POST["angkatan"];
    $id_kelas = $_POST["id_kelas"];

    echo $nama_kelas;
    echo $jurusan;
    include "koneksi.php";
    $input = mysqli_query($koneksi, "UPDATE kelas set nama_kelas = '".$nama_kelas."', jurusan = '".$jurusan."', angkatan = '".$angkatan."' where id_kelas = '".$id_kelas."'");

    if($input){
        echo "<script>alert('SELAMAT ANDA BERHASIL'); location.href='tampil_kelas.php';</script>";
    }
    else{
    }    
?>