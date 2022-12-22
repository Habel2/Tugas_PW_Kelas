<?php
    if(isset($_POST['edit'])){
        include('koneksi.php');
        $id       = $_POST['id'];
        $nama     = $_POST['nama'];
        $jabatan  = $_POST['jabatan'];
        $gender   = $_POST['gender'];
        $telepon  = $_POST['telepon'];
        $alamat   = $_POST['alamat'];
        $foto     = $_FILES['foto']['name'];
        $source   = $_FILES['foto']['tmp_name'];
        $folder   = './img/';
        
        if($foto !=''){
            $cek = mysqli_query($koneksi, "select * from pegawai where id='$id'");
            $d=mysqli_fetch_array($cek);
            $gambar=$d['foto'];
            if(file_exists("img/$gambar")){
                unlink("img/$gambar");
            }
            move_uploaded_file($source, $folder.$foto);         
            $update = mysqli_query($koneksi, "update pegawai set
            nama     = '$nama',
            jabatan  = '$jabatan',
            gender   = '$gender',
            telepon  = '$telepon',
            alamat   = '$alamat',
            foto     = '$foto'
            where id = '$id'")
            or die(mysqli_error());
        }
        else{
            $update = mysqli_query($koneksi, "update pegawai set
            nama     = '$nama',
            jabatan  = '$jabatan',
            gender   = '$gender',
            telepon  = '$telepon',
            alamat   = '$alamat'
            where id = '$id'")
            or die(mysqli_error());
        }
        if($update){
            echo "<h2>data berhasi diupdate </h2>";
            echo "<script>window.location = 'pegawai.php'</script>";
        }
        else{
            echo "<h2>gagal menyimpan data</h2>";
            echo "<a href = 'edit.php ?nama= ".$nama."'>kembali</a>";
        }
    }
    else{
        echo "<script>window.history.back()</script>";
    }
?>