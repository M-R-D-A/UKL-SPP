<?php
     if($_GET['id_kelas']){
        //  echo "ada";
        //  echo $_GET['id_kelas'];
         include "koneksi.php";
         $query_hapus = mysqli_query($koneksi, "DELETE FROM kelas where id_kelas = '".$_GET['id_kelas']."'");
         if ($query_hapus){
             // echo"berhasil"
             echo "<script> alert('berhasil dihapus'); location.href = 'tampil_kelas.php'; </script>";
         }
         else {
             echo "script> alert ('gagal dihapus'); location.href = 'tampil_kelas.php'; </script>";
         }
     }
     else{
         echo "";
     }
?>