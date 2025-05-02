@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center animate-on-scroll">
                <div class="error-icon mb-4">
                    <i class="bi bi-exclamation-triangle-fill text-warning display-1"></i>
                </div>
                <h1 class="display-4 fw-bold mb-4">404 - Page Not Found</h1>
                <p class="lead text-muted mb-5">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('home') }}" class="btn btn-primary">
                        <i class="bi bi-house-fill me-2"></i>Go to Homepage
                    </a>
                    <a href="{{ route('properties.index') }}" class="btn btn-outline-primary">
                        <i class="bi bi-search me-2"></i>Browse Properties
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection 