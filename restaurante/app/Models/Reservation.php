<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{    use HasFactory;

      protected $fillable = [
        'name',
        'phone',
        'guest_count',
        'reservation_time',
        'status'
    ];

     protected $casts = [
       
        'reservation_time' => 'datetime', 
    ];
}

 // protected casts son