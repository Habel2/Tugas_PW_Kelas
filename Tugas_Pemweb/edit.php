<?php
    include ('koneksi.php');
    $id = $_GET['id'];
    $show = mysqli_query($koneksi, "select * from pegawai where id = '$id'");
    if (mysqli_num_rows($show)==0){
        echo '<script>window.history.back()</script>';
    }
    $d = mysqli_fetch_array($show);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title><?php echo $d['nama'] ?></title>
  </head>
  <style>
    body{
        background:url('img/background-edit.jpg') no-repeat;
        background-size:cover;
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
    .container{
        margin-top: 3%;
        display: flex;
        width:50%;
        background: rgba(0,0,0,0.7);
        color:white;
    }
    .kiri{
        float:left;
        padding:20px;
        width:65%;
    }
    .kanan{
        padding:20px;
        width:100%;
    }
    #exampleInputFoto1{
        padding:145px 20px 145px;
    }
    .footer{
        color:white;
        margin-left:10px;
        margin-top:5%;
    }
    .form-control{
        background:rgba(0,0,0,0.1);
    }
  </style>
  <body>
    <div class="logo">
        <h3><a href="index.php"style="text-decoration:none; color:white;">Nat Geo.</a></h3>
        <h4><a href="logout.php" style="text-decoration:none; color:white;">Logout</a></h4>
    </div>
    <!-- Form  -->
    <form method="POST" action="edit_proses.php" class="form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id ?>">
    <div class="container rounded">
        <div class="kiri">
            <div class="form-group">
                <label for="exampleInputNama1">Foto</label>
                <input name="foto" type="file" class="form-control" id="exampleInputFoto1">
            </div>
        </div>
        <div class="kanan">
            <div class="form-group">
                <label for="exampleInputNama1">Nama</label>
                <input name="nama" type="text" class="form-control" id="exampleInputNama1" value="<?php echo $d['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputJabatan1">Jabatan</label>
                <input name="jabatan" type="text" class="form-control" id="exampleInputJabatan1" value="<?php echo $d['jabatan']; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputGender1">Gender</label><br>
                <!-- <div class="radio"> -->
                <input name="gender" type="text" class="form-control" id="exampleInputGender1" value="<?php echo $d['gender']; ?>">
                    <!-- <input class="form-radio" type="radio" name="gender" id="exampleRadios1" value="Pria" <?php if($d['gender']=='Pria'){echo 'checked';}?>><label for="exampleRadios1">Pria</label>
                    <input class="form-radio" type="radio" name="gender" id="exampleRadios2" value="Wanita" <?php if($d['gender']=='Wanita'){echo 'checked';}?> style="margin-left:20px"><label for="exampleRadios2">Wanita</label> -->
                <!-- </div> -->
            </div>
            <div class="form-group">
                <label for="exampleInputTelepon1">Telepon</label>
                <input name="telepon" type="text" class="form-control" id="exampleInputTelepon1" value="<?php echo $d['telepon']; ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="exampleInputAlamat1" value="<?php echo $d['alamat']; ?>">
                <!-- <textarea name="Alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan alamat disini"><?php echo $d['alamat']; ?></textarea> -->
            </div>
            <button name="edit" class="btn btn-dark">Update</button>
        </div>
        </form>
    </div>
    <div class="footer">
    &copy; 2022 Copyright | H&H
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