<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImg extends Model
{
    protected $fillable = [
        'img_url', 'product_id', 'sort'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }


}
