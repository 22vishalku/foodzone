@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 animate-on-scroll">
                <h1 class="display-4 fw-bold mb-4">About LandEstate</h1>
                <p class="lead mb-4">Your emerging partner in Punjab's land real estate market.</p>
                <p class="mb-4">Based in Kapurthala, Punjab, we are a new real estate venture committed to revolutionizing the way people buy and sell land properties. Our innovative digital platform combined with personalized service ensures a seamless property buying experience.</p>
                
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span>Digital Platform</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span>Local Expertise</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span>Transparent Process</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span>Property Verification</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span>Market Insights</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-check-circle-fill text-success me-2"></i>
                            <span>Dedicated Support</span>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-3">
                    <a href="{{ route('properties') }}" class="btn btn-primary">View Properties</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary">Contact Us</a>
                </div>
            </div>
            <div class="col-md-6 animate-on-scroll">
                <img src="{{ asset('images/office.png') }}" class="img-fluid rounded shadow" alt="Our Office in Kapurthala">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center mb-5 animate-on-scroll">
                <h2 class="display-5 fw-bold">Our Team</h2>
                <p class="lead text-muted">Meet the innovators behind LandEstate</p>
            </div>
            <div class="col-md-6 mb-4 animate-on-scroll">
                <div class="card h-100 text-center">
                    <div class="pt-4">
                        <div class="position-relative mx-auto" style="width: 60%; padding-top: 67.9%;">
                            <img src="{{ asset('images/vishal.jpeg') }}" class="position-absolute top-0 start-0 w-100 h-100" alt="Vishal Kumar" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Vishal Kumar</h5>
                        <p class="text-muted">Founder & CEO</p>
                        <p class="card-text">Visionary entrepreneur bringing digital innovation to Punjab's real estate market.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 animate-on-scroll">
                <div class="card h-100 text-center">
                    <div class="pt-4">
                        <div class="position-relative mx-auto" style="width: 60%; padding-top: 67.9%;">
                            <img src="{{ asset('images/office.png') }}" class="position-absolute top-0 start-0 w-100 h-100" alt="Our Office" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Our Office</h5>
                        <p class="text-muted">Lawgate, Kapurthala</p>
                        <p class="card-text">Our modern office space where we turn property dreams into reality.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 