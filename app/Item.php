<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $fillable = [
        'itemName', 'price', 'image_url', 'content', 'type_id'
    ];

    public function itemsType()
    {
        // $dd = $this->belongsTo('App\ItemType', 'type_id', 'id');
        // $cc = $this->belongsTo('App\ItemType','id');
        // dd($dd);

        return $this->belongsTo('App\ItemType','id');
    }

    public function productImg()
    {
        return $this->hasMany('App\ProductImg','product_id', 'id');
    }
}

