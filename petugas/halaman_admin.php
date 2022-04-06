<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
	<div style="background-image: url('/PHP/spp/foto/pipes.png'); height:1000px">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<?php 
	session_start(); 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
    include "sidebars.php";
	?>
	<div class="container-fluid"style="text-align:right; color:white; background-color:black; font-size:40px; font-family:Gill Sans Mt;"><a href="history_pembayaran.php" style="font-size:small">History</a>  <a href="tampil_siswa.php" style="font-size:small">Siswa</a>  <a href="tampil_kelas.php" style="font-size: small;">Kelas</a>  Dashboard  Admin</div>
</head>
<body>
    <?php
        include "koneksi.php";
    ?>
    <br>
    <div class="Container col-md-11 square rounded p-3" style="margin-left:auto; margin-right:auto; border-color:black; background-color:black; text-align:left;">
        <div class="card-header" style="color:white; background-color:black; text-align:left">
        
            <h2 style="color:orangered">Daftar Siswa</h2>
            <p style="color:grey">cari berdasarkan nama</p>
            <form action="halaman_admin.php" method="post" class="d-flex">
            <input class="form-control me-2" type="search" name="cari" placeholder="search">
            <button type="submit" class="btn btn-outline-info">search</button>
            </form> 
        </div>
    <div class="card-body">
    <table class="table table-striped table-dark"> 
    <thead>
        <tr style="color:white; text-align:center">
            <th scope="col">Nisn</th>
            <th scope="col">Nis</th>
            <th scope="col">Nama</th>
            <th scope="col">Id Kelas</th>
            <th scope="col">Alamat</th>
            <th scope="col">Telepon</th>
            <th scope="col">Bayar</th>
            <th scope="col">Cetak</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
    <tbody style="color:white; text-align:center">
        <?php
        include "koneksi.php";
        if (isset($_POST["cari"])){
            $cari =  $_POST['cari'];
            $query_siswa = mysqli_query($koneksi,
            "SELECT * FROM siswa where nisn = ' $cari ' or nisn like '$cari%' or nama like '$cari%' ORDER BY nama DESC");
        }else {
            $query_siswa = mysqli_query($koneksi,"select * from siswa");
        }
        while ($data_siswa=mysqli_fetch_array($query_siswa)) { ?>
        <!-- <input type="hidden" name="nisn" value="> -->
              <tr style="color:white">
                  <td><?php echo $data_siswa["nisn"]; ?></td>
                  <td><?php echo $data_siswa["nis"]; ?></td>
                  <td><?php echo $data_siswa["nama"]; ?></td>
                  <td><?php echo $data_siswa["id_kelas"];?></td>
                  <td><?php echo $data_siswa["alamat"];?></td>
                  <td><?php echo $data_siswa["no_tlp"];?></td>
                  <td><a href="tampilan_pembayaran.php?nisn=<?=$data_siswa['nisn']?>" class="btn btn-success">+</a></td>
                  <td><a href="laporan.php?nisn=<?=$data_siswa['nisn']?>" class="btn btn-success">-></a></td>
                  <td>
                      <a href="ubah_siswa.php?nisn=<?=$data_siswa['nisn']?>" class="btn btn-warning" onclick="return confirm('apakah anda yakin mengupdate data ini?')">Update</a>
                      <a href="delete_siswa.php?nisn=<?=$data_siswa['nisn']?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin menghapus data ini?')">Delete</a>
                  </td> 
              </tr>
            <?php
            }
            ?>
            </tbody>
            
        </table>
        <div>
        <a href="tambah_siswa.php" class="btn btn-outline-success">Tambah siswa +</a>   <a href="history_pembayaran.php" class="btn btn-outline-primary">History</a>   <a href="tampil_kelas.php" class="btn btn-outline-warning">Tampil Kelas</a>  <a href="tampil_spp.php" class="btn btn-outline-light">Tampil Spp</a>
        </div>        <!-- S -->
    <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        </div>  
    </div>
</body>
</html>