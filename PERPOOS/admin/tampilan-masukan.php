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
    <link href="../css/halaman-masukan.css" rel="stylesheet">
    <title>PERPOOS - Masukan User</title>
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
    <?php
    include '../phpScript/config.php';
    global $conn;
    $query = "SELECT * FROM masukan";
    $result = mysqli_query($conn, $query);
    ?>
    <table border="2"cellpadding="10" cellspacing="0">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Saran</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
                          <td>'.$row['NIS'].'</td>
                          <td>'.$row['NamaLengkap'].'</td>
                          <td>'.$row['text_masukan'].'</td>
                      </tr>';
            }
        } else {
            echo '0 Result';
        }
        ?>
    </table>
</div>
</body>
</html>


