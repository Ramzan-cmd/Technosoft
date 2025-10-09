@extends('layouts.driverlayout')

@section('title', 'Driver Dashboard - Set Fares')

@section('content')
<div class="container-fluid px-4 py-4">

  {{-- Top Header --}}
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-semibold">Driver Dashboard</h4>
    <span id="statusBadge" class="badge bg-secondary px-3 py-2">Offline</span>
  </div>

  {{-- Set Fare Card --}}
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <h6 class="fw-semibold mb-4">
        <i class="bi bi-currency-dollar text-primary me-2"></i> Set Your Rates
      </h6>

      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label fw-semibold">Base Fare ($)</label>
          <input type="number" id="baseFare" class="form-control" value="15.00" step="0.01" min="0">
          <small class="text-muted">Minimum charge for any ride</small>
        </div>
        <div class="col-md-6">
          <label class="form-label fw-semibold">Per Kilometer Rate ($)</label>
          <input type="number" id="kmRate" class="form-control" value="2.50" step="0.01" min="0">
          <small class="text-muted">Additional charge per kilometer</small>
        </div>
      </div>

      {{-- Fare Calculator --}}
      <div class="border rounded p-3 mt-4">
        <h6 class="fw-semibold mb-3">Fare Calculator</h6>
        <p class="mb-1">Base Fare: <span class="float-end" id="calcBaseFare">$15.00</span></p>
        <p class="mb-1">5 km ride (5 × <span id="calcRate">$2.50</span>): <span class="float-end" id="calcKmFare">$12.50</span></p>
        <hr>
        <p class="fw-semibold mb-0">Total for 5 km: <span class="float-end" id="calcTotal">$27.50</span></p>
      </div>

      {{-- Update Button --}}
      <div class="mt-4">
        <button id="updateBtn" class="btn btn-primary w-100 py-2 fw-semibold">Update Rates</button>
      </div>
    </div>
  </div>
</div>

{{-- JavaScript --}}
<script>
  const baseFareInput = document.getElementById('baseFare');
  const kmRateInput = document.getElementById('kmRate');
  const calcBaseFare = document.getElementById('calcBaseFare');
  const calcRate = document.getElementById('calcRate');
  const calcKmFare = document.getElementById('calcKmFare');
  const calcTotal = document.getElementById('calcTotal');
  const updateBtn = document.getElementById('updateBtn');

  function updateCalculator() {
    const baseFare = parseFloat(baseFareInput.value) || 0;
    const kmRate = parseFloat(kmRateInput.value) || 0;
    const kmFare = kmRate * 5;
    const total = baseFare + kmFare;

    calcBaseFare.textContent = `$${baseFare.toFixed(2)}`;
    calcRate.textContent = `$${kmRate.toFixed(2)}`;
    calcKmFare.textContent = `$${kmFare.toFixed(2)}`;
    calcTotal.textContent = `$${total.toFixed(2)}`;
  }

  baseFareInput.addEventListener('input', updateCalculator);
  kmRateInput.addEventListener('input', updateCalculator);
  updateBtn.addEventListener('click', () => {
    alert('Rates updated successfully!');
  });

  updateCalculator();
</script>

@endsection
