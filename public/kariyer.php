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
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-6 scroll-reveal-left">
                                    <h1 class="hero-title">Esem Yapı’da Karİyer</h1>
                                    <h2 class="hero-subtitle">Geleceği birlikte inşa ediyoruz.</h2>
                                    <div class="hero-description mt-4 mt-lg-0">
                                        <div class="col-lg-9 col-12">
                                            <div class="carousel-content">
                                                <p>Esem Yapı, yapı ve taahhüt sektöründe hayata geçirdiği projelerde nitelikli insan kaynağını en önemli değeri olarak görür.
                                                    Sürekli gelişimi destekleyen çalışma ortamımızda; mühendislik, uygulama ve yönetim süreçlerinde uzun vadeli kariyer fırsatları sunuyoruz.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-auto scroll-reveal-right">
                                    <div class="position-relative d-flex justify-content-start mt-5 mt-lg-0">
                                        <div class="circle-web-animation scroll-reveal-bottom">
                                            <img src="./assets/images/aklite-guven-tecrube-esem-yapi.webp" alt="Web Animation" class="img-fluid">
                                            <a href="#" class="play-button" data-bs-toggle="modal" data-bs-target="#aboutVideoModal">
                                                <i class="icon-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-section wapper py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">

                        <h3>Neden Esem Yapı?</h3>

                        <div class="content mt-3 mb-5">
                            <ul>
                                <li>Üçlü kurumsal yapı</li>
                                <li>Sürekli gelişim ve eğitim olanakları</li>
                                <li>İş sağlığı ve güvenliği odaklı çalışma kültürü</li>
                                <li>Ekip çalışmasını destekleyen organizasyon yapısı</li>
                                <li>Sürdürülebilir ve uzun vadeli projeler</li>
                            </ul>
                        </div>

                        <h4>Açık Pozisyonlar</h4>

                        <div class="content mt-5">
                            <div class="job-table-wrapper table-responsive">
                                <table class="table job-table">
                                    <thead>
                                        <tr>
                                            <th>Pozisyon</th>
                                            <th>Departman</th>
                                            <th>Çalışma Şekli</th>
                                            <th>Lokasyon</th>
                                            <th>Başvuru</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>İnşaat Mühendisi</td>
                                            <td>Proje Yönetimi</td>
                                            <td>Tam Zamanlı</td>
                                            <td>Ankara</td>
                                            <td>
                                                <a href="basvuru-formu.php" class="apply-link">BAŞVURU YAP</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Teknik Personel</td>
                                            <td>Uygulama</td>
                                            <td>Tam Zamanlı</td>
                                            <td>Şantiye</td>
                                            <td>
                                                <a href="basvuru-formu.php" class="apply-link">BAŞVURU YAP</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Mimar</td>
                                            <td>Tasarım</td>
                                            <td>Tam Zamanlı</td>
                                            <td>Merkez Ofis</td>
                                            <td>
                                                <a href="basvuru-formu.php" class="apply-link">BAŞVURU YAP</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Satın Alma Uzmanı</td>
                                            <td>Operasyon</td>
                                            <td>Tam Zamanlı</td>
                                            <td>Ankara</td>
                                            <td>
                                                <a href="basvuru-formu.php" class="apply-link">BAŞVURU YAP</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Şantiye Şefi</td>
                                            <td>Uygulama</td>
                                            <td>Tam Zamanlı</td>
                                            <td>Proje Bazlı</td>
                                            <td>
                                                <a href="basvuru-formu.php" class="apply-link">BAŞVURU YAP</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <p>
                            Açık pozisyonlarımız dışında da Esem Yapı ailesine katılmak isteyen adaylar genel başvuru yapabilir.
                            Uygun pozisyon oluştuğunda başvurular değerlendirmeye alınacaktır.
                        </p>
                    </div>

                </div>
            </div>

            </div>
        </section>

    </main>

    <?php include 'include/footer.html'; ?>

</body>

</html>