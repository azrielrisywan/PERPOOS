<?php
include '../phpScript/config.php';
global $conn;
if (isset($_POST["Upload"])) {
    //pengecekan tipe harus pdf
    $tipe_file = $_FILES['file']['type']; //mendapatkan mime type
    if ($tipe_file == "application/pdf") //mengecek apakah file tersebu pdf atau bukan
    {
        $judul = trim($_POST['judul']);
        $nama_file = trim($_FILES['file']['name']);
        $kategori = $_POST['kategori'];
        $kelas = $_POST['kelas'];

        $sql = "INSERT INTO buku (JudulBuku) VALUES ('$judul')";
        mysqli_query($conn, $sql); //simpan data judul dahulu untuk mendapatkan id

        //dapatkan id terkahir
        $query = mysqli_query($conn, "SELECT idBuku FROM buku ORDER BY idBuku DESC LIMIT 1");
        $result = mysqli_fetch_assoc($query);
        $id = $result["idBuku"];

        //mengganti nama pdf
        $nama_baru = "$kategori". "-" . "$kelas" . "_" . "$id". ".pdf"; //hasil contoh: file_1.pdf
        $file_temp = $_FILES['file']['tmp_name']; //data temp yang di upload
        $folder = "book"; //folder tujuan

        move_uploaded_file($file_temp, "../$folder/$nama_baru"); //fungsi upload
        //update nama file di database
        mysqli_query($conn, "UPDATE buku 
                                   SET nama_file='$nama_baru', Kategori='$kategori', kelas_buku='$kelas' 
                                   WHERE idBuku='$id'");

        echo "<script>alert('Upload Berhasil!');document.location='../admin/halaman-utama-admin.php'</script>";

    } else {
        echo "<script>alert('Gagal upload!');document.location='../admin/halaman-upload.php'</script>";
    }
}
?>
