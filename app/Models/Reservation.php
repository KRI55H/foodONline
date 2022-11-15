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
        'user_id',
        'name',
        'mobile_no',
        'number_of_person',
        'special_ocation',
        'date',
        'status',
        'created_at',
        'updated_at'
    ];
}
