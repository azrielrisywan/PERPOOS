<?php
session_start();

if (!isset($_SESSION["login-siswa"])) {
    header("Location: LoginSiswa.php");
    exit;
}
include '../phpScript/config.php';
global $conn;
$nama_file = "";

function bukaBuku($q)
{
    global $conn;
    $sql = mysqli_query($conn, "$q");
    $row = mysqli_fetch_assoc($sql);
    if ($row) {
        $nama_file = implode("", $row);
        echo "<script type='text/javascript' language='JavaScript'>window.open('../book/$nama_file');</script>";
    } else {
        echo "<script>alert('Buku belum tersedia');document.location='buku-pelajaran-siswa.php'</script>";
    }
}

if ($_SESSION["Seni"]) {
    $sql1= "SELECT nama_file FROM buku WHERE Kategori = 'Seni'";
    if (isset($_POST["Kelas-1"])) {
        $sql2 = "AND kelas_buku = 'Kelas-1' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-2"])) {
        $sql2 = "AND kelas_buku = 'Kelas-2' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-3"])) {
        $sql2 = "AND kelas_buku = 'Kelas-3' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-4"])) {
        $sql2 = "AND kelas_buku = 'Kelas-4' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-5"])) {
        $sql2 = "AND kelas_buku = 'Kelas-5' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-6"])) {
        $sql2 = "AND kelas_buku = 'Kelas-6' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    }
}
if ($_SESSION["IPA"]) {
    $sql1= "SELECT nama_file FROM buku WHERE Kategori = 'IPA'";
    if (isset($_POST["Kelas-1"])) {
        $sql2 = "AND kelas_buku = 'Kelas-1' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-2"])) {
        $sql2 = "AND kelas_buku = 'Kelas-2' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-3"])) {
        $sql2 = "AND kelas_buku = 'Kelas-3' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-4"])) {
        $sql2 = "AND kelas_buku = 'Kelas-4' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-5"])) {
        $sql2 = "AND kelas_buku = 'Kelas-5' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-6"])) {
        $sql2 = "AND kelas_buku = 'Kelas-6' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    }
}
if ($_SESSION["Matematika"]) {
    $sql1= "SELECT nama_file FROM buku WHERE Kategori = 'Matematika'";
    if (isset($_POST["Kelas-1"])) {
        $sql2 = "AND kelas_buku = 'Kelas-1' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-2"])) {
        $sql2 = "AND kelas_buku = 'Kelas-2' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-3"])) {
        $sql2 = "AND kelas_buku = 'Kelas-3' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-4"])) {
        $sql2 = "AND kelas_buku = 'Kelas-4' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-5"])) {
        $sql2 = "AND kelas_buku = 'Kelas-5' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-6"])) {
        $sql2 = "AND kelas_buku = 'Kelas-6' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    }
}
if ($_SESSION["IPS"]) {
    $sql1= "SELECT nama_file FROM buku WHERE Kategori = 'IPS'";
    if (isset($_POST["Kelas-1"])) {
        $sql2 = "AND kelas_buku = 'Kelas-1' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-2"])) {
        $sql2 = "AND kelas_buku = 'Kelas-2' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-3"])) {
        $sql2 = "AND kelas_buku = 'Kelas-3' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-4"])) {
        $sql2 = "AND kelas_buku = 'Kelas-4' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-5"])) {
        $sql2 = "AND kelas_buku = 'Kelas-5' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-6"])) {
        $sql2 = "AND kelas_buku = 'Kelas-6' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    }
}
if ($_SESSION["BahasaIndonesia"]) {
    $sql1= "SELECT nama_file FROM buku WHERE Kategori = 'Bahasa Indonesia'";
    if (isset($_POST["Kelas-1"])) {
        $sql2 = "AND kelas_buku = 'Kelas-1' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-2"])) {
        $sql2 = "AND kelas_buku = 'Kelas-2' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-3"])) {
        $sql2 = "AND kelas_buku = 'Kelas-3' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-4"])) {
        $sql2 = "AND kelas_buku = 'Kelas-4' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-5"])) {
        $sql2 = "AND kelas_buku = 'Kelas-5' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
    } elseif (isset($_POST["Kelas-6"])) {
        $sql2 = "AND kelas_buku = 'Kelas-6' LIMIT 1";
        $query = "$sql1 $sql2";
        bukaBuku($query);
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
    if ($_SESSION["Seni"]) {
        echo "<button class='btn-icon'><img class='icon' src='../img/seni.png'><h2>Seni</h2></button>";
    } elseif ($_SESSION["IPA"]) {
        echo "<button class='btn-icon'><img class='icon' src='../img/ipa.png'><h2>IPA</h2></button>";
    } elseif ($_SESSION["Matematika"]) {
        echo "<button class='btn-icon'><img class='icon' src='../img/matematika.png'><h2>Matematika</h2></button>";
    } elseif ($_SESSION["IPS"]) {
        echo "<button class='btn-icon'><img class='icon' src='../img/ips.png'><h2>IPS</h2></button>";
    } elseif ($_SESSION["BahasaIndonesia"]) {
        echo "<button class='btn-icon'><img class='icon' src='../img/bahasa-indo.png'><h2>Bahasa Indonesia</h2></button>";
    }
    ?>
    <div class="buku-section">
        <form action="" method="post">
        <ul class="baris-1">
            <li class="buku-kelas1">
                <button name="Kelas-1" value="Kelas-1">
                    <img src="../img/open-book.png" class="img-buku">
                </button>Kelas 1
            </li>
            <li class="buku-kelas1">
                <button name="Kelas-2" value="Kelas-2">
                    <img src="../img/open-book.png" class="img-buku">
                </button>Kelas 2
            </li>
            <li class="buku-kelas2">
                <button name="Kelas-3" value="Kelas-3">
                    <img src="../img/open-book.png" class="img-buku">
                </button>Kelas 3
            </li>
            <li class="buku-kelas3"><button name="Kelas-3"><img src="../img/open-book.png" class="img-buku"></button>Kelas 3</li>
        </ul>
        <ul class="baris-2">
            <li class="buku-kelas4"><button name="Kelas-4" href=""><img src="../img/open-book.png" class="img-buku"></button>Kelas 4</li>
            <li class="buku-kelas5"><button name="Kelas-5" href=""><img src="../img/open-book.png" class="img-buku"></button>Kelas 5</li>
            <li class="buku-kelas6"><button name="Kelas-6" href=""><img src="../img/open-book.png" class="img-buku"></button>Kelas 6</li>
        </ul>
        </form>
    </div>
    <footer>&copy; PERPOOS 2021</footer>
</div>

</body>
</html>