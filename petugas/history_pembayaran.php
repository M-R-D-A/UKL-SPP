<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div style="background-image: url('/PHP/spp/foto/pipes.png'); height:1000px">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <link href="tampil_kelas.css" rel="stylesheet">
</head>
<body>
    <?php
    session_start();
        include "koneksi.php";
        if($_SESSION['level'] == "admin"){
            include "sidebars.php";
        }
    ?>
    <br></br>
    <div class="Container col-md-9 square rounded p-3" style="margin-left:auto; margin-right:auto; border-color:black; background-color:black; text-align:left;">
        <div class="card-header" style="color:white; background-color:black; text-align:left">
        
            <h2 style="color:orangered">History Pembayaran</h2>
            <br>
            <form action="history_pembayaran.php" method="post" class="d-flex">
            <Input class="form-control me-2" type="search" name="cari" placeholder="search">
            <button type="submit" class="btn btn-outline-info">search</button>
            </form> 
        </div>
        <div class="card-body">
            <table class="table table-striped table-dark"> 
            <thead>
        <tr style="color:white;">
            <th scope="col">id petugas</th>
            <th scope="col">Nisn</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Bayar</th>
            <th scope="col">Spp Bulan</th>
            <th scope="col">Spp Tahun</th>
            <th scope="col" style="text-align:center">aksi</th>
        </tr>
        </thead>
    <tbody style="color:white;">
        <?php
        include "koneksi.php";
        if (isset($_POST["cari"])){
            $cari =  $_POST['cari'];
            $query_bayar = mysqli_query($koneksi,
            "SELECT * FROM pembayaran where bulan_spp = ' $cari ' or nisn like '$cari%' ORDER BY bulan_spp desc");
        }else {
            //jika tidak ada keyword pencarian 
            $query_bayar = mysqli_query($koneksi,"select * from pembayaran ORDER BY bulan_spp DESC");
        }
        while ($data_bayar=mysqli_fetch_array($query_bayar)) { ?>
        <?php
        $query_siswa = mysqli_query($koneksi, "select * from siswa where nisn = '".$data_bayar['nisn']."'");
        $data_siswa = mysqli_fetch_array($query_siswa);
        ?>
              <tr style="color:white">
              <input type="hidden" value="<?php echo $data_bayar['id_pembayaran']?>">
                  <td><?php echo $data_bayar["id_petugas"]; ?></td>
                  <td><?php echo $data_bayar["nisn"]; ?></td>
                  <td><?php echo $data_siswa["nama"]?></td>
                  <td><?php echo $data_bayar["tgl_bayar"]; ?></td>
                  <td><?php echo $data_bayar["bulan_spp"];?></td>
                  <td><?php echo $data_bayar["tahun_spp"];?></td>
                  <td>
                      <a href="ubah_pembayaran.php?id_pembayaran=<?=$data_bayar['id_pembayaran']?> " class="btn btn-warning" onclick="return confirm('apakah anda yakin menghapus data ini?'">Update</a>
                      <a href="delete_pembayaran.php?id_pembayaran=<?=$data_bayar['id_pembayaran']?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin menghapus data ini?')">Delete</a>
                  </td> 
              </tr>
            <?php
            }
            ?>
        </tbody>
            <br>
        </table><a href="halaman_<?=$_SESSION['level']?>.php" class="btn btn-outline-warning">Dashboard <?=$_SESSION['level']?></a> <a href="pembayaran.php" class="btn btn-outline-success">pembayaran</a> 
        <!-- S -->
    <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        </div>  
    </div>
</body>
</html>