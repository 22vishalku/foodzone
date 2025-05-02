@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 animate-on-scroll">
                <h1 class="display-4 fw-bold mb-4">Contact Us</h1>
                <p class="lead mb-4">Get in touch with our team for any inquiries or assistance.</p>
                
                <div class="mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-geo-alt-fill text-primary me-3 fs-4"></i>
                        <div>
                            <h5 class="mb-1">Our Office</h5>
                            <p class="text-muted mb-0">Lawgate, Kapurthala, Punjab 144401</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-telephone-fill text-primary me-3 fs-4"></i>
                        <div>
                            <h5 class="mb-1">Phone</h5>
                            <p class="text-muted mb-0">+918228924850</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-envelope-fill text-primary me-3 fs-4"></i>
                        <div>
                            <h5 class="mb-1">Email</h5>
                            <p class="text-muted mb-0">pandey22vishal@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="social-icons mb-4">
                    <a href="https://facebook.com/landestate" class="text-primary me-3"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="https://twitter.com/landestate" class="text-primary me-3"><i class="bi bi-twitter fs-4"></i></a>
                    <a href="https://instagram.com/landestate" class="text-primary me-3"><i class="bi bi-instagram fs-4"></i></a>
                    <a href="https://linkedin.com/company/landestate" class="text-primary"><i class="bi bi-linkedin fs-4"></i></a>
                </div>
            </div>
            <div class="col-md-6 animate-on-scroll">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Send us a Message</h4>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 animate-on-scroll">
                <div class="ratio ratio-21x9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3409.1234567890123!2d75.3801234!3d31.3856789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5a5a5a5a5a5a%3A0x5a5a5a5a5a5a5a5a!2sLawgate%2C%20Kapurthala%2C%20Punjab%20144401!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection 