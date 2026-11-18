<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rasa Bajo - Rekomendasi Wisata Kuliner Labuan Bajo</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">
</head>
<body>

<header class="site-header">
    <a href="<?php echo base_url(); ?>" class="brand">
        <svg class="wave-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 17c1.5-2 3.5-2 5 0s3.5 2 5 0 3.5-2 5 0 3.5 2 5 0" stroke="#FF8A5C" stroke-width="2" stroke-linecap="round"/>
            <path d="M2 12c1.5-2 3.5-2 5 0s3.5 2 5 0 3.5-2 5 0 3.5 2 5 0" stroke="white" stroke-width="2" stroke-linecap="round" opacity="0.6"/>
        </svg>
        Rasa Bajo
    </a>

    <ul class="nav-links">
        <li><a href="<?php echo base_url(); ?>" class="<?php echo (isset($halaman_aktif) && $halaman_aktif === 'beranda') ? 'active' : ''; ?>">Beranda</a></li>
        <li><a href="<?php echo base_url('?kategori=Cafe'); ?>">Cafe</a></li>
        <li><a href="<?php echo base_url('?kategori=Seafood restaurant'); ?>">Seafood</a></li>
    </ul>

    <div class="header-right">
        <span class="location-badge">📍 Labuan Bajo</span>

        <?php if ($this->session->userdata('logged_in')): ?>
            <a href="<?php echo base_url('auth/logout'); ?>" class="user-chip">
                <span class="avatar"><?php echo strtoupper(substr($this->session->userdata('nama'), 0, 1)); ?></span>
                <?php echo htmlspecialchars($this->session->userdata('nama')); ?>
            </a>
        <?php else: ?>
            <a href="<?php echo base_url('auth/login'); ?>" class="btn-masuk">Masuk</a>
        <?php endif; ?>
    </div>
</header>