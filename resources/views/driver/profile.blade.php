@extends('layouts.driverlayout')

@section('title', 'Driver Dashboard - Availability')

@section('content')
<div class="container-fluid px-4 py-4">

  {{-- Top Header --}}
 
<div class="card-panel mb-4 p-4">
    <h5 class="fw-bold mb-3" style="font-size: 1.1rem;">Profile Management</h5>
    
    <div class="row g-3 mb-4">
        <div class="col-md-6">
            <label for="fullName" class="form-label text-muted" style="font-size: 0.9rem;">Full Name</label>
            <input type="text" id="fullName" class="form-control bg-light" value="Michael Thompson" readonly style="border: none; border-radius: 8px; padding: 10px 15px;">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label text-muted" style="font-size: 0.9rem;">Email</label>
            <input type="email" id="email" class="form-control bg-light" value="michael.thompson@email.com"  style="border: none; border-radius: 8px; padding: 10px 15px;">
        </div>
        <div class="col-md-6">
            <label for="phoneNumber" class="form-label text-muted" style="font-size: 0.9rem;">Phone Number</label>
            <input type="text" id="phoneNumber" class="form-control bg-light" value="+1 (555) 234-5678"  style="border: none; border-radius: 8px; padding: 10px 15px;">
        </div>
        <div class="col-md-6">
            <label for="whatsAppNumber" class="form-label text-muted" style="font-size: 0.9rem;">WhatsApp Number</label>
            <input type="text" id="whatsAppNumber" class="form-control bg-light" value="+1 (555) 234-5678"  style="border: none; border-radius: 8px; padding: 10px 15px;">
        </div>
        
        <div class="col-md-6">
            <label for="email" class="form-label text-muted" style="font-size: 0.9rem;">Years of Experience</label>
            <input type="email" id="email" class="form-control bg-light" value="5 Year +" style="border: none; border-radius: 8px; padding: 10px 15px;">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label text-muted" style="font-size: 0.9rem;">Languages Spoken</label>
            <input type="email" id="email" class="form-control bg-light" value="English, Spanish"  style="border: none; border-radius: 8px; padding: 10px 15px;">
        </div>
       
    </div>
     <div class="col-md-6">
    <label class="form-label text-muted" style="font-size: 0.9rem;">Bio</label>
    <textarea id="message" 
        class="form-control bg-light" 
        style="border: none; border-radius: 8px; min-width: 53rem; height: 6rem; padding: 10px 15px; resize: none;"
    >Professional driver with 5+ years of experience. Safe, reliable, and friendly service guaranteed.</textarea>
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
