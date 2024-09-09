<?php

include "koneksi.php";

$kode       = $_POST['kode'];
$judul      = $_POST['judul'];
$tahun      = $_POST['tahun'];
$pengarang  = $_POST['pengarang'];

$update = mysqli_query($koneksi, "update tb_buku set judul_buku='$judul', tahun_terbit='$tahun', pengarang='$pengarang' where kode_buku='$kode'");

if ($update) {
    header("location:index.php");
} else {
    header("location:edit.php");
}

?>