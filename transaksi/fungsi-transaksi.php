<?php
function ambilGame($koneksi){
	$sql = "SELECT id_game, judul FROM game";
	$res = mysqli_query($koneksi, $sql);

	$data_game = array();

	while ($data = mysqli_fetch_assoc($res)) {
		$data_game[] = $data;
	}
	return $data_game;
}
?>

<?php
function ambilAnggota($koneksi){
	$sql = "SELECT id_anggota, nama FROM anggota";
	$res = mysqli_query($koneksi, $sql);

	$data_anggota = array();

	while ($data = mysqli_fetch_assoc($res)) {
		$data_anggota[] = $data;
	}
	return $data_anggota;
}
?>

<?php
function ambilPeminjaman($koneksi, $id_pinjam){
	$sql = "SELECT * FROM peminjaman p INNER JOIN anggota a ON p.id_anggota=a.id_anggota INNER JOIN detail_peminjaman dp
	 				USING(id_pinjam) INNER JOIN game b ON dp.id_game=b.id_game where id_pinjam='$id_pinjam'" ;
	$res = mysqli_query($koneksi, $sql);
	$data = mysqli_fetch_assoc($res);

	return $data;
}
?>

<?php
function ambilStok($koneksi, $id_game){
	$sql = "SELECT stok FROM game WHERE id_game=$id_game";
	$res = mysqli_query($koneksi, $sql);

	$data = mysqli_fetch_assoc($res);
	return $data['stok'];
}
?>

<?php
function cekPinjam($koneksi, $id_anggota){
	$sql = "SELECT * FROM peminjaman inner join detail_peminjaman using(id_pinjam)  WHERE id_anggota=$id_anggota AND status='Dipinjam'";
	$res = mysqli_query($koneksi, $sql);

	$pinjam = mysqli_affected_rows($koneksi);

	if($pinjam == 0){
		return true;
	}else{
		return false;
	}
}
?>

<?php
function updateStok($koneksi, $id_game, $stok_update){
	$sql = "UPDATE game SET stok=$stok_update WHERE id_game=$id_game";
	$res = mysqli_query($koneksi, $sql);
}
?>

<?php
function hitungDenda($koneksi, $id_pinjam, $tgl_kembali){
	$denda=0;

	$sql = "SELECT tgl_jatuhtempo FROM peminjaman WHERE id_pinjam=$id_pinjam";
	$res = mysqli_query($koneksi, $sql);

	$data = mysqli_fetch_assoc($res);
	$tgl_jatuhtempo = $data['tgl_jatuhtempo'];

	$hari_denda = (strtotime($tgl_kembali)-strtotime($tgl_jatuhtempo))/60/60/24;

	if($hari_denda >= 0){
		$denda = $hari_denda*1000;
	}

	return $denda;
}
?>
