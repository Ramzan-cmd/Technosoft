@extends('layouts.driverlayout')

@section('title', 'Driver Dashboard - Availability')

@section('content')
<div class="container-fluid px-4 py-4">

  {{-- Top Header --}}
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-semibold">Driver Dashboard</h4>
    <span id="statusBadge" class="badge bg-secondary px-3 py-2">Offline</span>
  </div>

  {{-- Availability Section --}}
  <div class="card shadow-sm border-0 mb-4">
    <div class="card-body">
      <h6 class="fw-semibold mb-3">Driver Availability</h6>
      <div class="d-flex align-items-center justify-content-between border rounded p-3">
        <div>
          <h6 class="mb-1">Available for Rides</h6>
          <small class="text-muted">Toggle this to start or stop receiving ride requests</small>
        </div>
        <div>
          <label class="switch">
            <input type="checkbox" id="availabilityToggle">
            <span class="slider round"></span>
          </label>
        </div>
      </div>
      <div class="mt-3">
        <button id="availabilityButton" class="btn btn-secondary px-4 py-2 fw-semibold">Not Available</button>
      </div>
    </div>
  </div>

  {{-- Current Status --}}
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <h6 class="fw-semibold mb-3">Current Status</h6>
      <div class="row g-3">
        <div class="col-md-4">
          <div class="p-3 text-center rounded" style="background-color:#f0f2ff;">
            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 7V12L10.5 14.5M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#1e40af" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
            <h5 class="fw-bold mb-0 mt-2" style="color: #1e40af;">4.5</h5>
            <small class="text-muted">Hours Online Today</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-3 text-center rounded" style="background-color:#e6f7f3;">
            <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24" fill="none" stroke="#239f76" stroke-width="1.392" stroke-linecap="round" stroke-linejoin="round">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <path d="M14 16H9m10 0h3v-3.15a1 1 0 00-.84-.99L16 11l-2.7-3.6a1 1 0 00-.8-.4H5.24a2 2 0 00-1.8 1.1l-.8 1.63A6 6 0 002 12.42V16h2"/> <circle cx="6.5" cy="16.5" r="2.5"/> <circle cx="16.5" cy="16.5" r="2.5"/> </g>

</svg>
            <h5 class="fw-bold mb-0 mt-2 text-success">12</h5>
            <small class="text-muted">Rides Completed Today</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-3 text-center rounded" style="background-color:#f5f5f5;">
            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17 5H9.5C7.567 5 6 6.567 6 8.5V8.5C6 10.433 7.567 12 9.5 12H14.5C16.433 12 18 13.567 18 15.5V15.5C18 17.433 16.433 19 14.5 19H6M12 3V21" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
            <h5 class="fw-bold mb-0 mt-2">$186</h5>
            <small class="text-muted">Today's Earnings</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Toggle Script --}}
<script>
  const toggle = document.getElementById('availabilityToggle');
  const button = document.getElementById('availabilityButton');
  const statusBadge = document.getElementById('statusBadge');

  button.addEventListener('click', () => {
    toggle.checked = !toggle.checked;
    updateStatus();
  });

  toggle.addEventListener('change', updateStatus);

  function updateStatus() {
    if (toggle.checked) {
      button.textContent = 'Available';
      button.classList.remove('btn-secondary');
      button.classList.add('btn-primary');
      statusBadge.textContent = 'Available';
      statusBadge.classList.remove('bg-secondary');
      statusBadge.classList.add('bg-primary');
    } else {
      button.textContent = 'Not Available';
      button.classList.remove('btn-primary');
      button.classList.add('btn-secondary');
      statusBadge.textContent = 'Offline';
      statusBadge.classList.remove('bg-primary');
      statusBadge.classList.add('bg-secondary');
    }
  }
</script>

{{-- Switch Style --}}
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 26px;
}
.switch input { display: none; }
.slider {
  position: absolute;
  cursor: pointer;
  top: 0; left: 0; right: 0; bottom: 0;
  background-color: #ccc;
  transition: .4s;
  border-radius: 34px;
}
.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 3px;
  bottom: 3px;
  background-color: white;
  transition: .4s;
  border-radius: 50%;
}
input:checked + .slider {
  background-color: #007bff;
}
input:checked + .slider:before {
  transform: translateX(24px);
}
</style>
@endsection
