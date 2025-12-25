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
                                        <h1 class="hero-title">REFERANSLAR</h1>
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
        <section class="references-section referances-area">
            <div class="container-fluid">

                <div class="row mt-5 mt-lg-0">
                    <div class="col-lg-7 col-11 px-0 mx-auto">

                        <div class=" d-flex flex-wrap gap-3 mb-5 scroll-reveal-top">
                            <a href="referanslar.php" class="btn btn-outline-primary <?= !isset($_GET['kategori']) ? 'active' : '' ?>">Tümü</a>

                            <a href="referanslar.php?kategori=1" class="btn btn-outline-primary <?= (isset($_GET['kategori']) && $_GET['kategori'] == 1) ? 'active' : '' ?>">Proje Kategorisi</a>

                            <a href="referanslar.php?sektor=2" class="btn btn-outline-primary">Sektör</a>
                            <a href="referanslar.php?uygulama_turu=1" class="btn btn-outline-primary">Uygulama Türü</a>
                            <a href="referanslar.php?durum=1" class="btn btn-outline-primary">Durum</a>
                        </div>

                        <?php if ( isset($_GET['kategori']) || isset($_GET['sektor']) || isset($_GET['durum']) ): ?>
                            <div class="active-filter-info mb-3 scroll-reveal-top">
                                <span class="small me-2">Seçili Filtre:</span>
                                <div class="filter-chip">
                                    <span>Endüstriyel Tesisler</span> 
                                    <a href="referanslar.php" class="remove-filter">
                                        <i class="icon-close-large"></i>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>

                <div class="row justify-content-center scroll-reveal-top">
                    <div class="col-lg-7 col-11 px-0 mx-auto">

                        <div class="referance-gallery">
                            <div class="row">
                                <?php
                                for ($i = 1; $i <= 12; $i++) {
                                ?>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="referance-card card">
                                            <div class="card-top-image">
                                                <img src="./assets/images/Rectangle3copy2.webp" alt="Referans" class="img-fluid">
                                            </div>
                                            <a href="referans-detay.php" class="stretched-link">
                                                <h3>Otokar Otomotiv Ve Savunma Sanayi Aş</h3>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="referance-card card">
                                            <div class="card-top-image">
                                                <img src="./assets/images/ibb-halk-ekmek.webp" alt="Referans " class="img-fluid">
                                            </div>
                                            <a href="referans-detay.php" class="stretched-link">
                                                <h3>Otokar Otomotiv Ve Savunma Sanayi Aş</h3>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="referance-card card">
                                            <div class="card-top-image">
                                                <img src="./assets/images/Layer35copy.webp" alt="Referans " class="img-fluid">
                                            </div>
                                            <a href="referans-detay.php" class="stretched-link">
                                                <h3>Otokar Otomotiv Ve Savunma Sanayi Aş</h3>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="referance-card card">
                                            <div class="card-top-image">
                                                <img src="https://placehold.co/300x200" alt="Referans " class="img-fluid">
                                            </div>
                                            <a href="referans-detay.php" class="stretched-link">
                                                <h3>Otokar Otomotiv Ve Savunma Sanayi AOtokar Otomotiv Ve Savunma Sanayi Aşş</h3>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="referance-card card">
                                            <div class="card-top-image">
                                                <img src="https://placehold.co/1920x1080" alt="Referans " class="img-fluid">
                                            </div>
                                            <a href="referans-detay.php" class="stretched-link">
                                                <h3>Otokar Otomotiv Ve Savunma Sanayi AOtokar Otomotiv Ve Savunma Sanayi Aşş</h3>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
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