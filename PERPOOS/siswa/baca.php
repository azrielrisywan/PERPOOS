<?php
session_start();

if (!isset($_SESSION["login-siswa"]) && !isset($_SESSION["login-admin"])) {
    header("Location: LoginSiswa.php");
    exit;
}
include '../phpScript/config.php';
global $nama_file;
//echo "<iframe src='../book/$nama_file' width='100%' height='100vh'>";

?>
<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-widht", initial-scale="1">-->
<!--    <link href="https://fonts.googleapis.com/css?family=Niramit&display=swap" rel="stylesheet" />-->
<!--    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet" />-->
<!--    <link href='https://css.gg/chevron-left.css' rel='stylesheet'>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.7.570/build/pdf.min.js"></script>-->
<!--    <link href="../css/halaman-baca.css" rel="stylesheet" />-->
<!--    <title>PERPOOS</title>-->
<!--</head>-->
<!--<body>-->
<!--<div class="container">-->
<!--    <div class="navColor">-->
<!--        <div class="navbar">-->
<!--            <nav class="navAtas">-->
<!--                <ul class="menuList">-->
<!--                    <li class="kembali"><a class="aKembali" href="halaman-buku-siswa.php"><i class="gg-chevron-left"></i>kembali</a></li>-->
<!--                </ul>-->
<!--            </nav>-->
<!--        </div>-->
<!--    </div>-->
<!--    -->
<!--</div>-->
<!--</body>-->
<!--</html>-->