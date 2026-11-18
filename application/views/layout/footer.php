<footer class="site-footer">
    <div class="footer-inner">

        <div class="footer-col-newsletter">
            <h3>Gabung 1.000+ orang yang dapat rekomendasi kuliner Labuan Bajo tiap bulan</h3>
            <form class="newsletter-form" onsubmit="return false;">
                <input type="email" placeholder="Alamat Email">
                <button type="submit">Gabung</button>
            </form>
            <p class="footer-small">Dengan mendaftar, kamu setuju dengan <a href="#">Kebijakan Privasi</a> kami.</p>
            <div class="footer-social">
                <a href="#" aria-label="Instagram">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg>
                </a>
                <a href="#" aria-label="Facebook">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                </a>
                <a href="#" aria-label="Youtube">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="3"/><polygon points="10,9 16,12 10,15" fill="currentColor" stroke="none"/></svg>
                </a>
            </div>
        </div>

        <div class="footer-col-badge">
            <div class="badge-circle">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M2 17c1.5-2 3.5-2 5 0s3.5 2 5 0 3.5-2 5 0 3.5 2 5 0"/><path d="M2 12c1.5-2 3.5-2 5 0s3.5 2 5 0 3.5-2 5 0 3.5 2 5 0" opacity="0.5"/></svg>
            </div>
            <div>
                <h4>Berbasis Data Nyata</h4>
                <p>Rekomendasi disusun dari 150 data restoran asli di Labuan Bajo, dihitung memakai metode Content-Based Filtering supaya hasilnya relevan dengan preferensimu.</p>
                <a href="#" class="footer-link-inline">Pelajari metodenya &rarr;</a>
            </div>
        </div>

        <div class="footer-col-contact">
            <h4>Sapa Kami!</h4>
            <p>Labuan Bajo<br>Manggarai Barat, Nusa Tenggara Timur<br>Indonesia</p>
            <a href="mailto:halo@rasabajo.id" class="footer-contact-link">halo@rasabajo.id</a>
            <a href="<?php echo base_url('auth/login'); ?>" class="btn-contact">
                Masuk
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>

    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> Rasa Bajo — Skripsi Sistem Informasi, Universitas Amikom Yogyakarta</p>
    </div>
</footer>

</body>
</html>