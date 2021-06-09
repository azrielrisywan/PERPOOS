<?php
    session_start();
    require '../phpScript/functions.php';
    if (isset($_SESSION["login"])) {
        header("Location: halaman-utama-siswa.php");
    }

    if (isset($_POST["sign-up"])) {

        if (signup_siswa($_POST) > 0) {
            echo "<script>alert('Sign up berhasil! silahkan login');document.location='LoginSiswa.php'</script>";
        } else {
            echo mysqli_error($conn);
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
    <link href="../css/sign-up.css" rel="stylesheet" />
    <title>Sign Up</title>
</head>
<body>
<div class="container">
    <div class="content">
        <span class="signup-text">SIGN UP</span>
        <div class="login-form">
            <form action="" method="post">
                <label class="labelNamaLengkap" for="nama-lengkap">Nama Lengkap</label>
                <input class="nama-lengkap" type="text" id="nama-lengkap" name="nama-lengkap" value="">
                <label class="labelNIS" for="NIS">NIS</label>
                <input class="NIS" type="text" id="NIS" name="NIS" value="">
                <label class="labelPass" for="pass">Password</label>
                <input class="pass" type="password" id="pass" name="pass" value="">
                <label class="labelUlangiPass" for="ulangi-pass">Ulangi Password</label>
                <input class="ulangiPass" type="password" id="ulangi-pass" name="pass2" value="">
                <input class="sign-up signup-btn" type="submit" name="sign-up" value="SIGN UP">
            </form>
        </div>
        <a class="login-link" href="LoginSiswa.php">Login </a>
        <a class="signup-link" href="sign-up-siswa.php">Sign Up</a>
        <img src="../img/loginimg.png" class="login-img">
        <span class="PERPOOS">PERP<span class="OOS">OOS</span></span>
    </div>
</div>
</body>
</html>