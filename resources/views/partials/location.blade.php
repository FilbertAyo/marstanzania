<nav class="flex flex-wrap gap-3 justify-center mb-3 mt-3">
    @foreach ($branches as $branch)
      <a href="javascript:void(0)"
         onclick="showBranch('{{ $branch['id'] }}')"
         class="px-4 py-2 bg-primary text-white rounded-lg inline-block">
        {{ $branch['name'] }}, {{ $branch['region'] }}
      </a>
    @endforeach
  </nav>

  <section id="map" class="w-full h-[500px] overflow-hidden rounded-lg shadow"></section>

  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

  <script>
    // Initialize map
    const map = L.map('map').setView([-6.8, 39.28], 12); // Default center

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Branch data from DB
    const branches = [
      @foreach ($branches as $branch)
        {
          id: "{{ $branch['id'] }}",
          name: "{{ $branch['name'] }}",
          region: "{{ $branch['region'] }}",
          url: "{{ $branch['location_url'] }}"
        },
      @endforeach
    ];

    // Store markers
    const markers = {};

    // Add all markers
    branches.forEach(branch => {
      // Extract lat/lng from embed URL (Google embed links contain !3dLAT!4dLNG)
      const match = branch.url.match(/!3d(-?\d+\.\d+)!4d(-?\d+\.\d+)/);
      if (match) {
        const lat = parseFloat(match[1]);
        const lng = parseFloat(match[2]);
        const marker = L.marker([lat, lng])
          .bindPopup(`<b>${branch.name}</b><br>${branch.region}`)
          .addTo(map);
        markers[branch.id] = marker;
      }
    });

    // Fit map to show all markers
    const group = new L.featureGroup(Object.values(markers));
    if (Object.keys(markers).length > 0) {
      map.fitBounds(group.getBounds());
    }
  </script>

  <script>
    // This function must be in the global scope to be called from the HTML `onclick`
    function showBranch(id) {
      const marker = markers[id];
      if (marker) {
        map.setView(marker.getLatLng(), 16);
        marker.openPopup();
      }
    }
  </script>
