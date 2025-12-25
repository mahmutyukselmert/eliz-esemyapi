/*
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;
*/
//import Alert from 'bootstrap/js/dist/alert';
//import Button from 'bootstrap/js/dist/button';
import Carousel from 'bootstrap/js/dist/carousel';
import Collapse from 'bootstrap/js/dist/collapse';
import Dropdown from 'bootstrap/js/dist/dropdown';
import Modal from 'bootstrap/js/dist/modal';
//import Offcanvas from 'bootstrap/js/dist/offcanvas';
//import Popover from 'bootstrap/js/dist/popover';
//import ScrollSpy from 'bootstrap/js/dist/scrollspy';
import Tab from 'bootstrap/js/dist/tab';
//import Toast from 'bootstrap/js/dist/toast';
//import Tooltip from 'bootstrap/js/dist/tooltip';

// global erişim gerekiyorsa
window.bootstrap = {
  Carousel,
  Collapse,
  Dropdown,
  Modal,
  Tab
};

import ScrollReveal from 'scrollreveal';
document.addEventListener('DOMContentLoaded', function () {

  /* Scroll Reveal */
  const sr = ScrollReveal({
    duration: 1000,
    origin: 'top',
    distance: '50px',
    easing: 'ease-in-out',
    reset: false
  });

  sr.reveal('.scroll-reveal');
  sr.reveal('.scroll-reveal-bottom', { origin: 'bottom', distance: '100px' });
  sr.reveal('.scroll-reveal-left', { origin: 'left' });
  sr.reveal('.scroll-reveal-left-step-1', { origin: 'left', distance: '100px' });
  sr.reveal('.scroll-reveal-left-step-2', { origin: 'left', distance: '150px' });
  sr.reveal('.scroll-reveal-right', { origin: 'right' });
  sr.reveal('.scroll-reveal-top', { origin: 'top' });

  /* Navbar Scroll */
  const navbar = document.querySelector('header');
  const footer = document.getElementById("footer");
  const scrollToTop = document.getElementById("scroll-to-top");

  function handleScroll() {
    if (navbar) {
      if (window.scrollY > 50) {
        navbar.classList.add('fixed-top');
      } else {
        navbar.classList.remove('fixed-top');
      }
    }

    if (footer && scrollToTop) {
      const footerPosition = footer.getBoundingClientRect();
      const windowHeight = window.innerHeight;

      if (footerPosition.top < windowHeight) {
        scrollToTop.classList.remove("d-none");
      } else {
        scrollToTop.classList.add("d-none");
      }
    }
  }

  handleScroll(); // Initial check
  window.addEventListener('scroll', handleScroll);
  /* Navbar Scroll - End */
});

document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector("header");
  const logo = header.querySelector("img.img-fluid");
  const originalSrc = logo.getAttribute("src");
  const scrolledSrc = logo.dataset.scrolledimage;

  window.addEventListener("scroll", function () {
    if (window.scrollY > 20) {
      if (!header.classList.contains("fixed-top")) {
        header.classList.add("fixed-top");
        logo.setAttribute("src", scrolledSrc);
      }
    } else {
      if (!header.classList.contains("fixed-top")) {
        header.classList.remove("fixed-top");
        logo.setAttribute("src", originalSrc);
      }
    }
  });
});

//Counter Animation
const startCounter = (obj, start, end, duration) => {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
};
const counterObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const el = entry.target;
      const targetValue = parseInt(el.dataset.value);
      if (!isNaN(targetValue)) {
        startCounter(el, 0, targetValue, 2000);
      }
      observer.unobserve(el);
    }
  });
}, { threshold: 0.5 });
document.querySelectorAll('.countup').forEach(el => {
  counterObserver.observe(el);
});

//Dropdown açılır menü
//Custom Dropdown
document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".custom-dropdown-menu");

  dropdowns.forEach(function (dropdown) {
    const toggle = dropdown.querySelector(".dropdown-toggle");
    const menu = dropdown.querySelector(".dropdown-menu");

    let clickedOnce = false;

    dropdown.addEventListener("mouseenter", () => {
      if (window.innerWidth >= 1200) {
        toggle.classList.add("show");
        menu.classList.add("show");
      }
    });

    dropdown.addEventListener("mouseleave", () => {
      if (window.innerWidth >= 1200) {
        toggle.classList.remove("show");
        menu.classList.remove("show");
      }
    });

    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      if (window.innerWidth >= 1200) {
        return (window.location.href = toggle.getAttribute("href"));
      } else {
        if (!clickedOnce) {
          toggle.classList.add("show");
          menu.classList.add("show");
          clickedOnce = true;
        } else {
          window.location.href = toggle.getAttribute("href");
        }
      }
    });
  });

  // Alt menü (dropdown-submenu) için yeni kod
  const subDropdowns = document.querySelectorAll(".dropdown-submenu");

  subDropdowns.forEach(function (subDropdown) {
    const subToggle = subDropdown.querySelector(".dropdown-toggle");
    const subMenu = subDropdown.querySelector(".dropdown-menu");

    // Masaüstü ekranlarda hover ile açılmasını sağlar
    if (window.innerWidth >= 1200) {
      subDropdown.addEventListener("mouseenter", () => {
        subToggle.classList.add("show");
        subMenu.classList.add("show");
      });

      subDropdown.addEventListener("mouseleave", () => {
        subToggle.classList.remove("show");
        subMenu.classList.remove("show");
      });
    }

    // Mobil cihazlarda tıklama ile açılmasını sağlar
    subToggle.addEventListener("click", function (e) {
      if (window.innerWidth < 1200) {
        e.preventDefault(); // Linke gitmeyi engelle
        subToggle.classList.toggle("show");
        subMenu.classList.toggle("show");
      }
    });
  });

});
//

