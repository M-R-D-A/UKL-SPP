<?php
     if($_GET['id_pembayaran']){
        //  echo "ada";
        //  echo $_GET['id_kelas'];
         include "koneksi.php";
         $query_hapus = mysqli_query($koneksi, "DELETE FROM pembayaran where id_pembayaran = '".$_GET['id_pembayaran']."'");
         if ($query_hapus){
             // echo"berhasil"
             echo "<script> alert('berhasil dihapus'); location.href = 'history_pembayaran.php'; </script>";
         }
         else {
             echo "script> alert ('gagal dihapus'); location.href = 'tampil_siswa.php'; </script>";
         }
     }
     else{
         echo "hahahahahahhaha OMEGALUL";
     }
?>