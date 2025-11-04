<div id="form-container" class="card p-4 shadow-sm">
    <h4 class="text-center mb-3">Daftar Akun Baru</h4>
    <form hx-post="register_action.php" hx-target="#response" hx-swap="innerHTML">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button class="btn btn-success w-100">Daftar</button>
    </form>

    <div id="response" class="mt-3"></div>
    <hr>
    <a href="#" 
       hx-get="index.php" 
       hx-target="#form-container" 
       hx-swap="outerHTML">Sudah punya akun? Login</a>
</div>
