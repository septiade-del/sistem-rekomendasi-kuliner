<div class="auth-wrapper">
    <h1>Buat akun</h1>
    <p class="subtitle">Gratis, cuma butuh beberapa detik</p>

    <?php if (isset($error)): ?>
        <div class="alert-error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <a href="<?php echo base_url('auth/google'); ?>" class="btn-google">
        <svg width="18" height="18" viewBox="0 0 18 18"><path fill="#4285F4" d="M17.64 9.2c0-.64-.06-1.25-.16-1.84H9v3.48h4.84c-.21 1.13-.85 2.09-1.81 2.73v2.27h2.92c1.71-1.57 2.69-3.88 2.69-6.64z"/><path fill="#34A853" d="M9 18c2.43 0 4.47-.81 5.96-2.18l-2.92-2.27c-.81.54-1.84.86-3.04.86-2.34 0-4.32-1.58-5.03-3.71H.96v2.34C2.44 15.98 5.48 18 9 18z"/><path fill="#FBBC05" d="M3.97 10.7c-.18-.54-.28-1.11-.28-1.7s.1-1.16.28-1.7V4.96H.96C.35 6.17 0 7.55 0 9s.35 2.83.96 4.04l3.01-2.34z"/><path fill="#EA4335" d="M9 3.58c1.32 0 2.51.45 3.44 1.35l2.59-2.59C13.46.89 11.43 0 9 0 5.48 0 2.44 2.02.96 4.96l3.01 2.34C4.68 5.16 6.66 3.58 9 3.58z"/></svg>
        Daftar dengan Google
    </a>

    <div class="divider">atau</div>

    <form method="POST" action="<?php echo base_url('auth/register'); ?>">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" required placeholder="Nama kamu">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required placeholder="nama@email.com">
        </div>
        <div class="form-group">
            <label>Kata Sandi</label>
            <input type="password" name="password" required minlength="6" placeholder="Minimal 6 karakter">
        </div>
        <button type="submit" class="btn-primary">Daftar</button>
    </form>

    <div class="auth-footer">
        Sudah punya akun? <a href="<?php echo base_url('auth/login'); ?>">Masuk</a>
    </div>
</div>