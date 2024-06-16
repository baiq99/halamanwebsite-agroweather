<?php
include("db.php"); // Sertakan file koneksi database

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];

    // Enkripsi password menggunakan MD5 (disarankan untuk menggunakan enkripsi yang lebih kuat seperti bcrypt)
    $encryptedPassword = md5($Password);

    // Query untuk menyimpan data pendaftaran ke tabel user
    $query = "INSERT INTO user (Email, Password) VALUES ('$Email', '$encryptedPassword')";

    if ($conn->query($query) === TRUE) {
        $message = "Pendaftaran berhasil. Silakan <a href='index.php'>masuk</a>.";
    } else {
        $message = "Error: " . $query . "<br>" . $conn->error;
    }
    
    // Tutup koneksi ke database
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Sign Up</h2>
        <?php echo $message; ?>
        <form action="" method="POST">
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" class="form-control" name="Email" required>
            </div>
            <div class="form-group">
                <label for="Password">Password:</label>
                <input type="password" class="form-control" name="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>
</body>
</html>
