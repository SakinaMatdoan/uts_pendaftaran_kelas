<?php
$pdo = new PDO("mysql:host=localhost;dbname=uts_pendaftaran_kelas", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
session_start();
?>
