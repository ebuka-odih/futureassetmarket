<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signal extends Model
{
    use HasFactory;

    protected $fillable = [
        'pair',
        'signal_type',
        'entry_price',
        'take_profit',
        'stop_loss',
        'slug',
        'notes',
        'expires_at',
        'min_amount',
        'market'
    ];

    protected $casts = [
        'pair' => 'array'
    ];

    /**
     * Automatically generate a slug when creating a signal.
     */
//    protected static function boot()
//    {
//        parent::boot();
//
//        static::creating(function ($signal) {
//            $signal->slug = strtolower(str_replace(' ', '-', $signal->pair . '-' . $signal->signal_type . '-' . uniqid()));
//        });
//    }

    public function getExpiryBadgeAttribute()
    {
        if ($this->expires_at && Carbon::parse($this->expires_at)->isPast()) {
            return '<span class="badge bg-danger">Expired</span>';
        }

        return '<span class="badge bg-success">Active</span>';
    }
}
