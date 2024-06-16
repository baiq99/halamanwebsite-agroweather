<?php
session_start();
error_reporting(0); 
include("db.php");

$Bulan                  = $_POST["Bulan"];
$Temperatur_Minimal     = $_POST["Temperatur_Minimal"];
$Temperatur_Maximal     = $_POST["Temperatur_Maximal"];
$Curah_Hujan            = $_POST["Curah_Hujan"];
$Lama_Sinar_Matahari    = $_POST["Lama_Sinar_Matahari"];

//inisialisasi data dan kosongkan tabel hitung
$Tanaman = "";
mysqli_query($conn, "truncate table hitung");
mysqli_query($conn, "truncate table hitung2");

//hitung jarak KNN
$Nilai = 0;
$a = mysqli_query($conn, "select * from cuaca");
while($ra = mysqli_fetch_array($a)){
$Nilai = sqrt(pow(($ra["Temperatur_Minimal"] - $Temperatur_Minimal),2) + pow(($ra["Temperatur_Maximal"] - $Temperatur_Maximal),2) + pow(($ra["Curah_Hujan"] - $Curah_Hujan),2) + pow(($ra["Lama_Sinar_Matahari"] - $Lama_Sinar_Matahari),2));

//isi ke tabel hitung
mysqli_query($conn, "insert into hitung values (". $ra["Kode"] .",$Nilai,'". $ra["Tanaman"] ."')");
}

//ambil 5 data dengan jarak terdekat ke jarak terjauh
$b = mysqli_query($conn, "select * from hitung order by Value asc limit 5");
while($rb = mysqli_fetch_array($b)){
mysqli_query($conn, "insert into hitung2 values (". $rb["Kode"] .",". $rb["Value"] .",'". $rb["Tanaman"] ."')");
}

//tentukan tanaman yang paling sering muncul di 5 data terdekat
$c = mysqli_query($conn, "select Tanaman,COUNT(Tanaman) AS Tanamanfreq from hitung2 group by Tanaman order by Tanamanfreq DESC limit 1");
while($rc = mysqli_fetch_array($c)){
    $Tanaman = $rc["Tanaman"];
}

//dapatkan prediksi bulan berikutnya
$h = mysqli_query($conn, "select * from cuaca where Tanaman = '$Tanaman' limit 1");
while($r = mysqli_fetch_array($h)){
  $NextTemperatur_Minimal   = $r["Temperatur_Minimal"];
  $NextTemperatur_Maximal   = $r["Temperatur_Maximal"];
  $NextCurah_Hujan          = $r["Curah_Hujan"];
  $NextLama_Sinar_Matahari  = $r["Lama_Sinar_Matahari"];
  $NextMusim                = $r["Musim"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prediction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="style-pediction.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.card').hover(
                function() {
                    $(this).addClass('animate__animated animate__pulse');
                },
                function() {
                    $(this).removeClass('animate__animated animate__pulse');
                }
            );
        });
    </script>
</head>
<body>

<?php include("header.php"); ?>

<div class="container-fluid">
    <div class="row login-container">
        <div class="col-md-6 login-form">
            <br><br><br>
            <form action="prediction.php" method="POST">
                <div class="form-group-left">
                    <input type="text" class="form-control" value="Kabupaten Bandung" style="color:#3498db; font-size: 14px;" readonly>
                </div>

                <div class="form-group-right">
                    <select class="form-control" name="Bulan" style="color:#3498db; font-size: 14px;">
                        <option value='Januari'>Januari</option>
                        <option value='Februari'>Februari</option>
                        <option value='Maret'>Maret</option>
                        <option value='April'>April</option>
                        <option value='Mei'>Mei</option>
                        <option value='Juni'>Juni</option>
                        <option value='Juli'>Juli</option>
                        <option value='Agustus'>Agustus</option>
                        <option value='September'>September</option>
                        <option value='Oktober'>Oktober</option>
                        <option value='November'>November</option>
                        <option value='Desember'>Desember</option>
                    </select>
                </div>
                <br>
                <br>
                
                <div class="form-group-left">
                    <label for="Temperatur_Minimal" style="font-size: 14px;">Temperatur Minimal (°C)</label>
                    <input type="text" class="form-control" id="Temperatur_Minimal" name="Temperatur_Minimal" style="color:#3498db">
                </div>

                <div class="form-group-right">
                    <label for="Curah_Hujan" style="font-size: 14px;">Curah Hujan (mm/bulan)</label>
                    <input type="text" class="form-control" id="Curah_Hujan" name="Curah_Hujan" style="color:#3498db">
                </div>
                <div class="form-group-left">
                    <label for="Temperatur_Maksimal" style="font-size: 14px;">Temperatur Maksimal (°C)</label>
                    <input type="text" class="form-control" id="Temperatur_Maksimal" name="Temperatur_Maksimal" style="color:#3498db">
                </div>
                <div class="form-group-right">
                    <label for="Lama_Sinar_Matahari" style="font-size: 14px;">Lama Sinar Matahari (jam/hari)</label>
                    <input type="text" class="form-control" id="Lama_Sinar_Matahari" name="Lama_Sinar_Matahari" style="color:#3498db">
                </div>

                <br> 
                <div align="center" style="margin-top: 40px;">
                    <button type="button" class="btn btn-primary btn-login" id="btn-prediksi">Prediksi</button>
                </div>

            </form>
        </div>
        <div class="col-md-6 login-image">
            <br><br><br>
            <div align="center"><font face=verdana size=5 color=#8ecae6><b>Prediksi Cuaca Bulan Berikutnya</b></font></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card shadow bg-color-1">
                            <div class="card-body">
                                <table width=100%>
                                    <tr>
                                        <td width=40% align="center">
                                            <img src='<?php if($NextMusim == "Hujan") { echo "img/musim_hujan.png"; } else { echo "img/musim_kemarau.png"; } ?>' width="200" height="200">
                                        </td>
                                        <td>

                                            <p><font face=verdana size=3 color=white>Temperatur Minimal: <?php echo $NextTemperatur_Minimal; ?><sup>o</sup>C</font></p>
                                            <p><font face=verdana size=3 color=white>Temperatur Maximal: <?php echo $NextTemperatur_Maximal; ?><sup>o</sup>C</font></p>
                                            <p><font face=verdana size=3 color=white>Curah Hujan: <?php echo $NextCurah_Hujan; ?> mm</font></p>
                                            <p><font face=verdana size=3 color=white>Lama Sinar Matahari: <?php echo $NextLama_Sinar_Matahari; ?> Jam</font></p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div align="center">
                <a href=result.php?Tanaman=<?php echo $Tanaman; ?>&Bulan=<?php echo $Bulan; ?>>
                    <button class="btn btn-primary btn-login btn-prediksi">Lihat Rekomendasi Tanaman</button>
                </a>

            </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('btn-prediksi').addEventListener('click', function() {
        // Ambil semua input form
        var bulan = document.querySelector('[name="Bulan"]').value;
        var tempMin = document.getElementById('Temperatur_Minimal').value;
        var tempMax = document.getElementById('Temperatur_Maksimal').value;
        var curahHujan = document.getElementById('Curah_Hujan').value;
        var sinarMatahari = document.getElementById('Lama_Sinar_Matahari').value;

        // Cek apakah semua field telah diisi
        if (!bulan || !tempMin || !tempMax || !curahHujan || !sinarMatahari) {
            alert('Harap isi semua informasi cuaca sebelum melakukan prediksi.');
        } else {
            // Jika semua field sudah diisi, submit form
            document.querySelector('form').submit();
        }
    });
</script>

</body>
</html>

