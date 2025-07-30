<x-app-layout>

    <div class="container mt-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#createCatalogueModal">
            Add Catalogue
        </button>

        <div class="row">
            @foreach ($catalogues as $catalogue)
                <div class="col-md-6 col-xl-3">
                    <div class="card position-relative h-100">
                        <a href="{{ route('catalogues.show', $catalogue->id) }}" class="stretched-link"></a>
                        <div class="card-body">
                            <h4 class="mb-3">{{ $catalogue->name }}</h4>
                            @if ($catalogue->logo)
                                <img src="{{ asset('storage/' . $catalogue->logo) }}" alt="{{ $catalogue->name }}"
                                    class="img-fluid" style="height: 150px; object-fit: contain;">
                            @else
                                <p>No Logo</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="createCatalogueModal" tabindex="-1" aria-labelledby="createCatalogueModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('catalogues.store') }}" method="POST" enctype="multipart/form-data"
                class="modal-content">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="createCatalogueModalLabel">Add Catalogue</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Catalogue Name</label>
                        <input type="text" name="name" class="form-control" required placeholder="e.g. Samsung">
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo (Image)</label>
                        <input type="file" name="logo" class="form-control" accept="image/*" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
