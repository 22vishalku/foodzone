<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    private $cities = [
        'Kapurthala',
        'Jalandhar',
        'Amritsar',
        'Ludhiana',
        'Mohali'
    ];

    private $propertyTypes = [
        'Residential',
        'Commercial',
        'Industrial',
        'Farmhouse',
        'Mixed-Use'
    ];

    public function index(Request $request)
    {
        $properties = [
            [
                'id' => 1,
                'title' => 'Premium Plot in Model Town',
                'description' => 'Beautiful residential plot in prime location',
                'price' => 17500000,
                'location' => 'Model Town, Jalandhar',
                'area' => 3500,
                'features' => ['Corner Plot', 'Wide Road', 'Electricity Available'],
                'image' => 'images/Screenshot 2025-05-02 041438.png',
                'status' => 'available',
                'type' => 'Residential'
            ],
            [
                'id' => 2,
                'title' => 'Commercial Complex Plot',
                'description' => 'Prime commercial property',
                'price' => 32500000,
                'location' => 'Lawrence Road, Amritsar',
                'area' => 4800,
                'features' => ['Commercial', 'Prime Location', 'Highway Access'],
                'image' => 'images/Screenshot 2025-05-02 041508.png',
                'status' => 'available',
                'type' => 'Commercial'
            ],
            [
                'id' => 3,
                'title' => 'Industrial Zone Plot',
                'description' => 'Industrial plot with all facilities',
                'price' => 45000000,
                'location' => 'Focal Point, Ludhiana',
                'area' => 8000,
                'features' => ['Industrial', 'Highway Access', 'Water Connection'],
                'image' => 'images/Screenshot 2025-05-02 041528.png',
                'status' => 'under_offer',
                'type' => 'Industrial'
            ],
            [
                'id' => 4,
                'title' => 'Residential Society Plot',
                'description' => 'Beautiful plot in gated community',
                'price' => 8500000,
                'location' => 'Lawgate, Kapurthala',
                'area' => 2200,
                'features' => ['Residential', 'Gated Community', 'Near Market'],
                'image' => 'images/Screenshot 2025-05-02 041548.png',
                'status' => 'available',
                'type' => 'Residential'
            ],
            [
                'id' => 5,
                'title' => 'Mixed-Use Plot',
                'description' => 'Versatile plot suitable for multiple uses',
                'price' => 38500000,
                'location' => 'Urban Estate, Kapurthala',
                'area' => 6500,
                'features' => ['Mixed-Use', 'Main Road', 'Corner Plot'],
                'image' => 'images/Screenshot 2025-05-02 041603.png',
                'status' => 'available',
                'type' => 'Mixed-Use'
            ],
            [
                'id' => 6,
                'title' => 'Farmhouse Plot',
                'description' => 'Spacious farmhouse plot with natural surroundings',
                'price' => 52500000,
                'location' => 'Jalandhar-Amritsar Highway',
                'area' => 20000,
                'features' => ['Farmhouse', 'Highway Access', 'Water Connection'],
                'image' => 'images/Screenshot 2025-05-02 041628.png',
                'status' => 'under_offer',
                'type' => 'Farmhouse'
            ]
        ];

        // Apply filters
        if ($request->filled('city')) {
            $properties = array_filter($properties, function($property) use ($request) {
                return str_contains($property['location'], $request->city);
            });
        }

        if ($request->filled('type')) {
            $properties = array_filter($properties, function($property) use ($request) {
                return $property['type'] === $request->type;
            });
        }

        if ($request->filled('min_price')) {
            $properties = array_filter($properties, function($property) use ($request) {
                return $property['price'] >= $request->min_price;
            });
        }

        if ($request->filled('max_price')) {
            $properties = array_filter($properties, function($property) use ($request) {
                return $property['price'] <= $request->max_price;
            });
        }

        // Convert array to object-like structure
        $properties = array_map(function($property) {
            return (object) [
                'id' => $property['id'],
                'title' => $property['title'],
                'description' => $property['description'],
                'price' => $property['price'],
                'location' => $property['location'],
                'area' => $property['area'],
                'features' => $property['features'],
                'image' => $property['image'],
                'status' => $property['status'],
                'type' => $property['type'],
                'status_badge_class' => $property['status'] === 'available' ? 'bg-success' : 
                    ($property['status'] === 'under_offer' ? 'bg-warning' : 'bg-danger'),
                'formatted_price' => '₹' . number_format($property['price']),
                'formatted_area' => number_format($property['area']) . ' sq ft'
            ];
        }, $properties);

        return view('properties', [
            'properties' => collect($properties),
            'cities' => $this->cities,
            'propertyTypes' => $this->propertyTypes,
            'minPrice' => 5000000,
            'maxPrice' => 100000000
        ]);
    }

    public function show($id)
    {
        // You can implement similar static data for individual property details
        return view('property', ['id' => $id]);
    }

    public function create()
    {
        return view('admin.add-property');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'location' => 'required|string|max:255',
            'area' => 'required|integer|min:0',
            'description' => 'required|string',
            'features' => 'nullable|array',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:available,under_offer,sold'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('properties', 'public');
            $validated['image'] = $path;
        }

        $validated['features'] = $request->features ?? [];

        Property::create($validated);

        return redirect()->route('admin.properties')
            ->with('success', 'Property added successfully');
    }

    public function edit(Property $property)
    {
        return view('admin.edit-property', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'location' => 'required|string|max:255',
            'area' => 'required|integer|min:0',
            'description' => 'required|string',
            'features' => 'nullable|array',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:available,under_offer,sold'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($property->image) {
                Storage::disk('public')->delete($property->image);
            }
            $path = $request->file('image')->store('properties', 'public');
            $validated['image'] = $path;
        }

        $validated['features'] = $request->features ?? [];

        $property->update($validated);

        return redirect()->route('admin.properties')
            ->with('success', 'Property updated successfully');
    }

    public function destroy(Property $property)
    {
        if ($property->image) {
            Storage::disk('public')->delete($property->image);
        }

        $property->delete();

        return redirect()->route('admin.properties')
            ->with('success', 'Property deleted successfully');
    }
} 