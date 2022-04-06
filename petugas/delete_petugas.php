<?php
     if($_GET['id_petugas']){
        //  echo "ada";
        //  echo $_GET['id_kelas'];
         include "koneksi.php";
         $query_hapus = mysqli_query($koneksi, "DELETE FROM petugas where id_petugas = '".$_GET['id_petugas']."'");
         if ($query_hapus){
             // echo"berhasil"
             echo "<script> alert('berhasil dihapus'); location.href = 'tampil_petugas.php'; </script>";
         }
         else {
             echo "script> alert ('gagal dihapus'); location.href = 'tampil_petugas.php'; </script>";
         }
     }
     else{
         echo "hahahahahahhaha OMEGALUL";
     }
?>