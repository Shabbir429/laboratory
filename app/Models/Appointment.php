<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name', 
        'address', 
        'appointment_date', 
        'phone',
        'u_id',
        'status',
        'path'
    ];
}
