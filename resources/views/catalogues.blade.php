@extends('layouts.app')

@section('title', 'Mars Tanzania')

@section('content')

    @include('partials.navigation')

    <main class="main relative">
        <section id="home"
            class="relative overflow-hidden bg-primary text-primary-color pt-[120px] md:pt-[130px] lg:pt-[160px]">
            <div class="container">
                <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
                    <h6 class="mb-2 block text-lg font-semibold text-danger">Catalogues</h6>
                    <h2 class="mb-6 text-white">Browse Our Catalogues</h2>
                    <p>Click any catalogue to open its latest visible file.</p>
                </div>

                <div class="row">
                    @php($items = $catalogues ?? [])
                    @forelse ($items as $item)
                        <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
                            <article class="group">
                                <div class="relative">
                                    <a href="{{ $item['open_url'] ?? ($item['latest_file_url'] ?? 'javascript:void(0)') }}"
                                        target="_blank" rel="noopener"
                                        class="relative w-full aspect-[3/2] rounded-xl overflow-hidden block">
                                        <img src="{{ $item['logo_url'] ?? asset('assets/img/thumbnail/thumbnail-1.jpg') }}"
                                            alt="{{ $item['name'] ?? 'Catalogue' }}"
                                            class="absolute inset-0 block w-full h-full object-cover object-center group-hover:scale-[1.05] group-hover:rotate-[2deg]" />
                                    </a>
                                </div>
                                <span class="block mt-6 w-full text-sm text-danger">
                                    {{ $item['name'] ?? 'Catalogue' }}
                                    @if (data_get($item, 'latest_file.uploaded_at'))
                                        -
                                        {{ \Illuminate\Support\Carbon::parse(data_get($item, 'latest_file.uploaded_at'))->format('d M Y') }}
                                    @endif
                                </span>
                                <h4 class="mb-6 mt-3 font-semibold text-[1.5rem]">
                                    <a href="{{ $item['open_url'] ?? ($item['latest_file_url'] ?? 'javascript:void(0)') }}"
                                        class="text-body-light-12 dark:text-body-dark-12 text-white" target="_blank"
                                        rel="noopener">
                                        {{ $item['name'] ?? 'Catalogue' }}
                                    </a>
                                </h4>

                            </article>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="text-center text-body-light-10 dark:text-body-dark-10">No catalogues available.
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

    </main>

    @include('partials.footer')

@endsection
