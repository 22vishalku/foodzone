@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <div id="propertyCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/Screenshot 2025-05-02 041438.png') }}" class="d-block w-100" alt="Property View 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/Screenshot 2025-05-02 041508.png') }}" class="d-block w-100" alt="Property View 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/Screenshot 2025-05-02 041528.png') }}" class="d-block w-100" alt="Property View 3">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/Screenshot 2025-05-02 041548.png') }}" class="d-block w-100" alt="Property View 4">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>

                <h2>Land Plot #{{ $id }}</h2>
                <p class="text-muted">Location: City {{ $id }}</p>
                
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Size</h5>
                                <p class="card-text">{{ rand(1000, 5000) }} sq ft</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Price</h5>
                                <p class="card-text">₹{{ number_format(rand(50000, 150000)) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Status</h5>
                                <p class="card-text">Available</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h4>Description</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                
                <h4>Features</h4>
                <ul>
                    <li>Prime Location</li>
                    <li>Clear Title</li>
                    <li>Good Road Access</li>
                    <li>Water Supply Available</li>
                    <li>Electricity Connection</li>
                </ul>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contact Agent</h4>
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
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="4" required>I'm interested in Land Plot #{{ $id }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 