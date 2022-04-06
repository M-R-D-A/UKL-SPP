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
    include "Koneksi.php";
    session_start();
        include "koneksi.php";
        if($_SESSION['level'] == "admin"){
            include "sidebars.php";
        }
    ?>
    <br></br>
    <div class="Container col-md-9 square rounded p-3" style="margin-left:auto; margin-right:auto; background-color:black; text-align:right">
        <div class="card-header" style="color:white; background-color:black">
        
            <h1 style="color:orangered; text-align:left">Pembayaran</h1>
            <br>
            <form action="pembayaran.php" method="post" class="d-flex">
            <Input class="form-control me-2" type="search" name="cari" placeholder="search">
            <button type="submit" class="btn btn-outline-info">search</button>
            </form> 
        </div>
        <div class="card-body">
            <table class="table table-striped table-dark" style="text-align:center"> 
            <thead>
        <tr style="color:white;">
            <th scope="col">Nisn</th>
            <th scope="col">Nama</th>
            <th scope="col">Id Kelas</th>
            <!-- <th scope="col">Spp Bulan</th>
            <th scope="col">Spp Tahun</th> -->
            <th scope="col">Bayar</th>
            <th scope="col" style="text-align:center">Aksi</th>
        </tr>
        </thead>
    <tbody style="color:white;">
        
        <?php
        include "koneksi.php";
        if (isset($_POST["cari"])){
            $cari =  $_POST['cari'];
            $query_siswa = mysqli_query($koneksi,
            "select * from siswa where nisn like '%$cari%' or nama like '%$cari%' ");
        }else {
            //jika tidak ada keyword pencarian 
            $query_siswa = mysqli_query($koneksi,"select * from siswa");
        }
        while ($data_siswa=mysqli_fetch_array($query_siswa)) { ?>
              <tr style="color:white">
                  <td><?php echo $data_siswa["nisn"]; ?></td>
                  <td><?php echo $data_siswa["nama"]; ?></td>
                  <td><?php echo $data_siswa["id_kelas"];?></td>
                  <!-- <td>
                      <input type="text" name="bulan">
                  </td> -->
                  <!-- <td>
                  <input type="text" name="tahun" action="lapor_siswa.php"method="post">
                  </td>  -->
                  <td>
                      <a type="submit" href="tampilan_pembayaran.php?nisn=<?=$data_siswa['nisn']?>" class="btn btn-success">+</a>
                  </td>
                  <td style="text-align:center">
                      <a href="ubah_kelas.php?id_kelas=<?=$data_kelas['id_kelas']?> " class="btn btn-warning" onclick="return confirm('apakah anda yakin menghapus data ini?'">Update</a>
                      <a href="delete_kelas.php?id_kelas=<?=$data_kelas['id_kelas']?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin menghapus data ini?')">Delete</a>

                  </td>
              </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
        <?php
        
        ?><a href="halaman_<?=$_SESSION['level']?>.php" class="btn btn-outline-warning">Dashboard <?=$_SESSION['level']?></a>  <a href="tambah_siswa.php" class="btn btn-outline-success">Tambah Siswa +</a> <a href="history_pembayaran.php" class="btn btn-outline-primary">History</a>
        
        <!-- S -->
    <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        </div>  
    </div>
</body>
</html>