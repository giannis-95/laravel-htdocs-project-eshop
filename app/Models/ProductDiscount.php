<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ProductDiscount extends Model
{   
    protected $primaryKey = 'product_discount_id';

    protected $table = 'product_discounts';

    protected $fillable = [
        'product_id' ,
        'customer_group_id' ,
        'quantity' ,
        'priority' ,
        'price' ,
        'date_start' ,
        'date_end' ,
    ];
}