<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Led extends Model
{
    //
    protected $table = 'leds';
    protected $fillable = [
        'nome',
        'phone',
        'status',
        'thred_id',
    ];

}
