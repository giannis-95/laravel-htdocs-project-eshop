<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    protected $primaryKey = 'product_id';

    protected $table = 'products';
    
    protected $fillable = [
        'model' ,
        'quantity' ,
        'stock_status_id' ,
        'image' ,
        'manufacturer_id' ,
        'shipping' ,
        'price' ,
        'points' ,
        'tax_class_id' ,
        'date_available' ,
        'weight' ,
        'weight_class_id' ,
        'length' ,
        'width' ,
        'height' ,
        'length_class_id' ,
        'subtract' ,
        'minimum' ,
        'sort_order' ,
        'status' ,
        'viewed' ,
    ];
}