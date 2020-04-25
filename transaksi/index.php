<?php
include '../koneksi.php';

$sql = "SELECT * FROM peminjaman INNER JOIN anggota on peminjaman.id_anggota = anggota.id_anggota
        INNER JOIN detail_peminjaman USING(id_pinjam)
        INNER JOIN petugas ON peminjaman.id_petugas = petugas.id_petugas
        ORDER BY peminjaman.tgl_pinjam";

$res = mysqli_query($koneksi, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
    $pinjam[] = $data;
}

include '../asset/header.php';
?>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<div class="card" style="background-color: #FD7272">
					<center><h2 class="card-title"><i class="fas fa-edit"></i> Data Peminjaman <a href="form-pinjam.php"><center>
					</h2>
				</div>
					<div class="ser">
						<table class="table table-dark">
							<thead>
                <a href="form-pinjam.php" class="badge badge-danger">Tambah Data</a>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nama Peminjaman</th>
									<th scope="col">Tanggal Pinjam</th>
									<th scope="col">Tanggal Jatuh Tempo</th>
									<th scope="col">Petugas</th>
									<th scope="col">Status</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>
							<?php
							$no = 1;
							foreach ($pinjam as $p) { ?>
								<tr>
									<th scope="row"><?= $no ?></th>
									<td><?= $p['nama'] ?></td>
									<td><?= date('d F Y', strtotime($p['tgl_pinjam'])) ?></td>
									<td><?= date('d F Y', strtotime($p['tgl_jatuhtempo'])) ?></td>
									<td><?= $p['nama_petugas'] ?></td>
									<td>
										<?php
										if ($p['status'] == "dipinjam") {
											echo '<h5><span class="badge badge-info">Dipinjam</span></h5>';
										} else {
											echo '<h5><span class="badge badge-danger">Kembali</span></h5>';
										}
										?>
									</td>
									<td>
										<a href="detail.php?id_pinjam=<?= $p['id_pinjam'] ?>" class="badge badge-success">Detail</a>
										<a href="form-edit.php?id_pinjam=<?= $p['id_pinjam'] ?>" class="badge badge-warning">Edit</a>
										<a href="hapus.php?id_pinjam=<?= $p['id_pinjam'] ?>" class="badge badge-danger">Hapus</a>
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
			</div>
		</div>
	</div>
	<script src="search.js"></script>
</div>
<?php
include '../asset/footer.php';
?>
