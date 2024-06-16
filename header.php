<!-- Header -->
<header class="text-left" style="display: flex; align-items: center;">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <font face="verdana" size="5" color="#FFFFFF"><b>Agro Weather</b></font>
</header>

<!-- Menu Utama -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a href="prediction.php" style="text-decoration: none; color: white">Prediksi</a>
          &nbsp;&nbsp;&nbsp;
          <?php 
          if ($_SESSION["Email"] == "admin"){
              echo "<a href='listcuaca.php' style='text-decoration: none; color: white'>Cuaca</a>";
              echo "&nbsp;&nbsp;&nbsp;";
              echo "<a href='listuser.php' style='text-decoration: none; color: white'>User</a>";
              echo "&nbsp;&nbsp;&nbsp;";
          }
          ?>
          <a href="logout.php" style="text-decoration: none; color: white">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

