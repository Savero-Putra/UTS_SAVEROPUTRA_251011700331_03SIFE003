<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nusa Wear - Katalog Fashion</title>
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

        .page-heading {
            padding: 45px 0 20px;
        }

        .page-heading h1 {
            font-size: clamp(30px, 5vw, 44px);
            font-weight: 700;
        }

        .page-heading p {
            color: #777;
        }

        .product-card {
            height: 100%;
            border: 1px solid #eaeaea;
            border-radius: 0;
            background: #fff;
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, .07);
        }

        .product-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            background: #eee;
        }

        .product-category {
            color: #888;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .product-name {
            font-size: 18px;
            font-weight: 600;
        }

        .product-price {
            font-weight: 700;
            font-size: 17px;
        }

        .filter-btn {
            border-radius: 0;
        }

        .search-input {
            border-radius: 0;
            padding: 11px 14px;
        }

        footer {
            background: #fff;
            border-top: 1px solid #e5e5e5;
            padding: 25px 0;
            margin-top: 60px;
            color: #777;
        }

        @media (max-width: 576px) {
            .product-image {
                height: 230px;
            }
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
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto gap-lg-4">
                <li class="nav-item">
                    <a class="nav-link active fw-semibold"
                       href="{{ route('ecommerce.index') }}">
                        Semua Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('ecommerce.index') }}#katalog">
                        Katalog
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('ecommerce.tentang') }}">
                        Tentang
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container" id="katalog">

    <section class="page-heading">
        <h1>Koleksi Nusa Wear</h1>
        <p>Pilihan fashion kasual untuk menemani aktivitas sehari-hari.</p>
    </section>

    <section class="mb-4">
        <div class="row g-3 align-items-center">
            <div class="col-lg-6">
                <div class="d-flex flex-wrap gap-2" id="categoryFilters">
                    <button class="btn btn-dark filter-btn active"
                            data-category="all">
                        Semua
                    </button>

                    <button class="btn btn-outline-dark filter-btn"
                            data-category="Kaos">
                        Kaos
                    </button>

                    <button class="btn btn-outline-dark filter-btn"
                            data-category="Kemeja">
                        Kemeja
                    </button>

                    <button class="btn btn-outline-dark filter-btn"
                            data-category="Hoodie">
                        Hoodie
                    </button>

                    <button class="btn btn-outline-dark filter-btn"
                            data-category="Crewneck">
                        Crewneck
                    </button>
                </div>
            </div>

            <div class="col-lg-6">
                <input type="text"
                       id="searchProduct"
                       class="form-control search-input"
                       placeholder="Cari nama produk atau kategori...">
            </div>
        </div>
    </section>

    <section class="pb-4">
        <div class="row g-4" id="productList">

            @forelse ($products as $product)
                <div class="col-6 col-lg-4 product-item"
                     data-name="{{ strtolower($product->name) }}"
                     data-category="{{ strtolower($product->category) }}">

                    <div class="card product-card">
                        <a href="{{ route('ecommerce.show', $product->id) }}"
                           class="text-decoration-none">
                            @if ($product->image)
                                <img
                                    src="{{ asset('assets/images/' . $product->image) }}"
                                    class="product-image"
                                    alt="{{ $product->name }}"
                                    onerror="this.onerror=null;this.src='https://placehold.co/600x600/f0f0f0/555?text=Nusa+Wear';">
                            @else
                                <img
                                    src="https://placehold.co/600x600/f0f0f0/555?text=Nusa+Wear"
                                    class="product-image"
                                    alt="{{ $product->name }}">
                            @endif
                        </a>

                        <div class="card-body p-3 p-md-4">
                            <div class="product-category mb-2">
                                {{ $product->category }}
                            </div>

                            <h2 class="product-name">
                                {{ $product->name }}
                            </h2>

                            <p class="product-price mb-3">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </p>

                            <a href="{{ route('ecommerce.show', $product->id) }}"
                               class="btn btn-dark w-100 rounded-0">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <h3>Produk belum tersedia</h3>
                    <p class="text-secondary">
                        Silakan tambahkan produk melalui database.
                    </p>
                </div>
            @endforelse

        </div>

        <div id="noProducts" class="text-center py-5 d-none">
            <h4>Produk tidak ditemukan</h4>
            <p class="text-secondary">
                Coba kata kunci atau kategori lainnya.
            </p>
        </div>
    </section>

</main>

<footer>
    <div class="container text-center">
        <p class="mb-1 fw-semibold text-dark">NUSA WEAR</p>
        <small>&copy; {{ date('Y') }} Nusa Wear. All rights reserved.</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const searchInput = document.getElementById('searchProduct');
    const productItems = document.querySelectorAll('.product-item');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const noProducts = document.getElementById('noProducts');

    let selectedCategory = 'all';

    function filterProducts() {
        const keyword = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;

        productItems.forEach(function(item) {
            const name = item.dataset.name;
            const category = item.dataset.category;

            const matchesSearch =
                name.includes(keyword) || category.includes(keyword);

            const matchesCategory =
                selectedCategory === 'all' ||
                category === selectedCategory.toLowerCase();

            if (matchesSearch && matchesCategory) {
                item.classList.remove('d-none');
                visibleCount++;
            } else {
                item.classList.add('d-none');
            }
        });

        noProducts.classList.toggle('d-none', visibleCount > 0);
    }

    searchInput.addEventListener('input', filterProducts);

    filterButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            selectedCategory = button.dataset.category;

            filterButtons.forEach(function(btn) {
                btn.classList.remove('btn-dark', 'active');
                btn.classList.add('btn-outline-dark');
            });

            button.classList.remove('btn-outline-dark');
            button.classList.add('btn-dark', 'active');

            filterProducts();
        });
    });
</script>

</body>
</html>
