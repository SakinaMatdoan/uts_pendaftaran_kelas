<?php
require 'db.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['nama'] = $user['namalengkap'];
    echo "<script>window.location='dashboard.php';</script>";
} else {
    echo "<div class='alert alert-danger'>Username atau password salah!</div>";
}
?>
