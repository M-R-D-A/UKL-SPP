<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <link href="tampil_kelas.css" rel="stylesheet">
    <input type="button" value="Print" onclick="printDiv()">
</head>
<body>
    <?php
        include "koneksi.php";
        session_start();    
        $qry_get_siswa=mysqli_query($koneksi,"SELECT * FROM siswa where nisn = '".$_GET['nisn']."'");
        $dt_siswa = mysqli_fetch_array($qry_get_siswa);
        $kelas = mysqli_query($koneksi,"select * from kelas where id_kelas = '".$dt_siswa['id_kelas']."'");
        $data_kelas = mysqli_fetch_array($kelas);
        $spp = mysqli_query($koneksi,"select * from spp where angkatan = '".$data_kelas['angkatan']."'");
        $dt_spp = mysqli_fetch_array($spp);
    ?>
    <div id="printsemua">
    <div class="container col-md-10">
    <h1>LAPORAN PEMBAYARAN SISWA</h1>
        <h3>Smk Telkom Malang Sandhy Putra</h3>
        <h4>tahun ajaran : 2021/2022</h3>
        <table class="table">
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
    <div class="container" style="text-align:center"> 
        <table class="table">
            <br>
        <tr>
            <th>Bulan</th>
            <th scope="col">Tahun</th>
            <th scope="col">Nominal</th>
            <th scope="col">Keterangan</th>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 7");
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="7">
            <input type="hidden" name="tahun" value="2021">
            <td scope="col">Juli</td>
            <td scope="col" value="2021" name="tahun">2021</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "Sudah lunas";
            } else {
                echo "belum dibayar";
            }
            ?></td>
        </form>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 8");
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="8">
            <input type="hidden" name="tahun" value="2021">
            <td scope="col">Agustus</td>
            <td scope="col" value="2021" name="tahun">2021</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "Sudah lunas";
            } else {
                echo "belum dibayar";
            }
            ?></td>
        </form>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 9");
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="9">
            <input type="hidden" name="tahun" value="2021">
            <td scope="col">September</td>
            <td scope="col" value="2021" name="tahun">2021</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "Sudah lunas";
            } else {
                echo "belum dibayar";
            }
            ?></td>
        </form>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 10");
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="10">
            <input type="hidden" name="tahun" value="2021">
            <td scope="col">Oktober</td>
            <td scope="col" value="2021" name="tahun">2021</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "Sudah lunas";
            } else {
                echo "belum dibayar";
            }
            ?></td>
        </form>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 11");
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="11">
            <input type="hidden" name="tahun" value="2021">
            <td scope="col">November</td>
            <td scope="col" value="2021" name="tahun">2021</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "Sudah lunas";
            } else {
                echo "belum dibayar";
            }
            ?></td>
        </form>
        </tr>
        <tr>
        <?php
        $qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$dt_siswa['nisn']."' and bulan_spp = 12");
        ?>
            <input type="hidden" name="nisn" value=<?=$dt_siswa['nisn']?>>
            <input type="hidden" name="bulan" value="12">
            <input type="hidden" name="tahun" value="2021">
            <td scope="col">Desember</td>
            <td scope="col" value="2021" name="tahun">2021</td>
            <td scope="col"><?=$dt_spp['nominal']?></td>
            <td scope="col"><?php
            if(mysqli_num_rows($qry) > 0){
                echo "Sudah lunas";
            } else {
                echo "belum dibayar";
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
    </div>
    <script>
        function printDiv() {
            var divContents = document.getElementById("printsemua").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
</body>
</html>