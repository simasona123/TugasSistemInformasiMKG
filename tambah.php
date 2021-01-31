<?php
  include "aksi/functions.php";
  $login = "Login";
  session_start();
  checkAdmin();
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
  <form method="post" action="aksi/aksi.php">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Tabel Data</label>
    <select class="form-control" id="exampleFormControlSelect1" name="tabel">
      <option value="iod">IOD</option>
      <option value="oni">ONI</option>
      <option value="rcp4">RCP4.5</option>
      <option value="rcp5">RCP8.5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Masukan Tahun</label>
    <input type="number" class="form-control" name="tahun" required="" placeholder="2020" max="2100">
  </div>
   <div class="container">
    <label>Masukan Data setiap bulan</label></div>
    <div class="container">
    <div class="row">
    <div class="col-sm"><label for="exampleInputEmail1"> Januari</label>
    <input name="data1" type="number" class="form-control" placeholder="1.000" step="0.001" min="0" max="1000" required="">
  </div>
  <div class="col-sm">
    <label for="exampleInputEmail1"> Februari</label>
    <input name="data2" type="number" class="form-control" placeholder="1.000" step="0.001" min="0" max="1000" required="">
  </div>
  <div class="col-sm">
    <label for="exampleInputEmail1"> Maret</label>
    <input name="data3" type="number" class="form-control" placeholder="1.000" step="0.001" min="0" max="1000" required="">
</div>
  </div>
</div>
  <div class="container">
    <div class="row">
    <div class="col-sm">
    <label for="exampleInputEmail1"> April</label>
    <input name="data4" type="number" class="form-control" placeholder="1.000" step="0.001" min="0" max="1000" required="">
  </div>
  <div class="col-sm">
    <label for="exampleInputEmail1"> Mei</label>
    <input name="data5" type="number" class="form-control" placeholder="1.000" step="0.001" min="0" max="1000" required="">
  </div>
  <div class="col-sm">
    <label for="exampleInputEmail1"> Juni</label>
    <input name="data6" type="number" class="form-control" placeholder="1.000" step="0.001" min="0" max="1000" required="">
  </div>
  </div>
</div>
 <div class="container">
    <div class="row">
    <div class="col-sm">
    <label for="exampleInputEmail1"> Juli</label>
    <input name="data7" type="number" class="form-control" placeholder="1.000" step="0.001" min="0" max="1000" required="">
  </div>
  <div class="col-sm">
    <label for="exampleInputEmail1"> Agustus</label>
    <input name="data8" type="number" class="form-control" placeholder="1.000" step="0.001" min="0" max="1000" required="">
  </div>
  <div class="col-sm">
    <label for="exampleInputEmail1">  September</label>
    <input name="data9" type="number" class="form-control" placeholder="1.000" step="0.001" min="0" max="1000" required="">
  </div>
  </div>
</div>
  <div class="container">
    <div class="row">
    <div class="col-sm">
    <label for="exampleInputEmail1"> Oktober</label>
    <input name="data10" type="number" class="form-control" placeholder="1.000" step="0.001" min="0" max="1000" required="">
  </div>
  <div class="col-sm">
    <label for="exampleInputEmail1"> November</label>
    <input name="data11" type="number" class="form-control" placeholder="1.000" step="0.001" min="0" max="1000" required="">
  </div>
  <div class="col-sm">
    <label for="exampleInputEmail1"> Desember</label>
    <input name="data12" type="number" class="form-control" placeholder="1.000" step="0.001" min="0" max="1000" required="">
  </div>
  </div>
</div>
  <button style="margin-top: 20px" type="submit" value="Submit" name="Submit" class="btn btn-primary btn-lg btn-block">Tambah</button>
</form>
</content>
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
<style type="text/css">
  form{
    margin: 50px 25% 20px 25%;
  }
</style>
</html>

