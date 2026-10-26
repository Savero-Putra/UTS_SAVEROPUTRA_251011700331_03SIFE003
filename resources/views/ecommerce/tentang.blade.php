<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Nusa Wear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f8f6;
            color: #222;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #fff;
            border-bottom: 1px solid #e5e5e5;
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: 2px;
        }

        .about-container {
            max-width: 950px;
            margin: 70px auto;
            padding: 0 24px;
        }

        .about-label {
            font-size: 13px;
            letter-spacing: 3px;
            color: #777;
            text-transform: uppercase;
        }

        .about-title {
            font-size: clamp(36px, 6vw, 58px);
            font-weight: 700;
            margin: 18px 0 25px;
        }

        .about-text {
            font-size: 17px;
            line-height: 1.9;
            color: #555;
        }

        .about-card {
            background: #fff;
            padding: 28px;
            height: 100%;
            border: 1px solid #e9e9e9;
        }

        .about-card h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        footer {
            margin-top: 70px;
            padding: 25px;
            background: #fff;
            border-top: 1px solid #e5e5e5;
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container py-2">
        <a class="navbar-brand text-dark" href="{{ route('ecommerce.index') }}">
            NUSA WEAR
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false"
                aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto gap-lg-4">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ecommerce.index') }}">
                        Semua Produk
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ecommerce.index') }}">
                        Katalog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fw-bold" href="{{ route('ecommerce.tentang') }}">
                        Tentang
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="about-container">
    <p class="about-label">Mengenal Nusa Wear</p>

    <h1 class="about-title">
        Gaya Simpel,<br>Karakter Berbeda.
    </h1>

    <p class="about-text">
        Nusa Wear adalah brand fashion yang menghadirkan pilihan pakaian
        kasual dengan desain simpel, nyaman, dan mudah dipadukan untuk
        berbagai aktivitas sehari-hari. Kami percaya bahwa penampilan
        yang menarik tidak harus berlebihan.
    </p>

    <p class="about-text">
        Melalui pilihan produk seperti kaos basic, oversized tee, kemeja,
        hoodie, dan crewneck, Nusa Wear ingin membantu setiap orang
        menemukan gaya berpakaian yang sesuai dengan karakter mereka.
    </p>

    <div class="row g-4 mt-4">
        <div class="col-md-6">
            <div class="about-card">
                <h3>Visi Kami</h3>
                <p class="about-text mb-0">
                    Menjadi brand fashion kasual yang dikenal melalui
                    desain yang sederhana, nyaman, dan relevan dengan
                    gaya hidup modern.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="about-card">
                <h3>Misi Kami</h3>
                <p class="about-text mb-0">
                    Menyediakan pilihan pakaian yang mudah digunakan,
                    mudah dipadukan, dan mendukung kepercayaan diri
                    pelanggan dalam menjalani aktivitas sehari-hari.
                </p>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <a href="{{ route('ecommerce.index') }}" class="btn btn-dark px-4 py-2">
            Kembali ke Katalog
        </a>
    </div>
</main>

<footer>
    &copy; {{ date('Y') }} Nusa Wear. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>