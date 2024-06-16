<?php

//include koneksi database
include('db.php');

//get data dari form
$Email           = $_POST['Email'];
$Password = $_POST['Password'];
$Active       = $_POST['Active'];

$encryptedPassword = md5($Password);

//query insert data ke dalam database
$query = "INSERT INTO user (Email, Password, Active) VALUES ('$Email', '$encryptedPassword', '$Active')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {

    //redirect ke halaman index.php 
    header("location: listuser.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>