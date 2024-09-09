<?php

include "koneksi.php";

$kode = $_GET['kode'];

$hapus = mysqli_query($koneksi, "delete from tb_buku where kode_buku = '$kode'");

if ($hapus) {
    header("location:index.php");
} else {
    echo "Data Gagal Dihapus";
}

?>