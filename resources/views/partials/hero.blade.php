<section id="home"
    class="relative overflow-hidden bg-primary text-primary-color pt-[120px] md:pt-[130px] lg:pt-[160px]">
    <div class="container">
        <div class="-mx-5 flex flex-wrap items-center">
            <div class="w-full px-5">
                <div class="scroll-revealed mx-auto max-w-[780px] text-center">
                    <h1
                        class="mb-6 text-3xl font-bold leading-snug text-primary-color sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-tight">
                        {{ $hero['hero_title'] ?? 'Default Title' }}
                    </h1>

                    <p class="mx-auto mb-9 max-w-[600px] text-base text-primary-color sm:text-lg sm:leading-normal">
                        {{ $hero['hero_text'] }}
                    </p>

                    <ul class="mb-10 flex flex-wrap items-center justify-center gap-4 md:gap-5">
                        <li>
                            <a href="#services"
                                class="inline-flex items-center justify-center rounded-md bg-primary-color text-primary px-5 py-3 text-center text-base font-medium shadow-md hover:bg-primary-light-5 md:px-7 md:py-[14px]"
                                role="button">Our Services</a>
                        </li>

                        <li>
                            <a href="javascript:void(0)"
                                class="video-popup flex items-center gap-4 rounded-md bg-primary-color/[0.15] px-5 py-3 text-base font-medium text-primary-color hover:bg-primary-color hover:text-primary md:px-7 md:py-[14px]"
                                role="button"><i class="lni lni-play text-lg/none"></i> Watch Intro</a>
                        </li>
                    </ul>

                    <div>
                        <p class="mb-4 text-center text-primary-color">Partnered by</p>

                        <div class="scroll-revealed flex items-center justify-center gap-6 sm:gap-8 md:gap-10 text-center">
                            <a href="#" target="_blank"
                                class="text-primary-color/60 hover:text-primary-color">
                                <img src="{{ asset('assets/img/hisense.png') }}" alt="Hisense" class="h-8 sm:h-10">
                            </a>
                            <a href="#" target="_blank" class="text-primary-color/60 hover:text-primary-color">
                                <img src="{{ asset('assets/img/samsung.png') }}" alt="Samsung" class="h-8 sm:h-10">
                            </a>
                            <a href="#" target="_blank" class="text-primary-color/60 hover:text-primary-color">
                                <img src="{{ asset('assets/img/lg.png') }}" alt="LG" class="h-8 sm:h-10">
                            </a>
                            <a href="#" target="_blank" class="text-primary-color/60 hover:text-primary-color">
                                <img src="{{ asset('assets/img/toshiba.png') }}" alt="Toshiba" class="h-8 sm:h-10">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="w-full px-5">
                <div class="scroll-revealed relative z-10 mx-auto max-w-[845px]">
                    <figure class="mt-16">
                        <img src="{{ asset($hero['hero_image']) }}" alt="Hero image"
                            class="mx-auto max-w-full rounded-t-xl rounded-tr-xl" />
                    </figure>

                    <div class="absolute -left-9 bottom-0 z-[-1]">
                        <img src="{{ asset('assets/img/dots.svg') }}" alt="" class="w-[120px] opacity-75" />
                    </div>

                    <div class="absolute -right-6 -top-6 z-[-1]">
                        <img src="{{ asset('assets/img/dots.svg') }}" alt="" class="w-[120px] opacity-75" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
