<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = "cart";
    protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'total',
        'discount',
        'delivery_charge',
        'qty',
        'order_id',
        'status',
        'created_at',
        'updated_at',
    ];
}
