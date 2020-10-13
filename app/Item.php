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
        return $this->belongsTo('App\ItemType','type_id');
    }
}

