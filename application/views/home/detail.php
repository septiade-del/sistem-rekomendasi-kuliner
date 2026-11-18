<div class="container">
    <a href="<?php echo base_url(); ?>" style="color:#0E4749; text-decoration:none; font-weight:600; font-size:14px;">&larr; Kembali ke daftar</a>

    <div class="card" style="margin-top:20px; padding:24px;">
        <h1 style="font-size:26px; color:#0E4749;"><?php echo htmlspecialchars($resto['nama']); ?></h1>
        <p class="rating" style="font-size:16px; margin:8px 0;">⭐ <?php echo htmlspecialchars($resto['rating']); ?> (<?php echo (int) $resto['jumlah_review']; ?> ulasan)</p>
        <p><?php echo htmlspecialchars($resto['kategori_utama']); ?></p>
        <p><?php echo htmlspecialchars($resto['alamat']); ?></p>
    </div>

    <div class="section-title" style="margin-top:32px;">
        <h2>Rekomendasi Restoran Serupa</h2>
        <p>Dihitung menggunakan metode <strong><?php echo strtoupper(htmlspecialchars($metode)); ?></strong> similarity.</p>
    </div>

    <form method="GET" action="<?php echo base_url('restoran/' . $resto['restoran_id_csv']); ?>" class="form-filter">
        <select name="metode" onchange="this.form.submit()">
            <option value="cosine" <?php echo $metode === 'cosine' ? 'selected' : ''; ?>>Cosine Similarity</option>
            <option value="euclidean" <?php echo $metode === 'euclidean' ? 'selected' : ''; ?>>Euclidean Similarity</option>
            <option value="jaccard" <?php echo $metode === 'jaccard' ? 'selected' : ''; ?>>Jaccard Similarity</option>
        </select>
    </form>

    <div class="card-grid rekomendasi-grid">
        <?php if (count($rekomendasi) > 0): ?>
            <?php foreach ($rekomendasi as $r): ?>
                <div class="card">
                    <span style="float:right; background:#0E4749; color:white; padding:3px 10px; border-radius:12px; font-size:12px;">
                        Skor: <?php echo number_format($r['skor'], 4); ?>
                    </span>
                    <h3><a href="<?php echo base_url('restoran/' . $r['restoran_id_csv']); ?>" style="text-decoration:none;"><?php echo htmlspecialchars($r['nama']); ?></a></h3>
                    <div class="meta"><span class="rating">⭐ <?php echo htmlspecialchars($r['rating']); ?></span> &nbsp;|&nbsp; <?php echo htmlspecialchars($r['kategori_utama']); ?></div>
                    <div class="meta"><?php echo htmlspecialchars($r['alamat']); ?></div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Belum ada data rekomendasi untuk restoran ini.</p>
        <?php endif; ?>
    </div>
</div>