<section class="py-8 text-white" style="background-color: #ff2d55">
    <div class="container mx-auto px-4 ">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">

        <div>
          <p class="text-sm font-semibold mb-2">Offer Ends: Aug 28, 09:59 (GMT+3)</p>
          <h1 class="text-4xl font-bold mb-3">
            UP TO <span class="text-yellow-400">80% OFF</span>
          </h1>

          <div class="bg-white text-gray-800 p-6 rounded-lg shadow">
            <h2 class="text-2xl font-extrabold mb-2 offer-title">PARTY ROCKER</h2>
            <p class="text-sm mb-3">Model: <span class="font-semibold offer-model">569B95</span></p>

            <div>
              <p class="text-lg text-gray-500 line-through offer-original-price" style="text-decoration: line-through;">TZS 1,700,000</p>
              <p class="text-3xl font-bold text-red-600 offer-discounted-price">TZS 1,611,285.66</p>
            </div>
          </div>
        </div>

        <div>
          <div class="swiper mySwiper rounded-lg shadow-lg">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="assets/img/offer1.jpg" alt="Deal 1" class="w-full h-[300px] object-cover rounded-lg">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/offer2.jpg" alt="Deal 2" class="w-full h-[300px] object-cover rounded-lg">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/offer3.jpg" alt="Deal 3" class="w-full h-[300px] object-cover rounded-lg">
              </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>



  <script>
    const offersData = [
  {
    title: 'PARTY ROCKER',
    model: '569B95',
    originalPrice: 'TZS 1,700,000',
    discountedPrice: 'TZS 1,611,285.66',
    image: 'assets/img/offer1.jpg'
  },
  {
    title: 'OFFER 2 TITLE',
    model: 'ABC1234',
    originalPrice: 'TZS 2,500,000',
    discountedPrice: 'TZS 2,000,000.00',
    image: 'assets/img/offer2.jpg'
  },
  {
    title: 'OFFER 3 TITLE',
    model: 'XYZ5678',
    originalPrice: 'TZS 900,000',
    discountedPrice: 'TZS 750,000.00',
  },
];

new Swiper(".mySwiper", {
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  // Add the slideChange event listener
  on: {
    slideChange: function() {
      // Get the index of the current active slide
      const activeIndex = this.realIndex;

      // Select the HTML elements you want to change
      const titleEl = document.querySelector('.offer-title');
      const modelEl = document.querySelector('.offer-model');
      const originalPriceEl = document.querySelector('.offer-original-price');
      const discountedPriceEl = document.querySelector('.offer-discounted-price');

      // Update the content with data from the offersData array
      titleEl.textContent = offersData[activeIndex].title;
      modelEl.textContent = offersData[activeIndex].model;
      originalPriceEl.textContent = offersData[activeIndex].originalPrice;
      discountedPriceEl.textContent = offersData[activeIndex].discountedPrice;
    }
  }
});
  </script>
