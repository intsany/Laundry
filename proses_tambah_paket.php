<?php
    if($_POST){
        // $id_paket=$_POST['id_paket'];
        $nama_paket=$_POST['nama_paket'];
        $jenis=$_POST['category'];
        $harga=$_POST['harga'];

        if(empty($jenis && $nama_paket)){
            echo "<script>alert('Nama dan jenis tidak boleh kosong');location.href='tambah_paket.php';</script>";
        } else {
            include "connect.php";
            $insert=mysqli_query($connect,"INSERT into paket (nama_paket,category,harga) value ('".$nama_paket."','".$jenis."','".$harga."')") or die(mysqli_error($connect));
            if($insert){
                echo "<script>alert('Sukses menambahkan paket');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan paket');location.href='tambah_paket.php';</script>";
            }
        }
    }
?>
