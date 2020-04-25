<?php
include '../koneksi.php';

$sql = ("SELECT * FROM game ORDER BY judul");

$res = mysqli_query($koneksi, $sql);

$game = array();

while ($data = mysqli_fetch_assoc($res)) {
    $game[] = $data;
}

include '../asset/header.php';
?>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<div class="card" style="background-color: #FD7272">
				<!-- <div class="card-header"> -->
    <center><h2 class="card-title" style="color: white;"><i class="fas fa-gamepad"></i> Data Game</h2></center>
  </div>
  <div class="card-body">
    	<table class="table table-dark">


    <thead class="thead-dark">
      <a href="tambah.php" class="badge badge-danger">Tambah Data</a>
       <tr>
       <th scope="col">NO</th>
       <th scope="col">Nama Game</th>
       <th scope="col">STOK</th>
       <th scope="col">#</th>
       </tr>
       <?php


        ?>
<tbody>
  <?php
    $no = 1;
    foreach($game as $p ) { ?>

    <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $p['judul'] ?></th>
        <td><?= $p['stok'] ?></th>
          <td>
            <a href="detail.php?id_game=<?= $p['id_game'] ?>" class="badge badge-success">Detail</a>
          </td>
    </tr>

<?php
    $no++;
}
?>

</tbody>
</table>
  </div>
</div>

<?php
include '../asset/footer.php';
?>
