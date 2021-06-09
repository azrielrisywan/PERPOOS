<?php
session_start();
if (!isset($_SESSION["login-siswa"])) {
    header("Location: LoginSiswa.php");
    exit;
}
include '../phpScript/config.php';
if (isset($_POST['submit'])) {
    global $conn;
    $NIS = $_SESSION["NIS"];
    $NamaLengkap = $_SESSION["NamaLengkap"];
    $text_masukan = mysqli_real_escape_string($conn, $_POST['comment']);
    if ($text_masukan != null) {
        // masukkan data
        $sql = mysqli_query($conn, "INSERT INTO masukan(NIS, NamaLengkap, text_masukan) VALUES ('$NIS', '$NamaLengkap', '$text_masukan')");
        if ($sql) {
            echo "<script>alert('Terimakasih atas masukannya!');document.location='halaman-utama-siswa.php'</script>";
        } else {
            echo "<script>alert('Gagal!')";
        }
    } else {
        echo "<script>alert('Silahkan isi masukan terlebih dahulu')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Niramit&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href='https://css.gg/chevron-left.css' rel='stylesheet'>
    <link href="../css/halaman-masukan.css" rel="stylesheet">
    <title>PERPOOS - Saran</title>
</head>
<body>
<div class="container">
    <div class="navColor">
        <div class="navbar">
            <nav class="navAtas">
                <ul class="menuList">
                    <li class="kembali"><a class="aKembali" href="halaman-utama-siswa.php"><i class="gg-chevron-left"></i>kembali</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="body">
        <h1 class="perpoos">PERP<span class="OOS">OOS</span></h1>
    </div>
    <div class="text-1">
        ada saran untuk kami?
    </div>
    <p>Saran</p>
    <form action="" method="post">
        <div class="comment">
            <textarea name="comment" rows="10" cols="60"></textarea>
        </div>
        <div class="kirim">
            <span class="submit-btn"><input type="submit" name="submit" value="Kirim"></span>
        </div>
    </form>
</div>

</body>
</html>