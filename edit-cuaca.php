<?php 
  session_start();
  include('db.php');
  
  $Kode = $_GET['Kode'];
  
  $query = "SELECT * FROM cuaca WHERE Kode = '$Kode' LIMIT 1";

  $result = mysqli_query($conn, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Cuaca</title>
  </head>

  <body>
    <?php include("header.php"); ?>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT CUACA
            </div>
            <div class="card-body">
              <form action="update-cuaca.php" method="POST">
                
                <div class="form-group">
                  <label>KODE</label>
                  <input type="text" name="Kode" value="<?php echo $row['Kode'] ?>" placeholder="Masukkan Kode" class="form-control">
                </div>
                <div class="form-group">
                  <label>BULAN</label>
                  <input type="text" name="Bulan" value="<?php echo $row['Bulan'] ?>" placeholder="Masukkan Bulan" class="form-control">
                </div>
                <div class="form-group">
                  <label>TAHUN</label>
                  <input type="text" name="Tahun" value="<?php echo $row['Tahun'] ?>" placeholder="Masukkan Tahun" class="form-control">
                </div>
                <div class="form-group">
                  <label>TEMPERATUR MINIMAL</label>
                  <input type="text" name="Temperatur_Minimal" value="<?php echo $row['Temperatur_Minimal'] ?>" placeholder="Masukkan Temperatur_Minimal" class="form-control">
                </div>
                <div class="form-group">
                  <label>TEMPERATUR MAXIMAL</label>
                  <input type="text" name="Temperatur_Maximal" value="<?php echo $row['Temperatur_Maximal'] ?>" placeholder="Masukkan Temperatur_Maximal" class="form-control">
                </div>
                <div class="form-group">
                  <label>CURAH HUJAN</label>
                  <input type="text" name="Curah_Hujan" value="<?php echo $row['Curah_Hujan'] ?>" placeholder="Masukkan Curah_Hujan" class="form-control">
                </div>
                <div class="form-group">
                  <label>LAMA SINAR MATAHARI</label>
                  <input type="text" name="Lama_Sinar_Matahari" value="<?php echo $row['Lama_Sinar_Matahari'] ?>" placeholder="Masukkan Lama_Sinar_Matahari" class="form-control">
                </div>
                <div class="form-group">
                  <label>MUSIM</label>
                  <input type="text" name="Musim" value="<?php echo $row['Musim'] ?>" placeholder="Masukkan Musim" class="form-control">
                </div>
                <div class="form-group">
                  <label>TANAMAN</label>
                  <input type="text" name="Tanaman" value="<?php echo $row['Tanaman'] ?>" placeholder="Masukkan Tanaman" class="form-control">
                </div>
                <div class="form-group">
                  <label>FOTO</label>
                  <input type="text" name="Foto" value="<?php echo $row['Foto'] ?>" placeholder="Masukkan Foto" class="form-control">
                </div>
                <div class="form-group">
                  <label>KETERANGAN tes</label>
                  <textarea class="form-control" name="Keterangan" placeholder="Masukkan Keterangan Cuaca"><?php echo $row['Keterangan'] ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>