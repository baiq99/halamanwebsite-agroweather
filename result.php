<?php 
session_start();
error_reporting(0); 

include("db.php");

$Tanaman  = $_GET["Tanaman"];
$Bulan    = $_GET["Bulan"];

$h = mysqli_query($conn, "select * from cuaca where Tanaman = '$Tanaman' limit 1");
while($r = mysqli_fetch_array($h)){
  $Curah_Hujan = $r["Curah_Hujan"];
  $Musim = $r["Musim"];
  $Foto = "img/" . $r["Foto"];
  $Keterangan = $r["Keterangan"];
}

if($Bulan == "Januari")   { $bulanBerikutnya = "Februari"; }
if($Bulan == "Februari")  { $bulanBerikutnya = "Maret"; }
if($Bulan == "Maret")     { $bulanBerikutnya = "April"; }
if($Bulan == "April")     { $bulanBerikutnya = "Mei"; }
if($Bulan == "Mei")       { $bulanBerikutnya = "Juni"; }
if($Bulan == "Juni")      { $bulanBerikutnya = "Juli"; }
if($Bulan == "Juli")      { $bulanBerikutnya = "Agustus"; }
if($Bulan == "Agustus")   { $bulanBerikutnya = "September"; }
if($Bulan == "September") { $bulanBerikutnya = "Oktober"; }
if($Bulan == "Oktober")   { $bulanBerikutnya = "November"; }
if($Bulan == "November")  { $bulanBerikutnya = "Desember"; }
if($Bulan == "Desember")  { $bulanBerikutnya = "Januari"; }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Result</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="style-result.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

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

<div class="container mt-4">
</div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-4">
        <div class="card shadow bg-color-1">
          <div class="card-body">
            <table width=100%>
        		<tr>
                    <td colspan="4" align="left"><font face=verdana size=5 color=gold><b>Hasil Prediksi Bulan <?php echo $bulanBerikutnya; ?></b></font></td>
                </tr>
        		<tr>
        			<td align="left">
                        <font face=verdana size=3 color=white>Lokasi</font><br>
                        <input type="text" class="form-control" style="color:#3498db" value="Kabupaten Bandung" readonly>
                    </td>
                    <td align="left">
                        <font face=verdana size=3 color=white>Musim</font><br>
                        <input type="text" class="form-control" id="Musim" name="Musim" value='<?php echo $Musim; ?>' style="color:#3498db">
                    </td>
                    <td>&nbsp;</td>
                    <td align="left">
                        <font face=verdana size=3 color=white>Curah Hujan</font>
                        <input type="text" class="form-control" id="Curah_Hujan" name="Curah_Hujan" value='<?php echo $Curah_Hujan; ?>' style="color:#3498db">
                    </td>
        			<td align="center">
                      <img src='<?php echo $Foto; ?>' width="150" height="150"> <!-- Menambahkan prefiks img/ ke Foto -->
                    </td>
        		</tr>
        	</table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-4">
        <div class="card shadow bg-color-2">
          <div class="card-body">
            <table width=100%>
        		<tr>
        			<td align="center"><font face="verdana" size="3" color="white"><b>Rekomendasi Tanaman Yang Cocok Sesuai Musim</b></font></td>
        		</tr>
            <tr>
              <td>
                &nbsp;
              </td>
            </tr>
        		<tr>
                    <td align="center">
                        <img class="custom-image" src='<?php echo $Foto; ?>'> 
                    </td>
                </tr>

            <tr>
              <td>
                &nbsp;
              </td>
            </tr>
        		<tr>
        			<td align="center"><button type="submit" class="btn btn-primary btn-login"><?php echo $Tanaman; ?></button></td>
        		</tr>
            <tr>
              <td>
                &nbsp;
              </td>
            </tr>
            <tr>
              <td align="center">
                <table width="400">
                  <tr>
                    <td style="text-align: center;">
                        <span class="keterangan-text"><?php echo $Keterangan; ?></span>
                    </td>
            </tr>
          </table>
              </td>
            </tr>
        	</table>
          </div>
        </div>
      </div>
    </div>
  </div>

<footer class="bg-dark text-white text-center p-3">
    <p>&copy; <?php echo date('Y'); ?> Agro Weather</p>
    <p>Email: <a href="mailto:baiqusbypkp@gmail.com">baiqusbypkp@gmail.com</a></p>
</footer>

</body>
</html>
