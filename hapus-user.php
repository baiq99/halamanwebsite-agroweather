<?php

include('db.php');

//get id
$Email = $_GET['Email'];

$query = "DELETE FROM user WHERE Email = '$Email'";

if($conn->query($query)) {
    header("location: listuser.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>