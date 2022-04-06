<?php
    $angkatan = $_POST["angkatan"];
    $tahun = $_POST["tahun"];
    $nominal = $_POST["nominal"];
    include "koneksi.php";
    $id_spp = $_POST["id_spp"];
    $input = mysqli_query($koneksi, "UPDATE spp set angkatan= '".$angkatan."', tahun = '".$tahun."', nominal = '".$nominal."' where id_spp = '".$id_spp."'");

    if($input){
        echo "<script>alert('SELAMAT ANDA BERHASIL'); location.href='tampil_spp.php';</script>";
    }
    else{
        echo $angkatan;
        echo $tahun;
        echo $nominal;
    }    
?>