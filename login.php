<?php
  session_start(); // mengaktifkan session pada php

  include 'koneksi.php'; // menghubungkan php dengan koneksi database

  $username = $_POST['username']; //menangkap data yang dikirimkan dari form login
  $password = $_POST['password'];

  $login = mysqli_query($koneksi,"select * from petugas where username='".$username."' and password='".md5($password)."'");
  //menyeleksi data user dengan username dan password yang sesuai
  $cek = mysqli_num_rows($login); // menghitung jumlah data yang ditemukan

  if($cek > 0){ // cek apakah username dan password ditemukan pada database

      $data = mysqli_fetch_assoc($login);

      if($data['level']=="admin"){ //cek jika user login sebagai admin

        $_SESSION['username'] = $username; 
        $_SESSION['level'] = "admin";
        $_SESSION['id_petugas'] = $data['id_petugas'];

        header("location:petugas/halaman_admin.php"); // alihkan ke halaman dashboard admin
      }elseif($data['level']=="petugas"){

      $_SESSION['username'] = $username;
      $_SESSION['level'] = "petugas";
      $_SESSION['id_petugas'] = $data['id_petugas'];
      
      header("location:petugas/halaman_petugas.php"); // dipindahkan sesuai level user
  }
} else {
  header("location:index.php");
}
?>