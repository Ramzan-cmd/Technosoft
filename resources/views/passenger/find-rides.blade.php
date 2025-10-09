@extends('layouts.app')

@section('title','Find Rides')

@section('content')
  <div class="card-panel">
    <h5 class="mb-3">Find Your Ride</h5>

    <div class="d-flex gap-3 flex-column  align-items-stretch">
      <div class="d-flex gap-3 flex-row">
      <input id="search-location" class="search-input flex-grow-1" placeholder="Enter pickup location (demo)"/>
      <button id="btn-send" class="btn-send" style="max-width:50px;"><svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10 14L12.2728 19.3032C12.5856 20.0331 13.5586 20.1103 13.9486 19.4185C14.7183 18.0535 15.8591 15.8522 17 13C19 8 20 4 20 4C20 4 16 5 11 7C8.14784 8.14086 5.94647 9.28173 4.58149 10.0514C3.88975 10.4414 3.96687 11.4144 4.69678 11.7272L10 14Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></button>
      </div>
      
      <button id="btn-search" class="btn btn-primary" style="min-width:180px;">Search Rides</button>
    </div>
  </div>

  <div class="card-panel">
    <h6 class="mb-3">Filter Results</h6>
    <div class="row filter-row gx-3">
      <div class="col-md-4">
        <label class="form-label small">Vehicle Type</label>
         <select id="filter-vehicle" class="form-select">
          <option value="all">All Vehicles</option>
          @foreach($vehicleTypes as $vt)
            <option value="{{ $vt }}">{{ $vt }}</option>
          @endforeach
        </select>
            </div>

      <div class="col-md-4">
        <label class="form-label small">Distance</label>
        <select id="filter-distance" class="form-select">
          <option value="any">Any Distance</option>
          <option value="0.5">< 0.5 km</option>
          <option value="1"> < 1 km</option>
          <option value="3"> < 3 km</option>
          <option value="5"> < 5 km</option>
        </select>
      </div>

      <div class="col-md-4">
        <label class="form-label small">Rating</label>
        <select id="filter-rating" class="form-select">
          <option value="any">Any Rating</option>
          <option value="4.5">>= 4.5</option>
          <option value="4.0">>= 4.0</option>
          <option value="3.5">>= 3.5</option>
        </select>
      </div>
    </div>
  </div>

  <div class="mb-2">
   @php
// ensure $rides and $vehicleTypes exist and are arrays
$rides = $rides ?? [];
if (!isset($vehicleTypes)) {
    $vehicleTypes = collect($rides)->pluck('type')->unique()->values()->all();
}
@endphp
<span id="rides-count">{{ count($rides ?? []) }}</span>

  </div>

  <div id="rides-list">
    <!-- JS will render ride cards here -->
  </div>

  <!-- Pass rides data to JS -->
  <script>
    const ridesData = @json($rides);
  </script>

  @push('scripts')
  <script>
    // utils
    function formatPrice(p){ return '$' + (p % 1 === 0 ? p.toFixed(0) : p.toFixed(1)); }

    // render function
    function renderRides(list){
      const container = document.getElementById('rides-list');
      const count = document.getElementById('rides-count');
      container.innerHTML = '';

      if(!list.length){
        container.innerHTML = '<div class="card-panel"><em>No rides match your filters.</em></div>';
        count.innerText = 0;
        return;
      }

      count.innerText = list.length;

      list.forEach(r => {
        const el = document.createElement('div');
        el.className = 'ride-card';

        el.innerHTML = `
          <div class="ride-left">
            <img src="${r.avatar}" alt="${r.name}">
            <div class="ride-meta">
              <div style="font-weight:700">${r.name}</div>
              <small>${r.vehicle} • ${r.type}</small>
              <small>⭐ ${r.rating} (${r.rating_count}) • ${r.distance_km} km • ${r.eta_min} min</small>
            </div>
          </div>
          <div class="text-end">
            <div class="price mb-2">${formatPrice(r.price)}</div>
            <div>
              <a class="btn btn-success btn-sm" href="https://wa.me/?text=Hi%20${encodeURIComponent(r.name)}%20I%20want%20a%20ride" target="_blank">WhatsApp</a>
            </div>
          </div>
        `;

        container.appendChild(el);
      });
    }

    // initial render
    renderRides(ridesData);

    // filtering
    function applyFilters(){
      const vehicle = document.getElementById('filter-vehicle').value;
      const dist = document.getElementById('filter-distance').value;
      const rating = document.getElementById('filter-rating').value;
      const query = document.getElementById('search-location').value.trim().toLowerCase();

      let filtered = ridesData.filter(r => {
        // vehicle filter
        if(vehicle !== 'all' && r.type !== vehicle) return false;

        // distance filter (if numeric)
        if(dist !== 'any'){
          const max = parseFloat(dist);
          if(!(r.distance_km <= max)) return false;
        }

        // rating filter
        if(rating !== 'any'){
          if(!(r.rating >= parseFloat(rating))) return false;
        }

        // simple query match against name / vehicle (search)
        if(query){
          const hay = (r.name + ' ' + r.vehicle + ' ' + r.type).toLowerCase();
          if(!hay.includes(query)) return false;
        }

        return true;
      });

      renderRides(filtered);
    }

    // event listeners
    document.getElementById('filter-vehicle').addEventListener('change', applyFilters);
    document.getElementById('filter-distance').addEventListener('change', applyFilters);
    document.getElementById('filter-rating').addEventListener('change', applyFilters);
    document.getElementById('btn-search').addEventListener('click', applyFilters);
    document.getElementById('search-location').addEventListener('keydown', function(e){
      if(e.key === 'Enter') applyFilters();
    });
  </script>
  @endpush
@endsection
