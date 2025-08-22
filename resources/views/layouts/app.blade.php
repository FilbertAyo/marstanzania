<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Essential Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SEO & Social -->
    <meta name="description" content="Mars Communications Limited is Tanzania's trusted distributor of premium electronic appliances from world-renowned brands including Hisense, Samsung, Toshiba, and LG. Wholesale & retail sales, after-sales support, and fast delivery." />
    <meta name="keywords" content="Mars Communications, electronics, Tanzania, Hisense, Samsung, Toshiba, LG, appliances, distributor, wholesale, retail, TVs, refrigerators, washing machines, air conditioners" />
    <meta name="author" content="Mars Communications Limited" />
    <meta name="application-name" content="Mars Communications Limited" />
    <meta name="rating" content="general" />
    <meta name="language" content="English" />

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Mars Communications Limited - Premium Electronics Distributor in Tanzania" />
    <meta property="og:site_name" content="Mars Communications Limited" />
    <meta property="og:description" content="Leading multi-brand electronics company for wholesale and retail. TVs, refrigerators, washing machines, air conditioners, and more from top brands. Fast delivery, warranty, and customer-focused service." />
    <meta property="og:image" content="{{ asset('assets/img/iconW.png') }}" />
    <meta property="og:url" content="https://marstanzania.com" />
    <meta property="og:type" content="website" />

    <!-- Twitter -->
    <meta name="twitter:title" content="Mars Communications Limited - Premium Electronics Distributor in Tanzania" />
    <meta name="twitter:description" content="Wide selection of top-brand electronics at competitive prices. Reliable after-sales support and warranty. Customer-focused service with fast delivery." />
    <meta name="twitter:image" content="{{ asset('assets/img/iconW.png') }}" />

    <!-- Windows -->
    <meta name="msapplication-TileColor" content="#163351" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/iconW.png') }}" />
    <meta name="theme-color" content="#163351" />

    <title>@yield('title', 'Mars Communications Limited')</title>

    <!-- Canonical -->
    <link rel="canonical" href="https://marstanzania.com" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/iconW.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/iconW.png') }}" />
    <link rel="icon" type="image/png" sizes="194x194" href="{{ asset('assets/img/iconW.png') }}" />
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/iconW.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/iconW.png') }}" />

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    @vite('resources/src/css/tailwind.css')
    @livewireStyles


</head>

<body>

    <div class="page-loading fixed top-0 bottom-0 left-0 right-0 z-[99999] flex items-center justify-center bg-primary-light-1 dark:bg-primary-dark-1 opacity-100 visible pointer-events-auto"
        role="status" aria-live="polite" aria-atomic="true" aria-label="Loading...">
        <div class="grid-loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    @yield('content')

    <button type="button"
        class="inline-flex w-12 h-12 rounded-md items-center justify-center text-lg/none bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10 fixed bottom-[117px] right-[20px] hover:-translate-y-1 opacity-100 visible z-50 is-hided"
        data-web-trigger="scroll-top" aria-label="Scroll to top">
        <i class="lni lni-chevron-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <script src="./assets/js/main.js"></script>
    <script>
        // Scroll Reveal
        const sr = ScrollReveal({
            origin: "bottom",
            distance: "16px",
            duration: 1000,
            reset: false,
        });

        sr.reveal(`.scroll-revealed`, {
            cleanup: true,
        });

        // GLightBox
        GLightbox({
            selector: ".video-popup",
            href: "https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM",
            type: "video",
            source: "youtube",
            width: 900,
            autoplayVideos: true,
        });

        const myGallery3 = GLightbox({
            selector: ".portfolio-box",
            type: "image",
            width: 900,
        });

        // Testimonial
        const testimonialSwiper = new Swiper(".testimonial-carousel", {
            slidesPerView: 1,
            spaceBetween: 30,

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>


    @livewireScripts
</body>

</html>
