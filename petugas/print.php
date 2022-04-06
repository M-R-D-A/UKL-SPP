<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
include "Koneksi.php";
$qry = mysqli_query($koneksi,"select * from pembayaran where nisn = '".$_POST['nisn']."' and bulan_spp = '".$_POST['bulan']."'");
$ary = mysqli_fetch_array($qry);
$siswa = mysqli_query($koneksi,"select * from siswa where nisn='".$_POST['nisn']."'");
$dt_siswa = mysqli_fetch_array($siswa);
?>
<div id="GFG">
<div class="container" style="text-align:center">
    <table class="table">
        <h1>LAPORAN PEMBAYARAN SISWA</h1>
        <h3>Smk Telkom Malang Sandhy Putra</h3>
        <h4>tahun ajaran : <?=$ary['tahun_spp']?>/<?=$ary['tahun_spp'] + 1?></h3>
    <thead style="text-align:center">
        <tr>
            <th>Nisn</th>
            <th>Nama</th>
            <th>Tanggal Bayar</th>
            <th>bulan Spp</th>
            <th>Tahun Spp</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody style="text-align:center">
        <tr>
            <th><?=$_POST['nisn']?></th>
            <th><?=$dt_siswa['nama']?></th>
            <th><?=$ary['tgl_bayar']?></th>
            <th><?=$ary['bulan_spp']?></th>
            <th><?=$ary['tahun_spp']?></th>
            <th>Terbayarkan</th>
        </tr>
</tbody>
</table>
</div>
</div>
<div style="margin-left:auto; margin-right:auto;">
<input type="button" value="Print" onclick="printDiv()">
</div>
<script>
        function printDiv() {
            var divContents = document.getElementById("GFG").innerHTML;
            var a = window.open('', '', 'height=150, width=500');
            a.document.write('<html>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
