<?php
session_start();

$host       = "localhost";
$username   = "root";
$password   = "";
$database   = "db_buku";

$koneksi = new mysqli ($host, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Mencegah SQL Injection
    $username = $koneksi->real_escape_string($username);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Cek apakah username sudah ada
    $checkQuery = "SELECT * FROM users WHERE username='$username'";
    $checkResult = $koneksi->query($checkQuery);

    if ($checkResult->num_rows == 0) {
        // Jika username belum ada, daftarkan pengguna baru
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
        
        if ($koneksi->query($sql) === TRUE) {
            $_SESSION['username'] = $username;
            header("Location: login.php"); // Ganti dengan halaman tujuan setelah register
            exit();
        } else {
            $error = "Error: " . $koneksi->error;
        }
    } else {
        $error = "Username sudah terdaftar!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pendaftaran</title>
</head>
<body>
    <h2>Pendaftaran</h2>
    <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>