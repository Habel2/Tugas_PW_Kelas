<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Tambah</title>
  </head>
  <style>
    body{
        background:url('img/background-tambah.jpg') no-repeat;
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
    <form method="POST" action="tambah_proses.php" class="form" enctype="multipart/form-data">
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
                <input name="nama" type="text" class="form-control" id="exampleInputNama1" placeholder="Masukkan nama disini">
            </div>
            <div class="form-group">
                <label for="exampleInputJabatan1">Jabatan</label>
                <input name="jabatan" type="text" class="form-control" id="exampleInputJabatan1" placeholder="Masukkan jabatan disini">
            </div>
            <div class="form-group">
                <label for="exampleInputGender1">Gender</label><br>
                <input name="gender" type="text" class="form-control" id="exampleInputGender1" placeholder="Masukkan gender disini">
                <!-- <div class="radio">
                    <input class="form-radio" type="radio" name="gender" id="exampleRadios1" value="Pria"><label for="exampleRadios1">Pria</label>
                    <input class="form-radio" type="radio" name="gender" id="exampleRadios2" value="Wanita" style="margin-left:20px"><label for="exampleRadios2">Wanita</label>
                </div> -->
            </div>
            <div class="form-group">
                <label for="exampleInputTelepon1">Telepon</label>
                <input name="telepon" type="text" class="form-control" id="exampleInputTelepon1" placeholder="Masukkan nomor telepon disini">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan alamat disini"></textarea>
            </div>
            <button name="tambah" class="btn btn-dark">Tambah</button>
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