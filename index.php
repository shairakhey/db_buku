<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & MYSQL | MENAMPILKAN DATA</title> 
</head>
    <style type = "text/css">
        h2{
            text-align : center;
        }
        table{
            width: 800px;
            height: auto;
            border: 1px solid black;
        }
        th, td{
            padding : 10px;
            border : 1px solid black;
        }
        h4 {
            width: 710px;
            text-align: center;
        }
        h4 a {
            padding: 10px;
            color: white;
            background: limegreen;
            border: 1px solid black;
            text-decoration: none;
        }
        h4 a:hover {
            background: transparent;
            color: black;
        }

    </style>
<body>

    <h2>Data Buku</h2>
    <br>

    <h4><a href="tambah.php">Tambah Data Buku</a></h4>

    <table align="center">
        <tr bgcolor="blue">
        <th>No</th>
            <th>Kode buku</th>
            <th>Judul buku</th>
            <th>tahun terbit</th>
            <th>pengarang</th>
            <th>opsi</th>
        </tr>
        <?php
    include "koneksi.php";
    $no = 1;
    $data = mysqli_query($koneksi, "select * from tb_buku");
    while ($row = mysqli_fetch_array ($data)) {

    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $row["kode_buku"]; ?></td>
        <td><?php echo $row["judul_buku"]; ?></td>
        <td><?php echo $row["tahun_terbit"]; ?></td>
        <td><?php echo $row["pengarang"]; ?></td>
        <td>
            <a href="edit.php?kode=<?php echo $row["kode_buku"]; ?>">edit</a>
            <a href="hapus.php?kode=<?php echo $row["kode_buku"]; ?>"
                onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')">hapus</a>
        </td>
    </tr>
   <?php 
    }
    ?>
    </table>
</body>
</html>