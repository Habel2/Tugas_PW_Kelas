<?php
    session_start();
    include ('koneksi.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($koneksi, "select * from user where email = '$email' and password = '$password'");

    $cek = mysqli_num_rows($query);
    if($cek == true){
        $_SESSION['email'] = $email;
        header ("location:pegawai.php");
    }
    else{
        header ("location:login.php");
    }
?>