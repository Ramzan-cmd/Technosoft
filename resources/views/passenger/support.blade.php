<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Passenger Dashboard')</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('css/passenger.css') }}">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<style>
.contact-page {
  padding: 0% 8%;
  display: grid;
  grid-template-columns: 1fr 2fr;
  gap: 30px;
}

.contact-card, .business-card, .contact-form {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.201);
  padding: 25px;
}

.contact-card h5,
.business-card h5 {
  font-weight: 600;
  margin-bottom: 20px;
}

.info-item {
  display: flex;
  align-items: flex-start;
  gap: 15px;
  margin-bottom: 20px;
}

.info-item span {
  /* background: #f0f5f9; */
  padding: 12px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* .info-item svg {
  width: 20px;
  height: 20px;
  color: #007bff;
} */

.info-item p {
  margin: 0;
  color: #555;
}

.chat-btn {
  background: #16ea8b;
  color: white;
  border: none;
  font-size: 16px;
  padding: 6px 14px;
  margin-top: 10px;
  border-radius: 6px;
}

.business-card p {
  margin: 0;
  color: #555;
  font-size: 15px;
}

.business-card .day {
  display: flex;
  justify-content: space-between;
  padding: 5px 0;
}
.contact-form{
    height: 90vh;
}
.contact-form h5 {
  font-weight: 600;
  margin-bottom: 10px;
}

.contact-form p {
  color: #777;
  margin-bottom: 25px;
  font-size: 14px;
}

.contact-form .form-control,
.contact-form select {
  border-radius: 8px;
  padding: 10px;
}

.contact-form textarea {
  height: 150px;
}
.span1{
    background-color: #133ba83b
}
.span2{
    background-color: #11bd8441
}
.span3{
    background-color: #92929247
}
.span4{
    background-color: #0a94313e
}
.span1 svg{
    color: #003ad6;
}
.span2 svg{
    color: #20ac8b;
}
.span3 svg{
    color: #1c1c1c;
}
.span4 svg{
    color: #0d9d31;
}
.btn-send {
  background: #153194;
  color: #fff;

  padding: 10px 20px;
  border-radius: 8px;
  border: none;
  transition: 0.3s;
}
.buttons button{
  min-width: 22rem; 

}
.btn-send:hover {
  background: #003ad6;
}

.btn-whatsapp {
  background: #fff;
  border: 2px solid #22b573;
  color: #22b573;
  padding: 10px 20px;
  border-radius: 8px;
  transition: 0.3s;
}
.divider{ border-top:1px solid rgba(190, 189, 189, 0.222); margin:15px 0; }
.btn-whatsapp:hover {
  background: #22b573;
  color: white;
}

/* Responsive */
@media (max-width: 992px) {
  .contact-page {
    grid-template-columns: 1fr;
  }
}
.header{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-content: center;
    align-items: center;
    text-align: center;
    padding: 3% 0%;
}
.header h1{
    font-size: 2.5rem;
    font-weight: 700;

}
.header h1 span{
    color: #1a3d9d
}
.header p{
    color: #616161;
    width:600px;
    font-size: 1.3rem;
}
</style>
</head>
<body>
    <div class="header">
    <h1>Get in <span>Touch</span></h1>
    <p>Have a question or need assistance? We're here to help you with anything related to SwiftRide.</p>
  </div>
<div class="contact-page">
  
  <!-- Left Column -->
  <div>
    <div class="contact-card mb-4">
      <h5>Contact Information</h5>

      <div class="info-item">
        <span class="span1"><svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></span> </span>
        <div>
          <strong>Address</strong>
          <p>123 Main Street<br>Suite 456<br>City, State 12345</p>
        </div>
      </div>

      <div class="info-item">
        <span class="span2"><svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="currentcolor" stroke-width="1.5" stroke-miterlimit="10"/>
</svg></span>
        <div>
          <strong>Phone</strong>
          <p>+1 (555) 123-4567<br>Mon-Fri, 9 AM - 6 PM</p>
        </div>
      </div>

      <div class="info-item">
        <span class="span3"><svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3 8L8.44992 11.6333C9.73295 12.4886 10.3745 12.9163 11.0678 13.0825C11.6806 13.2293 12.3194 13.2293 12.9322 13.0825C13.6255 12.9163 14.2671 12.4886 15.5501 11.6333L21 8M6.2 19H17.8C18.9201 19 19.4802 19 19.908 18.782C20.2843 18.5903 20.5903 18.2843 20.782 17.908C21 17.4802 21 16.9201 21 15.8V8.2C21 7.0799 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V15.8C3 16.9201 3 17.4802 3.21799 17.908C3.40973 18.2843 3.71569 18.5903 4.09202 18.782C4.51984 19 5.07989 19 6.2 19Z" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></span>
        <div>
          <strong>Email</strong>
          <p>support@swiftride.com<br>24/7 Support</p>
        </div>
      </div>

      <div class="info-item">
        <span class="span4"><svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22Z" stroke="currentcolor" stroke-width="1.5"/>
</svg></i></span>
        <div>
          <strong>WhatsApp</strong>
          <p>+1 (555) 987-6543</p>
          <button class="chat-btn">Chat Now</button>
        </div>
      </div>
    </div>

    <div class="business-card">
      <h5><i class="bi bi-clock"></i> Business Hours</h5>
      <div class="day"><span>Monday - Friday</span> <span><strong>9:00 AM - 6:00 PM</strong></span></div>
      <div class="day"><span>Saturday</span> <span><strong>10:00 AM - 4:00 PM</strong></span></div>
      <div class="day"><span>Sunday</span> <span><strong>Closed</strong></span></div>
      <div class="divider" role="separator"></div>
      <p class="mt-3"><strong>Emergency Support:</strong> Available 24/7 through WhatsApp and email</p>
    </div>
  </div>

  <!-- Right Column -->
  <div class="contact-form">
    <h5>Send us a Message</h5>
    <p>Fill out the form below and we’ll get back to you as soon as possible.</p>

    <form>
      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Full Name *</label>
          <input type="text" class="form-control" placeholder="Enter your full name">
        </div>
        <div class="col-md-6">
          <label class="form-label">Email *</label>
          <input type="email" class="form-control" placeholder="Enter your email">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Phone Number</label>
          <input type="text" class="form-control" placeholder="Enter your phone number">
        </div>
        <div class="col-md-6">
          <label class="form-label">Inquiry Type *</label>
          <select class="form-select">
            <option>Select inquiry type</option>
            <option>General</option>
            <option>Support</option>
            <option>Partnership</option>
            <option>Feedback</option>
          </select>
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Subject *</label>
        <input type="text" class="form-control" placeholder="Brief description of your inquiry">
      </div>

      <div class="mb-4">
        <label class="form-label">Message *</label>
        <textarea class="form-control" placeholder="Please provide detailed information about your inquiry..."></textarea>
      </div>

      <div class="buttons d-flex flex-wrap align-items-center justify-content-center gap-2">
        <button type="submit" class="btn-send">Send Message</button>
        <button type="button" class="btn-whatsapp"><i class="bi bi-whatsapp"></i> WhatsApp Us</button>
      </div>
    </form>
  </div>
</div>
</body>

</html>




