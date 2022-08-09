<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = "reservation";
    protected $fillable = [
        'id',
        'ref_uid',
        'number_of_guests',
        'reservation_date',
        'reservation_time',
        'status',
        'created_at',
        'updated_at'
    ];
}
