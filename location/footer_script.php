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
    
    <!-- Trusted Clients Carousel Initialization -->
    <script>
        (function($) {
            "use strict";
            
            // Initialize Trusted Clients Swiper Carousel
            var trustedClientsSwiper = new Swiper(".trusted-clients__slider", {
                loop: true,
                speed: 1500,
                spaceBetween: 30,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                        spaceBetween: 15,
                    },
                    576: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 25,
                    },
                    992: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    1400: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                },
                on: {
                    init: function() {
                        // Add animation class when carousel initializes
                        $('.trusted-clients__item').addClass('animate-fade-in');
                    }
                }
            });
            
            // Animate items on scroll
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
