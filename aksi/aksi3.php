<?php
  session_start();
  $login = "Login";
  if(isset($_SESSION['login'])){
    $login = $_SESSION['logout'];
  }
?>
 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <title>DATABASE</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../style.css">
     <title></title>
 </head>
<body style="background: none;">
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
            <a class="dropdown-item" href="../cari.php">Cari Data</a>
            <a class="dropdown-item" href="../tambah.php">Tambah Data</a>
            <a class="dropdown-item" href="../edit.php">Edit data</a>
            <a class="dropdown-item" href="../delete.php">Delete data</a>
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
<?php
    include'Koneksi.php';
    if(isset($_POST['Submit'])){
        $tabel = $_POST['tabel'];
        $tahun1 =$_POST['tahun1'];
        $tahun2 =$_POST['tahun2'];
    }
?>
    <h1 style="margin-top: 20px">Tabel Data <?php echo $_POST['tabel']; ?></h1>
    <div style="margin-left: 20px" class="export">
    <a href="export1.php?tabel=<?php echo $_POST['tabel'] ?>&tahun1=<?php echo $_POST['tahun1']?>&tahun2=
        <?php echo $_POST['tahun2'] ?>"><button type="button" class="btn btn-primary">Export(.xls)</button></a>
    </div>
    <table class="table table-bordered table-hover table-condensed table-striped" style="margin-top: 20px;">
        <thead class="thead-dark">
        <tr class="heading">
            <th>NO</th>
            <th>TAHUN</th>
            <th>JANUARI</th>
            <th>FEBRUARI</th>
            <th>MARET</th>
            <th>APRIL</th>
            <th>MEI</th>
            <th>JUNI</th>
            <th>JULI</th>
            <th>AGUSTUS</th>
            <th>SEPTEMBER</th>
            <th>OKTOBER</th>
            <th>NOVEMBER</th>
            <th>DESEMBER</th>
        </tr>
    </thead>
    <tbody>
<?php
    include'Koneksi.php';
    if(isset($_POST['Submit'])){
        $tabel = $_POST['tabel'];
        $tahun1 =$_POST['tahun1'];
        $tahun2 =$_POST['tahun2'];
        $sql = "SELECT * FROM $tabel WHERE TAHUN BETWEEN $tahun1 AND $tahun2";
        $query = mysqli_query($conn,$sql);
        $x = 1;
        if($query){
            foreach($query as $row) {
        echo "<tr>
            <td>".$x."</td>
            <td>".$row['TAHUN']."</td>
            <td>".$row['JANUARI']."</td>
            <td>".$row['FEBRUARI']."</td>
            <td>".$row['MARET']."</td>
            <td>".$row['APRIL']."</td>
            <td>".$row['MEI']."</td>
            <td>".$row['JUNI']."</td>
            <td>".$row['JULI']."</td>
            <td>".$row['AGUSTUS']."</td>
            <td>".$row['SEPTEMBER']."</td>
            <td>".$row['OKTOBER']."</td>
            <td>".$row['NOVEMBER']."</td>
            <td>".$row['DESEMBER']."</td>
        </tr>";$x++;
    };
        }
        else{
            echo 'Pencarian Data Gagal';
        }
    }
?>
</tbody>
</table>
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
    <script type="text/javascript" src="../jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <style type="text/css">
    h1{
        text-transform:uppercase;
        text-align: center;
    }
</style>
</html>
