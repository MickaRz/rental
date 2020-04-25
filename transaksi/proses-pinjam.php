<?php
include '../koneksi.php';
include 'fungsi-transaksi.php';

session_start();

if(isset($_POST['btnPinjam'])){

	$id_anggota 		= $_POST['id_anggota'];
	$id_game 			  = $_POST['id_game'];
	$tgl_pinjam 		= $_POST['tgl_pinjam'];
	$tgl_jatuhtempo = date('Y-m-d', strtotime($tgl_pinjam.'+ 7 days'));
	$id_petugas 		= 3 ;

	$sql = "INSERT INTO peminjaman(id_anggota, tgl_pinjam, tgl_jatuhtempo, id_petugas)
          VALUES('$id_anggota', '$tgl_pinjam', '$tgl_jatuhtempo', '$id_petugas')";
// var_dump($_POST, $id_petugas);

	$stok = ambilStok($koneksi, $id_game);
		 // var_dump($stok, $koneksi, $id_anggota);
		//  $res = mysqli_query($koneksi, $sql);
 		// var_dump($res);
	if(cekPinjam($koneksi,$id_anggota) && $stok > 0){
		$res = mysqli_query($koneksi, $sql);
		// var_dump($res);
		$querp=mysqli_query($koneksi,"SELECT id_pinjam FROM peminjaman WHERE tgl_pinjam='$tgl_pinjam'
            AND id_anggota='$id_anggota' AND tgl_jatuhtempo='$tgl_jatuhtempo' AND id_petugas='$id_petugas' ");
		$wd=mysqli_fetch_assoc($querp);
		$idp=$wd["id_pinjam"];
		// var_dump($wd);
		$sql1 = mysqli_query($koneksi,"INSERT INTO detail_peminjaman(id_pinjam,id_game) values('$idp','$id_game	')");
		var_dump($sql1);
		$count = mysqli_affected_rows($koneksi);
		$stok_update = $stok - 1;
		if($sql1 > 0){
			updateStok($koneksi, $id_game, $stok_update);
			header("Location:index.php");
		}

	}
	// if(cekPinjam($koneksi, $id_anggota)==false){
	// 	updateStok($koneksi, $id_buku, $stok_update);
	// 	header("Location:index.php");
	// }
}else{
	header("Location:form-pinjam.php");
}
?>
