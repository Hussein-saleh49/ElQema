 <!-- JS Scripts -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/aos@3.0.0-beta.6/dist/aos.js"></script>
 <script>
     // Initialize AOS
     AOS.init({
         duration: 600,
         easing: 'ease-in-out',
         once: true
     });
 </script>
 <script src="{{ asset('assets/js/main.js') }}"></script>
 <script>
     const toggleBtn = document.getElementById('toggleBtn');
     const individualForm = document.getElementById('individualForm');
     const companyForm = document.getElementById('companyForm');

     toggleBtn.addEventListener('change', function() {
         if (this.checked) {
             individualForm.style.display = 'none';
             companyForm.style.display = 'block';
         } else {
             individualForm.style.display = 'block';
             companyForm.style.display = 'none';
         }
     });
 </script>
 <!-- Thumbnails Scroll + Heart JS -->
 <script>
     document.addEventListener("DOMContentLoaded", function() {
         const thumbsCard = document.querySelector(".thumbs-card");
         const desktopUp = document.querySelector(".desktop-arrow.thumb-arrow-up");
         const desktopDown = document.querySelector(".desktop-arrow.thumb-arrow-down");
         const mobileLeft = document.querySelector(".mobile-arrow.thumb-arrow-left");
         const mobileRight = document.querySelector(".mobile-arrow.thumb-arrow-right");
         const scrollAmount = 80;

         desktopUp?.addEventListener("click", () => thumbsCard.scrollBy({
             top: -scrollAmount,
             behavior: "smooth"
         }));
         desktopDown?.addEventListener("click", () => thumbsCard.scrollBy({
             top: scrollAmount,
             behavior: "smooth"
         }));
         mobileLeft?.addEventListener("click", () => thumbsCard.scrollBy({
             left: -scrollAmount,
             behavior: "smooth"
         }));
         mobileRight?.addEventListener("click", () => thumbsCard.scrollBy({
             left: scrollAmount,
             behavior: "smooth"
         }));

         // Heart button
         document.querySelectorAll('.heart-btn').forEach(btn => {
             btn.addEventListener('click', function() {
                 this.classList.toggle('active');
             });
         });
     });
 </script>
 