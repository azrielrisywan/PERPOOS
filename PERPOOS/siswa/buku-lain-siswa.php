<?php
session_start();

if (!isset($_SESSION["login-siswa"])) {
    header("Location: LoginSiswa.php");
    exit;
}
include '../phpScript/config.php';
global $conn;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Niramit&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet" />
    <link href='https://css.gg/chevron-left.css' rel='stylesheet'>
    <link href="../css/halaman-buku.css" rel="stylesheet">
    <title>PERPOOS</title>
</head>
<body>
<div class="container">
    <div class="navColor">
        <div class="navbar">
            <nav class="navAtas">
                <ul id="menuList" class="menuList">
                    <li class="kembali"><a class="aKembali" href="halaman-utama-siswa.php"><i class="gg-chevron-left"></i>kembali</a></li>
                </ul>
            </nav>
            <h2 class="perpoos">PERP<span class="OOS">OOS</span></h2>
        </div>
    </div>
    <?php

    /*  Fetch Buku Biografi  */

    if ($_SESSION["Biografi"]) {
        $sql = mysqli_query($conn, "SELECT JudulBuku, nama_file FROM buku WHERE Kategori = 'Biografi'");
        echo "<button class='btn-icon'><img class='icon' src='../img/biografi.png'><h2>Biografi</h2></button>";
        echo "<div class='wrapper'>
              <table class='buku-lain' border='0'>";
        while ($row = mysqli_fetch_assoc($sql)) {
            echo "<td><p>".$row['JudulBuku']."</p>
                  <a href='../book/".$row['nama_file']."' target='_blank'><img class='img-buku-lain' src='../img/open-book.png'></a></td> 
                  ";
        }
        echo "</table>
              </div>";

        /*  Buku Cerita Detektif  */

    } elseif ($_SESSION["CeritaDetektif"]) {
        echo "<button class='btn-icon'><img class='icon' src='../img/cerita-detektif.png'><h2>Cerita Detektif</h2></button>";
        $sql = mysqli_query($conn, "SELECT JudulBuku, nama_file FROM buku WHERE Kategori = 'Cerita Detektif'");
        echo "<div class='wrapper'>
              <table class='buku-lain' border='0'>";
        while ($row = mysqli_fetch_assoc($sql)) {
            echo "<td><p>".$row['JudulBuku']."</p>
                  <a href='../book/".$row['nama_file']."' target='_blank'><img class='img-buku-lain' src='../img/open-book.png'></a></td> 
                  ";
        }
        echo "</table>
              </div>";

        /*  Fetch Buku Dongeng  */

    } elseif ($_SESSION["Dongeng"]) {
        echo "<button class='btn-icon'><img class='icon' src='../img/dongeng.png'><h2>Dongeng</h2></button>";
        $sql = mysqli_query($conn, "SELECT JudulBuku, nama_file FROM buku WHERE Kategori = 'Dongeng'");
        echo "<div class='wrapper'>
              <table class='buku-lain' border='0'>";
        while ($row = mysqli_fetch_assoc($sql)) {
            echo "<td><p>".$row['JudulBuku']."</p>
                  <a href='../book/".$row['nama_file']."' target='_blank'><img class='img-buku-lain' src='../img/open-book.png'></a></td> 
                  ";
        }
        echo "</table>
              </div>";

        /*  Fetch Buku Pengetahuan Umum  */

    } elseif ($_SESSION["PengUmum"]) {
        echo "<button class='btn-icon'><img class='icon' src='../img/pengetahuan-umum.png'><h2>Pengetahuan Umum</h2></button>";
        $sql = mysqli_query($conn, "SELECT JudulBuku, nama_file FROM buku WHERE Kategori = 'Pengetahuan Umum'");
        echo "<div class='wrapper'>
              <table class='buku-lain' border='0'>";
        while ($row = mysqli_fetch_assoc($sql)) {
            echo "<td><p>".$row['JudulBuku']."</p>
                  <a href='../book/".$row['nama_file']."' target='_blank'><img class='img-buku-lain' src='../img/open-book.png'></a></td> 
                  ";
        }
        echo "</table>
              </div>";

        /*  Fetch Buku Resep  */

    } elseif ($_SESSION["Resep"]) {
        echo "<button class='btn-icon'><img class='icon' src='../img/buku-resep.png'><h2>Buku Resep</h2></button>";
        $sql = mysqli_query($conn, "SELECT JudulBuku, nama_file FROM buku WHERE Kategori = 'Buku Resep'");
        echo "<div class='wrapper'>
              <table class='buku-lain' border='0'>";
        while ($row = mysqli_fetch_assoc($sql)) {
            echo "<td><p>".$row['JudulBuku']."</p>
                  <a href='../book/".$row['nama_file']."' target='_blank'><img class='img-buku-lain' src='../img/open-book.png'></a></td> 
                  ";
        }
        echo "</table>
              </div>";
    }
    ?>
</div>

</body>
</html>