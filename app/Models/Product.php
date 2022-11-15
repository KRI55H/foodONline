<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $fillable = [
        'id',
        'name',
        'description',
        'product_img',
        'price',
        'discount',
        'delivery_charge',
        'is_active',
        'is_popular',
        'is_deleted',
        'created_at',
        'updated_at',
    ];
}
