<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $db = "spp";

     $koneksi = mysqli_connect ($servername, $username, $password, $db);
     if (!$koneksi){
         die("".mysqli_connect_error());
     }
     else{
         echo"";
     }
?>