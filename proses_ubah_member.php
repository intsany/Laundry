<?php
    if($_POST){
        $id=$_POST['id'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $gender=$_POST['jenis_kelamin'];
        $telfon=$_POST['telfon'];
        if(empty($nama)){
            echo "<script>alert('nama tidak boleh kosong');location.href='ubah_member.php';</script>";
        } else {
            include "connect.php";
            $update=mysqli_query($connect,"UPDATE member set nama='".$nama."', jenis_kelamin='".$gender."', alamat='".$alamat."', telfon='".$telfon."' where id = '".$id."'") or die(mysqli_error($connect));
            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_member.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_member.php?id=".$id."';</script>";
            }
        } 
    }
?>
