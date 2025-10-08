@extends('layouts.app')

@section('title', 'Passenger Dashboard')

@section('content')
<div id="content-section">
  <h3>Find Your Ride</h3>
  <div class="card p-4 mt-3 shadow-sm border-0">
    <input type="text" class="form-control mb-3" placeholder="Enter pickup location">
    <button class="btn btn-primary w-100">Search Rides</button>
  </div>

  <div class="card p-4 mt-4 shadow-sm border-0">
    <h5>Filter Results</h5>
    <div class="row g-3 mt-2">
      <div class="col-md-4">
        <select class="form-select">
          <option>All Vehicles</option>
        </select>
      </div>
      <div class="col-md-4">
        <select class="form-select">
          <option>Any Distance</option>
        </select>
      </div>
      <div class="col-md-4">
        <select class="form-select">
          <option>Any Rating</option>
        </select>
      </div>
    </div>
  </div>

  <div class="mt-4">
    <h5>Available Rides (3)</h5>

    <div class="card mt-3 p-3 shadow-sm border-0 d-flex flex-row align-items-center justify-content-between">
      <div class="d-flex align-items-center gap-3">
        <img src="https://i.pravatar.cc/60" class="rounded-circle" alt="">
        <div>
          <h6 class="mb-0">John Smith</h6>
          <small class="text-muted">Toyota Camry • Sedan</small><br>
          <small>⭐ 4.8 (125) • 2.3km • 8 min</small>
        </div>
      </div>
      <div class="text-end">
        <h6 class="text-primary mb-1">$15.5</h6>
        <button class="btn btn-success btn-sm">WhatsApp</button>
      </div>
    </div>
  </div>
</div>
@endsection
