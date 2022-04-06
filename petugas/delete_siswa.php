<?php
     if($_GET['nisn']){
        //  echo "ada";
        //  echo $_GET['id_kelas'];
         include "koneksi.php";
         $query_hapus = mysqli_query($koneksi, "DELETE FROM siswa where nisn = '".$_GET['nisn']."'");
         if ($query_hapus){
             // echo"berhasil"
             echo "<script> alert('berhasil dihapus'); location.href = 'tampil_siswa.php'; </script>";
         }
         else {
             echo "script> alert ('gagal dihapus'); location.href = 'tampil_siswa.php'; </script>";
         }
     }
     else{
         echo "hahahahahahhaha OMEGALUL";
     }
?>