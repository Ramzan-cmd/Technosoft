@extends('layouts.driverlayout')

@section('title', 'Driver Profile')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <a href="#" class="text-decoration-none text-dark fw-medium" style="font-size: 1rem;">
        <i class="bi bi-arrow-left me-2"></i> Back to Home
    </a>

</div>

<div class="card-panel fw-bold mb-4 d-flex  align-items-start" style="font-size: 1.1rem; flex-direction: column; ">
    <h5><svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 3.93552C14.795 3.33671 13.4368 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 11.662 20.9814 11.3283 20.9451 11M21 5L12 14L9 11" stroke="#22b573" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>   Driver Registration</h5> 
  


<div class="card-panel mb-4 p-4 d-flex align-items-start" style=" width: 56rem; margin-top:4% ;    background-color: rgba(34, 181, 149, 0.179);">
    
    
    
  
    
    <div>
        <h5 class="fw-bold text-success mb-1" style="font-size: 1.1rem; color: #28b57f;"><svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 3.93552C14.795 3.33671 13.4368 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 11.662 20.9814 11.3283 20.9451 11M21 5L12 14L9 11" stroke="#22b573" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> Registration Approved</h5>
        <p class="text-muted mb-0" style="font-size: 0.95rem;">Your driver application has been approved. You can now start accepting rides!</p>
    </div>
</div>
</div>

<div class="card-panel mb-4 p-4">
    <h5 class="fw-bold mb-3" style="font-size: 1.1rem;">Personal Information</h5>
    
    <div class="row g-3 mb-4">
        <div class="col-md-6">
            <label for="fullName" class="form-label text-muted" style="font-size: 0.9rem;">Full Name</label>
            <input type="text" id="fullName" class="form-control bg-light" value="Michael Thompson" readonly style="border: none; border-radius: 8px; padding: 10px 15px;">
        </div>
        <div class="col-md-6">
            <label for="phoneNumber" class="form-label text-muted" style="font-size: 0.9rem;">Phone Number</label>
            <input type="text" id="phoneNumber" class="form-control bg-light" value="+1 (555) 234-5678" readonly style="border: none; border-radius: 8px; padding: 10px 15px;">
        </div>
        <div class="col-md-6">
            <label for="whatsAppNumber" class="form-label text-muted" style="font-size: 0.9rem;">WhatsApp Number</label>
            <input type="text" id="whatsAppNumber" class="form-control bg-light" value="+1 (555) 234-5678" readonly style="border: none; border-radius: 8px; padding: 10px 15px;">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label text-muted" style="font-size: 0.9rem;">Email</label>
            <input type="email" id="email" class="form-control bg-light" value="michael.thompson@email.com" readonly style="border: none; border-radius: 8px; padding: 10px 15px;">
        </div>
    </div>
</div>



<div class="card-panel">
    <h6 class="text-uppercase text-muted fw-bold mb-3" style="font-size: 0.85rem;">Vehicle Information</h6>
    <div class="row g-3 mb-4">
        <div class="col-md-6">
 

            {{-- <div class="input-group">
                <input type="text" id="vehicleType" class="form-control bg-light" value="Sedan" readonly style="border: none; border-radius: 8px; padding: 10px 15px; border-top-right-radius: 0; border-bottom-right-radius: 0;">
                <span class="input-group-text bg-light border-0" style="border-radius: 8px; border-top-left-radius: 0; border-bottom-left-radius: 0; padding-right: 15px;">
                    <i class="bi bi-chevron-down text-muted"></i>
                </span>
            </div> --}}
            

           <div class="col-md-6">
    <label for="vehicleType" class="form-label text-muted" style="font-size: 0.9rem;">Vehicle Type</label>
    {{-- Removed 'disabled' to make it a working dropdown (assuming you want options to be selectable in an edit context) --}}
    <select id="vehicleType" class="form-select bg-light" style="border: none; width:27.3rem; border-radius: 8px; padding: 10px 15px;">
        <option value="Sedan" selected>Sedan</option>
        <option value="Van">Van</option>
        <option value="SUV">SUV</option>
        <option value="PickupTruck">PickupTruck</option>
    </select>
