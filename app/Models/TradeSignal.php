<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeSignal extends Model
{
    use HasFactory;

    protected $fillable = [
        'signal_id',
        'user_id',
        'amount',
        'status',
        'pnl',
    ];

    // Status mapping (optional helper)
    const STATUS_PENDING = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_COMPLETED = 2;
    const STATUS_CANCELLED = 3;

    public function signal()
    {
        return $this->belongsTo(Signal::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getStatusTextAttribute()
    {
        return match ($this->status) {
            self::STATUS_PENDING => 'Pending',
            self::STATUS_ACTIVE => 'Active',
            self::STATUS_COMPLETED => 'Completed',
            self::STATUS_CANCELLED => 'Cancelled',
            default => 'Unknown',
        };
    }



}
