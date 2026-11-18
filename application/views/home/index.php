<section class="hero">
    <div class="hero-inner">
        <div class="hero-eyebrow">Labuan Bajo</div>
        <h1>Cari yang enak di sini, dari resto tepi laut sampai kuliner khas Flores.</h1>
        <p>Rekomendasi kuliner berbasis kemiripan tempat — pilih satu, temukan yang serupa.</p>
    </div>
    <svg class="hero-waves" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <circle cx="100" cy="100" r="90" fill="none" stroke="white" stroke-width="3"/>
        <circle cx="100" cy="100" r="60" fill="none" stroke="white" stroke-width="3"/>
    </svg>
</section>

<div class="container">
    <div class="breadcrumb">Beranda / Restoran Labuan Bajo</div>

    <div class="section-title">
        <h2>Rekomendasi kami</h2>
        <p><?php echo count($restoran_list); ?> tempat kuliner di Labuan Bajo, siap dijelajah.</p>
    </div>

    <form class="form-filter" method="GET" action="<?php echo base_url(); ?>">
        <input type="text" name="keyword" placeholder="Cari nama restoran..." value="<?php echo htmlspecialchars($keyword); ?>">
        <select name="kategori">
            <option value="">Semua Kategori</option>
            <?php foreach ($kategori_list as $k): ?>
                <option value="<?php echo htmlspecialchars($k['kategori_utama']); ?>" <?php echo ($filter_kategori == $k['kategori_utama']) ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($k['kategori_utama']); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Cari</button>
    </form>

    <div class="card-grid">
        <?php if (count($restoran_list) > 0): ?>
            <?php foreach ($restoran_list as $r): ?>
                <div class="card">
                    <h3><?php echo htmlspecialchars($r['nama']); ?></h3>
                    <div class="meta"><span class="rating">⭐ <?php echo htmlspecialchars($r['rating']); ?></span> &nbsp;|&nbsp; <?php echo htmlspecialchars($r['kategori_utama']); ?></div>
                    <div class="meta"><?php echo (int) $r['jumlah_review']; ?> ulasan</div>
                    <div class="meta"><?php echo htmlspecialchars($r['alamat']); ?></div>
                    <a class="lihat" href="<?php echo base_url('restoran/' . $r['restoran_id_csv']); ?>">Lihat rekomendasi serupa &rarr;</a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Tidak ada restoran ditemukan.</p>
        <?php endif; ?>
    </div>
</div>