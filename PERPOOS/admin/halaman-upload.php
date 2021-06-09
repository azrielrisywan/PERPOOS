<?php
session_start();
if (!isset($_SESSION["login-admin"])) {
    header("Location: LoginAdmin.php");
    exit;
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
    <link href="../css/halaman-upload.css" rel="stylesheet">
    <title>PERPOOS - Upload</title>
</head>
<body>
<div class="container">
    <div class="navColor">
        <div class="navbar">
            <nav class="navAtas">
                <ul class="menuList">
                    <li class="kembali"><a class="aKembali" href="halaman-utama-admin.php"><i class="gg-chevron-left"></i>kembali</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="body">
        <h1 class="perpoos">PERP<span class="OOS">OOS</span></h1>
    </div>
    <form action="../phpScript/upload.php" method="post" enctype="multipart/form-data">
        <div class="book-upload">
            <label>Pilih Buku</label>
            <input class="input-pdf" type="file" name="file" accept="application/pdf">
        </div>
        <div class="book-type">
            <label>Kategori Buku:</label>
            <select class="input-tipe" name="kategori">
                <option value="Seni">Seni</option>
                <option value="IPA">IPA</option>
                <option value="Matematika">Matematika</option>
                <option value="IPS">IPS</option>
                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                <option value="Biografi">Biografi</option>
                <option value="Cerita Detektif">Cerita Detektif</option>
                <option value="Dongeng">Dongeng</option>
                <option value="Pengetahuan Umum">Pengetahuan Umum</option>
                <option value="Buku Resep">Buku Resep</option>
            </select>
        </div>
        <div class="judul-buku">
            <label>Judul Buku :</label>
            <input class="input-judul" type="text" name="judul">
        </div>
        <div class="kelas-buku">
            <label>Buku Untuk:</label>
            <select class="input-tipe" name="kelas">
                <option value="Kelas-1">Kelas 1</option>
                <option value="Kelas-2">Kelas 2</option>
                <option value="Kelas-3">Kelas 3</option>
                <option value="Kelas-4">Kelas 4</option>
                <option value="Kelas-5">Kelas 5</option>
                <option value="Kelas-6">Kelas 6</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>
        <div class="submit">
            <input class="submit-btn" type="submit" name="Upload" value="Upload">
        </div>
    </form>
</body>
</html>