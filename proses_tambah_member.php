<?php
    if($_POST){
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $gender=$_POST['jenis_kelamin'];
        $telfon=$_POST['telfon'];
        if(empty($nama)){
            echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_member.php';</script>";
        } else {
            include "connect.php";
            $insert=mysqli_query($connect,"INSERT into member (nama, alamat, jenis_kelamin, telfon) value ('".$nama."','".$alamat."','".$gender."','".$telfon."')") or die(mysqli_error($connect));
            if($insert){
                echo "<script>alert('Sukses menambahkan member');location.href='tampil_member.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";
            }
        }
    }
?>
