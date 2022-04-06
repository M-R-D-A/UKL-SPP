<?php
    include "koneksi.php";
    session_start();
    $id_petugas = $_SESSION['id_petugas'];
    $nisn = $_POST['nisn'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $tgl_bayar = date('Y-m-d');
    $cek = mysqli_query($koneksi,"select * from pembayaran where nisn='".$nisn."' and bulan_spp = '".$bulan."' and tahun_spp = '".$tahun."'");
    // $input = mysqli_query($koneksi,"INSERT INTO pembayaran(id_petugas, nisn, tgl_bayar, bulan_spp, tahun_spp) VALUES ('".$id_petugas."','".$nisn."','".$tgl_bayar."','".$bulan."','".$tahun."')");

    if(mysqli_num_rows($cek) > 0){
        echo "<script>alert('cannot insert already existing data'); location.href='history_pembayaran.php';</script>";    
    } elseif(mysqli_num_rows($cek) < 1){
        echo $input = mysqli_query($koneksi,"INSERT INTO pembayaran(id_petugas, nisn, tgl_bayar, bulan_spp, tahun_spp) VALUES ('".$id_petugas."','".$nisn."','".$tgl_bayar."','".$bulan."','".$tahun."')");
        echo "<script>alert('the data has been successfully inserted'); location.href='laporan.php?nisn=$nisn';</script>";
    }
?>