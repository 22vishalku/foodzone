@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Edit Property</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.property.update', $property) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Property Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $property->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="price" class="form-label">Price (₹)</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $property->price) }}" required>
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="size" class="form-label">Size (sq ft)</label>
                                <input type="number" class="form-control @error('size') is-invalid @enderror" id="size" name="size" value="{{ old('size', $property->size) }}" required>
                                @error('size')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="city" class="form-label">City</label>
                                <select class="form-select @error('city') is-invalid @enderror" id="city" name="city" required>
                                    <option value="">Select City</option>
                                    <option value="Kapurthala" {{ old('city', $property->city) == 'Kapurthala' ? 'selected' : '' }}>Kapurthala</option>
                                    <option value="Jalandhar" {{ old('city', $property->city) == 'Jalandhar' ? 'selected' : '' }}>Jalandhar</option>
                                    <option value="Amritsar" {{ old('city', $property->city) == 'Amritsar' ? 'selected' : '' }}>Amritsar</option>
                                    <option value="Ludhiana" {{ old('city', $property->city) == 'Ludhiana' ? 'selected' : '' }}>Ludhiana</option>
                                    <option value="Patiala" {{ old('city', $property->city) == 'Patiala' ? 'selected' : '' }}>Patiala</option>
                                </select>
                                @error('city')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="area" class="form-label">Area/Locality</label>
                                <input type="text" class="form-control @error('area') is-invalid @enderror" id="area" name="area" value="{{ old('area', $property->area) }}" required>
                                @error('area')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                <option value="">Select Status</option>
                                <option value="available" {{ old('status', $property->status) == 'available' ? 'selected' : '' }}>Available</option>
                                <option value="under_offer" {{ old('status', $property->status) == 'under_offer' ? 'selected' : '' }}>Under Offer</option>
                                <option value="sold" {{ old('status', $property->status) == 'sold' ? 'selected' : '' }}>Sold</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description', $property->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Features</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="water_supply" id="water_supply" {{ in_array('water_supply', old('features', $property->features ?? [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="water_supply">Water Supply</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="electricity" id="electricity" {{ in_array('electricity', old('features', $property->features ?? [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="electricity">Electricity</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="road_access" id="road_access" {{ in_array('road_access', old('features', $property->features ?? [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="road_access">Road Access</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="clear_title" id="clear_title" {{ in_array('clear_title', old('features', $property->features ?? [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="clear_title">Clear Title</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="drainage" id="drainage" {{ in_array('drainage', old('features', $property->features ?? [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="drainage">Proper Drainage</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="prime_location" id="prime_location" {{ in_array('prime_location', old('features', $property->features ?? [])) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="prime_location">Prime Location</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Current Images</label>
                            <div class="row">
                                @foreach($property->images as $image)
                                    <div class="col-md-4 mb-3">
                                        <img src="{{ Storage::url($image) }}" class="img-thumbnail" alt="Property Image">
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="images" class="form-label">Add New Images</label>
                            <input type="file" class="form-control @error('images') is-invalid @enderror" id="images" name="images[]" multiple accept="image/*">
                            <div class="form-text">Upload new images to replace existing ones (max 5MB each)</div>
                            @error('images')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Google Maps Location</label>
                            <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ old('location', $property->location) }}" placeholder="Paste Google Maps embed URL">
                            @error('location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Update Property</button>
                            <a href="{{ route('admin.properties') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 