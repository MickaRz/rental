<?php

include '../asset/header.php';

include '../koneksi.php';

$id_pinjam = $_GET['id_pinjam'];
$id_game = $_GET['id_game'];

$sql = "SELECT judul FROM game WHERE id_game = $id_game";
$res = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_assoc($res);


?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Form Pengembalian</h5>
                <div class="card-body">
                    <form method="post" action="proses-kembali.php">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input class="form-control" type="text" disabled value="<?= $data['judul'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="tgl_kembali">Tanggal Kembali</label>
                            <input type="date" class="form-control" name="tgl_kembali">
                        </div>
                        <input type="hidden" name="id_pinjam" value="<?= $id_pinjam ?>">
                        <input type="hidden" name="id_buku" value="<?= $id_game ?>">
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include '../asset/footer.php';

?>
