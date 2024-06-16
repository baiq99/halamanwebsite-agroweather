<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form login
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];

    // Enkripsi password menggunakan MD5
    $encryptedPassword = md5($Password);

    // Query untuk memeriksa apakah data sesuai dengan data di tabel user
    $query = "SELECT * FROM user WHERE Email = '$Email' AND Password = '$encryptedPassword'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Jika data ditemukan, autentikasi berhasil
        // Misalnya, redirect ke halaman dashboard
        $_SESSION["Email"] = $Email;
        header("Location: prediction.php");
        exit();
    } else {
        // Jika data tidak ditemukan, kembalikan ke halaman login dengan pesan error
        header("Location: index.php?error=1");
        exit();
    }
}
?>
