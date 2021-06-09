<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();
$_SESSION["login"] = false;

header("Location: ../siswa/LoginSiswa.php");
exit;
