<?php
  include "aksi/functions.php";
  $login = "Login";
  session_start();
  checkLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>DATABASE</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
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
<content>
 <form method="post" action="aksi/aksi3.php">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Tabel Data</label>
    <select class="form-control" id="exampleFormControlSelect1" name="tabel">
      <option value="iod">IOD</option>
      <option value="oni">ONI</option>
      <option value="rcp4">RCP4.5</option>
      <option value="rcp8">RCP8.5</option>
    </select>
  </div>
  <span class="">Primary</span>
  <div class="form-group">
    <label for="">Masukan Rentang Tahun</label>
    <input type="number" class="form-control" name="tahun1" required="" placeholder="Tahun Awal" min='1900' max="2020">
  </div>
  <div class="form-group">
    <label for="">Masukan Tahun Akhir</label>
    <input type="number" class="form-control" name="tahun2" required="" placeholder="Tahun Akhir" max="2020">
  </div>
  <button type="submit" value="Submit" name="Submit" class="btn btn-primary btn-lg btn-block">Cari</button>
 </form>
</content>
<div class="fixed-bottom" style="margin-top: 10px; margin-left:85%;" >
  <span class="text-light badge bg-primary" style="">
  <?php
  //saat telah login, mengambil variabel SESSION['username'] untuk ditampilkan sebagai pertanda user sedang login
  if (isset($_SESSION['login'])){
    echo "<h4> Welcome ".$_SESSION['username']."</h4>";
  }
  ?>
  </span>
</div>
</body>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<style type="text/css">
</style>
</html>

