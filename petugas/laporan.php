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
        include "koneksi.php";
        session_start();    
        include "sidebars.php";
        $qry_get_siswa=mysqli_query($koneksi,"SELECT * FROM siswa where nisn = '".$_GET['nisn']."'");
        $dt_siswa = mysqli_fetch_array($qry_get_siswa);
        $kelas = mysqli_query($koneksi,"select * from kelas where id_kelas = '".$dt_siswa['id_kelas']."'");
        $data_kelas = mysqli_fetch_array($kelas);
        $spp = mysqli_query($koneksi,"select * from spp where angkatan = '".$data_kelas['angkatan']."'");
        $dt_spp = mysqli_fetch_array($spp);
    ?>
    <br>
    <br>
    <br>
    <div class="container col-md-10" style="background-color:black">
    <br>
        <table class="table table-striped table-dark">
            <tr>
                <td>
                    Nisn : <?=$dt_siswa['nisn']?>
                </td>
            </tr>
            <tr>
                <td>
                    Nis : <?=$dt_siswa['nis']?>
                </td>
            </tr>
            <tr><td>Nama Siswa : <?=$dt_siswa['nama']?></td></tr>
            <tr><td>Id Kelas :<?=$dt_siswa['id_kelas']?></td></tr>
            <td>Alamat :<?=$dt_siswa['alamat']?></td>
        </table> 
    <div class="container">
    <br>
    <a href="history_pembayaran.php" class="btn btn-success">histori</a>  <a href="halaman_<?=$_SESSION['level']?>.php" class="btn btn-warning">Dashboard <?=$_SESSION['level']?></a> <a href="print_semua.php?nisn=<?=$dt_siswa['nisn']?>" class="btn btn-primary">Cetak Semua</a>
    <br>
        <table class="table  table-striped table-dark">
            <br>
        <tr style="color:white;">
            <th>Bulan</th>
            <th scope="col">Tahun</th>
            <th scope="col">Nominal</th>
            <th scope="col">Keterangan</th>
            <th scope="col" style="text-align:center">Aksi</th>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 7");
        //$id = mysqli_fetch_array($qry);
        //$idp = $qry['id_pembayaran'];
        if(mysqli_num_rows($qry) > 0){
            echo "<form action='print.php' method='post'>";
        } else {
            echo "<form action='proses_pembayaran.php'; method='post'>";
        }
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="7">
            <input type="hidden" name="tahun" value="2021">
            <td scope="col">Juli</td>
            <td scope="col" value="2021" name="tahun">2021</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<label class='alert alert-primary '>
                    Sudah lunas</label>";
            } else {
                echo "<label class='alert alert-danger '>
                belum dibayar</label>";
            }
            ?></td>
            <td style="text-align:center"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<button type='submit' class='btn btn-primary'>Cetak</button>";
            }
            ?></td>
        </form>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 8");
        if(mysqli_num_rows($qry) > 0){
            echo "<form action='print.php' method='post'>";
        } else {
            echo "<form action='proses_pembayaran.php' method='post'>";
        }
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="8">
            <input type="hidden" name="tahun" value="2021">
            <td scope="col">Agustus</td>
            <td scope="col" value="2021" name="tahun">2021</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<label class='alert alert-primary '>
                    Sudah lunas</label>";
            } else {
                echo "<label class='alert alert-danger '>
                belum dibayar</label>";
            }
            ?></td>
            <td style="text-align:center"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<button type='submit' class='btn btn-primary'>Cetak</button>";
            }
            ?></td>
        </form>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 9");
        if(mysqli_num_rows($qry) > 0){
            echo "<form action='print.php' method='post'>";
        } else {
            echo "<form action='proses_pembayaran.php' method='post'>";
        }
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="9">
            <input type="hidden" name="tahun" value="2021">
            <td scope="col">September</td>
            <td scope="col" value="2021" name="tahun">2021</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<label class='alert alert-primary '>
                    Sudah lunas</label>";
            } else {
                echo "<label class='alert alert-danger '>
                belum dibayar</label>";
            }
            ?></td>
            <td style="text-align:center"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<button type='submit' class='btn btn-primary'>Cetak</button>";
            }
            ?></td>
        </form>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 10");
        if(mysqli_num_rows($qry) > 0){
            echo "<form action='print.php' method='post'>";
        } else {
            echo "<form action='proses_pembayaran.php' method='post'>";
        }
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="10">
            <input type="hidden" name="tahun" value="2021">
            <td scope="col">Oktober</td>
            <td scope="col" value="2021" name="tahun">2021</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<label class='alert alert-primary '>
                    Sudah lunas</label>";
            } else {
                echo "<label class='alert alert-danger '>
                belum dibayar</label>";
            }
            ?></td>
            <td style="text-align:center"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<button type='submit' class='btn btn-primary'>Cetak</button>";
            }
            ?></td>
        </form>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 11");
        if(mysqli_num_rows($qry) > 0){
            echo "<form action='print.php' method='post'>";
        } else {
            echo "<form action='proses_pembayaran.php' method='post'>";
        }
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="11">
            <input type="hidden" name="tahun" value="2021">
            <td scope="col">November</td>
            <td scope="col" value="2021" name="tahun">2021</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<label class='alert alert-primary '>
                    Sudah lunas</label>";
            } else {
                echo "<label class='alert alert-danger '>
                belum dibayar</label>";
            }
            ?></td>
            <td style="text-align:center"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<button type='submit' class='btn btn-primary'>Cetak</button>";
            }
            ?></td>
        </form>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 12");
        if(mysqli_num_rows($qry) > 0){
            echo "<form action='print.php' method='post'>";
        } else {
            echo "<form action='proses_pembayaran.php' method='post'>";
        }
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="12">
            <input type="hidden" name="tahun" value="2021">
            <td scope="col">Desember</td>
            <td scope="col" value="2021" name="tahun">2021</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<label class='alert alert-primary '>
                    Sudah lunas</label>";
            } else {
                echo "<label class='alert alert-danger '>
                belum dibayar</label>";
            }
            ?></td>
            <td style="text-align:center"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<button type='submit' class='btn btn-primary'>Cetak</button>";
            } 
            ?></td>
        </form>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 1");
        if(mysqli_num_rows($qry) > 0){
            echo "<form action='print.php' method='post'>";
        } else {
            echo "<form action='proses_pembayaran.php' method='post'>";
        }
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="1">
            <input type="hidden" name="tahun" value="2022">
            <td scope="col">Januari</td>
            <td scope="col" value="2022" name="tahun">2022</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<label class='alert alert-primary '>
                    Sudah lunas</label>";
            } else {
                echo "<label class='alert alert-danger '>
                belum dibayar</label>";
            }
            ?></td>
            <td style="text-align:center"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<button type='submit' class='btn btn-primary'>Cetak</button>";
            } 
            ?></td>
        </form>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 2");
        if(mysqli_num_rows($qry) > 0){
            echo "<form action='print.php' method='post'>";
        } else {
            echo "<form action='proses_pembayaran.php' method='post'>";
        }
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="2">
            <input type="hidden" name="tahun" value="2022">
            <td scope="col">Februari</td>
            <td scope="col" value="2022" name="tahun">2022</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<label class='alert alert-primary '>
                    Sudah lunas</label>";
            } else {
                echo "<label class='alert alert-danger '>
                belum dibayar</label>";
            }
            ?></td>
            <td style="text-align:center"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<button type='submit' class='btn btn-primary'>Cetak</button>";
            } 
            ?></td>
        </form>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 3");
        if(mysqli_num_rows($qry) > 0){
            echo "<form action='print.php' method='post'>";
        } else {
            echo "<form action='proses_pembayaran.php' method='post'>";
        }
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="3">
            <input type="hidden" name="tahun" value="2021">
            <td scope="col">Maret</td>
            <td scope="col" value="2022" name="tahun">2022</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<label class='alert alert-primary '>
                    Sudah lunas</label>";
            } else {
                echo "<label class='alert alert-danger '>
                belum dibayar</label>";
            }
            ?></td>
            <td style="text-align:center"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<button type='submit' class='btn btn-primary'>Cetak</button>";
            } 
            ?></td>
        </form>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 4");
        if(mysqli_num_rows($qry) > 0){
            echo "<form action='print.php' method='post'>";
        } else {
            echo "<form action='proses_pembayaran.php' method='post'>";
        }
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="4">
            <input type="hidden" name="tahun" value="2022">
            <td scope="col">April</td>
            <td scope="col" value="2022" name="tahun">2022</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<label class='alert alert-primary '>
                    Sudah lunas</label>";
            } else {
                echo "<label class='alert alert-danger '>
                belum dibayar</label>";
            }
            ?></td>
            <td style="text-align:center"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<button type='submit' class='btn btn-primary'>Cetak</button>";
            } 
            ?></td>
        </form>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 5");
        if(mysqli_num_rows($qry) > 0){
            echo "<form action='print.php' method='post'>";
        } else {
            echo "<form action='proses_pembayaran.php' method='post'>";
        }
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="5">
            <input type="hidden" name="tahun" value="2022">
            <td scope="col">Mei</td>
            <td scope="col" value="2022" name="tahun">2022</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<label class='alert alert-primary '>
                    Sudah lunas</label>";
            } else {
                echo "<label class='alert alert-danger '>
                belum dibayar</label>";
            }
            ?></td>
            <td style="text-align:center"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<button type='submit' class='btn btn-primary'>Cetak</button>";
            } 
            ?></td>
        </form>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 6");
        if(mysqli_num_rows($qry) > 0){
            echo "<form action='print.php' method='post'>";
        } else {
            echo "<form action='proses_pembayaran.php' method='post'>";
        }
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="6">
            <input type="hidden" name="tahun" value="2022">
            <td scope="col">July</td>
            <td scope="col" value="2022" name="tahun">2022</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<label class='alert alert-primary '>
                    Sudah lunas</label>";
            } else {
                echo "<label class='alert alert-danger '>
                belum dibayar</label>";
            }
            ?></td>
            <td style="text-align:center"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "<button type='submit' class='btn btn-primary'>Cetak</button>";
            } 
            ?></td>
        </form>
        </tr>
        </table>
        <br>
    </div> 
        <!-- S -->
    <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        </div>  
    </div>
    </div>
</body>
</html>