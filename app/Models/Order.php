<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'address_id',
        'number_id',
        'schedule_id',
        'notes',
        'status',
        'required_date',
        'completion_date',
    ];
}
