<?php

//include koneksi database
include('db.php');

//get data dari form
$Kode     	= $_POST['Kode'];
$Bulan     	= $_POST['Bulan'];
$Tahun     	= $_POST['Tahun'];
$Temperatur_Minimal     	= $_POST['Temperatur_Minimal'];
$Temperatur_Maximal     	= $_POST['Temperatur_Maximal'];
$Curah_Hujan     	= $_POST['Curah_Hujan'];
$Lama_Sinar_Matahari     	= $_POST['Lama_Sinar_Matahari'];
$Musim     	= $_POST['Musim'];
$Tanaman     	= $_POST['Tanaman'];
$Foto     	= $_POST['Foto'];
$Keterangan     	= $_POST['Keterangan'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE cuaca SET Bulan = '$Bulan', Tahun = '$Tahun', Temperatur_Minimal = $Temperatur_Minimal, Temperatur_Maximal = $Temperatur_Maximal, Curah_Hujan = $Curah_Hujan, Lama_Sinar_Matahari = $Lama_Sinar_Matahari, Musim = '$Musim', Tanaman = '$Tanaman', Foto = '$Foto', Keterangan = '$Keterangan' WHERE Kode = '$Kode'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($conn->query($query)) {
    //redirect ke halaman index.php 
    header("location: listcuaca.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>