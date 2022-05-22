<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ProductDescription extends Model
{   
    protected $table = 'product_descriptions';

    protected $fillable = [
        'product_id' ,
        'language_id' ,
        'name' ,
        'description' ,
        'tag' ,
        'meta_title' ,
        'meta_description' ,
        'meta_keyword' ,
    ];
}