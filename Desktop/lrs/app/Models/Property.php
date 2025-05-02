<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'price',
        'location',
        'area',
        'features',
        'image',
        'status'
    ];

    protected $casts = [
        'features' => 'array',
        'price' => 'decimal:2',
        'area' => 'integer'
    ];

    public const STATUSES = [
        'available' => 'Available',
        'under_offer' => 'Under Offer',
        'sold' => 'Sold'
    ];

    public const CITIES = [
        'Kapurthala',
        'Jalandhar',
        'Amritsar',
        'Ludhiana',
        'Mohali'
    ];

    public const FEATURES = [
        'Prime Location',
        'Corner Plot',
        'Wide Road',
        'Water Connection',
        'Electricity Available',
        'Near Market',
        'Gated Community',
        'Highway Access'
    ];

    public function getStatusBadgeClassAttribute()
    {
        return [
            'available' => 'bg-success',
            'under_offer' => 'bg-warning',
            'sold' => 'bg-danger'
        ][$this->status] ?? 'bg-secondary';
    }

    public function getFormattedPriceAttribute()
    {
        return '₹' . number_format($this->price);
    }

    public function getFormattedAreaAttribute()
    {
        return number_format($this->area) . ' sq ft';
    }
}
