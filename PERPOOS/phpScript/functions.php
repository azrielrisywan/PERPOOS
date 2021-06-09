<?php
    require 'config.php';
    function signup_siswa($data) {
        global $conn;

        $nama = mysqli_real_escape_string($conn, $data["nama-lengkap"]);
        $NIS = $data["NIS"];
        $pass = mysqli_real_escape_string($conn, $data['pass']);
        $pass2 = mysqli_real_escape_string($conn, $data['pass2']);

        // cek password
        if ($pass !== $pass2) {
            echo "<script>alert('Konfirmasi password tidak sesuai')</script>";
            return false;
        }

        // cek NIS sudah terdaftar atau belum
        $result = mysqli_query($conn, "SELECT NIS FROM murid WHERE NIS = '$NIS'");

        if (mysqli_fetch_assoc($result)) {
            echo "<script>alert('NIS sudah terdaftar!')</script>";
            return false;
        }

        // enkripsi password
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        // masukkan data
        mysqli_query($conn, "INSERT INTO murid(id, NIS, NamaLengkap, Password) VALUES(null, '$NIS', '$nama', '$pass')");
        return mysqli_affected_rows($conn);
    }
    function signup_admin($data) {
        global $conn;

        $nama = $data["nama-lengkap"];
        $Username = $data["username"];
        $pass = mysqli_real_escape_string($conn, $data['pass']);
        $pass2 = mysqli_real_escape_string($conn, $data['pass2']);

        // cek password
        if ($pass !== $pass2) {
            echo "<script>alert('Konfirmasi password tidak sesuai')</script>";
            return false;
        }

        // cek username di database
        $result = mysqli_query($conn, "SELECT Username FROM guru WHERE Username = '$Username'");

        if (mysqli_fetch_assoc($result)) {
            echo "<script>alert('Username sudah terdaftar!')</script>";
            return false;
        }
        // enkripsi password
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        // masukkan data
        mysqli_query($conn, "INSERT INTO guru(NamaLengkap, Username, Password) VALUES ('$nama', '$Username', '$pass')");
        return mysqli_affected_rows($conn);
    }
?>
