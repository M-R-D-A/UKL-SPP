<?php
    include "koneksi.php";
    $nisn = $_POST['nisn'];
    $id_pembayaran = $_POST['id_pembayaran'];
    $tgl_bayar = date('Y-m-d');
    $bulan_spp = $_POST['bulan_spp'];
    $tahun_spp = $_POST['tahun_spp'];

   $cek = mysqli_query($koneksi,"select * from pembayaran where nisn='".$nisn."' and bulan_spp = '".$bulan_spp."'");
    // $input = mysqli_query($koneksi,"INSERT INTO pembayaran(id_petugas, nisn, tgl_bayar, bulan_spp, tahun_spp) VALUES ('".$id_petugas."','".$nisn."','".$tgl_bayar."','".$bulan."','".$tahun."')");

    if(mysqli_num_rows($cek) > 0){
        echo "<script>alert('SUDAH ADA MAS BRO'); location.href='history_pembayaran.php';</script>";    
    } elseif(mysqli_num_rows($cek) < 1){
        echo $input = mysqli_query($koneksi, "update pembayaran set tgl_bayar='".$tgl_bayar."', bulan_spp = '".$bulan_spp."', tahun_spp = '".$tahun_spp."' where id_pembayaran ='".$id_pembayaran."'") or die(mysqli_error($koneksi));
        echo "<script>alert('The data has been successfully updated'); location.href='history_pembayaran.php';</script>";
    }
         
?>