<?php
include '../koneksi.php';
include '../asset/header.php';

$query = mysqli_query($koneksi, "SELECT * FROM kategori");
$kategori = mysqli_fetch_assoc($query);

?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  <h2>Tambah Data Game</h2>
                </div>
                <div class="card-body">
                  <form method="post" action="proses-tambah.php">
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">
                </div>
                <div class="form-group">
                  <label for="stok">cover</label>
                  <input type="file" class="form-control" name="cover" id="cover" placeholder="Masukkan cover">
                  <small class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="stok">Stok</label>
                  <input type="number" class="form-control" name="stok" id="stok" placeholder="Masukkan Stok">
                  <small class="form-text text-muted"></small>
                </div>
                 <div class="form-group">
                  <label for="stok">Kategori</label>
                  <select class="form-control" name="id_kategori" style="width : 50">
                    <option value="">---pilih kategori---</option>
                    <option value="3">Sport</option>
                     <option value="4">Battle Royal</option>
                     <option value="5">Racing</option>
                  </select>
                </div>


                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../asset/footer.php';
?>
