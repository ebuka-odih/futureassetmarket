<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = ['wallet', 'address', 'avatar', 'bank', 'type', 'user_id'];

    protected $casts = [
        'bank' => 'array'
    ];

     public static function cryptoWallet()
    {
        return [
            'Bitcoin',
            'Ethereum',
            'XRP',
            'Tether USDT (TRC20)',
            'Tether USDT (ERC)',
            'Solana',
            'BNB',
            'Dogecoin',
            'USDC',
            'Cardano',
            'TRON',
            'Avalanche',
            'Chainlink',
            'Shiba Inu',
            'Toncoin',
            'Sui',
        ];
    }

    public function avatar()
    {
        $avatars = [
            "Bitcoin" => 'img/crypto/bitcoin.png',
            "Ethereum" => 'img/crypto/etherium.png',
            "BNB" => 'img/crypto/binance.png',
            "Cardano" => 'img/crypto/cardano.png',
            "Tether USDT (TRC20)" => 'img/crypto/tether.png',
            "Tether USDT (ERC)" => 'img/crypto/tether.png',
            "XRP" => 'img/crypto/xrp.png',
            "USDC" => 'img/crypto/usdc.png',
            "TRON" => 'img/crypto/tron.png',
            "Toncoin" => 'img/crypto/Toncoin.webp',
            "Solana" => 'img/crypto/solana.png',
            "Dogecoin" => 'img/crypto/dogecoin.png',
        ];

        return asset($avatars[$this->name] ?? 'img/crypto/default.png');
    }

    public function deposits()
    {
        return $this->hasMany(Deposit::class, 'payment_method_id');
    }
}
