@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center animate-on-scroll">
                <div class="error-icon mb-4">
                    <i class="bi bi-exclamation-octagon-fill text-danger display-1"></i>
                </div>
                <h1 class="display-4 fw-bold mb-4">500 - Server Error</h1>
                <p class="lead text-muted mb-5">Something went wrong on our end. Please try again later or contact our support team if the problem persists.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('home') }}" class="btn btn-primary">
                        <i class="bi bi-house-fill me-2"></i>Go to Homepage
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary">
                        <i class="bi bi-envelope me-2"></i>Contact Support
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection 