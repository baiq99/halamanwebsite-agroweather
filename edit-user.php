<?php 
  session_start();
  include('db.php');
  
  $Email = $_GET['Email'];
  
  $query = "SELECT * FROM user WHERE Email = '$Email' LIMIT 1";

  $result = mysqli_query($conn, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit User</title>
  </head>

  <body>
    <?php include("header.php"); ?>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT USER
            </div>
            <div class="card-body">
              <form action="update-user.php" method="POST">
                
                <div class="form-group">
                  <label>E-MAIL</label>
                  <input type="text" name="Email" value="<?php echo $row['Email'] ?>" placeholder="Masukkan Email User" class="form-control">
                </div>

                <div class="form-group">
                  <label>PASSWORD</label>
                  <input type="text" name="Password" value="<?php echo $row['Password'] ?>" placeholder="Masukkan Password User" class="form-control">
                </div>

                <div class="form-group">
                  <label>ACTIVE</label>
                  <input type="text" name="Active" value="<?php echo $row['Active'] ?>" placeholder="Masukkan Active User" class="form-control">
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