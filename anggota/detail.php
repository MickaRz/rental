<?php
include '../asset/header.php';
include '../koneksi.php';

$id_anggota = $_GET['id_anggota'];

$query = mysqli_query($koneksi, "SELECT * FROM anggota where id_anggota=$id_anggota");
$anggota = mysqli_fetch_assoc($query);
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>
    </div>
</div>
<div class="card">
  <div class="card-header">
    <center><h2 class="card-title"> <i class="fas fa-book"></i> </i>Detail Data Anggota</h2></center>
  </div>
  <div class="card-body">
    <table class="table table-hover">
                  <tr>
                        <td><strong>Nama</strong></td>
                        <td><?php echo $anggota['nama'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>Kelas</strong></td>
                        <td><?php echo $anggota['kelas'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>Telefon</strong></td>
                        <td><?php echo $anggota['telp'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>Username</strong></td>
                        <td><?php echo $anggota['username'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>Password</strong></td>
                        <td><?php echo $anggota['password'] ?></td>
                  </tr>
                  <tr>
                        <td><strong>Level</strong></td>
                        <td><?php echo $anggota['id_level'] ?></td>
                  </tr>

                </table>
        </div>
    </div>


<?php
include '../asset/footer.php';
?>
