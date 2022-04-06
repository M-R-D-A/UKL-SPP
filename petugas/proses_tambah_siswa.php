<?php

    include "koneksi.php";

   $nisn = $_POST['nisn'];
   $nis = $_POST['nis'];
   $nama = $_POST['nama'];
   $id_kelas = $_POST['id_kelas'];
   $alamat = $_POST['alamat'];
   $no_tlp = $_POST['telepon'];
   $password = $_POST["password"];
    $input = mysqli_query($koneksi,"INSERT INTO siswa (nisn, nis, nama, id_kelas, alamat, no_tlp, password) VALUES ('".$nisn."','".$nis."','".$nama."','".$id_kelas."','".$alamat."','".$no_tlp."','".md5($password)."')");
    if($input){
        echo "<script>alert('SELAMAT ANDA BERHASIL'); location.href='tampil_siswa.php';</script>";
    } else {
        echo $nisn;
        echo $nis;
        echo $nama;
        echo $id_kelas;
        echo $alamat;
        echo $no_tlp;
        echo $password;
    }
?>