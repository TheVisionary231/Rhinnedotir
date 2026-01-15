<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita Gemini</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .navbar-brand { font-weight: bold; letter-spacing: 1px; }
        .hero-section { background: #343a40; color: white; padding: 60px 0; margin-bottom: 30px; }
        .card { border: none; transition: transform 0.3s; box-shadow: 0 4px 8px rgba(0,0,0,0.05); }
        .card:hover { transform: translateY(-5px); }
        .news-img { height: 200px; object-fit: cover; }
        footer { background: #212529; color: white; padding: 40px 0; margin-top: 50px; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">GEMINI NEWS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Nasional</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Teknologi</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Olahraga</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="hero-section text-center">
    <div class="container">
        <h1 class="display-4">Berita Terkini Hari Ini</h1>
        <p class="lead">Menyajikan informasi akurat dan terpercaya langsung ke perangkat Anda.</p>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h3 class="mb-4">Terbaru</h3>
            <div class="row">
                <?php
                // Contoh data berita fiktif
                $berita = [
                    ["judul" => "Teknologi AI Semakin Canggih", "kategori" => "Teknologi", "tgl" => "10 Jan 2026", "img" => "https://images.unsplash.com/photo-1518770660439-4636190af475"],
                    ["judul" => "Timnas Indonesia Masuk Final", "kategori" => "Olahraga", "tgl" => "09 Jan 2026", "img" => "https://images.unsplash.com/photo-1508098682722-e99c43a406b2"],
                    ["judul" => "Wisata Alam yang Wajib Dikunjungi", "kategori" => "Wisata", "tgl" => "08 Jan 2026", "img" => "https://images.unsplash.com/photo-1501785888041-af3ef285b470"],
                    ["judul" => "Resep Masakan Rumahan Lezat", "kategori" => "Gaya Hidup", "tgl" => "07 Jan 2026", "img" => "https://images.unsplash.com/photo-1498837167922-ddd27525d352"]
                ];

                foreach ($berita as $b) : ?>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <img src="<?= $b['img']; ?>" class="card-img-top news-img" alt="Berita">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2"><?= $b['kategori']; ?></span>
                            <h5 class="card-title"><?= $b['judul']; ?></h5>
                            <p class="text-muted small"><?= $b['tgl']; ?></p>
                            <p class="card-text">Ringkasan berita singkat untuk menarik minat pembaca lebih dalam...</p>
                            <a href="#" class="btn btn-outline-dark btn-sm">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Cari Berita</h5>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Kata kunci...">
                        <button class="btn btn-dark">Cari</button>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header bg-dark text-white">Populer</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Gempa Magnitudo 5.0 Guncang Jawa Tengah</a></li>
                    <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Harga Emas Antam Naik Tajam</a></li>
                    <li class="list-group-item"><a href="#" class="text-decoration-none text-dark">Tips Menjaga Kesehatan di Musim Hujan</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container text-center">
        <p class="mb-0">&copy; 2026 Gemini News Portal. All Rights Reserved.</p>
        <div class="mt-2">
            <a href="#" class="text-white-50 me-3">Tentang Kami</a>
            <a href="#" class="text-white-50 me-3">Kontak</a>
            <a href="#" class="text-white-50">Privasi</a>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>