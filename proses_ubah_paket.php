<?php
    if($_POST){
        $id_paket=$_POST['id_paket'];
        $nama_paket=$_POST['nama_paket'];
        $category=$_POST['category'];
        $harga=$_POST['harga'];

        if(empty($category && $nama_paket)){
            echo "<script>alert('Nama dan jenis paket tidak boleh kosong');location.href='ubah_paket.php';</script>";
        } else {
            include "connect.php";
            $update=mysqli_query($connect,"update paket set nama_paket='".$nama_paket."', category='".$category."', harga='".$harga."' where id_paket = '".$id_paket."'") or die(mysqli_error($connect));
            if($update){
                echo "<script>alert('Sukses update paket');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update paket');location.href='ubah_paket.php?id_paket=".$id_paket."';</script>";
            }
        } 
    }
?>

