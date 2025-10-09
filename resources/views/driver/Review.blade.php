@extends('layouts.driverlayout')

@section('title', 'Driver Reviews')

@section('content')

<div class="card-panel mb-4 p-4">
    <h5 class="fw-bold mb-4" style="font-size: 1.1rem;">Your Rating</h5>
    
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 text-center mb-3 mb-md-0">
            <h3 class="display-3 fw-bold" style="color: #111827;">4.8</h3>
            <div class="text-warning mb-2" style="font-size: 1.2rem;">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
            </div>
            <p class="text-muted mb-0" style="font-size: 0.9rem;">Overall Rating</p>
        </div>

        <div class="col-lg-9 col-md-8">
            {{-- 5 Star Rating --}}
            <div class="d-flex align-items-center mb-2">
                <span class="text-muted me-2" style="width: 20px;">5<i class="bi bi-star-fill text-warning ms-1" style="font-size: 0.8rem;"></i></span>
                <div class="progress flex-grow-1 mx-2" style="height: 10px; background-color: #e5e7eb;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%; background-color: #ffc107 !important;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="text-muted fw-bold" style="width: 40px; text-align: right; font-size: 0.9rem;">75%</span>
            </div>

            {{-- 4 Star Rating --}}
            <div class="d-flex align-items-center mb-2">
                <span class="text-muted me-2" style="width: 20px;">4<i class="bi bi-star-fill text-warning ms-1" style="font-size: 0.8rem;"></i></span>
                <div class="progress flex-grow-1 mx-2" style="height: 10px; background-color: #e5e7eb;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%; background-color: #ffc107 !important;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="text-muted fw-bold" style="width: 40px; text-align: right; font-size: 0.9rem;">20%</span>
            </div>

            {{-- 3 Star Rating --}}
            <div class="d-flex align-items-center mb-2">
                <span class="text-muted me-2" style="width: 20px;">3<i class="bi bi-star-fill text-warning ms-1" style="font-size: 0.8rem;"></i></span>
                <div class="progress flex-grow-1 mx-2" style="height: 10px; background-color: #e5e7eb;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 5%; background-color: #ffc107 !important;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="text-muted fw-bold" style="width: 40px; text-align: right; font-size: 0.9rem;">5%</span>
            </div>
            
            {{-- The image does not show 2 and 1 stars, so they are omitted here. --}}
        </div>
    </div>
</div>

<div class="card-panel p-4">
    <h5 class="fw-bold mb-4" style="font-size: 1.1rem;">Recent Reviews</h5>
    
    <div class="review-item pb-3 mb-3" style="border-bottom: 1px solid #e5e7eb;">
        <div class="d-flex justify-content-between align-items-start mb-1">
            <h6 class="fw-medium mb-0" style="font-size: 1rem;">Sarah Johnson</h6>
            <span class="text-muted" style="font-size: 0.85rem;">2024-01-15</span>
        </div>
        <div class="text-warning mb-2" style="font-size: 0.9rem;">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
        </div>
        <p class="text-dark mb-0" style="font-size: 0.95rem;">Excellent driver! Very professional and the car was clean.</p>
    </div>
    
    <div class="review-item pb-3 mb-3" style="border-bottom: 1px solid #e5e7eb;">
        <div class="d-flex justify-content-between align-items-start mb-1">
            <h6 class="fw-medium mb-0" style="font-size: 1rem;">Mike Chen</h6>
            <span class="text-muted" style="font-size: 0.85rem;">2024-01-12</span>
        </div>
        <div class="text-warning mb-2" style="font-size: 0.9rem;">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star"></i> {{-- Assuming 4/5 stars --}}
        </div>
        <p class="text-dark mb-0" style="font-size: 0.95rem;">Good service, arrived on time and friendly conversation.</p>
    </div>
    
    <div class="review-item">
        <div class="d-flex justify-content-between align-items-start mb-1">
            <h6 class="fw-medium mb-0" style="font-size: 1rem;">Emma Rodriguez</h6>
            <span class="text-muted" style="font-size: 0.85rem;">2024-01-10</span>
        </div>
        <div class="text-warning mb-2" style="font-size: 0.9rem;">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star"></i> {{-- Assuming 4/5 stars --}}
        </div>
        <p class="text-dark mb-0" style="font-size: 0.95rem;">Safe driving and very courteous. Highly recommend!</p>
    </div>
</div>

@endsection

@push('head')
<style>
    /* Custom styling for the progress bars to match the visual */
    .progress-bar.bg-warning {
        /* This ensures the progress bar color is consistent if Bootstrap changes its warning color */
        background-color: #ffc107 !important;
    }
</style>
@endpush