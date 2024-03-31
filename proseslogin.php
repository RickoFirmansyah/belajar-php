<?php
// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirimkan melalui form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Anda dapat menambahkan validasi login di sini
    // Misalnya, memeriksa kredensial di database

    // Contoh validasi sederhana
    // Ini hanya sebagai contoh dan tidak aman secara nyata
    $valid_username = 'ricko';
    $valid_password = '123';

    if ($username === $valid_username && $password === $valid_password) {
        // Jika kredensial valid, redirect ke halaman selamat datang
        header("Location: list.php");
        exit();
    } else {
        // Jika kredensial tidak valid, tampilkan pesan kesalahan
        echo "Username atau password salah. Silakan coba lagi.";
    }
}
?>
