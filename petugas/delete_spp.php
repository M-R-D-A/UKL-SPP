<?php
     if($_GET['id_spp']){
        //  echo "ada";
        //  echo $_GET['id_kelas'];
         include "koneksi.php";
         $query_hapus = mysqli_query($koneksi, "DELETE FROM spp where id_spp = '".$_GET['id_spp']."'");
         if ($query_hapus){
             // echo"berhasil"
             echo "<script> alert('berhasil dihapus'); location.href = 'tampil_spp.php'; </script>";
         }
         else {
             echo "script> alert ('gagal dihapus'); location.href = 'tampil_spp.php'; </script>";
         }
     }
     else{
         echo "hahahahahahhaha OMEGALUL";
     }
?>