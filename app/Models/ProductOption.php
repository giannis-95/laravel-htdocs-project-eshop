<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{   
    protected $primaryKey = 'product_option_id';

    protected $table = 'product_options';

    protected $fillable = [
        'product_id' ,
        'option_id' ,
        'value' ,
        'required', 
    ];
}