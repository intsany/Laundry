<?php 
        if($_GET['id_paket']){
            include "connect.php";
            $qry_hapus=mysqli_query($connect,"DELETE from paket where id_paket='".$_GET['id_paket']."'");
            if($qry_hapus){
                echo "<script>alert('Sukses hapus paket');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal hapus paket');location.href='tampil_paket.php';</script>";
            }
        }
?>