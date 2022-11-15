<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $fillable = [
        'id',
        'order_id',
        'user_id',
        'total',
        'status',
        'delivery_type',
        'created_at',
        'updated_at',
    ];
}
