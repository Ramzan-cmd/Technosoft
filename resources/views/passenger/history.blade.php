@extends('layouts.app')

@section('title','Ride History')

@section('content')
  <div class="card-panel">
    <h5>Ride History</h5>

    <div class="mt-3">
      @foreach($history as $h)
        <div class="ride-card">
          <div class="ride-left">
            <div class="ride-meta">
              <div style="font-weight:700">{{ $h['name'] }}</div>
              <small>{{ $h['from'] }} → {{ $h['to'] }}</small>
              <small>{{ $h['date'] }}  </small>
            </div>
          </div>

          <div class="text-end">
            <div class="price mb-2"><p style="font-size: 17px">${{ number_format($h['price'], 1) }}</p></div>
            <div class="badge" style="background-color: rgb(28, 28, 194); color: #ffffff; padding: 6px 10px; border-radius: 6px; display: inline-block; font-size:small;">
  Completed
</div>

          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
