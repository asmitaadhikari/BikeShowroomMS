<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelProductType extends Model
{
    protected $table="productcat";
    protected $primaryKey="producttypeid";
    protected $fillable = [
        'producttypename',
    ];
}
