<?php
session_start();
if (isset($_SESSION["login-admin"])) {
    header("Location: halaman-utama-admin.php");
}
include '../phpScript/config.php';
global $conn;

if (isset($_POST['reset'])) {
    $Username = $_POST['Username'];
    $pass = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if ($pass !== $pass2) {
        echo "<script>alert('Konfirmasi password tidak sesuai')</script>";
        return false;
    }
    // cek NIS
    $result = mysqli_query($conn, "SELECT Username FROM guru WHERE Username = '$Username'");

    if (mysqli_num_rows($result) === 0) {
        echo "<script>alert('Username tidak terdaftar!')</script>";
    }

    // enkripsi password
    $pass = password_hash($pass, PASSWORD_DEFAULT);

    // update password
    $updatePass = mysqli_query($conn, "UPDATE guru SET Password = '$pass' WHERE Username = '$Username'");
    if ($updatePass) {
        echo "<script>alert('Atur ulang password berhasil!');document.location='LoginAdmin.php'</script>";
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
    <link href="../css/lupa-password.css" rel="stylesheet"/>
    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="content">
        <span class="login-msg">Atur Ulang Password</span>
        <div class="login-form">
            <form action="" method="post">
                <label class="labelNIS" for="Username">Username</label>

                <input class="NIS" type="text" id="Username" name="Username" value="">

                <label class="labelPass1" for="pass1">Password</label>

                <input class="pass" type="password" id="pass1" name="pass1" value="">

                <label class="labelPass2" for="pass2">Ulangi Password</label>

                <input class="pass2" type="password" id="pass2" name="pass2" value="">

                <input class="sign-in sign-in-btn" type="submit" name="reset" value="Atur Ulang Password">
            </form>
        </div>
        <a class="login-link" href="">Login </a>
        <a class="signup-link" href="sign-up-admin.php">Sign Up</a>
        <img src="../img/loginimg.png" class="login-img">
        <a class="lupa-pass" href="../siswa/LoginSiswa.php">Login sebagai siswa</a>
        <a class="login-switch" href="LoginAdmin.php">Login sebagai admin</a>
        <span class="PERPOOS">PERP<span class="OOS">OOS</span></span>
    </div>
</div>
</body>
</html>
