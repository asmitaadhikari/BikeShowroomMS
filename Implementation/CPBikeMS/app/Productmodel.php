<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productmodel extends Model
{
    protected $table="product";
    protected $primaryKey="productid";
    protected $fillable = [
        'name','cc','fuel', 'gear','speed', 'technology', 'tyre','price','img','stroke','Clutch','warranty','producttypeid',
    ];

}
