<?php
    include "koneksi.php";
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['no_tlp'];
    $password = $_POST['password'];

    $input = mysqli_query($koneksi, "update siswa set nis = '".$nis."', nama='".$nama."', alamat = '".$alamat."', no_tlp = '".$telepon."', password='".md5($password)."' where nisn ='".$nisn."'") or die(mysqli_error($koneksi)); //('{$nama_kelas}', '{$kelompok}')");
    if($input){
        echo "<script>alert('SELAMAT ANDA BERHASIL'); location.href='tampil_siswa.php';</script>";
    }
    else{
            echo "<script>alert('hiya gagal'); location.href='tampil_siswa.php';</script>";
            echo $username;
            echo $password;
            echo $nama_petugas;
            echo $level;
            echo $id_petugas;
        }
         
?>