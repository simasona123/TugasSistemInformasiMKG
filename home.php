<?php
  session_start();
  $login = "Login";
  if(isset($_SESSION['login'])){
    $login = $_SESSION['logout'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DATABASE</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<navbar>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="navbar-brand">
        <a href="home.php"><h2 style="margin-right: 30px; color: white;">Data Warehouse</h2></a>
      </div>
      <div class="navbar-nav mr-auto">
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
            Operasi
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="cari.php">Cari Data</a>
            <a class="dropdown-item" href="tambah.php">Tambah Data</a>
            <a class="dropdown-item" href="edit.php">Edit data</a>
            <a class="dropdown-item" href="delete.php">Delete data</a>
          </div>
        </li>
      </div>
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item">
          <a href="<?php echo $login?>.php"><button type="button" class="btn btn-light"><?php echo $login ?></button></a>
        </li>
        <li class="nav-item" style="margin-left: 10px;">
          <a href="daftar.php"><button type="button" class="btn btn-light">Daftar</button></a>
        </li>
      </ul>
    </nav>
</navbar>
<main style="z-index: -1;">
  <div style="color: white;" id="main">
    <div style="text-align: center;" class="container">
      <h1 style="padding-top: 30px;">Data Warehouse</h1>
      <p class="">
        Basis data yang menyimpan data sekarang dan data masa lalu yang berasal dari berbagai sistem operasional dan sumber yang lain
        (sumber eksternal).
      </p>
    </div>
  </div>
</main>
<div class="container main-content" style="background-image: radial-gradient(#c5c5c5, #fffafa); z-index: 0; padding: 10px 10px 0 10px;">
  <div class="container main-item">
    <h2>Arsitektur Data Warehouse</h2>
    <div>
      <img style="margin-top: 10px"  class="rounded mx-auto d-block" src="img/Arsitektur.png">
    </div>
  </div>
  <div class="container main-item">
    <h2>Proses Data Warehouse</h2>
    <div class="card-group">
      <div class="card">
        <img class="img-card mx-auto" src="img/ektraksi.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>Ekstrasi Data</b></h5>
          <p class="card-text">
            Ekstrasi Data &#8594 Mendapatkan data dari sumber data ke warehouse.
          </p>
        </div>
      </div>
      <div class="card">
        <img class="img-card mx-auto" src="img/transformasi.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>Transformasi Data</b></h5>
          <p class="card-text">
            Transformasi Data &#8594 Mengonversi data ke dalam bentuk yang disepakati.
          </p>
        </div>
      </div>
      <div class="card">
        <img class="img-card mx-auto" src="img/display.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>Loading Data</b></h5>
          <p class="card-text">Loading data &#8594 menampilkan data
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</content>
<div class="line"></div>
<div class="footer container mx-auto">
  <div class="row">
    <div class="col">
      <h6>©2020-EINSTA2017</h6>
    </div>
    <div class="col">
    </div>
</div>
<div class="fixed-bottom" style="margin-top: 10px; margin-left:85%;" >
    <span class="text-light badge bg-primary" style="">
    <?php
    if (isset($_SESSION['login'])){
      echo "<h4> Welcome ".$_SESSION['username']."</h4>";
    }
    ?>
    </span>
  </div>
</body>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>
