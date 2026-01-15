(function ($) {
  "use strict";

  /* =============================
     Spinner (اختياري)
  ============================= */
  var spinner = function () {
    setTimeout(function () {
      const spinnerEl = document.getElementById('spinner');
      if (spinnerEl) spinnerEl.classList.remove('show');
    }, 1);
  };
  spinner();

  /* =============================
     Hover effect على service cards
  ============================= */
  $(document).ready(function () {
    $('.service-card-horizontal').each(function () {
      let color = "rgba(0,0,0,0.15)";
      if ($(this).hasClass('card-color-1')) color = "rgba(193, 229, 216, 0.8)";
      if ($(this).hasClass('card-color-2')) color = "rgba(24, 119, 242, 0.8)";
      if ($(this).hasClass('card-color-3')) color = "rgba(24, 119, 242, 0.8)";

      const imgCard = $(this).find('.service-img-card');

      $(this).hover(
        function () {
          $(this).css({
            transform: 'scale(1.03)',
            transition: 'all 0.3s ease',
            boxShadow: `0 20px 50px ${color}`,
            filter: 'brightness(1.05)',
            background: `linear-gradient(123deg, ${color} 0%, rgba(255,255,255,0.3) 100%)`
          });

          imgCard.css({
            transform: 'scale(1.05)',
            transition: 'all 0.3s ease'
          });
        },
        function () {
          $(this).css({
            transform: 'scale(1)',
            transition: 'all 0.3s ease',
            boxShadow: '0 8px 30px rgba(0,0,0,0.1)',
            filter: 'brightness(1)',
            background: 'rgba(255,255,255,0.3)'
          });

          imgCard.css({
            transform: 'scale(1)',
            transition: 'all 0.3s ease'
          });
        }
      );
    });
  });

  /* =============================
     Equal height for cards
  ============================= */
  function setEqualHeight(rowSelector) {
    const rows = document.querySelectorAll(rowSelector);

    rows.forEach(row => {
      const cards = row.querySelectorAll('.service-card-horizontal');
      if (!cards.length) return;

      cards.forEach(card => card.style.height = 'auto');

      let maxHeight = 0;
      cards.forEach(card => {
        if (card.offsetHeight > maxHeight) maxHeight = card.offsetHeight;
      });

      cards.forEach(card => card.style.height = maxHeight + 'px');
    });
  }

  window.addEventListener('load', () => setEqualHeight('.row.g-4'));
  window.addEventListener('resize', () => setEqualHeight('.row.g-4'));

})(jQuery);

/* =============================
   Hero animation
============================= */
window.addEventListener('load', function () {
  document
    .querySelectorAll('.hero-text-animate, .hero-img-animate')
    .forEach((el, i) => {
      setTimeout(() => {
        el.classList.add('show');
      }, 200 * i);
    });
});

/* =============================
   AOS (لو مستخدم فقط)
============================= */
if (typeof AOS !== 'undefined') {
  document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  });

  window.addEventListener('load', () => AOS.refresh());
}

/* =============================
   Heart icon toggle
============================= */
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('.bi-heart').forEach(heart => {
    heart.addEventListener('click', function () {
      this.classList.toggle('active');
    });
  });

  /* =============================
     Navbar links active
  ============================= */
  const navbarLinks = document.querySelectorAll('.custom-nav-link'); // <-- updated selector
  navbarLinks.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault(); // منع الفورم الافتراضي قبل redirect
      navbarLinks.forEach(l => l.classList.remove('active'));
      this.classList.add('active');

      // Redirect
      window.location.href = this.href;
    });
  });
});
