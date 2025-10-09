@extends('layouts.app')

@section('title','Profile')

@section('content')
  <div class="card-panel">
    <h5>Profile Information</h5>

    <form action="{{ route('passenger.profile.update') }}" method="POST" class="mt-3">
      @csrf
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label small">Full Name</label>
          <input name="full_name" class="form-control" value="{{ $profile['full_name'] }}" />
        </div>
        <div class="col-md-6">
          <label class="form-label small">Email</label>
          <input name="email" class="form-control" value="{{ $profile['email'] }}" />
        </div>

        <div class="col-md-6">
          <label class="form-label small">Phone Number</label>
          <input name="phone" class="form-control" value="{{ $profile['phone'] }}" />
        </div>
        <div class="col-md-6">
          <label class="form-label small">Emergency Contact</label>
          <input name="emergency" class="form-control" value="{{ $profile['emergency'] }}" />
        </div>
      </div>

      <button class="btn btn-primary mt-3">Update Profile</button>
    </form>
  </div>

   <div class="card-panel">
    <h5>Submit a Complaint</h5>

    <form action="{{ route('passenger.support.submit') }}" method="POST" class="mt-3">
      @csrf
      <div class="mb-3">
        <label class="form-label small">Complaint Type</label>
        <select name="type" class="form-select">
          <option>Driver Behavior</option>
          <option>Payment Issue</option>
          <option>Lost Item</option>
          <option>Other</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label small">Driver Name</label>
        <input name="driver" class="form-control" placeholder="Enter driver name (optional)">
      </div>

      <div class="mb-3">
        <label class="form-label small">Description</label>
        <textarea name="description" class="form-control" rows="5" placeholder="Please describe your complaint in detail..."></textarea>
      </div>

      <button class="btn btn-danger">Submit Complaint</button>
    </form>
  </div>

@endsection
