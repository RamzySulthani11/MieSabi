<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cart_id',
        'metode_pengambilan',
        'jenis_pembayaran',
        'total_harga',
        'status',
    ];

    public function user(){
        return $this->belonsTo(User::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
