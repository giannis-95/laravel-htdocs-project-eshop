<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{   
    protected $primaryKey = 'attribute_id';

    protected $table = 'product_attributes';

    protected $fillable = [
        'product_id' ,
        'language_id' ,
        'text' ,
    ];
}