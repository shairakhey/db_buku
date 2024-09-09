<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dan Mysql - Form Edit Data Buku</title>
    <style>
        h2 {
            text-align: center;
        }
        table {
            width: 450px;
            height: 250px;
            border: 1px solid black;
        }
        table td,
        input {
            padding: 7px;
            font-size: 18px;
        }
        input[type="submit"],
        input[type="reset"] {
            width: 45%;
            background: red;
            border: 1px solid black;
            color: white;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background: transparent;
            color: black;
        }
    </style>
</head>
<body>

    <h2>Form Edit Data Buku</h2>

    <?php
        include "koneksi.php";

        $kode = $_GET['kode'];
        $data = mysqli_query($koneksi, "SELECT * FROM tb_buku where kode_buku='$kode'");
        while($row = mysqli_fetch_array($data)) {
    ?>

    <form action="update.php" method="post">
        <table align="center">
            <tr>
                <td>Kode Buku</td>
                <td><input type="text" name="kode" placeholder="Kode Buku" value="<?php echo $row['kode_buku']; ?>" size="11"></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul" placeholder="Judul Buku" value="<?php echo $row['judul_buku']; ?>" size="30"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="tahun" placeholder="Tahun Terbit" value="<?php echo $row['tahun_terbit']; ?>" size="11"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang" placeholder="Pengarang" value="<?php echo $row['pengarang']; ?>" size="30"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="Edit" value="Edit">
                    <input type="reset" name="batal" value="Batal">
                </td>
            </tr>
        </table>
    </form>
    <?php
        }
    ?>
    
</body>
</html>