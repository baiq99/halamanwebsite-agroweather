<?php

//include koneksi database
include('db.php');

//get data dari form
$Email     	= $_POST['Email'];
$Password	= $_POST['Password'];
$Active 	= $_POST['Active'];

$encryptedPassword = md5($Password);

//query update data ke dalam database berdasarkan ID
$query = "UPDATE user SET Email = '$Email', Password = '$encryptedPassword', Active = '$Active' WHERE Email = '$Email'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($conn->query($query)) {
    //redirect ke halaman index.php 
    header("location: listuser.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>