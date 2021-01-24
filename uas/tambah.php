<?php

require './Assets/functions.php';

if (isset($_POST["submit"])) {

     if (tambah($_POST)>0) {
        echo "

            <script>
            alert('data berhasil di tambah')
            document.location.href='menu.php';
            </script>";
       } else {

        // echo("Error description: " . mysqli_error($con));

        echo "

            <script>
            alert('data gagal di tambah')
            document.location.href='menu.php';
            </script>";

       }  
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="./Assets/style.css">

    <title>Hello, world!</title>
  </head>
  <body class="bg-dark">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <img src="./Assets/img/logo.png" width="20%" class="rounded-circle img-thumbnail">
        <h1 class="display-4 text-center">Universitas Bumigora</h1>
        <p class="lead text-center">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
    </div>

    <section>
      <div class="container">
        <div class="card bg-light" style="margin-top: -25px">
          <div class="card-body">
            <h3 class="display-6" style="margin-top: 30px; margin-bottom: 20px;"
            >Tambah Data Mahasiswa</h3>
            <div class="row">
              <div class="col-md-8">
                <form action="" method="post">

                  <div class="mb-3">
                  <input type="number" name="Nim" placeholder="Masukan Nim Mahasiswa" class="form-control" required>
                  </div>

                  <div class="mb-3">
                  <input type="text" name="Nama" placeholder="Masukan Nama Mahasiswa" class="form-control" required>
                  </div>

                  <div class="mb-3">
                  <input type="text" name="Prodi" placeholder="Masukan Prodi Mahasiswa" class="form-control" required>
                  </div>

                  <div class="mb-3">
                  <input type="text" name="Dosenpembina" placeholder="Masukan Nama Dosen Mahasiswa" class="form-control" required>
                  </div>

                  <div class="mb-3">
                  <input type="email" name="Email" placeholder="Masukan Email" class="form-control">
                  </div>

                  <div class="mb-3">
                  <input type="text" name="Gambar" placeholder="Masukan Poto Mahasiswa" class="form-control">
                  </div>

                  <button type="submit" name="submit" class="btn btn-primary">Tambah Data mahasiswa!</button>
                </form>
              </div>
              <div class="col-md-4">
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Secondary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                  <div class="card-header">Header</div>
                  <div class="card-body">
                    <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
            </div>








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>