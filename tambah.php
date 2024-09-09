<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dan Mysql - Form Tambah Data Buku</title>
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

    <h2>Form Tambah Data Buku</h2>

    <form action="insert.php" method="post">
        <table align="center">
            <tr>
                <td>Kode Buku</td>
                <td><input type="text" name="kode" placeholder="Kode Buku" size="11"></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul" placeholder="Judul Buku" size="30"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="tahun" placeholder="Tahun Terbit" size="11"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang" placeholder="Pengarang" size="30"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" value="Simpan">
                    <input type="reset" name="batal" value="Batal">
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>