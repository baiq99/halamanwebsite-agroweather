<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Cuaca</title>
  </head>

  <body>
  <?php include("header.php"); ?>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA CUACA
            </div>
            <div class="card-body">
              <a href="tambah-cuaca.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">KODE</th>
                    <th scope="col">BULAN</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col">TEMP MIN</th>
                    <th scope="col">TEMP MAX</th>
                    <th scope="col">CURAH HUJAN</th>
                    <th scope="col">LAMA SINAR MATAHARI</th>
                    <th scope="col">MUSIM</th>
                    <th scope="col">TANAMAN</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('db.php');
                      $no = 1;
                      $query = mysqli_query($conn, "SELECT * FROM cuaca order by Kode Asc");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $row['Kode'] ?></td>
                      <td><?php echo $row['Bulan'] ?></td>
                      <td><?php echo $row['Tahun'] ?></td>
                      <td><?php echo $row['Temperatur_Minimal'] ?></td>
                      <td><?php echo $row['Temperatur_Maximal'] ?></td>
                      <td><?php echo $row['Curah_Hujan'] ?></td>
                      <td><?php echo $row['Lama_Sinar_Matahari'] ?></td>
                      <td><?php echo $row['Musim'] ?></td>
                      <td><?php echo $row['Tanaman'] ?></td>
                      <td><img src="img/<?php echo $row['Foto'] ?>" alt="Foto Cuaca" width="100"></td>

                      <td class="text-center">
                        <a href="edit-cuaca.php?Kode=<?php echo $row['Kode'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-cuaca.php?Kode=<?php echo $row['Kode'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>
