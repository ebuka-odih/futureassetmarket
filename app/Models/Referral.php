<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Referral extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['user_id', 'code', 'referrer_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id');
    }

    public function referredUsers()
    {
        return $this->hasMany(Referral::class, 'referrer_id', 'user_id');
    }



    // Generate unique referral code
    public static function generateUniqueCode()
    {
        do {
            $code = Str::upper(Str::random(6));
        } while (self::where('code', $code)->exists());

        return $code;
    }

    // Boot method to automatically generate code when creating
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($referral) {
            if (empty($referral->code)) {
                $referral->code = self::generateUniqueCode();
            }
        });
    }

}
