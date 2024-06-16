<?php

include('db.php');

//get id
$Kode = $_GET['Kode'];

$query = "DELETE FROM cuaca WHERE Kode = '$Kode'";

if($conn->query($query)) {
    header("location: listcuaca.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>