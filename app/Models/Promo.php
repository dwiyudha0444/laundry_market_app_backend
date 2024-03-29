<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = 'promos';
    protected $fillable = [
        'image',
        'shop_id',
        'old_price',
        'new_price',
        'description'
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
