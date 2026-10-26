<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $product->name }} - Nusa Wear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f7f7f5; color: #222; }
        .navbar { background: white; }
        .product-image {
            width: 100%; min-height: 350px; max-height: 520px;
            object-fit: cover; background: #e9e9e5; border-radius: 16px;
        }
        .price { font-size: 1.8rem; font-weight: 700; }
    </style>
</head>
<body>
<nav class="navbar border-bottom py-3">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand fw-bold fs-3">NUSA WEAR</a>
        <a href="{{ url('/') }}" class="btn btn-outline-dark">← Kembali ke Katalog</a>
    </div>
</nav>

<main class="container py-5">
    <div class="row g-5 align-items-start">
        <div class="col-md-6">
            @if($product->image)
                <img
                    src="{{ asset('assets/images/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="product-image"
                >
            @else
                <div class="product-image d-flex align-items-center justify-content-center">
                    <span class="text-secondary">Gambar produk belum tersedia</span>
                </div>
            @endif
        </div>

        <div class="col-md-6">
            <p class="text-secondary text-uppercase">
                {{ $product->category }}
            </p>
            <h1 class="fw-bold mb-3">{{ $product->name }}</h1>

            <p class="price">
                Rp {{ number_format($product->price, 0, ',', '.') }}
            </p>

            <hr>

            <h5>Deskripsi Produk</h5>
            <p class="text-secondary">
                {{ $product->description ?: 'Produk pakaian pilihan dari Nusa Wear untuk menemani gaya sehari-hari.' }}
            </p>

            <a href="{{ url('/') }}" class="btn btn-dark btn-lg mt-3">
                Lihat Produk Lainnya
            </a>
        </div>
    </div>
</main>
</body>
</html>
