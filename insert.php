<?php

include "koneksi.php";

$kode       = $_POST['kode'];
$judul      = $_POST['judul'];
$tahun      = $_POST['tahun'];
$pengarang  = $_POST['pengarang'];

$simpan = mysqli_query($koneksi, "INSERT INTO tb_buku values('$kode', '$judul', '$tahun', '$pengarang')");

if ($simpan) {
    header("location:index.php");
} else {
    header("location:tambah.php");
}

?>