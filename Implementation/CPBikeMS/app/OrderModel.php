<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table="order";
    protected $primaryKey="orderid";
    protected $fillable = [
        'uid','bookingid',
    ];

}
