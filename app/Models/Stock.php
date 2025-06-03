<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasUuids;

    protected $fillable = [
        'symbol', 'price', 'volume', 'change_24h', 'last_updated'
    ];
    protected $casts = [
        'price' => 'decimal:2',
        'volume' => 'integer',
        'change_24h' => 'decimal:2',
        'last_updated' => 'datetime', // Cast to Carbon instance
    ];

    public function avatar()
    {
        $avatars = [
            "AAPL" => 'img/stock/apple.png',
            "GOOGL" => 'img/stock/GOOGL.webp',
            "MSFT" => 'img/stock/MSFT.png',
            "AMZN" => 'img/stock/amaz.webp',
            "META" => 'img/stock/META.png',
            "TSLA" => 'img/stock/telsa.png',
            "NFLX" => 'img/stock/NFLX.png',
            "NVDA" => 'img/stock/NVDA.png',
            "AMD" => 'img/stock/amd.jpg',
            "INTC" => 'img/stock/INTC.png',
            "PYPL" => 'img/stock/PYPL.png',
            "DIS" => 'img/stock/DIS.png',
            "V" => 'img/stock/V.png',
            "MA" => 'img/stock/MA.png',
            "JPM" => 'img/stock/JPM.webp',
            "GS" => 'img/stock/GS.png',
            "BA" => 'img/stock/BA.png',
            "XOM" => 'img/stock/XOM.png',
            "WMT" => 'img/stock/WMT.webp',
        ];

        return asset($avatars[$this->symbol] ?? 'img/trader.jpg');
    }

    public function buystock()
    {
        return $this->hasMany(BuyStock::class, 'stock_id');
    }


}
