<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockHolding extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'stock_id',
        'total_amount',
        'total_shares',
        'average_price',
    ];

    protected $casts = [
        'total_amount' => 'decimal:2',
        'total_shares' => 'decimal:4',
        'average_price' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

}
