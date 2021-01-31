<?php
    include'Koneksi.php'; //mengambil file koneksi.php (import pada python)
    header("Content-type: application/vnd-ms-excel"); //mengubah bentuk file menjadi excel
    header("Content-Disposition:attachment;filename=export.xls"); //content yang tersedia akan didownload
?>
    <h1 style="margin-top: 20px">Tabel Data <?php echo $_GET['tabel']; ?></h1>
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
        $tabel = $_GET['tabel'];
        $tahun1 =$_GET['tahun1'];
        $tahun2 =$_GET['tahun2'];
        $sql = "SELECT * FROM $tabel WHERE TAHUN BETWEEN $tahun1 AND $tahun2";
        $query = mysqli_query($conn,$sql);
        $x = 1;
        if($query){
            foreach($query as $row) { //loop setiap item (row) dalam variabel query
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
        </tr>";
        $x++;
    }
        }
        else{
            echo 'Pencarian Data Gagal';
        }
?>
