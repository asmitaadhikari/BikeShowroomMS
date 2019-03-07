<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    protected $table="bike";
    protected $fillable = [
        'bikename','bikeCC', 'bikeweight','bikeprice',
    ];

}
