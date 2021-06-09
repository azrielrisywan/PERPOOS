<?php
    session_start();
    if (isset($_SESSION["login-siswa"])) {
        header("Location: halaman-utama-siswa.php");
    }

    require "../phpScript/config.php";
    global $conn;

    if (isset($_POST["sign-in"])) {
        $NIS = $_POST["NIS"];
        $pass = $_POST["pass"];

        $result = mysqli_query($conn, "SELECT * FROM murid WHERE NIS = '$NIS'");

        if (mysqli_num_rows($result) === 1) {
            //cek password
            $row = mysqli_fetch_assoc($result);
            if (password_verify($pass, $row["Password"])) {
                // set session
                $_SESSION["login-siswa"] = true;
                $nama = mysqli_query($conn,"SELECT NamaLengkap FROM murid WHERE NIS = '$NIS'");
                while ($row = mysqli_fetch_assoc($nama)) {
                    $_SESSION["NamaLengkap"] = $row["NamaLengkap"];
                }
                $_SESSION["NIS"] = $NIS;
                header("Location: halaman-utama-siswa.php");
                exit;
            } else {
                echo "<script>alert('Password salah!');document.location='LoginSiswa.php'</script>";
            }
        } else {
            echo "<script>alert('NIS tidak terdaftar!');document.location='LoginSiswa.php'</script>";
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
    <link href="../css/Login.css" rel="stylesheet"/>
    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="content">
        <span class="login-text">LOGIN</span>
        <span class="login-msg">Masukkan NIS dan Password untuk menggunakan aplikasi</span>
        <div class="login-form">
            <form action="" method="post">
                <label class="labelNIS" for="NIS">NIS</label>
                <input class="NIS" type="text" id="NIS" name="NIS" value="">
                <label class="labelPass" for="pass">Password</label>
                <input class="pass" type="password" id="pass" name="pass" value="">
                <input class="sign-in sign-in-btn" type="submit" name="sign-in" value="LOGIN">
            </form>
        </div>
        <a class="login-link" href="">Login </a>
        <a class="signup-link" href="sign-up-siswa.php">Sign Up</a>
        <img src="../img/loginimg.png" class="login-img">
        <a class="lupa-pass" href="atur-password-siswa.php">Lupa Password?</a>
        <a class="login-switch" href="../admin/LoginAdmin.php">Login sebagai admin</a>
        <span class="PERPOOS">PERP<span class="OOS">OOS</span></span>
    </div>
</div>
</body>
</html>