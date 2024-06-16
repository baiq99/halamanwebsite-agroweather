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

//query insert data ke dalam database
$query = "INSERT INTO cuaca (Kode, Bulan, Tahun, Temperatur_Minimal, Temperatur_Maximal, Curah_Hujan, Lama_Sinar_Matahari, Musim, Tanaman, Foto, Keterangan) VALUES ($Kode, '$Bulan', '$Tahun', '$Temperatur_Minimal', '$Temperatur_Maximal', '$Curah_Hujan', '$Lama_Sinar_Matahari', '$Musim', '$Tanaman', '$Foto', '$Keterangan')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {

    //redirect ke halaman index.php 
    header("location: listcuaca.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>