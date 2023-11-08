<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        if(empty($username)){
            echo "<script>alert('Please insert an username');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Please insert a password');location.href='login.php';</script>";
        } else {
            include "connect.php";

            $qry_login=mysqli_query($connect,"SELECT * from user where username = '".$username."' and password = '".$password."'");

            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['nama']=$dt_login['nama'];
                $_SESSION['id']=$dt_login['id'];
                $_SESSION['username']=$dt_login['username'];
                $_SESSION['password']=$dt_login['password'];
                $_SESSION['role']=$dt_login['role'];
                $_SESSION['status_login']=true;
                header("location: dashboard.php");
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
            }
        }
    }
?>
