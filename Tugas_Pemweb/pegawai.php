<?php
    session_start();
    include "koneksi.php";
    if(!isset($_SESSION['email'])){
        header("location:login.php");
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="index.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Pegawai</title>
  </head>
  <style>
    body{
        background:url("img/background-pegawai.jpg") no-repeat;
        background-size: cover;
    }
    .halaman{
        display:flex;
        width:100%;
    }
    .h{
        width:100%;
        
    }
    .logo{
        color:white;
        padding:20px;
        display:flex;
        justify-content: space-between;
    }
    .logo h3{
        font-weight: bold;
    }
    .tabel{
        background:rgba(0,0,0,0.6);
        color:white;
        display:flex;
        border:5px solid white;
    }
    .foto{
        padding:80px 50px;
    }
    .footer{
        color:white;
        margin-left:10px;
        bottom:0;
        position:absolute;
    }

  </style>
  <body>
    <div class="halaman">
        <div class="h">
            <div class="logo">
            <h3><a href="index.php" style="text-decoration:none; color:white;">Nat Geo.</a></h3>
            <h4><a href="logout.php" style="text-decoration:none; color:white;">Logout</a></h4>
            </div>
          <div class="container">
            <div class="col-lg-12 text-center mt-5 mb-5">
              <h3 class="display-4">Data Pegawai</h3>
              <a href="tambah.php" style="text-decoration:none;"><h4>Tambah</h4></a>
            </div>
            <table class="table table-striped" style="text-align: center">
            <thead class="table-dark">
              <th>Foto</th>
              <th>Nama</th>
              <th>Jabatan</th>
              <th>Gender</th>
              <th>No Telepon</th>
              <th>Alamat</th>
              <th>Opsi</th>
            </thead>
            <!-- Menampilan data mahasiswa -->
                <?php
                include_once 'koneksi.php';
                    $data=mysqli_query($koneksi, "select * from pegawai");
                    while ($d=mysqli_fetch_array($data)){
                ?>
                <tr style="background:rgba(0,0,0,0.4);color:white;">
                    <td><div class="foto" style="background:url('img/<?php echo $d['foto'] ?>') no-repeat; background-size: cover;"></div></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['jabatan']; ?></td>
                    <td><?php echo $d['gender']; ?></td>
                    <td><?php echo $d['telepon']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td>
                        <a href="edit.php ?id=<?php echo $d['id'];?>" style="text-decoration:none; color:white;">edit</a>
                        |
                        <a href="hapus.php ?id=<?php echo $d['id'];?>" style="text-decoration:none; color: white;">hapus</a>
                    </td>
                </tr>    
                <?php } ?>
            </table>
          </div>
        </div>
        <div class="footer">
            &copy; 2022 Copyright | H&H
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>