<?php
    include'Koneksi.php';
    if(isset($_POST['Submit'])){
        $tabel = $_POST['tabel'];
        $tahun =$_POST['tahun'];
        $sql = "DELETE FROM $tabel WHERE TAHUN = $tahun";
        $query = mysqli_query($conn,$sql); //melakukan query kepada database
        if($query){
            header('Location:../completeDelete.php');
        }
        else{
            echo ' Hapus Data Gagal';
        }
    }
?>