import EmblaCarousel from 'embla-carousel';
import Autoplay from 'embla-carousel-autoplay';

document.addEventListener('DOMContentLoaded', () => {
  const viewport = document.querySelector('#productCarousel .embla__viewport');
  if (!viewport) return;

  const embla = EmblaCarousel(
    viewport,
    {
      loop: true,
      align: 'start',
      slidesToScroll: 1,
    },
    [
      Autoplay({
        delay: 3000,
        stopOnMouseEnter: true,
        stopOnInteraction: false,
        playOnMouseLeave: true
      })
    ]
  );

  document.querySelector('.next-btn')?.addEventListener('click', () => embla.scrollNext());
  document.querySelector('.prev-btn')?.addEventListener('click', () => embla.scrollPrev());
});

document.addEventListener('DOMContentLoaded', () => {
  const viewportProductDetail = document.querySelector('#productDetailCarousel .embla__viewport');
  if (!viewportProductDetail) return;

  const emblaProductDetail = EmblaCarousel(
    viewportProductDetail,
    {
      loop: true,
      align: 'start',
      slidesToScroll: 1,
    },
    [
      Autoplay({
        delay: 3000,
        stopOnMouseEnter: true,
        stopOnInteraction: false,
        playOnMouseLeave: true
      })
    ]
  );

  document.querySelector('.next-btn-pd')?.addEventListener('click', () => emblaProductDetail.scrollNext());
  document.querySelector('.prev-btn-pd')?.addEventListener('click', () => emblaProductDetail.scrollPrev());
});


const referenceNode = document.querySelector('#referenceDetailCarousel');
if (referenceNode) {
  const emblaReferenceDetail = EmblaCarousel(
    referenceNode.querySelector('.embla__viewport'),
    {
      loop: true,
      align: (viewSize, snapSize) => (viewSize - snapSize) / 2 - (snapSize / 2 + 10),
      skipSnaps: false,
      Autoplay: false,
      duration: 30,
      breakpoints: {
        '(max-width: 991.98px)': {
          align: 'center'
        }
      }
    }
  );

  const setActiveCenterSlides = () => {
    const slides = emblaReferenceDetail.slideNodes();
    const selectedIndex = emblaReferenceDetail.selectedScrollSnap();
    slides.forEach(slide => slide.classList.remove('is-active'));
    const isMobile = window.innerWidth < 992;

    if (isMobile) {
      slides[selectedIndex].classList.add('is-active');
    } else {
      const firstActive = selectedIndex;
      const secondActive = (selectedIndex + 1) % slides.length;

      slides[firstActive].classList.add('is-active');
      slides[secondActive].classList.add('is-active');
    }
  };

  window.addEventListener('resize', setActiveCenterSlides);

  emblaReferenceDetail.on('select', setActiveCenterSlides);
  emblaReferenceDetail.on('init', setActiveCenterSlides);
  emblaReferenceDetail.on('reInit', setActiveCenterSlides);

  setActiveCenterSlides();

  document.querySelector('.next-btn')?.addEventListener('click', () => emblaReferenceDetail.scrollNext());
  document.querySelector('.prev-btn')?.addEventListener('click', () => emblaReferenceDetail.scrollPrev());
}

document.querySelectorAll('.career-file-upload input[type="file"]').forEach(input => {
  input.addEventListener('change', function (e) {
    const label = this.nextElementSibling; 
    const uploadText = label.querySelector('.upload-text');
    const defaultText = label.getAttribute('data-default-text');
    const activeColor = label.getAttribute('data-selected-color');

    if (this.files && this.files.length > 0) {
      uploadText.textContent = this.files[0].name;
      if (activeColor) label.style.borderColor = activeColor;
      document.querySelector('.career-file-upload i.icon-upload').style.color = activeColor;
    } else {
      uploadText.textContent = defaultText;
      label.style.removeProperty('border-color');
      document.querySelector('.career-file-upload i.icon-upload').style.removeProperty('color');
    }
  });
});