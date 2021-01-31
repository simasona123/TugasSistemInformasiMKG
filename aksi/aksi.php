<?php
    include'Koneksi.php';
    if(isset($_POST['Submit'])){    // Jika variable POST dengan key Submit telah dibuat, maka
        $tabel = $_POST['tabel'];   //asignment variable
        $tahun =$_POST['tahun'];
        $data1 =$_POST['data1'];
        $data2 =$_POST['data2'];
        $data3 =$_POST['data3'];
        $data4 =$_POST['data4'];
        $data5 =$_POST['data5'];
        $data6 =$_POST['data6'];
        $data7 =$_POST['data7'];
        $data8 =$_POST['data8'];
        $data9 =$_POST['data9'];
        $data10 =$_POST['data10'];
        $data11 =$_POST['data11'];
        $data12 =$_POST['data12'];

        //perintah SQL untuk menambahkan data
        $sql = "INSERT INTO $tabel (TAHUN,JANUARI,FEBRUARI,MARET,APRIL,MEI,JUNI,JULI,AGUSTUS,SEPTEMBER,OKTOBER,NOVEMBER,DESEMBER)
        VALUES ($tahun,$data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9,$data10,$data11,$data12)";

        //perintah untuk memulai query kepada database tertentu
        $query = mysqli_query($conn,$sql);

        echo $sql;
        if($query){ // Jika Query berhasil akan ke ../home.php
            header('location:../home.php');
        }
        else{
            echo mysqli_error($conn); //Jika query tidak berhasil akan menampilkan errorS
        }
    }
?>
