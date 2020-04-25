<?php
include '../asset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  <h2>Tambah Data Anggota</h2>
                </div>
                <div class="card-body">
                  <form method="post" action="proses-tambah.php">
                <div class="form-group">
                  <label for="anggota">nama</label>
                  <input type="text" class="form-control" name="nama" id="anggota" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                  <label for="telp">telp</label>
                  <input type="text" class="form-control" name="telp" id="telp" placeholder="Masukkan telp">
                  <small class="form-text text-muted">Contoh: 1/2/3</small>
                </div>
                <div class="form-group">
                  <label for="username">username</label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username">
                </div>
                <div class="form-group">
                  <label for="password">password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password">
                </div>
                <div class="form-group">
                 <label for="stok">Level</label>
                 <select class="form-control" name="id_level" style="width : 50">
                   <option value="">---pilih Level---</option>
                   <option value="1">Admin</option>
                    <option value="2">Operator</option>
                    <option value="3">User</option>
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
