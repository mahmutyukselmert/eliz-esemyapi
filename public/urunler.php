<?php require_once 'init.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/head.html'; ?>
</head>

<body>
    <?php include 'include/header.html'; ?>

    <main class="sub-page">

        <section class="hero">
            <div id="carouselSlider" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-type="image" data-interval="10000">
                        <img src="./assets/images/hakkimizda-33.webp" alt="" class="img-fluid">
                        <div class="carousel-caption text-start">
                            <div class="container">
                                <div class="row align-items-center col-lg-8 mx-auto">
                                    <div class="col-lg-9 scroll-reveal-left">
                                        <h1 class="hero-title">ÜRÜNLER</h1>
                                        <h2 class="hero-subtitle">Uzun Ömürlü Yapılar İçin Doğru Seçim.</h2>
                                        <div class="hero-description mt-4 mt-lg-0">
                                            <div class="col-lg-9 col-12">
                                                <div class="carousel-content">
                                                    <p>ESEM Yapı olarak; endüstriyel yapılardan konut projelerine kadar her ölçekte yüksek performans sunan çatı ve cephe ürünleri geliştiriyor ve uyguluyoruz. Ürünlerimiz; dayanıklılık, enerji verimliliği, estetik bütünlük ve uzun ömür odaklı tasarlanmış; global standartlara uygun kalite seviyesinde üretilmektedir.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="homepage-products-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="row">
                            <div class="col-lg-4 align-self-start scroll-reveal-left">
                                <h3 class="section-title mb-4">Kategoriler</h3>
                                <div class="mt-5">
                                    <a href="#" class="btn btn-outline-primary rounded-full px-4 mb-4"> Çatı Cephe Kaplama Ürünleri </a>
                                    <a href="#" class="btn btn-outline-primary rounded-full px-4 mb-4 active"> Sac İşleme, Metal Sac Kesim Büküm </a>
                                    <a href="#" class="btn btn-outline-primary rounded-full px-4 mb-4"> İzolasyon Ürünleri </a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="product-cards-container">
                                    <div class="row">
                                        <?php
                                        for($i = 0; $i < 3; $i++) {
                                        ?>
                                            <!-- Product Card 1 -->
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <a href="urun-detay.php" class="product-card-link">
                                                    <div class="product-card">
                                                        <div class="product-image">
                                                            <img src="./assets/images/cati-panelleri.webp" alt="Çatı Panelleri" class="img-fluid">
                                                        </div>
                                                        <div class="product-content">
                                                            <h3 class="product-title">Çatı Panelleri</h3>
                                                            <button class="product-btn">İncele</button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Product Card 2 -->
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <a href="#urun-detay-2" class="product-card-link">
                                                    <div class="product-card">
                                                        <div class="product-image">
                                                            <img src="./assets/images/tasiyici-profiller.webp" alt="Taşıyıcı Profiller" class="img-fluid">
                                                        </div>
                                                        <div class="product-content">
                                                            <h3 class="product-title">Taşıyıcı Profiller</h3>
                                                            <button class="product-btn">İncele</button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- Product Card 3 -->
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <a href="#urun-detay-3" class="product-card-link">
                                                    <div class="product-card">
                                                        <div class="product-image">
                                                            <img src="./assets/images/cati-trapezleri.webp" alt="Çatı Trapezleri" class="img-fluid">
                                                        </div>
                                                        <div class="product-content">
                                                            <h3 class="product-title">Çatı Trapezleri</h3>
                                                            <button class="product-btn">İncele</button>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'include/footer.html'; ?>

</body>

</html>