</div>

        </div>
        <div class="col-md-6">
            <label for="makeModel" class="form-label text-muted" style="font-size: 0.9rem;">Make & Model</label>
            <input type="text" id="makeModel" class="form-control bg-light" value="Toyota Camry 2022" style="border: none; border-radius: 8px; padding: 10px 15px;">
        </div>
        <div class="col-md-6">
            <label for="licensePlate" class="form-label text-muted" style="font-size: 0.9rem;">License Plate</label>
            <input type="text" id="licensePlate" class="form-control bg-light" value="ABC-1234"  style="border: none; border-radius: 8px; padding: 10px 15px;">
        </div>
        <div class="col-md-6">
            <label for="color" class="form-label text-muted" style="font-size: 0.9rem;">Color</label>
            <input type="text" id="color" class="form-control bg-light" value="Silver"  style="border: none; border-radius: 8px; padding: 10px 15px;">
        </div>
    </div>
</div>

<div class="card-panel">
    <h6 class="text-uppercase text-muted fw-bold mb-3" style="font-size: 0.85rem;">Document Upload</h6>
    <div class="row g-4">
        
        <div class="col-6">
            <label class="form-label text-muted" style="font-size: 0.9rem;">Driver's License</label>
            <div class="document-upload-box">
                <div class="upload-icon">
                    <i class="bi bi-cloud-arrow-up" style="font-size: 2rem; color: var(--muted);"></i>
                </div>
                <div class="upload-text text-center text-muted">
                    Click to upload license
                </div>
                <div class="verification-status verified">Verified</div>
            </div>
        </div>
        
        <div class="col-6">
            <label class="form-label text-muted" style="font-size: 0.9rem;">Vehicle Registration</label>
            <div class="document-upload-box">
                <div class="upload-icon">
                    <i class="bi bi-cloud-arrow-up" style="font-size: 2rem; color: var(--muted);"></i>
                </div>
                <div class="upload-text text-center text-muted">
                    Click to upload registration
                </div>
                <div class="verification-status verified">Verified</div>
            </div>
        </div>
        
        <div class="col-6">
            <label class="form-label text-muted" style="font-size: 0.9rem;">Insurance</label>
            <div class="document-upload-box">
                <div class="upload-icon">
                    <i class="bi bi-cloud-arrow-up" style="font-size: 2rem; color: var(--muted);"></i>
                </div>
                <div class="upload-text text-center text-muted">
                    Click to upload registration
                </div>
                <div class="verification-status verified">Verified</div>
            </div>
        </div>
        
        <div class="col-6">
            <label class="form-label text-muted" style="font-size: 0.9rem;">Profile Photo</label>
            <div class="document-upload-box">
                <div class="upload-icon">
                    <i class="bi bi-camera" style="font-size: 2rem; color: var(--muted);"></i>
                </div>
               <div class="upload-text text-center text-muted">
                    Click to upload registration
                </div>
                <div class="verification-status verified">Verified</div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('head')
<style>
    /* Styling for the Document Upload boxes */
    .document-upload-box {
        border: 2px dashed #e5e7eb; /* Light gray border */
        border-radius: 12px;
        padding: 20px;
        min-height: 150px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.18s ease;
        background-color: #f9fafb; /* Slightly off-white background */
    }

    .document-upload-box:hover {
        border-color: var(--primary);
        background-color: #f0f4ff; /* Light blue on hover */
    }

    .upload-icon {
        margin-bottom: 10px;
    }
    
    .upload-text {
        font-size: 0.9rem;
        margin-bottom: 5px;
    }

    .verification-status {
        font-size: 0.8rem;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 6px;
        margin-top: 5px;
    }

    .verification-status.verified {
        color: var(--accent); /* Using the green accent color */
        background-color: rgba(34, 181, 115, 0.1); /* Light green background */
    }
    
    /* Custom styling to make inputs look like the image (light gray background, no border) */
    .form-control.bg-light[readonly],
    .form-control.bg-light[readonly]:focus,
    .input-group-text.bg-light.border-0 {
        background-color: #f3f4f6 !important; /* Matches the custom background color used in your layout styles for inputs */
        border: none !important;
    }
    
    /* Adjust input group to look like a single field */
    .input-group:focus-within .form-control,
    .input-group:focus-within .input-group-text {
        box-shadow: none; /* Remove default bootstrap focus shadow if any */
        border-color: transparent;
    }
</style>
@endpush