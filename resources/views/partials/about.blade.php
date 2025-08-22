<section id="about" class="section-area">
    <div class="container">
        <div class="grid grid-cols-1 gap-14 lg:grid-cols-2">
            <!-- Image -->
            <div class="w-full">
                <figure class="scroll-revealed max-w-[480px] mx-auto">
                    <img src="{{ asset($hero['about_image']) }}" alt="About image" class="rounded-xl" />
                </figure>
            </div>

            <!-- Content -->
            <div class="w-full">
                <div class="scroll-revealed">
                    <h6 class="mb-2 block text-lg font-semibold text-primary">
                        About Us
                    </h6>
                    <h2 class="mb-6">
                        Bringing Premium Electronics to Every Home in Tanzania
                    </h2>
                </div>

                <div class="tabs scroll-revealed">
                    <!-- Tabs Navigation -->
                    <nav class="tabs-nav flex flex-wrap gap-4 my-8" role="tablist" aria-label="About us tabs">
                        <button type="button"
                            class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                            data-web-toggle="tabs" data-web-target="tabs-panel-profile"
                            id="tabs-list-profile" role="tab" aria-controls="tabs-panel-profile">
                            Our Profile
                        </button>

                        <button type="button"
                            class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                            data-web-toggle="tabs" data-web-target="tabs-panel-vision" id="tabs-list-vision"
                            role="tab" aria-controls="tabs-panel-vision">
                            Our Vision
                        </button>

                        <button type="button"
                            class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                            data-web-toggle="tabs" data-web-target="tabs-panel-history"
                            id="tabs-list-history" role="tab" aria-controls="tabs-panel-history">
                            Our History
                        </button>
                    </nav>

                    <!-- Profile Tab -->
                    <div class="tabs-content mt-4" id="tabs-panel-profile" tabindex="-1" role="tabpanel"
                        aria-labelledby="tabs-list-profile">
                        <p>
                            Mars Communications Limited is a trusted national distributor of premium electronic appliances from
                            world-renowned brands including Hisense, Samsung, Toshiba, and LG. From TVs and refrigerators to washing
                            machines, dishwashers, and more, we make modern living accessible across Tanzania.
                        </p>
                        <p>
                            As the leading multi-brand electronics company dealing in both wholesale and retail sales, we are proud
                            to be the go-to outlet for televisions, air conditioners, refrigerators, washing machines, and other
                            home appliances.
                        </p>
                        <ul class="list-disc pl-5 mt-4">
                            <li>Wide selection of top-brand electronics at competitive prices.</li>
                            <li>Reliable after-sales support and warranty services for all our products.</li>
                            <li>Customer-focused service with fast delivery and excellent product knowledge.</li>
                        </ul>

                    </div>

                    <!-- Vision Tab -->
                    <div class="tabs-content mt-4" id="tabs-panel-vision" tabindex="-1" role="tabpanel"
                        aria-labelledby="tabs-list-vision">
                        <p>
                            Our vision is to make premium electronics accessible to every household and business in Tanzania, enabling
                            modern, comfortable, and efficient living through innovation and quality.
                        </p>
                        <p>
                            We aim to be the most trusted name in electronics distribution, recognized for delivering excellence and
                            value in every product we supply.
                        </p>
                    </div>

                    <!-- History Tab -->
                    <div class="tabs-content mt-4" id="tabs-panel-history" tabindex="-1" role="tabpanel"
                        aria-labelledby="tabs-list-history">
                        <p>
                            Since our inception, Mars Communications Limited has steadily grown from a small distributor to a leading
                            force in the Tanzanian electronics market. Our journey is marked by strong partnerships with global brands
                            and an unwavering commitment to customer satisfaction.
                        </p>
                        <p>
                            Today, we stand as a trusted name in both wholesale and retail electronics, with a loyal customer base and
                            a reputation for quality, reliability, and exceptional service.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
