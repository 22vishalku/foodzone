<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run()
    {
        $properties = [
            [
                'title' => 'Premium Land Plot in Model Town',
                'description' => 'Beautiful residential plot in the heart of Model Town, Kapurthala. Perfect for building your dream home.',
                'price' => 1500000,
                'location' => 'Model Town, Kapurthala, Punjab',
                'area' => 2400,
                'features' => [
                    'Corner Plot',
                    'Wide Road',
                    'Electricity Available',
                    'Water Connection',
                    'Near Market'
                ],
                'image' => 'properties/plot1.jpg',
                'status' => 'available'
            ],
            [
                'title' => 'Commercial Plot in Urban Estate',
                'description' => 'Prime commercial plot in Urban Estate, Jalandhar. Excellent investment opportunity.',
                'price' => 2500000,
                'location' => 'Urban Estate, Jalandhar, Punjab',
                'area' => 3200,
                'features' => [
                    'Commercial Zone',
                    'Main Road Facing',
                    'All Utilities Available',
                    'High Growth Area',
                    'Near Highway'
                ],
                'image' => 'properties/plot2.jpg',
                'status' => 'available'
            ],
            [
                'title' => 'Residential Plot in Ranjit Avenue',
                'description' => 'Spacious residential plot in the prestigious Ranjit Avenue, Amritsar. Ready for construction.',
                'price' => 1800000,
                'location' => 'Ranjit Avenue, Amritsar, Punjab',
                'area' => 2800,
                'features' => [
                    'Gated Community',
                    'Park Facing',
                    'Underground Electricity',
                    'Security',
                    'Club House Access'
                ],
                'image' => 'properties/plot3.jpg',
                'status' => 'available'
            ]
        ];

        foreach ($properties as $property) {
            Property::create($property);
        }
    }
} 