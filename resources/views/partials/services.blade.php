<section id="services" class="section-area">
    <div class="container">
        <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">
                Services
            </h6>
            <h2 class="mb-6">Our Best Services</h2>
            <p>
                Discover our innovative solutions designed to make purchasing electronics easier, more flexible, and
                more rewarding for our customers across Tanzania.
            </p>
        </div>

        <div class="scroll-revealed portfolio-grid row">


            @foreach ($services as $service)
                <div class="portfolio col-12 sm:col-6 lg:col-4">
                    <article class="group" data-filter="branding">
                        <div class="relative overflow-hidden w-full aspect-[4/3] rounded-xl">
                            <img src="{{ $service['image'] ?? asset('assets/img/placeholder.png') }}"
                                alt="{{ $service['title'] ?? 'Service Title' }}" class="w-full h-full object-cover" />
                            <div
                                class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible">
                                <div class="flex flex-wrap gap-2 p-4">
                                    <div class="inline-block relative">
                                        <a href="#"
                                            class="portfolio-box text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center">
                                            <i class="lni lni-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4">
                            <h4 class="mb-2">
                                <a href="javascript:void(0)" class="text-[1.5rem] leading-tight text-inherit">
                                    {{ $service['title'] ?? 'Service Title' }}
                                </a>
                            </h4>
                            <p>
                                {{ $service['description'] ?? 'Service description...' }}
                            </p>
                        </div>
                    </article>
                </div>
            @endforeach




        </div>
    </div>
</section>
