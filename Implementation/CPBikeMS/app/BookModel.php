<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    protected $table="booking";
    protected $primaryKey="bookingid";
    protected $fillable = [
        'bookingdate','status','id','productid', 
    ];
}
