<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Kelas Khusus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/htmx.org@1.9.10"></script>
</head>
<body class="bg-light">
<div class="container mt-5" style="max-width: 450px;">
    <h3 class="text-center mb-4">Pendaftaran Kelas Khusus</h3>

    <div id="form-container" class="card p-4 shadow-sm">
        <!-- Form Login -->
        <form hx-post="login.php" hx-target="#response" hx-swap="innerHTML">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button class="btn btn-primary w-100">Login</button>
        </form>

        <div id="response" class="mt-3"></div>
        <hr>
        <a href="#" 
           hx-get="register.php" 
           hx-target="#form-container" 
           hx-swap="outerHTML">Belum punya akun? Daftar</a>
    </div>
</div>
</body>
</html>
