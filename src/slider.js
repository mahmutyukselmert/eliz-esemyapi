document.addEventListener("DOMContentLoaded", function () {
  const carouselElement = document.getElementById("carouselSlider");

  // Bootstrap Carousel'i manuel başlat (Otomatik geçiş kapalı)
  const carousel = new bootstrap.Carousel(carouselElement, {
    interval: false, // Bootstrap'ın kendi zamanlayıcısını kapatıyoruz
    pause: false, // Mouse üzerine gelince durmasını engelliyoruz
  });

  // Progress Bar'ın kendisi (SVG içindeki <circle>)
  // Önceki koddaki hata: progressBar, <span class="progress-ring"> idi. <circle> olmalı.
  const progressBarCircle = carouselElement.querySelector(".progress-ring-circle");

  // Eksik olan değişken tanımlamaları:
  // Bu değerler, CSS'teki --progress-ring-radius ve r="18" ile aynı olmalı.
  const radius = 18;
  const circumference = 2 * Math.PI * radius;

  let timer = null;

  // --- PROGRESS RING FONKSİYONLARI ---

  function resetProgressRing() {
    if (progressBarCircle) {
      progressBarCircle.classList.remove("is-animating");
      progressBarCircle.style.transitionDuration = "0s";
      // Başlangıç değeri: Tamamen boş (stroke-dashoffset = Çevre)
      progressBarCircle.style.strokeDashoffset = circumference;
    }
  }

  function animateProgressRing(durationMs) {
    // Konsol çıktısı artık çalışacaktır.
    //console.log("Animating progress ring for duration:", durationMs);

    resetProgressRing(); // Önce sıfırla

    // İlerlemenin dolmasını sağlayacak süreyi ayarla
    if (progressBarCircle) {
      // JS'in transitionDuration'ı uygulaması için küçük bir gecikme (bir sonraki tick)
      setTimeout(() => {
        progressBarCircle.classList.add("is-animating");
        progressBarCircle.style.transitionDuration = `${durationMs / 1000}s`; // Saniyeye çevir
        // Bitiş değeri: Tamamen dolu (stroke-dashoffset = 0)
        progressBarCircle.style.strokeDashoffset = "0";
      }, 10);
    }
  }

  // --- ANA MANTIK FONKSİYONU ---
  function playSlide() {
    // 1. Önceki tüm zamanlayıcıları ve video olaylarını temizle
    clearTimeout(timer);
    const allVideos = carouselElement.querySelectorAll("video");
    allVideos.forEach((v) => {
      v.pause();
      v.onended = null;
    });
    resetProgressRing(); // Yeni slayt başladığında progress ring'i sıfırla

    // 2. Şu an aktif olan slide'ı bul
    const activeItem = carouselElement.querySelector(".carousel-item.active");
    if (!activeItem) return;

    const type = activeItem.getAttribute("data-type");
    const video = activeItem.querySelector("video");

    // --- SENARYO 1: VİDEO ---
    if (type === "video" && video) {
      // Eğer video yüklenmemişse, yükleme süresini bekle
      if (video.readyState < 2) {
        video.onloadeddata = () => handleVideoPlayback(video, carousel);
      } else {
        handleVideoPlayback(video, carousel);
      }
    }

    // --- SENARYO 2: RESİM ---
    else {
      // HTML'den süreyi al (yoksa 5000ms varsay)
      let duration = parseInt(activeItem.getAttribute("data-interval"));
      if (isNaN(duration)) duration = 5000;

      animateProgressRing(duration);

      timer = setTimeout(() => {
        carousel.next();
      }, duration);
    }
  }

  function handleVideoPlayback(video, carousel) {
    // Videonun süresini al ve Progress Ring'i başlat
    const videoDurationMs = video.duration * 1000;
    animateProgressRing(videoDurationMs);

    video.currentTime = 0;
    video
      .play()
      .then(() => {
        video.onended = () => {
          resetProgressRing();
          carousel.next();
        };
      })
      .catch((err) => {
        console.error("Video oynatılamadı:", err);
        // Hata olursa 4 saniye sonra geç
        timer = setTimeout(() => carousel.next(), 4000);
      });
  }

  // --- OLAY DİNLEYİCİLERİ ---
  playSlide();
  carouselElement.addEventListener("slid.bs.carousel", playSlide);
  carouselElement.addEventListener("slide.bs.carousel", () => {
    clearTimeout(timer);
    resetProgressRing(); // Elle geçişte de sıfırla
  });
});
