<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'phone_zalo',
        'vehicle',
        'pickup_location',
        'itinerary',
        'date',
        'time',
        'status'
    ];

    protected $casts = [
        'date' => 'date',
    ];
} 