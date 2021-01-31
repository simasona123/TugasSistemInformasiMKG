<?php
  include'aksi/Koneksi.php';
  include 'aksi/functions.php';
  session_start();
  $login = "Login";
  if(isset($_SESSION['login'])){
      echo "<script>alert('Anda Sudah Login, Harap Logout Jika Ingin Mendaftar!!')</script>";
      echo "<script>setTimeout(\"location.href = 'home.php';\",1);</script>";
    }
  if(isset ($_POST["submit"])){
    if(registrasi($_POST) > 0){
      echo "<script> alert ('User Telah Ditambahkan!')</script>";
    }
    else{
      echo mysqli_error($conn);
    }
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
          <a href="<?php echo $login ?>.php"><button type="button" class="btn btn-light"><?php echo $login ?></button></a>
        </li>
        <li class="nav-item" style="margin-left: 10px;">
          <a href="daftar.php"><button type="button" class="btn btn-light">Daftar</button></a>
        </li>
      </ul>
    </nav>
</navbar>
<form method="POST" action="">
  <div class="mb-3">
  <label for="FirstName" class="form-label">Username</label>
  <input type="Text" class="form-control" id="FirstName" placeholder="" name="userName">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
  </div>
  <div class="mb-3">
  <label for="phone" class="form-label">Phone</label>
  <input type="text" class="form-control" id="phone" placeholder="08*******" name="phone" id="phone" onfocusout="cekPhone()">
  <div class="error" style="color: red;"></div>
</div>
<div class="mb-3">
  <label for="pass1" class="form-label">Password</label>
  <input type="password" class="form-control" id="pass1" placeholder=" " name="pass1">
</div>
<div class="mb-3">
  <label for="pass2" class="form-label">Re-Type Password</label>
  <input type="password" class="form-control" id="pass2" placeholder="" name="pass2">
</div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
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
<script type="text/javascript" src="js/daftar.js"></script>
</html>

