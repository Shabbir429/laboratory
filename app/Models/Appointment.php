<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'name', 
        'address', 
        'appointment_date', 
        'phone',
        'u_id',
        'status',
        'path',
        'deleted_at'
    ];
}
