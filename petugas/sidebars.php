<!-- CSS only -->

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="sidebars.css" rel="stylesheet">
</head>
<body>
<div class="btn" id="btn1" > <span class="fa fa-bars"></span> </div>
<nav class="sidebar">
    <div class="text"> Moklet </div>
    <ul class="main_side">
        <li class="active"><a href="halaman_admin.php">Dashboard</a></li>
        <li> <a href="#" id="1">Siswa <span class="fa fa-caret-down"></span> </a>
            <ul class="item-show-1">
                <li><a href="tampil_siswa.php">Tampil Siswa</a></li>
                <li><a href="tambah_siswa.php">Tambah Siswa</a></li>
            </ul>
        </li>
        <li> <a href="#" id="2">Petugas <span class="fa fa-caret-down"></span> </a>
            <ul class="item-show-2">
                <li><a href="tampil_petugas.php">Tampil Petugas</a></li>
                <li><a href="tambah_petugas.php">Tambah Petugas</a></li>
            </ul>
        </li>
        <li><a href="#" id="3">Kelas<span class="fa fa-caret-down"></span></a>
            <ul class="item-show-3">
                <li><a href="tampil_kelas.php">Tampil Kelas</a></li>
                <li><a href="tambah_kelas.php">Tambah Kelas</a></li>
            </ul>
        </li>
        <li><a href="#" id="4">SPP<span class="fa fa-caret-down"></span></a>
            <ul class="item-show-4">
                <li><a href="tampil_spp.php">Tampil SPP</a></li>
                <li><a href="tambah_spp.php">Tambah SPP</a></li>
            </ul>
        </li>
        <li><a href="#" id="5">Pembayaran<span class="fa fa-caret-down"></span></a>
            <ul class="item-show-5">
                <li><a href="pembayaran.php">Entry pembayaran</a></li>
                <li><a href="history_pembayaran.php">History Pembayaran</a></li>
                <li><a href="laporan.php">Laporan</a></li>
            </ul>
        </li>
        <li><a href="akun.php">user account</a></li>
        <li><a href="logout.php">logout</a></li>
    </ul>
</nav>
<!-- <div class="content">
    <div class="header"> Main content goes here </div>
</div> -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="sidebars.js"></script>
</body>