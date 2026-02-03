  <!-- Scroll Btn Start -->
  <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /> </svg>
    </div>
    <!-- Scroll Btn End -->
    <!-- Main JS -->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Counter Up JS -->
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <!-- Popper JS -->
    <script src="../assets/js/popper.min.js"></script>
    <!-- Progressbar JS -->
    <script src="../assets/js/progressbar.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Swiper Bundle JS -->
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <!-- Slick JS -->
    <script src="../assets/js/slick.min.js"></script>
    <!-- Isotope JS -->
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <!-- Waypoints JS -->
    <script src="../assets/js/jquery.waypoints.min.js"></script>
    <!-- Mean Menu JS -->
    <script src="../assets/js/jquery.meanmenu.min.js"></script>
    <!-- Custom JS -->
    <script src="../assets/js/custom.js"></script>
    <!-- Form Validation and W3Forms Handler JS -->
    <script src="../assets/js/form-validation.js"></script>
    <!-- W3Forms Handler JS (Legacy) -->
    <script src="../assets/js/w3forms-handler.js"></script>
    <script>
        (function($) {
            "use strict";
            var trustedClientsSwiper = new Swiper(".trusted-clients__slider", {
                loop: true,
                speed: 1500,
                slidesPerView: 4,
                spaceBetween: 0,
                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                breakpoints: {
                    1200: {
                        slidesPerView: 4
                    },
                    992: {
                        slidesPerView: 3
                    },
                    768: {
                        slidesPerView: 2
                    },
                    0: {
                        slidesPerView: 1
                    }
                },
                on: {
                    init: function() {
                        $('.trusted-clients__item').addClass('animate-fade-in');
                    }
                }
            });            
            if (typeof $.fn.appear !== 'undefined') {
                $('.trusted-clients__item').appear(function() {
                    $(this).addClass('animate-fade-in');
                }, {
                    accX: 0,
                    accY: -100
                });
            }
        })(jQuery);
    </script>
</body>

</html>
