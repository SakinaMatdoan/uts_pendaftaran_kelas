<?php
require 'db.php';
if (!isset($_SESSION['user_id'])) exit;

$nim = trim($_POST['nim']);
$nama_mk = trim($_POST['nama_mk']);
$user_id = $_SESSION['user_id'];

$stmt = $pdo->prepare("INSERT INTO registrations (user_id, nim, nama_mk) VALUES (?, ?, ?)");
$stmt->execute([$user_id, $nim, $nama_mk]);

echo "<div class='alert alert-success'>Pendaftaran berhasil!</div>";

// Tambahkan baris ke tabel secara OOB (Out of Band)
echo "<tr hx-swap-oob='afterbegin:#daftar-pendaftar'>
        <td>".htmlspecialchars($nim)."</td>
        <td>".htmlspecialchars($nama_mk)."</td>
        <td>".date('Y-m-d H:i:s')."</td>
      </tr>";
?>
