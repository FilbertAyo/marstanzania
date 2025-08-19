<section id="products" class="section-area">
    <div class="container">
        <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">Products</h6>
            <h2 class="mb-6">Our Featured Products</h2>
            <p>
                We offer a wide range of products to meet your needs.
            </p>
        </div>

        <div class="row">
            @php($items = $catalogues ?? [])
            @forelse ($items as $item)
                <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
                    <article class="group">
                        <div class="relative">
                            <a href="{{ $item['open_url'] ?? ($item['latest_file_url'] ?? 'javascript:void(0)') }}" target="_blank" rel="noopener"
                                class="w-full aspect-[3/2] rounded-xl overflow-hidden block">
                                <img src="{{ $item['logo_url'] ?? asset('assets/img/thumbnail/thumbnail-1.jpg') }}" alt="{{ $item['name'] ?? 'Catalogue' }}"
                                    class="w-full h-full object-cover group-hover:scale-[1.05] group-hover:rotate-[2deg]" />
                            </a>
                        </div>
                        <span class="block mt-6 w-full text-sm text-body-light-10 dark:text-body-dark-10">
                            {{ $item['name'] ?? 'Catalogue' }}
                            @if (data_get($item, 'latest_file.uploaded_at'))
                                - {{ \Illuminate\Support\Carbon::parse(data_get($item, 'latest_file.uploaded_at'))->format('d M Y') }}
                            @endif
                        </span>
                        <h4 class="mb-6 mt-3 font-semibold text-[1.5rem]">
                            <a href="{{ $item['latest_file_url'] ?? 'javascript:void(0)' }}" class="text-body-light-12 dark:text-body-dark-12" target="_blank" rel="noopener">
                                {{ $item['name'] ?? 'Catalogue' }}
                            </a>
                        </h4>
                        @if (data_get($item, 'latest_file.status'))
                            <p class="text-sm">Status: {{ data_get($item, 'latest_file.status') }}</p>
                        @endif
                    </article>
                </div>
            @empty
                <div class="col-12">
                    <div class="text-center text-body-light-10 dark:text-body-dark-10">No products available.</div>
                </div>
            @endforelse
        </div>
    </div>
</section>
