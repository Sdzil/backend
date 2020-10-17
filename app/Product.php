<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'productName', 'price', 'imageUrl', 'content', 'sort', 'product_type_id'
    ];

    public function productType()
    {
        return $this->belongsTo('App\ProductType');
    }

    public function productImg()
    {
        return $this->hasMany('App\ProductImg','product_id');
    }
}
