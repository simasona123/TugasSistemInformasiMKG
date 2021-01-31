<!-- Update Data Klimat -->
<?php
    include'Koneksi.php';
    if(isset($_POST['Submit'])){
        $tabel = $_POST['tabel'];
        $tahun =$_POST['tahun'];
        $bulan =$_POST['Bulan'];
        $data =$_POST['data'];
        $sql = "UPDATE $tabel SET $bulan=$data WHERE TAHUN=$tahun";
        echo $sql;
        $query = mysqli_query($conn,$sql);
        if($query){
            // fungsi javascript untuk memberikan alert
            echo "<script>alert('Data telah diubah')</script>";

            //fungsi javascript untuk meredirect ke halaman tertentu
            echo "<script>setTimeout(\"location.href = '../edit.php';\",1);</script>";
        }
        else{
            echo mysqli_error($conn);
        }
    }
?>
