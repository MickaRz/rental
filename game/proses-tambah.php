<?php

include '../koneksi.php';

if(isset($_POST['simpan']))
{
$judul = $_POST['judul'];
$cover = $_POST['cover'];
$stok = $_POST['stok'];
$id_kategori = $_POST['id_kategori'];

$sql = "INSERT INTO game (judul, cover, stok, id_kategori)
            VALUES ('$judul','$cover', '$stok', '$id_kategori')";

$res = mysqli_query($koneksi, $sql);

$count = mysqli_affected_rows($koneksi);

if($count == 1)
{
   header("Location: index.php");
}
else
{
   header("Location: tambah.php");
}

}
else
{
    header("Location: tambah.php");
}

?>
