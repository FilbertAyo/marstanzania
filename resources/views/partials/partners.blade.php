<section id="clients" class="section-area">
    <div class="container">
        <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">
                Clients
            </h6>
            <h2 class="mb-6">Our Awesome Clients</h2>
            <p>
                There are many variations of passages of Lorem Ipsum available but
                the majority have suffered alteration in some form.
            </p>
        </div>

        <div class="">
            <div class="row">

                @foreach ($partners as $partner)
                    <div class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3">
                        <img src="{{ asset($partner['logo']) }}" alt="Brand Logo Image"
                            class="h-[80px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0" />
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</section>
