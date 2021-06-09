<?php
    session_start();
    if (!isset($_SESSION["login-siswa"])) {
        header("Location: LoginSiswa.php");
        exit;
    }
    include '../phpScript/config.php';
    $Seni = $_SESSION["Seni"] = false;
    $IPA = $_SESSION["IPA"] = false;
    $Matematika = $_SESSION["Matematika"] = false;
    $IPS = $_SESSION["IPS"] = false;
    $BahasaIndonesia = $_SESSION["BahasaIndonesia"] = false;
    $Biografi = $_SESSION["Biografi"] = false;
    $CeritaDetektif = $_SESSION["CeritaDetektif"] = false;
    $Dongeng = $_SESSION["Dongeng"] = false;
    $PengUmum = $_SESSION["PengUmum"] = false;
    $Resep = $_SESSION["Resep"] = false;

    $mapel = array($Seni, $IPA, $Matematika, $IPS, $BahasaIndonesia);
    $bukulain = array($Biografi, $CeritaDetektif, $Dongeng, $PengUmum, $Resep);

    // ------------ Buku Pelajaran -------------

    if (isset($_POST["Seni"])) {
        foreach ($mapel as $value) {
            $value = false;
        }
        $_SESSION["Seni"] = true;
        header("Location: buku-pelajaran-siswa.php?Seni");
    } elseif (isset($_POST["IPA"])) {
        foreach ($mapel as $value) {
            $value = false;
        }
        $_SESSION["IPA"] = true;
        header("Location: buku-pelajaran-siswa.php?IPA");
    } elseif (isset($_POST["Matematika"])) {
        foreach ($mapel as $value) {
            $value = false;
        }
        $_SESSION["Matematika"] = true;
        header("Location: buku-pelajaran-siswa.php?Matematika");
    } elseif (isset($_POST["IPS"])) {
        foreach ($mapel as $value) {
            $value = false;
        }
        $_SESSION["IPS"] = true;
        header("Location: buku-pelajaran-siswa.php?IPS");
    } elseif (isset($_POST["BahasaIndonesia"])) {
        foreach ($mapel as $value) {
            $value = false;
        }
        $_SESSION["BahasaIndonesia"] = true;
        header("Location: buku-pelajaran-siswa.php?Bahasa-Indonesia");

        // --------- Buku Lain ---------

    } elseif (isset($_POST["Biografi"])) {
        foreach ($bukulain as $value) {
            $value = false;
        }
        $_SESSION["Biografi"] = true;
        header("Location: buku-lain-siswa.php?Biografi");
    } elseif (isset($_POST["CeritaDetektif"])) {
        foreach ($bukulain as $value) {
            $value = false;
        }
        $_SESSION["CeritaDetektif"] = true;
        header("Location: buku-lain-siswa.php?CeritaDetektif");
    } elseif (isset($_POST["Dongeng"])) {
        foreach ($bukulain as $value) {
            $value = false;
        }
        $_SESSION["Dongeng"] = true;
        header("Location: buku-lain-siswa.php?Dongeng");
    } elseif (isset($_POST["PengUmum"])) {
        foreach ($bukulain as $value) {
            $value = false;
        }
        $_SESSION["PengUmum"] = true;
        header("Location: buku-lain-siswa.php?PengetahuanUmum");
    } elseif (isset($_POST["Resep"])) {
        foreach ($bukulain as $value) {
            $value = false;
        }
        $_SESSION["Resep"] = true;
        header("Location: buku-lain-siswa.php?Resep");
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Niramit&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/halaman-utama.css" rel="stylesheet" />
    <title>PERPOOS - Siswa</title>
</head>
<body>
<div class="container">
    <div class="navColor">
        <div class="navbar">
            <h2 class="perpoos">PERP<span class="OOS">OOS</span></h2>
            <nav class="navAtas">
                <ul id="menuList" class="menuList">
                    <li class="masukan"><a class="aMasukan" href="https://youtu.be/xBYchxy81yU" target="_blank">Demo Aplikasi</a></li>
                    <li class="masukan"><a class="aMasukan" href="saran.php">Saran</a></li>
                    <li class="masukan"><a class="aMasukan" href="../phpScript/logout.php">Log Out</a></li>
                </ul>
            </nav>
            <button class="user-btn" type="button"><img src="../img/person-logo.png" class="user"><p><?php echo $_SESSION["NamaLengkap"];?></p></button>
        </div>
    </div>
    <div class="line-1">
        <hr>
    </div>
    <form action="" method="post">
    <div class="buku">
        <h2>Buku Pelajaran</h2>
        <ul class="link-buku full">
            <li class="buku-seni"><button name="Seni"><img src="../img/seni.png" class="icon-seni"></button>Seni</li>
            <li class="buku-ipa"><button name="IPA"><img src="../img/ipa.png" class="icon-ipa"></button>IPA</li>
            <li class="buku-matematika"><button name="Matematika"><img src="../img/matematika.png" class="icon-matematika"></button>Matematika</li>
            <li class="buku-ips"><button name="IPS"><img src="../img/ips.png" class="icon-ips"></button>IPS</li>
            <li class="buku-bindo"><button name="BahasaIndonesia"><img src="../img/bahasa-indo.png" class="icon-bindo"></button>B. Indonesia</li>
        </ul>
        <hr>
        <h2>Buku Lain</h2>
        <ul class="link-buku full">
            <li class="buku-biografi"><button name="Biografi"><img src="../img/biografi.png" class="icon-biografi"></button>Biografi</li>
            <li class="buku-cerita-detektif"><button name="CeritaDetektif"><img src="../img/cerita-detektif.png" class="icon-cerita-detektif"></button>Cerita Detektif</li>
            <li class="buku-dongeng"><button name="Dongeng"><img src="../img/dongeng.png" class="icon-dongeng"></button>Dongeng</li>
            <li class="buku-peng-umum"><button name="PengUmum"><img src="../img/pengetahuan-umum.png" class="icon-peng-umum"></button>Pengetahuan Umum</li>
            <li class="buku-resep"><button name="Resep"><img src="../img/buku-resep.png" class="icon-resep"></button>Buku Resep</li>
        </ul>
    </div>
    </form>
    <footer>&copy; PERPOOS 2021</footer>
</div>
</body>
</html>