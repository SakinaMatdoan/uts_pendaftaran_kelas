<?php
require 'db.php';

$username = trim($_POST['username']);
$password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
$namalengkap = trim($_POST['namalengkap']);

$stmt = $pdo->prepare("INSERT INTO users (username, password, namalengkap) VALUES (?, ?, ?)");
if ($stmt->execute([$username, $password, $namalengkap])) {
    echo "<div class='alert alert-success'>Akun berhasil dibuat! Silakan login.</div>";
} else {
    echo "<div class='alert alert-danger'>Gagal mendaftar. Username mungkin sudah digunakan.</div>";
}
?>
