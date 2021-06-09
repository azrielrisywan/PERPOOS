<?php
session_start();
if (isset($_SESSION["login-admin"])) {
    header("Location: halaman-utama-admin.php");
}

require '../phpScript/functions.php';
global $conn;

if (isset($_POST["sign-in"])) {
    $Username = $_POST["Username"];
    $pass = $_POST["pass"];

    $result = mysqli_query($conn, "SELECT * FROM guru WHERE Username = '$Username'");

    if (mysqli_num_rows($result) === 1) {
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass, $row["Password"])) {
            // set session
            $_SESSION["login-admin"] = true;
            $nama = mysqli_query($conn,"SELECT NamaLengkap FROM guru WHERE Username = '$Username'");
            while ($row = mysqli_fetch_assoc($nama)) {
                $_SESSION["NamaLengkap"] = $row["NamaLengkap"];
            }
            header("Location: halaman-utama-admin.php");
            exit;
        } else {
            echo "<script>alert('Password salah!');document.location='LoginAdmin.php'</script>";
        }
    } else {
        echo "<script>alert('Username tidak terdaftar!');document.location='LoginAdmin.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet" />
    <link href="../css/Login.css" rel="stylesheet" />
    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="content">
        <span class="login-text">LOGIN</span>
        <span class="login-msg">Masukkan Username dan Password untuk menggunakan aplikasi</span>
        <div class="login-form">
            <form action="" method="post">
                <label class="labelNIS" for="NIS">Username</label>
                <input class="NIS" type="text" id="NIS" name="Username" value="">
                <label class="labelPass" for="pass">Password</label>
                <input class="pass" type="password" id="pass" name="pass" value="">
                <input class="sign-in sign-in-btn" type="submit" name="sign-in" value="LOGIN">
            </form>
        </div>
        <a class="login-link" href="">Login </a>
        <a class="signup-link" href="sign-up-admin.php">Sign Up</a>
        <img src="../img/loginimg.png" class="login-img">
        <a class="lupa-pass" href="atur-password-admin.php">Lupa Password?</a>
        <a class="login-switch" href="../siswa/LoginSiswa.php">Login sebagai siswa</a>
        <span class="PERPOOS">PERP<span class="OOS">OOS</span></span>
    </div>
</div>
</body>
</html>