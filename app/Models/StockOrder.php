<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockOrder extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id', 'stock_id', 'amount', 'shares', 'price', 'order_type', 'status',
        'limit_price', 'filled_at', 'type', 'pnl', 'current_price'
    ];
    protected $casts = [
        'amount' => 'decimal:2',
        'shares' => 'decimal:4',
        'price' => 'decimal:2',
        'limit_price' => 'decimal:2',
        'order_type' => 'integer',
        'status' => 'integer',
        'type' => 'integer',
        'filled_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

    public function status()
    {
        if ($this->status == 1) {
            return '<span class="badge bg-warning">Pending</span>';
        } elseif ($this->status == 2) {
            return '<span class="badge bg-success">Live</span>';
        }
        return '<span class="badge bg-warning">Cancelled</span>';
    }
}
