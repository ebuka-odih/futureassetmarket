<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellStock extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['user_id', 'buy_stock_id', 'amount', 'status'];

    public function status()
    {
        if ($this->status == 1) {
            return '<span class="badge bg-success">Confirmed</span>';
        }
        return '<span class="badge bg-warning">Pending</span>';
    }

    public function buy_stock()
    {
        return $this->belongsTo(BuyStock::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
