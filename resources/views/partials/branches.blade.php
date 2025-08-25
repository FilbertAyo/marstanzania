
<section id="testimonials" class="m-3">
    <div class="container-fluid">
        <div class="swiper testimonial-carousel common-carousel scroll-revealed">
            <div class="swiper-wrapper">
                @foreach ($branches as $branch)
                <div class="swiper-slide">

                    <div class="swiper-slide">
                        <div class=" bg-gray-100 dark:bg-gray-800 px-4 py-5 text-center">
                            <h3 class="text-sm font-semibold text-gray-900 dark:text-white">{{ $branch['name'] }}</h3>
                            <p class="text-xs text-gray-600 dark:text-gray-300">{{ $branch['region'] }}</p>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".testimonial-carousel", {
        slidesPerView: 4,   // number of cards visible at once
        spaceBetween: 20,
        loop: true,
        speed: 5000,       // smooth continuous effect
        autoplay: {
            delay: 0,      // no pause, continuous
            disableOnInteraction: false,
        },
        freeMode: true,
        freeModeMomentum: false,
    });
</script>
