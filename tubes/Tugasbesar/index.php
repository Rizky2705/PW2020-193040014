<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $alat = query("SELECT * FROM tubes_193040014 WHERE
            Nama_alat_musik LIKE '%$keyword'");
} else {
  $alat = query("SELECT * FROM tubes_193040014");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">
  <title>193040014</title>
</head>

<body background="assets/img/bg.jpg">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Kyzan27</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="php/login.php">Admin</a>
        <form class="form-inline" method="GET">
          <input class="form-control mr-sm-2" type="text" name="keyword" autofocus placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <div class="jumbotron jumbotron-fluid" style="height: 250px">
    <div class="container">
      <h1 class="display-4">Selamat Datang</h1>
      <p class="lead">Ke Website Alat Musik Tradisional</p>
    </div>
  </div>


  <div class="container">
    <table>

      <?php if (empty($alat)) : ?>
        <tr>
          <td colspan="7">
            <h1>Data tidak ditemukan</h1>
          </td>
        </tr>
      <?php else : ?>
        <tr>

          <?php for ($x = 0; $x < count($alat); $x++) { ?>

            <?php if (($x + 1) % 3 == 1) { ?>
        </tr>
        <tr>

        <?php } ?>

        <td>
          <a href="php/detail.php?Nomor=<?= $alat[$x]['Nomor'] ?>">
            <img src="assets/img/<?= $alat[$x]['Gambar']; ?>" alt="">
          </a>
        </td>


      <?php } ?>
        </tr>
      <?php endif; ?>
    </table>

    <section id="contact" class="contact mb-5">
      <div class="container">
        <div class="row pt-4 mt-4">
          <div class="col text-center">
            <h2>Contact Us</h2>
          </div>
        </div>


        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card text-white bg-dark mb-3 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Us</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
              </div>
            </div>
            <ul class="list-group">
              <li class="list-group-item">
                <h2>Location</h2>
              </li>
              <li class="list-group-item">My Office</li>
              <li class="list-group-item">Jl.Cikopak</li>
              <li class="list-group-item">West Java, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="telp">No Telp</label>
                <input type="text" class="form-control" id="telp">
              </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <textarea name="pesan" id="pesan" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-dark">Kirim pesan</button>
              </div>
            </form>
          </div>



        </div>

      </div>
    </section>


    <footer class="bg-dark text-white">
      <div class="container">
        <div class="row pt-3">
          <div class="col text-center">
            <p>Copyright 2018.</p>
          </div>
        </div>
      </div>
    </footer>


  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>