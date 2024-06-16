<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Cuaca</title>
  </head>

  <body>
    <?php include("header.php"); ?>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH CUACA
            </div>
            <div class="card-body">
              <form action="simpan-cuaca.php" method="POST">
                
                <div class="form-group">
                  <label>KODE</label>
                  <input type="text" name="Kode" placeholder="Masukkan Kode Cuaca" class="form-control">
                </div>

                <div class="form-group">
                  <label>BULAN</label>
                  <input type="text" name="Bulan" placeholder="Masukkan Bulan Cuaca" class="form-control">
                </div>

                <div class="form-group">
                  <label>TAHUN</label>
                  <input type="text" name="Tahun" placeholder="Masukkan Tahun Cuaca" class="form-control">
                </div>

                <div class="form-group">
                  <label>TEMPERATUR MINIMAL</label>
                  <input type="text" name="Temperatur_Minimal" placeholder="Masukkan Temperatur Minimal Cuaca" class="form-control">
                </div>

                <div class="form-group">
                  <label>TEMPERATUR MAXIMAL</label>
                  <input type="text" name="Temperatur_Maximal" placeholder="Masukkan Temperatur Maximal Cuaca" class="form-control">
                </div>

                <div class="form-group">
                  <label>CURAH HUJAN</label>
                  <input type="text" name="Curah_Hujan" placeholder="Masukkan Curah Hujan Cuaca" class="form-control">
                </div>

                <div class="form-group">
                  <label>LAMA SINAR MATAHARI</label>
                  <input type="text" name="Lama_Sinar_Matahari" placeholder="Masukkan Lama Sinar Matahari Cuaca" class="form-control">
                </div>

                <div class="form-group">
                  <label>MUSIM</label>
                  <input type="text" name="Musim" placeholder="Masukkan Musim Cuaca" class="form-control">
                </div>

                <div class="form-group">
                  <label>TANAMAN</label>
                  <input type="text" name="Tanaman" placeholder="Masukkan Tanaman Cuaca" class="form-control">
                </div>

                <div class="form-group">
                  <label>FOTO</label>
                  <input type="text" name="Foto" placeholder="Masukkan Foto Cuaca" class="form-control">
                </div>


                <div class="form-group">
                  <label>KETERANGAN</label>
                  <textarea class="form-control" name="Keterangan" placeholder="Masukkan Keterangan Cuaca"></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
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