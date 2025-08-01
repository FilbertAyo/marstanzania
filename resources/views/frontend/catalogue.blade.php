<x-guest-layout>
    <div class="container-fluid p-5">
        <div class="text-center mb-5">
            <img src="{{ asset('assets/images/shortblogo.png') }}" alt="img" style="height: 100px;">
            <h3>CATALOGUE</h3>
        </div>

        <div class="row g-4 m-5 justify-content-center">
            @foreach ($catalogues as $catalogue)
                <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                    <div class="card h-100 shadow-sm position-relative" style="width: 100%;">
                        @if ($catalogue->latestFile)
                            <a href="{{ asset( $catalogue->latestFile->file_path) }}" target="_blank"
                                class="stretched-link"></a>
                        @endif
                        <div class="card-body text-center">
                            <h2 class="mb-3">{{ $catalogue->name }}</h2>
                            @if ($catalogue->logo)
                                <img src="{{ asset( $catalogue->logo) }}" alt="{{ $catalogue->name }}"
                                    class="img-fluid" style="height: 180px; object-fit: contain;">
                            @else
                                <p class="text-muted">No Logo</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</x-guest-layout>
