<?php
  include "aksi/functions.php";
  session_start();
  if(isset($_SESSION['login'])){
      $login = $_SESSION['logout'];
      header("location:home.php");
    }
  $login = "Login";
  if (isset($_POST['login'])){
      login($_POST);
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
<form method="POST" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="login" class="btn btn-primary">Login</button>
</form>
</body>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>

