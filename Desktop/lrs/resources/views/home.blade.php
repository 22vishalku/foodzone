@extends('layouts.app')

@section('content')
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 animate-on-scroll">
                    <h1 class="display-4 fw-bold mb-4">Find Your Perfect Land</h1>
                    <p class="lead mb-4">Discover prime land listings across the country. Your dream property is just a click away.</p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('properties') }}" class="btn btn-primary btn-lg">Browse Properties</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="text-center mb-5 animate-on-scroll">
            <h2 class="display-5 fw-bold">Featured Properties</h2>
            <p class="lead text-muted">Explore our handpicked selection of premium land properties</p>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 animate-on-scroll">
                <div class="card property-card h-100 shadow-sm">
                    <div class="position-relative">
                        <img src="{{ asset('images/Screenshot 2025-05-02 041438.png') }}" 
                            class="card-img-top" alt="Featured Property 1" 
                            style="height: 200px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-success">Available</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Premium Plot in Sector 15</h5>
                        <p class="card-text text-muted">
                            <i class="bi bi-geo-alt-fill me-1"></i> Noida, UP
                        </p>
                        <div class="d-flex justify-content-between mb-3">
                            <span><i class="bi bi-rulers me-1"></i> 2500 sq ft</span>
                            <span class="text-primary fw-bold">₹75,00,000</span>
                        </div>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-light text-dark">Residential</span>
                            <span class="badge bg-light text-dark">Corner Plot</span>
                        </div>
                        <a href="{{ route('property.details', 1) }}" class="btn btn-primary w-100">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 animate-on-scroll">
                <div class="card property-card h-100 shadow-sm">
                    <div class="position-relative">
                        <img src="{{ asset('images/Screenshot 2025-05-02 041508.png') }}" 
                            class="card-img-top" alt="Featured Property 2" 
                            style="height: 200px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-success">Available</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Commercial Plot</h5>
                        <p class="card-text text-muted">
                            <i class="bi bi-geo-alt-fill me-1"></i> Sector 18, Noida
                        </p>
                        <div class="d-flex justify-content-between mb-3">
                            <span><i class="bi bi-rulers me-1"></i> 3200 sq ft</span>
                            <span class="text-primary fw-bold">₹1,25,00,000</span>
                        </div>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-light text-dark">Commercial</span>
                            <span class="badge bg-light text-dark">Prime Location</span>
                        </div>
                        <a href="{{ route('property.details', 2) }}" class="btn btn-primary w-100">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 animate-on-scroll">
                <div class="card property-card h-100 shadow-sm">
                    <div class="position-relative">
                        <img src="{{ asset('images/Screenshot 2025-05-02 041528.png') }}" 
                            class="card-img-top" alt="Featured Property 3" 
                            style="height: 200px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-success">Available</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Residential Plot</h5>
                        <p class="card-text text-muted">
                            <i class="bi bi-geo-alt-fill me-1"></i> Greater Noida West
                        </p>
                        <div class="d-flex justify-content-between mb-3">
                            <span><i class="bi bi-rulers me-1"></i> 1800 sq ft</span>
                            <span class="text-primary fw-bold">₹55,00,000</span>
                        </div>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-light text-dark">Residential</span>
                            <span class="badge bg-light text-dark">Gated Community</span>
                        </div>
                        <a href="{{ route('property.details', 3) }}" class="btn btn-primary w-100">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 animate-on-scroll">
                <div class="card property-card h-100 shadow-sm">
                    <div class="position-relative">
                        <img src="{{ asset('images/Screenshot 2025-05-02 041548.png') }}" 
                            class="card-img-top" alt="Featured Property 4" 
                            style="height: 200px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-success">Available</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Industrial Plot</h5>
                        <p class="card-text text-muted">
                            <i class="bi bi-geo-alt-fill me-1"></i> Sector 62, Noida
                        </p>
                        <div class="d-flex justify-content-between mb-3">
                            <span><i class="bi bi-rulers me-1"></i> 5000 sq ft</span>
                            <span class="text-primary fw-bold">₹2,50,00,000</span>
                        </div>
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-light text-dark">Industrial</span>
                            <span class="badge bg-light text-dark">Highway Access</span>
                        </div>
                        <a href="{{ route('property.details', 4) }}" class="btn btn-primary w-100">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 animate-on-scroll">
                    <h2 class="display-5 fw-bold mb-4">Why Choose Us?</h2>
                    <div class="d-flex mb-4">
                        <div class="me-4">
                            <i class="bi bi-shield-check feature-icon"></i>
                        </div>
                        <div>
                            <h5>Trusted Service</h5>
                            <p class="text-muted">10+ years of experience in the real estate industry</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="me-4">
                            <i class="bi bi-star feature-icon"></i>
                        </div>
                        <div>
                            <h5>Verified Listings</h5>
                            <p class="text-muted">All properties are thoroughly verified and inspected</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="me-4">
                            <i class="bi bi-people feature-icon"></i>
                        </div>
                        <div>
                            <h5>Expert Support</h5>
                            <p class="text-muted">Professional team to guide you through the process</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="me-4">
                            <i class="bi bi-graph-up feature-icon"></i>
                        </div>
                        <div>
                            <h5>Best Prices</h5>
                            <p class="text-muted">Competitive market prices for all properties</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-on-scroll">
                    <img src="{{ asset('images/office.png') }}" class="img-fluid rounded shadow" alt="Our Office">
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 mb-4 animate-on-scroll">
                <div class="card h-100 text-center p-4">
                    <i class="bi bi-search feature-icon"></i>
                    <h4>Find Properties</h4>
                    <p class="text-muted">Browse through our extensive collection of land properties</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 animate-on-scroll">
                <div class="card h-100 text-center p-4">
                    <i class="bi bi-house-check feature-icon"></i>
                    <h4>Schedule Viewing</h4>
                    <p class="text-muted">Arrange a visit to your preferred properties</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 animate-on-scroll">
                <div class="card h-100 text-center p-4">
                    <i class="bi bi-file-earmark-check feature-icon"></i>
                    <h4>Complete Purchase</h4>
                    <p class="text-muted">We'll guide you through the entire purchase process</p>
                </div>
            </div>
        </div>
    </div>
@endsection 