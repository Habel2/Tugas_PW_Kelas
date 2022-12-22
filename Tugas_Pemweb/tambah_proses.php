<?php
    if(isset($_POST['tambah'])){
        include_once 'koneksi.php';
        $nama     = $_POST['nama'];
        $jabatan  = $_POST['jabatan'];
        $gender   = $_POST['gender'];
        $telepon  = $_POST['telepon'];
        $alamat   = $_POST['alamat'];
        $foto     = $_FILES['foto']['name'];
        $source   = $_FILES['foto']['tmp_name'];
        $folder   = './img/';
        move_uploaded_file($source, $folder.$foto); 

        $input = mysqli_query($koneksi, "insert into pegawai values ('', '$nama','$jabatan', '$gender', '$telepon', '$alamat', '$foto')");

        if($input){
            echo "<h3> Data berhasil ditambahkan </h3>";
            echo "<script> window.location='pegawai.php'</script>";
        }
        else{
            echo "Gagal menambahkan data";
            echo "<a href = 'tambah.php'>kembali</a>";
        }
    }
    else{
        echo "<script>window.history.back()</script>";
    }
?>