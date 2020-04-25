<?php
include '../asset/header.php';
include '../koneksi.php';

$id_game = $_GET['id_game'];

$query = mysqli_query($koneksi, "SELECT * FROM game where id_game=$id_game");
$game = mysqli_fetch_assoc($query);
?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<div class="card" style="background-color: #FD7272">
				<!-- <div class="card-header"> -->
    <center><h2 class="card-title" style="color: white;"><i class="fas fa-gamepad"></i> Data Game</h2></center>
  </div>
  <div class="card-body">
    <table class="table table-hover">
                  <tr>
                        <td><strong>Cover</strong></td>
                        <td><img width="250" src="img/<?php echo $game['cover'] ?>"></td>
                  </tr>
                  <tr>
                        <td><strong>Judul</strong></td>
                        <td><?php echo $game['judul'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>stok</strong></td>
                        <td><?php echo $game['stok'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>Kategori</strong></td>
                        <td><?php echo $game['id_kategori'] ?></td>
                  </tr>

                </table>
        </div>
    </div>


<?php
include '../asset/footer.php';
?>
