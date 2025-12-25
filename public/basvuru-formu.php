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
                                    <h2 class="hero-subtitle">Başvuru Formunu Doldurun</h2>
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

                        <h3>Esem Yapı Kariyer Başvuru Formu</h3>

                        <form action="" method="post" class="form-floating scroll-reveal-right mt-4" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="adSoyad" placeholder="Adınız Soyadınız"
                                    required>
                                <label for="adSoyad">Adınız Soyadınız</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" id="telefonNumarasi" placeholder="Telefon Numaranız"
                                    required>
                                <label for="telefonNumarasi">Telefon Numaranız</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="emailAdresi" placeholder="E-Mail Adresiniz"
                                    required>
                                <label for="emailAdresi">E-Mail Adresiniz</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="konu" placeholder="Konu" required>
                                <label for="konu">Konu</label>
                            </div>
                            <div class="career-file-upload mb-3">
                                <input type="file" id="cv_upload" class="d-none" accept=".pdf, .doc, .docx" required>
                                <label for="cv_upload" class="upload-area"
                                    data-default-text="CV / Dosya Seçiniz"
                                    data-selected-color="#28a745">
                                    <i class="icon-upload"></i>
                                    <span class="upload-text">CV / Dosya Seçiniz</span>
                                    <span class="file-name">.pdf, .doc, .docx (Max 5MB)</span>
                                </label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="aciklama" placeholder="Açıklama" required></textarea>
                                <label for="aciklama">Açıklama</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="kvkkOnay" required>
                                <label class="form-check-label" for="kvkkOnay">Kişisel verilerimin KVKK uyarınca yurtiçi ve
                                    yurtdışındaki üçüncü kişilere aktarılmasına izin veriyorum ve bu konuda gereği gibi
                                    bilgilendirildiğimi kabul ediyorum.</label>
                            </div>
                            <button type="submit" class="btn btn-outline-primary ">GÖNDER</button>
                        </form>


                    </div>

                </div>
            </div>

            </div>
        </section>

    </main>

    <?php include 'include/footer.html'; ?>

</body>

</html>