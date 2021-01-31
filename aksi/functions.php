<?php
    include 'Koneksi.php';

    function registrasi($data){
        global $conn;

        //menghilangkan slash(\) pada input dan diubah menjadi huruf kecil semua
        $username = strtolower(stripslashes($data['userName']));

        $email = $data['email'];
        $phone = $data['phone'];

        $password = mysqli_real_escape_string($conn, $data['pass1']);
        $password2 = mysqli_real_escape_string($conn, $data['pass2']);
        //escape karakter spesial pada string untuk kepentingan query

        if($password !== $password2){
            echo "<script> alert ('Password Tidak Sesuai')</script>";
            return false;
        }

        $queryUserName = "SELECT username FROM pengguna WHERE username = '$username'";
        $cek = mysqli_query($conn, $queryUserName);

        if(mysqli_fetch_assoc($cek)){
            echo "<script> alert ('Username telah terdaftar') </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT); //hash password
        $query = "INSERT INTO pengguna VALUES ('', '$username', '$email',
        '$phone','$password')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }

    function login($data){
        global $conn;
        $username = $data['username'];
        $password = $data['password'];

        //mencari username yang sama dengan username hasil input user
        $query = "SELECT username, pass FROM pengguna WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        //jika ada 1 query yang dihasilkan
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result); //mengasosiakan hasil query setiap baris dengan pasangan key value
            if(password_verify($password, $row['pass'])){ // verifikasi password input user dengan password pada database
                //Set Sesion
                $_SESSION["login"] = true;
                $_SESSION["logout"] = "Logout";
                $_SESSION['username']= $username;
                echo "<script>alert('Login Berhasil')</script>";
                echo "<script>setTimeout(\"location.href = 'home.php';\",1);</script>";
            }
        }
        else{
            echo "Tidak ada username yang sama!";
        }
    }
    function checkLogin(){
        global $login;

        if(isset($_SESSION['login'])){ //Cek Variabel Session dengan key login apakah telah di buat
            $login = $_SESSION['logout'];
        }
        else{
            echo "<script>alert('Harap Login Dahulu!!')</script>";
            echo "<script>setTimeout(\"location.href = 'Login.php';\",1);</script>";
            return false;
        }
    }
    function checkAdmin(){
        global $login;
        if (isset($_SESSION['username'])){
            if ($_SESSION['username']!=='admin') {
            echo "<script>alert('Operasi terbatas untuk Admin!!!!')</script>";
            echo "<script>setTimeout(\"location.href = 'home.php';\",1);</script>";
            }
            else{
                $login = $_SESSION['logout'];
            }
        }
        else{
            echo "<script>alert('Login dan Operasi terbatas untuk Admin!!!!')</script>";
            echo "<script>setTimeout(\"location.href = 'home.php';\",1);</script>";
            return false;
        }
    }
?>
