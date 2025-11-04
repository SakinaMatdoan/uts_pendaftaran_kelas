<?php
require 'db.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/htmx.org"></script>
</head>
<body class="p-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Selamat datang, <?= htmlspecialchars($_SESSION['nama']); ?> 👋</h4>
            <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>

        <div class="card p-4 mb-4 shadow-sm">
            <h5>Form Pendaftaran Kelas</h5>
            <form hx-post="register_class.php" hx-target="#pesan" hx-swap="innerHTML">
                <div class="mb-3">
                    <input type="text" name="nim" class="form-control" placeholder="NIM" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="nama_mk" class="form-control" placeholder="Nama Mata Kuliah" required>
                </div>
                <button class="btn btn-success">Daftar</button>
            </form>
            <div id="pesan" class="mt-3"></div>
        </div>

        <h4 class="mt-4">Daftar Pendaftar Saat Ini</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama MK</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody id="daftar-pendaftar">
        <?php
        $stmt = $pdo->prepare("SELECT nim, nama_mk, registered_at FROM registrations ORDER BY id DESC");
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo "<tr>
                    <td>".htmlspecialchars($row['nim'])."</td>
                    <td>".htmlspecialchars($row['nama_mk'])."</td>
                    <td>".$row['registered_at']."</td>
                  </tr>";
        }
        ?>
    </tbody>
    </table>
    </div>
</body>
</html>
