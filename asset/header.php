<?php
session_start();

if(!(isset($_SESSION['id_petugas'])))
{
    header("Location: http://localhost/rental/login/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rental Game</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="http://localhost/rental/asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/rental/asset/fontawesome/css/all.min.css">

</head>
<body>
  <nav class="navbar navbar-expand navbar-fixed-top">
      <h2 style="color : white;">Dunia Game</h2>
    <style type="text/css">
      .navbar-expand{
        background-color: crimson;
       }
    </style>

</nav>

  <nav class="navbar navbar-expand-lg navbar navbar-fixed-top">
  <style type="text/css">
    .navbar-expand-lg{
      background-color:  #ff793f;
     }
  </style>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="badge badge-warning" href="http://localhost/rental/index.php">Dashboard</a>
        <a class="badge badge-warning" href="http://localhost/rental/game/index.php">Game</a>
        <a class="badge badge-warning" href="http://localhost/rental/anggota/index.php">Anggota</a>
        <a class="badge badge-warning" href="http://localhost/rental/transaksi/index.php">Transaksi</a>
        <a class="badge badge-warning" href="http://localhost/rental/login/logout.php">Logout</a>
        </div>
    </div>

</nav>

   <script src="http://localhost/siperpus/aset/jquery.js"></script>
   <script src="http://localhost/siperpus/aset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
