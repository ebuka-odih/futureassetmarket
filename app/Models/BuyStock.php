<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class BuyStock extends Model
{
    use HasUuids;

    protected $fillable = ['user_id', 'stock_id', 'amount', 'status', 'pnl', 'initial_price', 'current_price',
        'limit_price', 'order_type', 'filled_at'];


    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function sell_stock()
    {
        return $this->belongsTo(SellStock::class);
    }

    public function status()
    {
        if ($this->status == 1) {
            return '<span class="badge bg-warning">Pending</span>';
        }elseif($this->status == 2)
        {
            return '<span class="badge bg-success">Live</span>';
        }
        return '<span class="badge bg-warning">Cancelled</span>';
    }

    public function getCurrentAmountAttribute()
    {
        $stock = $this->stock;  // Assuming a relationship exists
        if (!$stock) {
            return $this->amount;
        }

        $initialPrice = $this->initial_price;
        $currentPrice = $stock->price;

        // Calculate the percentage change
        $percentageChange = ($currentPrice - $initialPrice) / $initialPrice;

        // Calculate the new amount
        $currentAmount = $this->amount * (1 + $percentageChange);

        return round($currentAmount, 2);
    }

}
