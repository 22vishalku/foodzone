@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="display-5 fw-bold">Available Properties</h2>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <form action="{{ route('properties') }}" method="GET" class="row g-3">
                            <div class="col-md-3">
                                <label for="city" class="form-label">City</label>
                                <select class="form-select" id="city" name="city">
                                    <option value="">All Cities</option>
                                    @foreach($cities as $city)
                                        <option value="{{ $city }}" {{ request('city') == $city ? 'selected' : '' }}>
                                            {{ $city }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="type" class="form-label">Property Type</label>
                                <select class="form-select" id="type" name="type">
                                    <option value="">All Types</option>
                                    @foreach($propertyTypes as $type)
                                        <option value="{{ $type }}" {{ request('type') == $type ? 'selected' : '' }}>
                                            {{ $type }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="min_price" class="form-label">Min Price (₹)</label>
                                <select class="form-select" id="min_price" name="min_price">
                                    <option value="">No Min</option>
                                    <option value="5000000" {{ request('min_price') == '5000000' ? 'selected' : '' }}>₹50 Lakhs</option>
                                    <option value="10000000" {{ request('min_price') == '10000000' ? 'selected' : '' }}>₹1 Crore</option>
                                    <option value="25000000" {{ request('min_price') == '25000000' ? 'selected' : '' }}>₹2.5 Crores</option>
                                    <option value="50000000" {{ request('min_price') == '50000000' ? 'selected' : '' }}>₹5 Crores</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="max_price" class="form-label">Max Price (₹)</label>
                                <select class="form-select" id="max_price" name="max_price">
                                    <option value="">No Max</option>
                                    <option value="10000000" {{ request('max_price') == '10000000' ? 'selected' : '' }}>₹1 Crore</option>
                                    <option value="25000000" {{ request('max_price') == '25000000' ? 'selected' : '' }}>₹2.5 Crores</option>
                                    <option value="50000000" {{ request('max_price') == '50000000' ? 'selected' : '' }}>₹5 Crores</option>
                                    <option value="100000000" {{ request('max_price') == '100000000' ? 'selected' : '' }}>₹10 Crores</option>
                                </select>
                            </div>
                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary">Apply Filters</button>
                                <a href="{{ route('properties') }}" class="btn btn-outline-secondary">Clear Filters</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @forelse($properties as $property)
                <div class="col-md-4 mb-4">
                    <div class="card property-card h-100 shadow-sm">
                        <div class="position-relative">
                            <img src="{{ asset($property->image) }}" 
                                class="card-img-top" alt="{{ $property->title }}" 
                                style="height: 250px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge {{ $property->status_badge_class }}">
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
                                <span><i class="bi bi-rulers me-1"></i> {{ $property->formatted_area }}</span>
                                <span class="text-primary fw-bold">{{ $property->formatted_price }}</span>
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

        <!-- Add Property Section -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-light">
                        <h4 class="mb-0 text-primary">Add New Property</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.property.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="title" class="form-label">Property Title</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="price" class="form-label">Price (₹)</label>
                                    <input type="number" class="form-control" id="price" name="price" min="0" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="location" name="location" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="area" class="form-label">Area (sq ft)</label>
                                    <input type="number" class="form-control" id="area" name="area" min="0" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="type" class="form-label">Property Type</label>
                                    <select class="form-select" id="type" name="type" required>
                                        <option value="">Select Type</option>
                                        @foreach($propertyTypes as $type)
                                            <option value="{{ $type }}">{{ $type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status" required>
                                        <option value="">Select Status</option>
                                        <option value="available">Available</option>
                                        <option value="under_offer">Under Offer</option>
                                        <option value="sold">Sold</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="features" class="form-label">Features (comma separated)</label>
                                <input type="text" class="form-control" id="features" name="features" placeholder="e.g., Corner Plot, Wide Road, Electricity Available">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Property Image</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Add Property</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 