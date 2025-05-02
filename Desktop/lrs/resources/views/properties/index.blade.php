@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row mb-4">
            <div class="col-md-6">
                <h2 class="display-5 fw-bold">Available Properties</h2>
            </div>
            <div class="col-md-6">
                <form action="{{ route('properties') }}" method="GET" class="d-flex">
                    <input type="text" name="search" class="form-control me-2" placeholder="Search properties..." value="{{ request('search') }}">
                    <select name="city" class="form-select me-2">
                        <option value="">All Cities</option>
                        @foreach($cities as $city)
                            <option value="{{ $city }}" {{ request('city') == $city ? 'selected' : '' }}>
                                {{ $city }}
                            </option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary">Search</button>
                    @if(request('search') || request('city'))
                        <a href="{{ route('properties') }}" class="btn btn-outline-secondary ms-2">Clear</a>
                    @endif
                </form>
            </div>
        </div>

        <div class="row">
            @forelse($properties as $property)
                <div class="col-md-4 mb-4 animate-on-scroll">
                    <div class="card property-card h-100 shadow-sm">
                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $property->image) }}" 
                                class="card-img-top" alt="{{ $property->title }}" 
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge bg-{{ $property->status === 'available' ? 'success' : ($property->status === 'under_offer' ? 'warning' : 'danger') }}">
                                    {{ ucwords(str_replace('_', ' ', $property->status)) }}
                                </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $property->title }}</h5>
                            <p class="card-text text-muted">
                                <i class="bi bi-geo-alt-fill me-1"></i> {{ $property->location }}
                            </p>
                            <div class="d-flex justify-content-between mb-3">
                                <span><i class="bi bi-rulers me-1"></i> {{ $property->area }} sq ft</span>
                                <span class="text-primary fw-bold">₹{{ number_format($property->price) }}</span>
                            </div>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                @foreach($property->features as $feature)
                                    <span class="badge bg-light text-dark">{{ $feature }}</span>
                                @endforeach
                            </div>
                            <a href="{{ route('property.details', $property->id) }}" class="btn btn-primary w-100">View Details</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">No properties available at the moment.</p>
                </div>
            @endforelse
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $properties->links() }}
        </div>
    </div>
@endsection 