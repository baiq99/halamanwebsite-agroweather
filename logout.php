<?php
// Memulai session
session_start();

// Menghapus semua data session
session_unset();

// Menghancurkan session
session_destroy();

// Redirect ke halaman login atau halaman lain yang diinginkan setelah logout
header("Location: index.php"); // Ganti dengan halaman tujuan setelah logout
exit();
?>