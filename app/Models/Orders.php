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
        'ref_uid',
        'ref_pid',
        'quantity',
        'total_amount',
        'status',
        'delivery_type',
        'created_at',
        'updated_at',
    ];
}
