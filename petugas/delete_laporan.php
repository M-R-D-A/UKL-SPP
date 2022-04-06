<?php
         include "koneksi.php";
         $nisn = $_POST['nisn'];
         $bulan_spp = $_POST['bulan'];
         $tahun_spp = $_POST['tahun'];
         echo $nisn;
         echo $bulan_spp;
         echo $tahun_spp;
         $query_hapus = mysqli_query($koneksi, "DELETE FROM pembayaran where nisn = '".$nisn."', and bulan_spp = '".$bulan_spp."'");
         echo mysqli_error($koneksi);
         if ($query_hapus){
             // echo"berhasil"
            //  echo "<script> alert('berhasil dihapus'); href='laporan.php';</script>";
         }
         else {
            //  echo "<script> alert ('gagal dihapus'); location.href = 'tampil_siswa.php'; </script>";
         }
?>